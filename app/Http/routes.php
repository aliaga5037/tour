<?php


Route::group(['middleware'=>'admin'],function(){


Route::group(['middleware'=>'auth:admin'],function(){

  Route::get('/admin/admin','AdminController@index');

});






  Route::get('/admin/adminlog','AdminController@login');
  Route::post('/admin/adminlog','AdminController@postLogin');
  Route::get('/admin/adminlogout','AdminController@logout');

});


Route::group(['middleware'=>'company'],function(){

Route::group(['middleware'=>'auth:company'],function(){

Route::get('/company/company', 'CompanyController@index');

  });




  Route::get('/companylog/login','CompanyController@login');
  Route::post('/companylog/login','CompanyController@postLogin');
  Route::get('/companylog/logout','CompanyController@logout');

});





Route::get('/', function () {
    return view('dizayn.index');
});


Route::get('/turlar', function () {
    return view('dizayn.turlar');
});

Route::get('/otel', function () {
    return view('dizayn.otel');
});

Route::get('/userreg', function () {
    return view('dizayn.userreg');
});

Route::get('/companyreg', function () {
    return view('dizayn.companyreg');
});




Route::get('/elaqe', function () {
    return view('dizayn.elaqe');
});

Route::auth();
