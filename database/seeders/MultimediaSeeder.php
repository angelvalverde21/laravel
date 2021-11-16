<?php

namespace Database\Seeders;

use App\Models\Multimedia;
use App\Models\Product;
use Illuminate\Database\Seeder;

class MultimediaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //

        $productos = Product::all();

        foreach ($productos as $item) {

            //Creamos 5 imagenes y lo ordenamos numericamente del 1 al 5
            for ($i = 1; $i <= 5; $i++) {

                $productoIdAndPosition = array(
                    'product_id' => $item->id,
                    'position' => $i,
                    'media_type' => Multimedia::TYPE_FOTO
                );

                Multimedia::factory(1)->create($productoIdAndPosition);

                $productoIdAndPosition = array(
                    'product_id' => $item->id,
                    'position' => $i,
                    'media_type' => Multimedia::TYPE_COLOR
                );

                Multimedia::factory(1)->create($productoIdAndPosition);


                $productoIdAndPosition = array(
                    'product_id' => $item->id,
                    'position' => $i,
                    'media_type' => Multimedia::TYPE_SESION_FOTO
                );

                Multimedia::factory(1)->create($productoIdAndPosition);

            }
        }
    }
}
