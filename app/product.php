<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class product extends Model
{
    protected $fillable = ['category_id','subcategory_id','productname','price','offerprice','componyname','productweight','qty','menudate','image'];
}
