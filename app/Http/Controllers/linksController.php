<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Company;

use App\Tour;

class linksController extends Controller
{
      public function tourlink($link){
                if(auth()->guard('')->user() or auth()->guard('company')->user() or auth()->guard('')->guest()){

                  $tourlink = Tour::where('latin', $link)->first();

                                  return view('dizayn.xeberardi', compact('tourlink'));
                }

        }

        public function tourindex(){

          if(auth()->guard('')->user() or auth()->guard('company')->user() or auth()->guard('')->guest()){

            $tourindex = Tour::all();

                            return view('dizayn.index', compact('tourindex'));
          }

        }
}
