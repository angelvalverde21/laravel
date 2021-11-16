<?php

namespace Database\Seeders;

use App\Models\Sizegroup;
use Illuminate\Database\Seeder;

class SizegroupSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */

    public function run()
    {
        //

        $sizegroups = [

            [
                'value' => 'S,M y L',
                'subcategory_id' => '18',
            ],

            [
                'value' => 'ESTANDAR y L',
                'subcategory_id' => '18',
            ],


            [
                'value' => 'UNICA',
                'subcategory_id' => '18',
            ],

            [
                'value' => 'ESTANDAR',
                'subcategory_id' => '18',
            ],

            [
                'value' => 'XS, S,M, L y XL',
                'subcategory_id' => '18',
            ],


            //555
            
            [
                'value' => '28, 30, 32',
                'subcategory_id' => '20',
            ],

            [
                'value' => 'S,M y L',
                'subcategory_id' => '20',
            ],

            [
                'value' => 'ESTANDAR y L',
                'subcategory_id' => '20',
            ],


            [
                'value' => 'UNICA',
                'subcategory_id' => '20',
            ],

            [
                'value' => 'ESTANDAR',
                'subcategory_id' => '20',
            ],

            [
                'value' => 'XS, S,M, L y XL',
                'subcategory_id' => '20',
            ],


        ];

        foreach ($sizegroups as $sizegroup) {
            Sizegroup::factory(1)->create($sizegroup);
        }
    }
}
