<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class StoragesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('storages')->insert([
            ['storage_name' => 'SanDisk SSD PLUS 2.5 SSD', 'storage_brand' => 'SanDisk', 'storage_inv_level' => 'A', 'storage_remarks' => '1TB, SATA 2.5"', 'storage_price' => 485.00, 'staff_id' => 5],
            ['storage_name' => 'Crucial MX500 3D NAND SATA M.2 Type 2280 SSD', 'storage_brand' => 'Crucial', 'storage_inv_level' => 'A', 'storage_remarks' => '500GB, M.2', 'storage_price' => 400.00, 'staff_id' => 5],
            ['storage_name' => 'ADATA ULTIMATE SSD SU650 SATA','storage_brand' => 'ADATA', 'storage_inv_level' => 'A', 'storage_remarks' => '240GB, SATA 2.5"', 'storage_price' => 119.00, 'staff_id' => 3],
            ['storage_name' => 'WD My Passport Portable External HDD','storage_brand' => 'Western Digital', 'storage_inv_level' => 'B', 'storage_remarks' => '1TB, Red, USB3.0', 'storage_price' => 179.00, 'staff_id' => 1],
            ['storage_name' => 'Seagate Backup Plus Slim Portable External HDD','storage_brand' => 'Seagate', 'storage_inv_level' => 'B', 'storage_remarks' => '4TB, Blue, USB3.0', 'storage_price' => 449.00, 'staff_id' => 3],
            ['storage_name' => 'Toshiba Canvio External HDD','storage_brand' => 'Toshiba', 'storage_inv_level' => 'B', 'storage_remarks' => '1TB, Black, USB3.0', 'storage_price' => 99.00, 'staff_id' => 4],
        ]);
    }
}
