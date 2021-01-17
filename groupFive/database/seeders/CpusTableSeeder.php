<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CpusTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('cpus')->insert([
            ['cpu_name' => 'Intel Core i3-10320', 'cpu_brand' => 'Intel', 'cpu_inv_level' => 'A', 'cpu_remarks' => '3.80GHz, 4 Cores, 8 Threads, 65W', 'cpu_price' => 621.62, 'staff_id' => 2],
            ['cpu_name' => 'Intel Core i5-10600', 'cpu_brand' => 'Intel', 'cpu_inv_level' => 'A', 'cpu_remarks' => '3.30GHz, 6 Cores, 12 Threads, 65W', 'cpu_price' => 1054.54, 'staff_id' => 2],
            ['cpu_name' => 'Intel Core i5-1035G1','cpu_brand' => 'Intel', 'cpu_inv_level' => 'A', 'cpu_remarks' => '1.00GHz, 4 Cores, 8 Threads, 15W', 'cpu_price' => 1198.84, 'staff_id' => 3],
            ['cpu_name' => 'Intel Core i7-10850H','cpu_brand' => 'Intel', 'cpu_inv_level' => 'A', 'cpu_remarks' => '2.70GHz, 6 Cores, 12 Threads, 45W', 'cpu_price' => 1594.42, 'staff_id' => 5],
            ['cpu_name' => 'AMD Ryzen 5 3600X','cpu_brand' => 'AMD', 'cpu_inv_level' => 'A', 'cpu_remarks' => '3.80GHz, 6 Cores, 12 Threads, 95W', 'cpu_price' => 1495.75, 'staff_id' => 5],
            ['cpu_name' => 'AMD Ryzen 7 3800X','cpu_brand' => 'AMD', 'cpu_inv_level' => 'A', 'cpu_remarks' => '3.90GHz, 8 Cores, 16 Threads, 105W', 'cpu_price' => 1565.47, 'staff_id' => 1],
        ]);
    }
}
