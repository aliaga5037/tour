<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use Auth;

class AdminController extends Controller
{
    public function __construct()
    {
    }

    public function index()
    {
      return view('admin.admin');
    }

    public function login()
    {
      if(auth()->guard('admin')->user() or auth()->guard('')->user() ){

            return view('dizayn.index');

      }

      return view('auth.adminlog');
    }

    public function postLogin(Request $request)
    {


      $validator = validator($request->all(),[

            'email' => 'required|min:3',
            'password' => 'required|min:3',


        ]);
            if($validator->fails() )
            {
              
              return redirect('/admin/adminlog');

            }

            $melumatlar = ['email'=>$request->get('email'),'password'=>$request->get('password')];

            if(auth()->guard('admin')->attempt($melumatlar))
            {

              return view('admin.admin');

            }else{

                return redirect('/admin/adminlog');

            }
    }


    public function logout ()
    {
          auth()->guard('admin')->logout();
          return redirect('admin/adminlog');

    }
}
