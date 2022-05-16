<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class GeneralAccount extends Model
{

    protected $fillable = ["accounting_group_id", "code", "title"];

}
