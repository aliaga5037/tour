@extends('layouts.dizayn')
@section('head')
<link rel="stylesheet" href="/admin/bootstrap/css/bootstrap.css">
@stop
@section('content')
	<style media="screen">

label{

  font-size: 12px;
}
  input{

    display:block;
    border:1px solid black;
    font-size: 14px;
    color:black;
    width: 50%;

  }

  input:focus{

      padding:15px;
      background-color:;

  }

  textarea{
    background: white; 
    width: 100%;
    resize: none;
  }

  #panel a:hover, #panel a:focus {
color: #fff;
text-decoration: none;
}





</style>

<div style="" class="">
<form class="form-horizontal" role="form" method="POST" action="/profile/{{ $company->id }}">
    {{ csrf_field() }}


	<input type="hidden" name="_method" value="PUT" >

    <div class="form-group">
        <label for="name" class="col-md-4 control-label">Ad</label>

        <div class="col-md-6">
            <input id="name" type="text" class="form-control" name="founderName" value="{{ $company->founderName }}">
        </div>
    </div>

     <div class="form-group">
        <label for="name" class="col-md-4 control-label">Soyad</label>

        <div class="col-md-6">
            <input id="name" type="text" class="form-control" name="founderSurname" value="{{ $company->founderSurname }}">
        </div>
    </div>

     <div class="form-group">
        <label for="name" class="col-md-4 control-label">Şirkət haqqında</label>

        <div class="col-md-6">
            <textarea id="name" type="text" name="companyAbout" >{{ $company->companyAbout }}</textarea>
        </div>
    </div>

    <div class="form-group">
        <div class="col-md-6 col-md-offset-4">
            <button type="submit" class="btn btn-primary">
                <i class="fa fa-btn fa-user"></i> Təsdiqlə
            </button>
        </div>
    </div>
</form>
</div> 
@stop