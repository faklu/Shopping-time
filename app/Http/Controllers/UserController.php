<?php

namespace App\Http\Controllers;
session_start();
use Illuminate\Http\Request;
use App\Http\Requests;
use App\User;
use App\Product;
use Auth;
use Session;


  class UserController extends Controller

  {

      public function getSignup()

      {

          return view('user.signup');

      }


      public function getProfile() {

          $product=\DB::table('products')->select('id','imagePath','title','description','price')->where('id_vendedor','=','1')->get();
          //$product = Product::select('id','imagePath','title','description','price')->where('id_vendedor','=','1')->firstOrFail();

          //dd($dato);

          return view('user.profile', ['dato' => $product]);
        }

      public function postSignup(Request $request)

      {

          $this->validate($request, [

              'email' => 'email|required|unique:users',

              'password' => 'required|min:4'

          ]);



          $user = new User([

              'email' => $request->input('email'),

              'password' => bcrypt($request->input('password'))

          ]);

          $user->save();



          Auth::login($user);



          return redirect()->route('user.profile');

      }



      public function getSignin()

      {

          return view('user.signin');

      }



      public function postSignin(Request $request)

      {

          $this->validate($request, [


            'email' => 'email|required',

              'password' => 'required|min:4'

          ]);



          if (Auth::attempt(['email' => $request->input('email'), 'password' => $request->input('password')])) {

              return redirect()->route('user.profile');

          }

          return redirect()->back();

      }


      public function getLogout() {

        Auth::logout();

        return redirect()->route('shop.index');

    }


}
