@extends('layouts.dizayn')
@section('basliq');
<h2>Bizdən Alın</h2>
@endsection
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
<form class="form-horizontal" role="form" method="POST" action="{{ url('/register') }}">
    {{ csrf_field() }}

    <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
        <label for="name" class="col-md-4 control-label">Ad</label>

        <div class="col-md-6">
            <input id="name" type="text" class="form-control" name="name" value="{{ old('name') }}">

            @if ($errors->has('name'))
                <span class="help-block">
                    <strong>{{ $errors->first('name') }}</strong>
                </span>
            @endif
        </div>
    </div>

    <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
        <label for="email" class="col-md-4 control-label">Poçt Ünvanı</label>

        <div class="col-md-6">
            <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}">

            @if ($errors->has('email'))
                <span class="help-block">
                    <strong>{{ $errors->first('email') }}</strong>
                </span>
            @endif
        </div>
    </div>

    <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
        <label for="password" class="col-md-4 control-label">Şifrə</label>

        <div class="col-md-6">
            <input id="password" type="password" class="form-control" name="password">

            @if ($errors->has('password'))
                <span class="help-block">
                    <strong>{{ $errors->first('password') }}</strong>
                </span>
            @endif
        </div>
    </div>

    <div class="form-group{{ $errors->has('password_confirmation') ? ' has-error' : '' }}">
        <label for="password-confirm" class="col-md-4 control-label">Şifrəni Təsdiqlə</label>

        <div class="col-md-6">
            <input id="password-confirm" type="password" class="form-control" name="password_confirmation">

            @if ($errors->has('password_confirmation'))
                <span class="help-block">
                    <strong>{{ $errors->first('password_confirmation') }}</strong>
                </span>
            @endif
        </div>
    </div>

    <div class="form-group">
        <div class="col-md-6 col-md-offset-4">
            <button type="submit" class="btn btn-primary">
                <i class="fa fa-btn fa-user"></i> Qeydiyyat
            </button>
        </div>
    </div>
</form>
</div> 
<!-- <div style="margin-left:35%;" class="">

  <form class="" action="" method="post">
        <label style="color:black;"for="ad">Ad</label>
        <input type="text" id="ad"  name="name" value="">
        <label style="color:black;"for="soyad">Soyad</label>
        <input type="text" id="soyad"  name="name" value="">
        <label style="color:black;"for="email">Email</label>
        <input type="email" id="email"  name="name" value="">
        <label style="color:black;"for="sifre">Şifrə</label>
        <input type="email" id="sifre"  name="name" value="">
        <input style="margin-top:50px; " type="submit" name="name" value="Qeydiyyatdan Keç">

  </form>

</div> -->
@endsection
