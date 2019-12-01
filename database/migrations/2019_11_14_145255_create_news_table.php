<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateNewsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('news', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('user_id');
            $table->string('news_statuses_id');
            $table->string('role_id');
            $table->string('title')->nullable();
            $table->string('content')->nullable();
            $table->string('image')->nullable();
            $table->string('release_date')->nullable();
            $table->string('release_time')->nullable();
            $table->string('news_at')->nullable();
            $table->string('created_at')->nullable();
            $table->timestamp('updated_at')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('news');
    }
}
