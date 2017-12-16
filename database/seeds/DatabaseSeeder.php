<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	$this->call(UserTableSeeder::class);
		$this->call(DepartmentIndustrialContactTableSeeder::class);
		$this->call(DepartmentTableSeeder::class);
		$this->call(HistoryTableSeeder::class);
		$this->call(IndustrialContactTableSeeder::class);
		$this->call(JobTableSeeder::class);
		$this->call(StudentTableSeeder::class);
    }
}
