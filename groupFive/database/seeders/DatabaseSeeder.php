<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(StaffTableSeeder::class);
        $this->call(UsersTableSeeder::class);
        $this->call(CpusTableSeeder::class);
        $this->call(GpusTableSeeder::class);
        $this->call(RamsTableSeeder::class);
        $this->call(StoragesTableSeeder::class);
        $this->call(PeripheralsTableSeeder::class);
    }
}
