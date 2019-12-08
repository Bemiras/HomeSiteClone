<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->integer('id')->unique();
            $table->string('name');
            $table->string('lastname');
            $table->string('email');
            $table->string('password');
            $table->integer('typestudy')
                ->unsigned()->nullable();
            $table->integer('levelstudy')
                ->unsigned()->nullable();
            $table->integer('department')
                ->unsigned()->nullable();
            $table->integer('direction')
                ->unsigned()->nullable();
            $table->string('role')
                ->default('student');
            $table->string('card')
                ->default('Brak');
            $table->integer('id_card')
                ->unsigned()->nullable();
            $table->string('specialization')
                ->nullable();
            $table->rememberToken();
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('users');
    }
}



