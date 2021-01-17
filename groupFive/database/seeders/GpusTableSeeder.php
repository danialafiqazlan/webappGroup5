<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class GpusTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('gpus')->insert([
            ['gpu_name' => 'Nvidia GeForce RTX 3090', 'gpu_brand' => 'Nvidia', 'gpu_inv_level' => 'A', 'gpu_remarks' => '1.70GHz, 24GB, GDDR6X', 'gpu_price' => 6050.71, 'staff_id' => 4],
            ['gpu_name' => 'Nvidia GeForce RTX 3080', 'gpu_brand' => 'Nvidia', 'gpu_inv_level' => 'A', 'gpu_remarks' => '1.71GHz, 10GB, GDDR6X', 'gpu_price' => 2821.51, 'staff_id' => 2],
            ['gpu_name' => 'Nvidia GeForce RTX 3070','gpu_brand' => 'Nvidia', 'gpu_inv_level' => 'A', 'gpu_remarks' => '1.73GHz, 8GB, GDDR6', 'gpu_price' => 2014.21, 'staff_id' => 4],
            ['gpu_name' => 'Nvidia GeForce RTX 3060 Ti','gpu_brand' => 'Nvidia', 'gpu_inv_level' => 'A', 'gpu_remarks' => '1.67GHz, 8GB, GDDR6', 'gpu_price' => 1610.56, 'staff_id' => 3],
            ['gpu_name' => 'Nvidia GeForce RTX 3060','gpu_brand' => 'Nvidia', 'gpu_inv_level' => 'A', 'gpu_remarks' => '1.78GHz, 12GB, GDDR6', 'gpu_price' => 1206.91, 'staff_id' => 5],
            ['gpu_name' => 'AMD Radeon RX 6900 XT','gpu_brand' => 'AMD', 'gpu_inv_level' => 'A', 'gpu_remarks' => '2.25GHz, 16GB, GDDR6', 'gpu_price' => 4032.46, 'staff_id' => 1],
        ]);
    }
}
