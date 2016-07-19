<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use Auth;

class CompanyController extends Controller
{

    public function index(){

      return view('dizayn.companypage');

    }

    public function login(){

          return view('auth.complog');

    }

    public function postLogin(Request $request){

      $validator = validator($request->all(),[

            'email' => 'required|min:3',
            'password' => 'required|min:3',


        ]);
            if($validator->fails() )
            {

              return redirect('/companylog/login');

            }

            $melumatlar = ['email'=>$request->get('email'),'password'=>$request->get('password')];

            if(auth()->guard('company')->attempt($melumatlar))
            {

              return view('dizayn.companypage');

            }else{

                return redirect('/companylog/login');

            }



    }


    public function registerCompany(){



    }
}
