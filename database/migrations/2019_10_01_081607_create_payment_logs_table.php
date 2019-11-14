<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePaymentLogsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('payment_logs', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('tran_key');
            $table->string('month');
            $table->string('year');
            $table->string('student_id');
            $table->string('pm_status_id');
            // $table->string('car_id')->nullable();
            // $table->string('price')->nullable();
            // $table->string('qr_code')->nullable();
            // $table->string('bank_id')->nullable();
            // $table->string('created_at');
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
        Schema::dropIfExists('payment_logs');
    }
}
