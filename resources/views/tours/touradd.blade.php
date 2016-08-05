@extends('layouts.dizayn')

@section('head')
	<link rel="stylesheet" href="/dizayn/datapicker/css/datepicker.css">
@stop
@section('script')
<script src="/dizayn/js/jquery2.min.js"></script>
	<script src="/dizayn/datapicker/js/bootstrap-datepicker.js"></script>
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
border: 1px solid black;
display:block;
background: white;
width: 50%;
}

input[type=date]{
  margin-bottom: 0;
position: relative;
top: -25px;
opacity: 0;
}
.date{
  margin-bottom: 0;
}
.lab{
	    font-size: 12px;
    height: 25px;
    color: black;
    width: 50%;
    background: white;
    border: 1px solid black;
}
</style>
<div style="margin-left:35%;" class="">
	<form class="" action="{{ url("$id/tours") }}" method="post" enctype="multipart/form-data">
		{{ csrf_field() }}
		<label style="color:black;" for="ad">Turun adı</label>
		<input type="text" id="ad"  name="tourName" value="{{ old('tourName') }}" required>

		<label style="color:black;" for="start">Turun başlama tarixi</label>

		<input type="text" class="date" id="datestart" value="{{ old('start') }}" required>
        <input type="date" id="start" class="s" name="start" value="{{ old('start') }}" required>

        <script>
          jQuery(document).ready(function($) {
            $('.s').change(function(event) {
              var a = $('.s').val();
              $('#datestart').val(a);
            });
          });
        </script>

		<label style="color:black;" for="end">Turun bitmə tarixi</label>

		<input type="text" class="date" id="dateend" value="{{ old('end') }}" required>
		<input type="date" id="end"  class="end" 	name="end" value="{{ old('end') }}" required>

		<script>
          jQuery(document).ready(function($) {
            $('.end').change(function(event) {
              var a = $('.end').val();
              $('#dateend').val(a);
            });
          });
        </script>

		<label style="color:black;" for="country">Ölkə</label>
		<input type="text" id="country"  name="country" value="{{ old('country') }}" required>

		<label style="color:black;" for="price">Turun qiyməti</label>
		<input type="number" id="price"  name="price" value="{{ old('price') }}" required>

		<label style="color:black;" for="flyPoint">Uçuş nöqtəsi</label>
		<input type="text" id="flyPoint"  name="flyPoint" value="{{ old('flyPoint') }}" required>

		<label style="color:black;" for="hotel">Hotel</label>
		<input type="text" id="hotel"  name="hotel" value="{{ old('hotel') }}" required>

		<input type="hidden" nqme="_token" value="{{ csrf_token() }}">
		<label for="himage" class="lab">Şəkil seç</label>
		<input type="file" id='himage' name="image" style="opacity: 0;">



		<label style="color:black;" for="about">Tur haqqında</label>
		<textarea  id="ckeditor1" class="miti" name="about" value="{{ old('about') }}" required></textarea>

		<input style="margin-top:50px; " type="submit" name="name" value="Tur əlavə et">
	</form>
</div>



@stop
