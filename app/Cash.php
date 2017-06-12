<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cash extends Model
{
    protected $fillable = ['bank','fromBank','fromAccountNumber','fromAccountName',
  'dateadd',/*'Timeadd','toBank',*/'toAccountNumber','toAccountName','amount','transferStatus'];
}
