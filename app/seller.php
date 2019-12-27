<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class seller extends Model
{
    protected $fillable = ['fname','mname','lname','add','city','state','pincode','aadharcardno','contactno','email'];
}
