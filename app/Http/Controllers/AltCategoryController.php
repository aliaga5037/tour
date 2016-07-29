<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Category;
use App\AltCategory;

class AltCategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($id)
    {

        $cat = Category::findOrFail($id);
        return view('admin.altcat',compact('cat'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($id)
    {
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request ,$id)
    {
        $cat = Category::findOrFail($id);
        
        $alt = new AltCategory;
        // dd($alt);
        //$alt = $request->catName;
        //dd($request->catName);
        $cat->alt()->create([
            'catName' => $request['catName']
        ]);
        return back();
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
    public function edit($id , $a)
    {
        $alt = AltCategory::findOrFail($a);
        return view('category.altcatedit',compact('id','alt'));
    }


    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request ,$id ,$a)
    {
      
        $alt = AltCategory::findOrFail($a);
        $alt->update($request->all());
        return redirect("$id/altcategory");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id ,$alt)
    {
        $altcat = AltCategory::findOrFail($alt)->delete();

        return back();
    }
}
