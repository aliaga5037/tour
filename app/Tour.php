<?php

namespace App;

use App\Company;
use App\Photo;
use App\Hotel;
use Illuminate\Database\Eloquent\Model;

class Tour extends Model
{

	protected $fillable = ['start' , 'end' , 'price' , 'tourName' , 'country' , 'about' , 'flyPoint','latin' ,'days','hotel','room','checkin','checkout','person'];


    public function company()
    {
    	return $this->belongsTo(Company::class);
    }

    public function photos()
    {
    	return $this->hasMany(Photo::class);
    }

		public function basket(){

			 return $this->hasMany('App\Basket','tour_id');

	 }

        public function hotel(){

             return $this->hasMany('App\Hotel','tour_id');

     }




}
