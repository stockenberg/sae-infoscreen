<?php

use Illuminate\Database\Seeder;

class DepartmentIndustrialContactTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
		\Illuminate\Support\Facades\DB::table('department_industrial_contact')->insert([
			'industrial_contact_id' => 1,
			'department_id' => 1
		]);
    }
}
