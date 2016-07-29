@extends('layouts.admin')

@section('content')
<div class="row">
  <div class="col-xs-12">
    <div class="box">
      <div class="box-header">
        <h3 class="box-title">Responsive Hover Table</h3>

        <div class="box-tools">
          <div class="input-group input-group-sm" style="width: 150px;">
            <input type="text" name="table_search" class="form-control pull-right" placeholder="Search">

            <div class="input-group-btn">
              <button type="submit" class="btn btn-default"><i class="fa fa-search"></i></button>
            </div>
          </div>
        </div>
      </div>
      <!-- /.box-header -->
      <div class="box-body table-responsive no-padding">
        <table class="table table-hover">
          <tr>
            <th>Alt kateqorıyanın adı</th>
            <th>Editlə</th>
            <th>Sil</th>
          </tr>

          @foreach($cat->alt as $alt)
         
          <tr>
            <td>{{ $alt->catName }}</td>
            <td><a href="/{{ $cat->id }}/altcategory/{{ $alt->id }}/edit" class="btn btn-primary">Editlə</a></td>
            <td>
            	<form action="{{ url("$cat->id/altcategory/$alt->id") }}" method="post">
            		{{ csrf_field() }}
            		<input type="hidden" name="_method" value="DELETE">
            		<input type="submit" value="Sil" class="btn btn-danger">
            	</form>
            </td>
          </tr>
          @endforeach
		

        </table>
        <div class="text-center form-group">

        <form action="/{{ $cat->id }}/altcategory" method="post">
        {{ csrf_field() }}
          <input type="text" name='catName' class="form-control" placeholder="Alt kateqoriya yarat">
          <input type="submit" class="btn btn-success" value="Alt kateqoriya yarat">
        </form>
        </div>
      </div>
      <!-- /.box-body -->
    </div>
    <!-- /.box -->
  </div>
</div>
@endsection