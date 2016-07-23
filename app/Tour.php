<?php

namespace App;

use App\Company;
use Illuminate\Database\Eloquent\Model;

class Tour extends Model
{
	protected $fillable = ['start' , 'end' , 'price' , 'tourName' , 'country' , 'about' , 'flyPoint' , 'hotel'];

    public function company()
    {
    	return $this->belongsTo(Company::class);
    }
}
