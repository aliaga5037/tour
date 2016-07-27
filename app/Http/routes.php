<?php




Route::group(['middleware'=>'admin'],function(){


  Route::group(['middleware'=>'auth:admin'],function(){

  Route::get('/admin/admin','AdminController@index');

  Route::get('/admin/companylist','AdminController@companyList');
  Route::get('/admin/{company}/tours','AdminController@tourList');
  Route::put('/admin/tour/{id}','AdminController@tourListPost');
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

    Route::resource('/{id}/images' , 'ImageController');

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

Route::post('/tours/{link}/{id}','linksController@addtobasket');

Route::get('/tours/tourbuy/{id}','linksController@tourbuy');
Route::delete('/tours/tourbuy/{id}','linksController@tourdel');


Route::get('/test','linksController@test');

Route::get('/elaqe', function () {
    return view('dizayn.elaqe');
});





Route::auth();


Route::get('/{id}/profile' , 'UserController@profile');
Route::get('/{id}/profile/edit' , 'UserController@edit');
Route::put('/{id}/profile' , 'UserController@update');
Route::delete('/{id}/profile/destroy' , 'UserController@destroy');

