<?php

namespace Database\Factories;

use App\Models\Product;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use App\Models\Subcategory;

class ProductFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Product::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        //Frase arbitraria, en este caso un nombre con "2" palabras.
        $name = $this->faker->sentence(2);

        //Llamo a todas las subcategorias y escojo solo 1 de forma desordenada "random" y lo asigno a la variable $subcategory
        $subcategory = Subcategory::all()->random();  
        
        return [
            //
            'name' => $name,
            'slug'=> Str::slug($name),
            'description' => $this->faker->text(),
            'price' => $this->faker->randomElement([19.99, 49.99, 99.95, 39.95, 59.95]),
            'subcategory_id' =>$subcategory->id,
            'status' => 2
        ];
    }
}
