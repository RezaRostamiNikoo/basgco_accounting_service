<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TempVoucherRow extends Model
{

    protected $fillable = ["temp_voucher_id", "detail_account_id", "description", "amount"];

}
