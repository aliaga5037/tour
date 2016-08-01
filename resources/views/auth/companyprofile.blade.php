@extends('layouts.dizayn')
@section('head')
<link rel="stylesheet" href="/admin/bootstrap/css/bootstrap.css">
@stop
@section('content')
<style>
#panel a:hover, #panel a:focus {
color: #fff;
text-decoration: none;
}
.user-row {
margin-bottom: 14px;
}
.user-row:last-child {
margin-bottom: 0;
}
.dropdown-user {
margin: 13px 0;
padding: 5px;
height: 100%;
}
.panel-dafault{
background: gray;
}
.dropdown-user:hover {
cursor: pointer;
}
.table-user-information > tbody > tr {
border-top: 1px solid rgb(221, 221, 221);
}
.table-user-information > tbody > tr:first-child {
border-top: 0;
}
.table-user-information > tbody > tr > td {
border-top: 0;
}
.toppad
{margin-top:20px;
}

</style>
<div class="container_12">
  <div class="row">
    <div class="col-md-5  toppad  pull-right col-md-offset-3 ">
    </div>
    <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 col-xs-offset-0 col-sm-offset-0 col-md-offset-3 col-lg-offset-3 toppad" >
      
      
      <div class="panel panel-default">
        <div class="panel-heading">
          <h3 class="panel-title">{{ $company->founderName }}</h3>
        </div>
        <div class="panel-body">
          <div class="row">
            
            <!--<div class="col-xs-10 col-sm-10 hidden-md hidden-lg"> <br>
              <dl>
                <dt>DEPARTMENT:</dt>
                <dd>Administrator</dd>
                <dt>HIRE DATE</dt>
                <dd>11/12/2013</dd>
                <dt>DATE OF BIRTH</dt>
                <dd>11/12/2013</dd>
                <dt>GENDER</dt>
                <dd>Male</dd>
              </dl>
            </div>-->
            <div class=" col-md-12 col-lg-12 ">
              <table class="table table-user-information">
                <tbody>
                  <tr>
                    <td>Ad:</td>
                    <td>{{ $company->founderName }}</td>
                  </tr>
                  <tr>
                    <td>Soyad:</td>
                    <td>{{ $company->founderSurname }}</td>
                  </tr>
                  
                  <tr>
                    <td>Qeydiyyat tarixi:</td>
                    <td>{{ $company->created_at }}</td>
                  </tr>
                  <tr>
                    <tr>
                      <tr>
                        <td>Email</td>
                        <td><a href="mailto:{{ $company->email }}">{{ $company->email }}</a></td>
                      </tr>
                      
                      <tr>
                        <td>Şirkət haqqında:</td>
                        <td>{{ $company->companyAbout }}</td>
                      </tr>              
            </tbody>
          </table>
          
          
          {{-- <a href="#" class="btn btn-primary">My Sales Performance</a>
          <a href="#" class="btn btn-primary">Team Sales Performance</a> --}}
        </div>
      </div>
    </div>
    <div class="panel-footer">
      <a href="/profile/{{ auth()->guard('company')->user()->id }}/edit" data-original-title="Edit this user" data-toggle="tooltip" type="button" class="btn btn-sm btn-warning"><i class="glyphicon glyphicon-edit"></i></a>
      <span class="pull-right">
        {{-- <a data-original-title="/{{ Auth::user()->id }}/profile/destroy" data-toggle="tooltip" type="button" class="btn btn-sm btn-danger"><i class="glyphicon glyphicon-remove"></i></a> --}}
        <form action="/profile/{{ auth()->guard('company')->user()->id }}/destroy" method="post">
          {{csrf_field()}}
          <input type="hidden" name="_method" value="DELETE" >
          <input type="submit" class="btn btn-sm btn-danger" data-toggle="tooltip" value="Profili sil">
        </form>
      </span>
    </div>
    
  </div>
</div>
</div>
</div>
<script>
$(document).ready(function() {
var panels = $('.user-infos');
var panelsButton = $('.dropdown-user');
panels.hide();
//Click dropdown
panelsButton.click(function() {
//get data-for attribute
var dataFor = $(this).attr('data-for');
var idFor = $(dataFor);
//current button
var currentButton = $(this);
idFor.slideToggle(400, function() {
//Completed slidetoggle
if(idFor.is(':visible'))
{
currentButton.html('<i class="glyphicon glyphicon-chevron-up text-muted"></i>');
}
else
{
currentButton.html('<i class="glyphicon glyphicon-chevron-down text-muted"></i>');
}
})
});
$('[data-toggle="tooltip"]').tooltip();
$('button').click(function(e) {
e.preventDefault();
alert("This is a demo.\n :-)");
});
});


jQuery(document).ready(function($) {
$('#image').change(function() {

$('.image').val($('#image').val());

});
});
</script>
@stop