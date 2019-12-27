<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class customer extends Model
{
    protected $fillable = ['fname','mname','lname','bdate','password'];
}
