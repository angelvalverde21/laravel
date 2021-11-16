<?php

namespace Database\Seeders;

use App\Models\SubcategorieAttribute;
use Illuminate\Database\Seeder;

class SubcategorieAttributeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $subcategorieAttributes = [

            [
                'subcategory_id' => '18',
                'attribute_id' => '1'
            ],

            [
                'subcategory_id' => '18',
                'attribute_id' => '2'
            ],

            [
                'subcategory_id' => '20',
                'attribute_id' => '1'
            ],

            [
                'subcategory_id' => '20',
                'attribute_id' => '2'
            ],

            [
                'subcategory_id' => '21',
                'attribute_id' => '1'
            ],
            [
                'subcategory_id' => '21',
                'attribute_id' => '2'
            ],


            [
                'subcategory_id' => '22',
                'attribute_id' => '2'
            ],

            [
                'subcategory_id' => '22',
                'attribute_id' => '2'
            ],

        ];


        foreach($subcategorieAttributes as $subcategorieAttribute){

            //La siguiente linea de codigo: Category::factory(1)->create($category)
            //devuelve el registro en formato de coleccion asi se un registro lo devuelve
            //como coleccion asi que si se requiere usarlo en una variable como 1 se
            //necesita pasar el metodo first();

            SubcategorieAttribute::factory(1)->create($subcategorieAttribute);


        }
    }
}
