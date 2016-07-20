@extends('layouts.dizayn')
@section('head')
   <style>
   label{
    color: black;
   }
   .sel{
        height: 30px;
    border-radius: 4px;
        width: 50%;
   }
   </style>
@stop
@section('content')

<div class="container log">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default" style="margin-left: 35%;">
                <div class="panel-heading"><b>Giriş</b></div>
                <div class="panel-body">
                <div>
                    <form class="form-horizontal" role="form" method="POST" action="{{url('/login')}}">

                        {{ csrf_field() }}

                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <label for="radio" class="col-md-4 control-label">İstifadəçi növü</label>
                            <div class="col-md-6">
                                <select name="s" id="radio" class="sel">
                                    <option value="0">İstifadəçi</option>
                                    <option value="1">Şirkət</option>  
                                </select>
                            </div>
                        </div>


                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <label for="email" class="col-md-4 control-label">Poçt Ünvanı</label>
                            <div class="col-md-6">
                                <input id="email" type="email" style="width: 50%;" name="email" value="{{ old('email') }}">
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
                                <input id="password" type="password" style="width: 50%;" name="password">
                                @if ($errors->has('password'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('password') }}</strong>
                                </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                <i class="fa fa-btn fa-sign-in"></i> Giriş
                                </button>
                                <a class="btn btn-link" href="{{ url('/password/reset') }}">Şirəni Unutmusuz?</a>
                            </div>
                        </div>
                    </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
jQuery(document).ready(function($) {
$('#radio').change(function(e) {
    if ($('#radio').val() == 1){
         $('form').attr('action','{{url('/companylog')}}')
    }else{
        $('form').attr('action','{{url('/login')}}')
    }
    
    
})
});
</script>
@endsection