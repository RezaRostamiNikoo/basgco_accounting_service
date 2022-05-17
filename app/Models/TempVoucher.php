<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TempVoucher extends Model
{
    protected static function booted()
    {
        parent::booted();

        self::created(function (TempVoucher $temp_voucher) {
            self::sendRequest($temp_voucher);
        });

    }

    protected $fillable = ["request_id", "row", "date", "status", "description"];


    private function sendRequest()
    {
        // TODO: ارسال یک درخواست به کارتابل برای پیگیری تاییدیه ها
    }


}
