<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAccountingGroupsTable extends Migration
{
    public function up()
    {
        Schema::create('accounting_groups', function (Blueprint $table) {
            $table->id();
            $table->string("code");
            $table->string("title");
        });
    }

    public function down()
    {
        Schema::dropIfExists('accounting_groups');
    }
}
