<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTempVoucherRowsTable extends Migration
{
    public function up()
    {
        Schema::create('temp_voucher_rows', function (Blueprint $table) {
            $table->id();
            $table->foreignId("temp_voucher_id")->constrained()->cascadeOnDelete()->cascadeOnUpdate();
            $table->unsignedBigInteger("detail_account_id");
            $table->string("description");
            $table->bigInteger("amount");
            $table->timestamps(); // TODO: اگر حذفش کردیم حتمن توی ایونت باید خود سند رو آپدیت کنیم تا بفهمیم که دستکاری شده است
        });
    }

    public function down()
    {
        Schema::dropIfExists('temp_vouchers');
    }
}
