<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVoucherRowsTable extends Migration
{
    public function up()
    {
        Schema::create('voucher_rows', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger("row");
            $table->string("date");
            $table->string("status");
            $table->string("description");
            $table->string("file");

            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('voucher_rows');
    }
}
