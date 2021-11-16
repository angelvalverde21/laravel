<?php

namespace Database\Seeders;

use App\Models\nameAttribute;
use Illuminate\Database\Seeder;

class NameAttributeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $nameAttributes = [

            [
                'name' => 'tallas',
                'value' => 'Tallas'
            ],
            [
                'name' => 'tejidos',
                'value' => 'Tipo de tela o Material'
            ],
        ];


        foreach($nameAttributes as $nameAttribute){

            //La siguiente linea de codigo: Category::factory(1)->create($category)
            //devuelve el registro en formato de coleccion asi se un registro lo devuelve
            //como coleccion asi que si se requiere usarlo en una variable como 1 se
            //necesita pasar el metodo first();

            nameAttribute::factory(1)->create($nameAttribute);


        }
    }
}
