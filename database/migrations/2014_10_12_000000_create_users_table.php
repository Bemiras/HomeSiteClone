<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->integer('id')->unique();
            $table->string('name');
            $table->string('lastname');
            $table->string('email');
            $table->string('password');
            $table->integer('typestudy')->unsigned();
            $table->integer('levelstudy')->unsigned();
            $table->integer('department')->unsigned();
            $table->integer('direction')->unsigned();
            $table->string('role')->default('student');
            $table->string('card')->default('brak');
            $table->integer('id_card')->unsigned()->nullable();
            $table->string('specialization')->nullable();
            $table->rememberToken();
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
        Schema::dropIfExists('users');
    }
}
