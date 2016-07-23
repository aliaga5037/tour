<?php




Route::group(['middleware'=>'admin'],function(){


Route::group(['middleware'=>'auth:admin'],function(){

  Route::get('/admin/admin','AdminController@index');
  Route::get('/admin/companylist','AdminController@companyList');
  Route::put('/admin/companylist/{id}','AdminController@companyListPost');
});






  Route::get('/admin/adminlog','AdminController@login');
  Route::post('/admin/adminlog','AdminController@postLogin');
  Route::get('/admin/adminlogout','AdminController@logout');

});


Route::group(['middleware'=>'company'],function(){

Route::group(['middleware'=>'auth:company'],function(){

Route::get('/company', 'CompanyController@index');
Route::resource('/{id}/tours', 'TourController');

});



  Route::get('/company', function () {
    return view('dizayn.companypage');
});

  Route::post('/companylog','CompanyController@postLogin');
  Route::get('/companylogout','CompanyController@logout');

});


Route::post('/companyRegister','CompanyController@addComp');
Route::get('/companyRegister', function () {
    return view('dizayn.companyreg');
});

  Route::get('/home','HomeController@index');


Route::get('/','linksController@tourindex');


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


Route::get('/tours/{link}','linksController@tourlink');




Route::get('/elaqe', function () {
    return view('dizayn.elaqe');
});

Route::auth();
