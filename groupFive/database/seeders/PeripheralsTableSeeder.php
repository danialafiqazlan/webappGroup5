<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PeripheralsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('peripherals')->insert([
            ['peripheral_name' => 'Logitech G502 Hero Wired Gaming Mouse', 'peripheral_brand' => 'Logitech', 'peripheral_inv_level' => 'B', 'peripheral_remarks' => 'Gaming Mouse', 'peripheral_price' => 295, 'staff_id' => 2],
            ['peripheral_name' => 'Tecware Phantom RGB 87-Keys', 'peripheral_brand' => 'Tecware', 'peripheral_inv_level' => 'B', 'peripheral_remarks' => 'Gaming Keyboard, Blue Switch', 'peripheral_price' => 178.00, 'staff_id' => 1],
            ['peripheral_name' => 'CORSAIR HS50 Pro Stereo Gaming Headset','peripheral_brand' => 'Corsair', 'peripheral_inv_level' => 'B', 'peripheral_remarks' => 'Gaming Headset, Noise-cancelling', 'peripheral_price' => 229.00, 'staff_id' => 3],
            ['peripheral_name' => 'Logitech G240 Cloth Gaming Mouse Pad','peripheral_brand' => 'Logitech', 'peripheral_inv_level' => 'C', 'peripheral_remarks' => 'Mousepad', 'peripheral_price' => 84.00, 'staff_id' => 4],
            ['peripheral_name' => 'Logitech C922 Pro Stream HD Webcam','peripheral_brand' => 'Logitech', 'peripheral_inv_level' => 'B', 'peripheral_remarks' => '1080p, tripod, webcam', 'peripheral_price' => 440.10, 'staff_id' => 5],
            ['peripheral_name' => 'Plextone G20','peripheral_brand' => 'Plextone', 'peripheral_inv_level' => 'B', 'peripheral_remarks' => 'Gaming Headphones', 'peripheral_price' => 28.90, 'staff_id' => 2],
        ]);
    }
}
