<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class BankAccount extends Model
{
    protected $fillable = ["bank_id", "account_name", "branch", "sheba", "address", "detail_account_id"];

}
