@extends('layouts.master')

@section('content')
<div class="row">
  <div class="col-nd-4 col-nd-offset-4">
    <h1>Mis Articulos</h1>
 @foreach($dato as $datos)
 <div class="col-sm-6 col-md-4">
   <div class="thumbnail">
     <img src="{{$datos->imagePath}}" alt="..." >
     <div class="caption">
       <h3>{{$datos->title}}</h3>
       <p class="description">{{$datos->description}}</p>
       <div class="clearfix">
         <div class="pull-left price">${{$datos->price}}
         </div>
       </div>
     </div>
   </div>
 </div>
 @endforeach
  </div>
</div>

@endsection
