<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RamsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('rams')->insert([
            ['ram_name' => 'Kingston DDR4 2666MHz HyperX Fury RAM', 'ram_brand' => 'Kingston', 'ram_inv_level' => 'A', 'ram_remarks' => '8GB, DDR4, 2666MHz', 'ram_price' => 159.00, 'staff_id' => 1],
            ['ram_name' => 'Corsair 16GB (2X8GB) DDR4 3600Mhz Vengeance RGB PRO RAM', 'ram_brand' => 'Corsair', 'ram_inv_level' => 'A', 'ram_remarks' => '16GB, DDR4, 3600MHz', 'ram_price' => 499.00, 'staff_id' => 1],
            ['ram_name' => 'Kingston 8GB DDR4 3200Mhz HyperX RGB RAM','ram_brand' => 'Kingston', 'ram_inv_level' => 'A', 'ram_remarks' => '8GB, DDR4, 3200MHz', 'ram_price' => 249.00, 'staff_id' => 3],
            ['ram_name' => 'Kingston 16GB DDR4 3200Mhz HyperX Predator RGB RAM','ram_brand' => 'Kingston', 'ram_inv_level' => 'A', 'ram_remarks' => '16GB, DDR4, 3200MHz', 'ram_price' => 379.00, 'staff_id' => 5],
            ['ram_name' => 'Kingston 8GB DDR4 2666MHz Sodimm RAM','ram_brand' => 'Kingston', 'ram_inv_level' => 'A', 'ram_remarks' => '8GB, DDR4, 2666MHz', 'ram_price' => 165.00, 'staff_id' => 2],
            ['ram_name' => 'Kingston 8GB DDR3L 1600Mhz Low Voltage SO-DIMM Notebook Ram','ram_brand' => 'Kingston', 'ram_inv_level' => 'A', 'ram_remarks' => '8GB, DDR3L, 1600MHz', 'ram_price' => 199.00, 'staff_id' => 4],
        ]);
    }
}
