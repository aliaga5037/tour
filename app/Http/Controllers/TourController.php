<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Company;

use App\Tour;

class TourController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Company $id)
    {
      
      return view('auth.tours')->with('company',$id);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($id)
    {
        return view('tours.touradd')->with('id',$id);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request , $id)
    {
       
        $comp = Company::findOrFail($id);
        $tour = new Tour;
        
        
        
        $comp->tours()->create($request->all());



        return redirect("/$id/tours");
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id,$tourId)
    {
        $tour = Tour::findOrFail($tourId);
        return view('tours.touredit')->with('tour',$tour);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id,$tourId)
    {
        
        $tour = Tour::findOrFail($tourId);
        $tour->update($request->all());
        return redirect("/$id/tours"); 
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($compid ,$tourId)
    {

        $id = Tour::findOrFail($tourId);
        if ($id->company_id == $compid) {
           
           $id->delete();
           return back();
        }
        return back();
    }
}
