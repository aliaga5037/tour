@extends('layouts.admin')

@section('content')
<div class="row">
  <div class="col-xs-12">
    <div class="box">
      <div class="box-header">
        <h3 class="box-title">Yeni Kateqoriya</h3>

        
      </div class="form-group">
      <!-- /.box-header -->
      <form action="{{ url("/category/$cat->id") }}" method="post" >
        {{ csrf_field() }}
        <input type="hidden" name='_method' value="PATCH">
        <input type="text" name="cat_name" class="form-control" value="{{ $cat->cat_name }}">
        <div class="text-center">
        <input type="submit" class="btn btn-primary" value="Təsdiqlə" style="width: 50%;">
        </div>
      </form>
      <!-- /.box-body -->
    </div>
    <!-- /.box -->
  </div>
</div>
@endsection