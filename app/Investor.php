<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Investor extends Model
{

    protected $fillable =[
      'user_id','occupation','address','net_worth','date_of_birth',
    ];
}
