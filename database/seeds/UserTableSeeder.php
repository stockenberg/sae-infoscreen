<?php

use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

		\Illuminate\Support\Facades\DB::table('users')->insert([
            'username' => 'supi',
            'password' => bcrypt('Qapla-2015'),
        ]);
    }
}
