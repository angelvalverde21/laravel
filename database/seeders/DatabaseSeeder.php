<?php

namespace Database\Seeders;

use App\Models\Product;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Storage;
use App\Models\Multimedia;


class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        


        Storage::deleteDirectory('/public/categories');
        Storage::deleteDirectory('/public/subcategories');
        Storage::deleteDirectory('/public/multimedia');

        Storage::makeDirectory('/public/categories');
        Storage::makeDirectory('/public/subcategories');
        Storage::makeDirectory('/public/'.Multimedia::DIRECTORY);

        //Para que funcione la siguiente linea de codigo se debe crear un seeder
        //$this->call(UserSeeder::class);

        //Pero como solo hemos creado el factory lo podemos ejecutar de una vez

        //Creamos 5 usuarios de prueba
        User::factory(10)->create();

        $this->call(CategorySeeder::class);
        $this->call(SubCategorySeeder::class);

        //Creamos 10 productos de prueba
        Product::factory(5)->create();
        
        //Creamos las imagenes para los productos en la tabla multimedia
        $this->call(MultimediaSeeder::class);
        $this->call(SizegroupSeeder::class);
        $this->call(SizeSeeder::class);
        $this->call(ProductSizesSeeder::class);



        $this->call(NameAttributeSeeder::class);
        $this->call(SubcategoriesAttributeSeeder::class);


    }
}
