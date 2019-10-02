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
            $table->Increments('id');
            $table->string('card_id')->nullable();
            $table->string('user_id')->nullable();
            $table->string('school_id')->nullable();
            $table->string('car_id')->nullable();
            $table->string('first_name')->nullable();
            $table->string('last_name')->nullable();
            $table->string('nickname');
            $table->string('phone')->nullable();
            $table->string('lattitude')->nullable();
            $table->string('longtitude')->nullable();
            $table->integer('price');
            $table->string('image')->nullable();
            $table->string('qr_code')->nullable();
            $table->string('status')->nullable();
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
        Schema::dropIfExists('students');
    }
}
