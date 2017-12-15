<?php

use Illuminate\Database\Seeder;

class IndustrialContactTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
		\Illuminate\Support\Facades\DB::table('industrial_contacts')->insert([
			'likes' => 5,
			'name' => 'Netresearch',
			'primary_contact' => 'Alexander Weigelt',
			'last_contact' => 'Dezember 2017',
			'last_contact_person' => 'Marten Stockenberg',
			'adress' => 'Nonnenstraße 11D 04229 Leipzig EMail: weigelt@netresearch.net',
			'created_at' => \Carbon\Carbon::now(),
			'updated_at' => \Carbon\Carbon::now()
		]);
    }
}
