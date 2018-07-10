<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    public $fillable = ['name','email','address','city','mobile','gender'];
}
