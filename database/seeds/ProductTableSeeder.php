<?php

use Illuminate\Database\Seeder;

class ProductTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $product = new \App\Product([
          'imagePath'=>'https://images-na.ssl-images-amazon.com/images/I/51gXytWle%2BL._SX356_BO1,204,203,200_.jpg',
          'title'=>'Past Life',
          'description'=>'bueno',
          'price'=> 12
        ]);//
        $product->save();

        $product = new \App\Product([
          'imagePath'=>'http://static.wixstatic.com/media/7809fd_4ead47a14330422ab8341d921a92d540.jpg',
          'title'=>'TR3S',
          'description'=>'muy bueno',
          'price'=> 13
        ]);//
        $product->save();

        $product = new \App\Product([
          'imagePath'=>'https://imagessl9.casadellibro.com/a/l/t0/19/9788425345319.jpg',
          'title'=>'El GUARDIAN DEL JUEGO',
          'description'=>'bueno',
          'price'=> 14
        ]);//
        $product->save();

        $product = new \App\Product([
          'imagePath'=>'http://www.1001consejos.com/wp-content/uploads/2012/04/el-psicoanalista-libro.jpg',
          'title'=>'Psicoanalista',
          'description'=>'bueno',
          'price'=> 11
        ]);//
        $product->save();

        $product = new \App\Product([
          'imagePath'=>'https://static.vix.com/es/sites/default/files/styles/large/public/imj/si-te-gustan-los-libros-de-suspenso-estos-son-los-titulos-que-deberias-leer-5.jpg?itok=upXWWot8',
          'title'=>'Misery',
          'description'=>'bueno',
          'price'=> 10
        ]);//
        $product->save();

        $product = new \App\Product([
          'imagePath'=>'http://4.bp.blogspot.com/-vbh10OkvVCc/VPs-tiLMlPI/AAAAAAAAdKM/VKDiU24rGrA/s1600/libros-portada-extranos-en-el-tren-nocturno.jpg',
          'title'=>'Extraños en el tren nocturno',
          'description'=>'bueno',
          'price'=> 9
        ]);//
        $product->save();

    }
}
