<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateIndustrialContactsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
    	/*
        Schema::create('industrial_contacts', function (Blueprint $table) {
            $table->increments('id');
            $table->integer("likes");
            $table->string('name');
            $table->string('primary_contact');
            $table->string('last_contact');
            $table->string('last_contact_person');
            $table->text('adress');
            $table->timestamps();
        });*/
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //Schema::dropIfExists('industrial_contacts');
    }
}
