<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTempVouchersTable extends Migration
{
    public function up()
    {
        Schema::create('temp_vouchers', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger("request_id");
            $table->unsignedBigInteger("row");
            $table->string("date");
            $table->string("status");
            $table->string("description");
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('temp_vouchers');
    }
}
