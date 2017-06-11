<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cash extends Model
{
    protected $fillable = ['method','fromBank','fromAccountNumber','fromAccountName','transferDate','transferTime','toBank','toAccountNumber','toAccountName','amount','transferStatus'];
}
