<?php

use Illuminate\Database\Seeder;

class HistoryTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
		\Illuminate\Support\Facades\DB::table('histories')->insert([
			'entry' => '12.04. - Workshow Anwesenheit',
			'industrial_contact_id' => 1,
			'created_at' => \Carbon\Carbon::now(),
			'updated_at' => \Carbon\Carbon::now()
		]);
    }
}
