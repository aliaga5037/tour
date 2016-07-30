@extends('layouts.dizayn')
@section('head')
<link rel="stylesheet" href="/admin/bootstrap/css/bootstrap.css">
@stop
@section('content')
<style>
	
	a:hover, a:focus {
color: #fff;
text-decoration: none;
}
.panel-default .panel-heading{
	background: #000;
	font-size: 2em;
	color: white;
}
</style>
<div class="container_12" style="padding:  10px;">
	<div class="panel panel-default">
		<div class="panel-heading text-center">{{ $alt->catName }}</div>
		<div class="panel-body">{{ $alt->content }}</div>
	</div>
</div>

@stop