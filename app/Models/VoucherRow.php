<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class VoucherRow extends Model
{
    protected $fillable = ["voucher_id", "row", "date", "status", "description"];

}
