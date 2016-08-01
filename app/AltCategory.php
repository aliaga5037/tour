<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

use App\Category;

class AltCategory extends Model
{
    protected $fillable = ['catName' , 'content'];
    public $timestamps = false;

    public function cat()
    {
    	return $this->belongsTo(Category::class);
    }
}
