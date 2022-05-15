<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRevolvingAccountsTable extends Migration
{
    public function up()
    {
        Schema::create('revolving_accounts', function (Blueprint $table) {
            $table->id();
            $table->foreignId("detail_account_id")->constrained("detail_accounts")->restrictOnDelete()->cascadeOnUpdate();
            $table->string("title");
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
        Schema::dropIfExists('revolving_accounts');
    }
}
