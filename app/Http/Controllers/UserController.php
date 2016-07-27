<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\User;
use Auth;

class UserController extends Controller
{
     public function __construct()
    {
        $this->middleware('auth');
    }

    public function profile($id)
    {

        $user = User::findOrFail($id);

        if (Auth::user()->id != $id) {
            return back();
        }
        return view('auth.profile')->with('user',$user);
    }

    public function edit($id)
    {
    	$user = User::findOrFail($id);

        if (Auth::user()->id != $id) {
            return back();
        }
    	return view('user.useredit')->with('user',$user);
    }

    public function update(Request $request,$id)
    {
    	$user = User::findOrFail($id);
    	
        if (Auth::user()->id != $id) {
            return back();
        }
        $user->update($request->all());
    	return redirect("/$id/profile");
    }

    public function destroy(Request $request,$id)
    {
    	$user = User::findOrFail($id);
    	
        if (Auth::user()->id != $id) {
            return back();
        }

        $user->delete();
    	return redirect("/");
    }
}
