<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

use App\Category;

use App\AltCategory;

class Category extends Model
{
    protected $fillable = ['cat_name'];

    public function alt()
    {
    	return $this->hasMany(AltCategory::class);
    }
}
