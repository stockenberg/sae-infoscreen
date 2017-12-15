<?php

use Illuminate\Database\Seeder;

class JobTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
		\Illuminate\Support\Facades\DB::table('jobs')->insert([
			'description' => 'Programmierer gesucht',
			'industrial_contact_id' => 1,
			'created_at' => \Carbon\Carbon::now(),
			'updated_at' => \Carbon\Carbon::now()
		]);
    }
}
