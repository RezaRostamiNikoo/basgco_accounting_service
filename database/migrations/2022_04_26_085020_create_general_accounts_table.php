<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGeneralAccountsTable extends Migration
{
    public function up()
    {
        Schema::create('general_accounts', function (Blueprint $table) {
            $table->id();
            $table->foreignId("accounting_group_id")->constrained()->restrictOnDelete()->cascadeOnUpdate();
            $table->string("code");
            $table->string("title");
            $table->timestamps();

        });
    }

    public function down()
    {
        Schema::dropIfExists('general_accounts');
    }
}
