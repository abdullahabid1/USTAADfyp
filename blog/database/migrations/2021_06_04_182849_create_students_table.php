<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStudentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('students', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('image');
            $table->string('firstname');
            $table->string('lastname');
            $table->string('email');
            $table->integer('phone');
            $table->string('password');
            $table->string('gender');
            $table->string('about');

            $table->string('street');
            $table->string('city');
            $table->string('country');
            $table->integer('zipcode');

            $table->string('subject1');
            $table->string('subject2');
            $table->string('subject3');
            $table->string('subject4');

            $table->integer('whatsapp');
            $table->string('skype');
            $table->string('twitter');
            $table->string('instagram');
            $table->string('facebook');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('students');
    }
}
