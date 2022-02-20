<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Superheroes extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('superheroes', function (Blueprint $table) {
            $table->id();
            $table->string('nickname')->unique();
            $table->string('real_name');
            $table->text('origin_description');
            $table->text('superpowers');
            $table->string('catch_phrase');
            $table->string('images');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}

