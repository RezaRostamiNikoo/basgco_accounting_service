<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDetailAccountsTable extends Migration
{
    public function up()
    {
        Schema::create('detail_accounts', function (Blueprint $table) {
            $table->id();
            $table->foreignId("subsidiary_account_id")->constrained()->restrictOnDelete()->cascadeOnUpdate();
            $table->string("code");
            $table->string("title");
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('detail_accounts');
    }
}
