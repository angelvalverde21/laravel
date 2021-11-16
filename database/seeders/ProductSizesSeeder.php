<?php

namespace Database\Seeders;

use App\Models\ProductSizes;
use Illuminate\Database\Seeder;

class ProductSizesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $ProductSizes = [



            [
                'product_id' => '1',
                'sizegroup_id' => '1',
            ],

            [
                'product_id' => '2',
                'sizegroup_id' => '3',
            ],

            [
                'product_id' => '3',
                'sizegroup_id' => '5',
            ],



        ];

        foreach ($ProductSizes as $ProductSize) {
            ProductSizes::factory(1)->create($ProductSize);
        }

    }
}
