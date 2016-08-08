<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Tour;
class Hotel extends Model
{
    
    protected $fillable['hotel','room','checkin','checkout','person'];

    public function tour(){

             return $this->belongsTo(Tour::class);

     }
}
