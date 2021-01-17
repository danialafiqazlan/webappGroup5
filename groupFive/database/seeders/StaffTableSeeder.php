<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class StaffTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('staff')->insert([
            ['id' => 1, 'staff_name' => 'Afiq'],
            ['id' => 2, 'staff_name' => 'Muzafar'],
            ['id' => 3, 'staff_name' => 'Alifah'],
            ['id' => 4, 'staff_name' => 'Shafiq'],
            ['id' => 5, 'staff_name' => 'Ibad'],
        ]);
    }
}
