<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TempVoucher extends Model
{
    protected $fillable = ["request_id", "row", "date", "status", "description"];
}
