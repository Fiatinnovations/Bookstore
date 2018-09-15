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
            'imagePath' => 'https://images-na.ssl-images-amazon.com/images/I/41kTjWneiTL._SY260_.jpg',
            'title' => 'Microsoft Dell Laptop',
            'description' => 'Some quick example text to build on the card title and make up the.',
            'price' => 1000
        ]);
        $product->save();

         $product = new \App\Product([
            'imagePath' => 'https://images-na.ssl-images-amazon.com/images/G/01/AMAZON_FASHION/2018/EDITORIAL/FALL1/AF_GW/CATCARD/CCDUALGENDER.CB4709318791X._CB485652438_SY260_.jpg',
            'title' => 'Casual Wears',
            'description' => 'Some quick example text to build on the card title and make up the.',
            'price' => 200
        ]);
        $product->save();
    

    $product = new \App\Product([
            'imagePath' => 'https://images-na.ssl-images-amazon.com/images/I/412%2B6PtzRRL.__AC_SY200_.jpg',
            'title' => 'Excellent Ear Piece',
            'description' => 'Some quick example text to build on the card title and make up the.',
            'price' => 150
        ]);
        $product->save();
    

    $product = new \App\Product([
            'imagePath' => 'https://images-na.ssl-images-amazon.com/images/I/51FQBzDZ3VL.__AC_SY200_.jpg',
            'title' => 'Sound Box',
            'description' => 'Some quick example text to build on the card title and make up the.',
            'price' => 400
        ]);
        $product->save();
    

    $product = new \App\Product([
            'imagePath' => 'https://images-na.ssl-images-amazon.com/images/I/31PqH5-7CML.__AC_SY200_.jpg',
            'title' => 'Boom Box',
            'description' => 'Some quick example text to build on the card title and make up the.',
            'price' => 600
        ]);
        $product->save();
    
    $product = new \App\Product([
            'imagePath' => 'https://images-na.ssl-images-amazon.com/images/I/518xzTjytQL.__AC_SY200_.jpg',
            'title' => 'Mini Floyd Light',
            'description' => 'Some quick example text to build on the card title and make up the.',
            'price' => 300
        ]);
        $product->save();
    }

   
    
}
