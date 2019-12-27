<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class subcategories extends Model
{
    protected $fillable=['category_id','subcategoryname'];
    public function category()
    {
        return $this->belongsTo('App\category','category_id','id');
    }
}
