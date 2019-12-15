<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

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
            $table->bigIncrements('id');
            $table->string('role_id');
            $table->string('relationship_id')->nullable();
            $table->string('car_id')->nullable();
            $table->string('district_id')->nullable();
            $table->string('image');
            $table->string('prefix');
            $table->string('first_name');
            $table->string('last_name');
            $table->string('phone');
            $table->string('line_id')->nullable();
            $table->string('email');
            $table->string('address');
            $table->string('username');
            $table->string('password');
            $table->string('secure_code')->nullable();
            $table->string('status')->nullable()->default(0);
            $table->string('map_address')->nullable();
            $table->string('lattitude')->nullable();
            $table->string('longtitude')->nullable();
            $table->string('token')->nullable();
            $table->timestamp('last_login_date')->nullable();
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
