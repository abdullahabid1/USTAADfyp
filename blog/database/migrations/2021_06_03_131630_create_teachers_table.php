<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTeachersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('teachers', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('image');
        $table->string('firstName');
        $table->string('lastName');
        $table->string('email');
        $table->integer('phone');
        $table->string('password');
        $table->string('gender');
        
        $table->string('about');
       
        $table->string('qualification1');
        $table->string('qualification2');
        $table->string('qualification3');
        $table->string('qualification4');
        $table->string('city');
        $table->string('country');
        $table->integer('zipcode');
        $table->string('address');

        $table->string('subject1');
        $table->string('subject2');
        $table->string('subject3');
        $table->string('experience1');
        $table->string('experience2');
        $table->string('experience3');
        $table->string('experience4');
        
        $table->integer('whatsapp');
        $table->string('skype');
        $table->string('twitter');
        $table->string('instagram');
        $table->string('facebook');
        $table->string('demo');    
      
      
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('teachers');
    }
}
