<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBanksTable extends Migration
{
    public function up()
    {
        Schema::create('banks', function (Blueprint $table) {
            $table->id();
            $table->foreignId("bank_id")->constrained("banks")->restrictOnDelete()->cascadeOnUpdate();
            $table->string("account_name");
            $table->string("branch");
            $table->string("sheba");
            $table->string("address");
            $table->foreignId("detail_account")->constrained("detail_accounts")
                ->restrictOnDelete()
                ->cascadeOnUpdate();

            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('banks');
    }
}
