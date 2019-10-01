<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePaymentInformsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('payment_informs', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('payment_log_id');
            $table->string('user_id');
            $table->string('time');
            $table->timestamp('date');
            $table->string('content');
            $table->string('bill_image');
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
        Schema::dropIfExists('payment_informs');
    }
}
