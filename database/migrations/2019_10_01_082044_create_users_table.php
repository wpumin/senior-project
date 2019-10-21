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
            $table->string('role')->default(2);
            $table->string('car_id')->nullable()->default(2);
            $table->string('image');
            $table->string('first_name');
            $table->string('last_name');
            $table->string('fullname_u')->nullable();
            $table->string('relationship');
            $table->string('mobile');
            $table->string('line_id')->nullable();
            $table->string('email');
            $table->string('address');
            $table->string('username');
            $table->string('password');
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
