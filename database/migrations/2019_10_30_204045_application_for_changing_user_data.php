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
        Schema::create('application_for_changing_datas', function (Blueprint $table) {
            $table->engine = 'InnoDB';

            $table->increments('id')->unique();
            $table->integer('user_id');
            $table->string('name');
            $table->string('lastname');
            $table->string('email');
            $table->integer('typestudy')->unsigned()->nullable();
            $table->integer('levelstudy')->unsigned()->nullable();
            $table->integer('department')->unsigned()->nullable();
            $table->integer('direction')->unsigned()->nullable();
            $table->string('specialization')->nullable()->nullable();
            //$table->rememberToken();
            $table->timestamps();
        });

        Schema::table('application_for_changing_datas',function (Blueprint $table){
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
        });

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('application_for_changing_datas');
    }
}
