<?php

namespace Database\Seeders;

use App\Models\Subcategory;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class SubCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $subcategories = [


            /* Accesorios Electronicos */
            [
                'category_id' => 1,
                'name' => 'Cargadores rapido de pared',
                'slug' => Str::slug('Cargadores rapido de pared')
            ],

            [
                'category_id' => 1,
                'name' => 'Parlantes Bluetooth',
                'slug' => Str::slug('Parlantes Bluetooth')
            ],

            [
                'category_id' => 1,
                'name' => 'Extenciones y toma corrientes',
                'slug' => Str::slug('Extenciones y toma corrientes')
            ],

            [
                'category_id' => 1,
                'name' => 'Cargadores Turbo para Auto',
                'slug' => Str::slug('Cargadores Turbo para Auto')
            ],

            /* celulares y tables */
            [
                'category_id' => 2,
                'name' => 'Celulares y Smartphones',
                'slug' => Str::slug('Celulares y Smartphones')
            ],

            [
                'category_id' => 2,
                'name' => 'Accesorios para celulares',
                'slug' => Str::slug('Accesorios para celulares')
            ],

            [
                'category_id' => 2,
                'name' => 'Smartwatches',
                'slug' => Str::slug('Smartwatches')
            ],


            /* audio y video */

            [
                'category_id' => 3,
                'name' => 'Tv y Audio',
                'slug' => Str::slug('Tv y Audio')
            ],

            [
                'category_id' => 3,
                'name' => 'Audios',
                'slug' => Str::slug('Audios')
            ],

            [
                'category_id' => 3,
                'name' => 'Audios para autos',
                'slug' => Str::slug('Audios para autos')
            ],

            /* consola y videojuegos */
            [
                'category_id' => 4,
                'name' => 'Play Station',
                'slug' => Str::slug('Play Station')
            ],

            [
                'category_id' => 4,
                'name' => 'Video juegos para PC',
                'slug' => Str::slug('Video juegos para PC')
            ],

            [
                'category_id' => 4,
                'name' => 'Nintendo',
                'slug' => Str::slug('Nintendo')
            ],

            /* Computacion */

            [
                'category_id' => 5,
                'name' => 'Portatiles',
                'slug' => Str::slug('Portatiles')
            ],

            [
                'category_id' => 5,
                'name' => 'Pc escritorio',
                'slug' => Str::slug('Pc escritorio')
            ],

            [
                'category_id' => 5,
                'name' => 'Almacenamiento',
                'slug' => Str::slug('Almacenamiento')
            ],

            [
                'category_id' => 5,
                'name' => 'Accesorios computadora',
                'slug' => Str::slug('Accesorios computadora')
            ],


            /* Moda Mujer */

            [
                'category_id' => 6,
                'name' => 'Poleras',
                'slug' => Str::slug('Poleras'),
                'has_size' => 1,
            ],

            [
                'category_id' => 6,
                'name' => 'Vestidos',
                'slug' => Str::slug('Vestidos'),
                'has_size' => 1,
            ],

            [
                'category_id' => 6,
                'name' => 'Pantalones',
                'slug' => Str::slug('Pantalones'),
                'has_size' => 1,
            ],

            [
                'category_id' => 6,
                'name' => 'Casacas de Algodon',
                'slug' => Str::slug('Casacas de Algodon'),
                'has_size' => 1,
            ],

            [
                'category_id' => 6,
                'name' => 'Casacas tejidas',
                'slug' => Str::slug('Casacas tejidas'),
                'has_size' => 1,
            ],

            [
                'category_id' => 6,
                'name' => 'Capas tejidas',
                'slug' => Str::slug('Capas tejidas'),
                'has_size' => 1,
            ],

            /* Moda Varon */

            [
                'category_id' => 7,
                'name' => 'Poleras',
                'slug' => Str::slug('Poleras'),
                'has_size' => 1,
            ],

            [
                'category_id' => 7,
                'name' => 'Polos',
                'slug' => Str::slug('Polos'),
                'has_size' => 1,
            ],

            [
                'category_id' => 7,
                'name' => 'Shorts',
                'slug' => Str::slug('Shorts'),
                'has_size' => 1,
            ],

        ];

        foreach ($subcategories as $subcategory) {
            Subcategory::factory(1)->create($subcategory);
        }
    }
}
