<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSubsidiaryAccountsTable extends Migration
{
    public function up()
    {
        Schema::create('subsidiary_accounts', function (Blueprint $table) {
            $table->id();
            $table->string("general_account_id");
            $table->string("code");
            $table->string("title");
        });
    }
    public function down()
    {
        Schema::dropIfExists('subsidiary_accounts');
    }
}
