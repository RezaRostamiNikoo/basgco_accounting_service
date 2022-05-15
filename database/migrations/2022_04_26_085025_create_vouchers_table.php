<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVouchersTable extends Migration
{
    public function up()
    {
        Schema::create('vouchers', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger("row");
            $table->string("date");
            $table->string("description");

            $table->timestamps();

//            int id_pishdakhast;
        });
    }

    public function down()
    {
        Schema::dropIfExists('vouchers');
    }
}
