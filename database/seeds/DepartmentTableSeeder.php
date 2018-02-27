<?php

use Illuminate\Database\Seeder;

class DepartmentTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	foreach (['web', 'audio', 'games', 'film', 'cross', 'animation', 'bachelor'] as $v){
			\Illuminate\Support\Facades\DB::table('departments')->insert([
			'name' => $v,
			'created_at' => \Carbon\Carbon::now(),
			'updated_at' => \Carbon\Carbon::now()
		]);
		}
    }
}
