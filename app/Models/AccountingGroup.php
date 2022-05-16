<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class AccountingGroup extends Model
{
    public $timestamps = false;

    protected $fillable = ["code", "title"];


}
