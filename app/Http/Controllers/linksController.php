<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Company;

use App\Tour;

use DB;
class linksController extends Controller
{
      public function tourlink($link){
                if(auth()->guard('')->user() or auth()->guard('company')->user() or auth()->guard('')->guest()){

                  $tourlink = Tour::where(['latin'=> $link , 'onoff' => 1])->first();
                  $photos = $tourlink->photos->all();
                 
                                  return view('dizayn.xeberardi', compact('tourlink','photos'));
                }

        }

        public function tourindex(){

          if(auth()->guard('')->user() or auth()->guard('company')->user() or auth()->guard('')->guest()){

            $tourindex = Tour::where('onoff' , 1)->orderBy('id', 'desc')->paginate(12);
             $slide = Tour::orderBy('id', 'desc')->limit(5)->get();
                            return view('dizayn.index', compact('tourindex' , 'slide'));
          }

        }
}
