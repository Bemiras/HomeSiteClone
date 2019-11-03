<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class ApplicationForChangingUserData extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('chang_application', function (Blueprint $table) {
            $table->integer('id')->unique();
            //$table->integer('user_id');
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->string('name');
            $table->string('lastname');
            $table->string('password');
            $table->integer('typestudy')->unsigned();
            $table->integer('levelstudy')->unsigned();
            $table->integer('department')->unsigned();
            $table->integer('direction')->unsigned();
            $table->string('specialization')->nullable();
            //$table->rememberToken();
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
        Schema::drop('chang_application');
    }
}
