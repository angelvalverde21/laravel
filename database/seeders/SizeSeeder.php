<?php

namespace Database\Seeders;

use App\Models\Product;
use App\Models\Size;
use App\Models\Subcategory;
use Illuminate\Database\Seeder;

class SizeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //

        $sizegroup[1] = [

            [
                'name' => 'S',
                'value' => 'S',
                'sizegroup_id' => '1',
                'subcategory_id' => '18',
            ],

            [
                'name' => 'M',
                'value' => 'M',
                'sizegroup_id' => '1',
                'subcategory_id' => '18',
            ],

            [
                'name' => 'L',
                'value' => 'L',
                'sizegroup_id' => '1',
                'subcategory_id' => '18',
            ],


        ];


        $sizegroup[2] = [

            [
                'name' => 'ESTANDAR',
                'value' => 'ESTANDAR',
                'sizegroup_id' => '2',
                'subcategory_id' => '18',
            ],

            [
                'name' => 'L',
                'value' => 'L',
                'sizegroup_id' => '2',
                'subcategory_id' => '18',
            ],
        ];

        $sizegroup[3] = [

            [
                'name' => 'UNICA',
                'value' => 'UNICA',
                'sizegroup_id' => '3',
                'subcategory_id' => '18',
            ],

        ];

        $sizegroup[4] = [

            [
                'name' => 'XS',
                'value' => 'XS',
                'sizegroup_id' => '4',
                'subcategory_id' => '18',
            ],


            [
                'name' => 'S',
                'value' => 'S',
                'sizegroup_id' => '4',
                'subcategory_id' => '18',
            ],


            [
                'name' => 'M',
                'value' => 'M',
                'sizegroup_id' => '4',
                'subcategory_id' => '18',
            ],


            [
                'name' => 'L',
                'value' => 'L',
                'sizegroup_id' => '4',
                'subcategory_id' => '18',
            ],



            [
                'name' => 'XL',
                'value' => 'XL',
                'sizegroup_id' => '4',
                'subcategory_id' => '18',
            ],

        ];

        $sizegroup[5] = [

            [
                'name' => '28',
                'value' => '28',
                'sizegroup_id' => '5',
                'subcategory_id' => '20',
            ],

            [
                'name' => '30',
                'value' => '30',
                'sizegroup_id' => '5',
                'subcategory_id' => '20',
            ],

            [
                'name' => '32',
                'value' => '32',
                'sizegroup_id' => '5',
                'subcategory_id' => '20',
            ],


        ];


        $sizegroup[6] = [

            [
                'name' => 'S',
                'value' => 'S',
                'sizegroup_id' => '6',
                'subcategory_id' => '20',
            ],

            [
                'name' => 'M',
                'value' => 'M',
                'sizegroup_id' => '6',
                'subcategory_id' => '20',
            ],

            [
                'name' => 'L',
                'value' => 'L',
                'sizegroup_id' => '5',
                'subcategory_id' => '20',
            ],


        ];


        $sizegroup[7] = [

            [
                'name' => 'ESTANDAR',
                'value' => 'ESTANDAR',
                'sizegroup_id' => '7',
                'subcategory_id' => '20',
            ],

            [
                'name' => 'L',
                'value' => 'L',
                'sizegroup_id' => '7',
                'subcategory_id' => '20',
            ],
        ];

        $sizegroup[8] = [

            [
                'name' => 'UNICA',
                'value' => 'UNICA',
                'sizegroup_id' => '8',
                'subcategory_id' => '20',
            ],

        ];

        $sizegroup[9] = [

            [
                'name' => 'XS',
                'value' => 'XS',
                'sizegroup_id' => '9',
                'subcategory_id' => '20',
            ],


            [
                'name' => 'S',
                'value' => 'S',
                'sizegroup_id' => '9',
                'subcategory_id' => '20',
            ],


            [
                'name' => 'M',
                'value' => 'M',
                'sizegroup_id' => '9',
                'subcategory_id' => '20',
            ],


            [
                'name' => 'L',
                'value' => 'L',
                'sizegroup_id' => '9',
                'subcategory_id' => '20',
            ],



            [
                'name' => 'XL',
                'value' => 'XL',
                'sizegroup_id' => '9',
                'subcategory_id' => '20',
            ],

        ];


        for($i=1; $i <= count($sizegroup); $i++){

            foreach ($sizegroup[$i] as $elementos) {
                Size::factory(1)->create($elementos);
            }
            
        }

    }
}
