<?php

namespace Database\Factories;

use App\Models\Multimedia;
use App\Models\Product;
use Illuminate\Database\Eloquent\Factories\Factory;

class MultimediaFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Multimedia::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {

        $rutaImagen = 'public/storage/'.Multimedia::DIRECTORY;

        $nameImagenAleatoria =  $this->faker->image($rutaImagen, 640, 480, null, false);

        return [
            //

            'image' => Multimedia::DIRECTORY.'/' . $nameImagenAleatoria,
            'label' => $this->faker->word(),
            'rgbcolor' => Multimedia::rgbColor($rutaImagen.'/'.$nameImagenAleatoria)

        ];
    }
}
