<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            ['name' => 'Danial Afiq', 'email' => 'd.afiq0301@gmail.com', 'password' => bcrypt('danialafiq')],
            ['name' => 'Muzafar Hasan', 'email' => 'mzaffar7070@gmail.com', 'password' => bcrypt('muzafarhasan')],
            ['name' => 'Alifah Ilyana', 'email' => 'alifahadnan99@gmail.com', 'password' => bcrypt('alifahilyana')],
            ['name' => 'Naufal Ibad', 'email' => 'naufalibad20@gmail.com', 'password' => bcrypt('naufalibad')],
            ['name' => 'Shafiq Shamsuri', 'email' => 'shafiqshamsuri@gmail.com', 'password' => bcrypt('shafiqshamsuri')]
        ]);
    }
}
