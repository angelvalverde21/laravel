<?php

namespace Database\Seeders;

use App\Models\Brand;
use App\Models\Category;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //

        $categories = [

            [
                'name' => 'Accesorios electronicos',
                'slug' => Str::slug('Accesorios electronicos'),
                'icon' => '<i class="fas fa-headphones"></i>'
            ],
            [
                'name' => 'Celulares y Tables',
                'slug' => Str::slug('Celulares y Tables'),
                'icon' => '<i class="fas fa-mobile-alt"></i>'
            ],
            [
                'name' => 'Consola y video Juegos',
                'slug' => Str::slug('Consola y video Juegos'),
                'icon' => '<i class="fas fa-tv"></i>'
            ],
            
            [
                'name' => 'Tv Audio y video',
                'slug' => Str::slug('Tv Audio y video'),
                'icon' => '<i class="fas fa-gamepad"></i>'
            ],
            [
                'name' => 'Computacion',
                'slug' => Str::slug('Computacion'),
                'icon' => '<i class="fas fa-laptop"></i>'
            ],
            [
                'name' => 'Moda Mujer',
                'slug' => Str::slug('Moda Mujer'),
                'icon' => '<i class="fas fa-tshirt"></i>'
            ],
            [
                'name' => 'Moda Varon',
                'slug' => Str::slug('Moda Varon'),
                'icon' => '<i class="fas fa-tshirt"></i>'
            ],
        ];


        foreach($categories as $category){

            //La siguiente linea de codigo: Category::factory(1)->create($category)
            //devuelve el registro en formato de coleccion asi se un registro lo devuelve
            //como coleccion asi que si se requiere usarlo en una variable como 1 se
            //necesita pasar el metodo first();

            $category = Category::factory(1)->create($category)->first();


        }
    }
}
