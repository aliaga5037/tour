@extends('layouts.dizayn')

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




</style>

<div style="margin-left:35%;" class="">
<form class="form-horizontal" role="form" method="POST" action="/{{ $user->id }}/profile">
    {{ csrf_field() }}


	<input type="hidden" name="_method" value="PUT" >

    <div class="form-group">
        <label for="name" class="col-md-4 control-label">Ad</label>

        <div class="col-md-6">
            <input id="name" type="text" class="form-control" name="name" value="{{ $user->name }}">
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