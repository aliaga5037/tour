@extends('layouts.admin')
@section('content')
<div class="row">
  <div class="col-xs-12">
    <div class="box">
      <div class="box-header">
        <h3 class="box-title">{{ $company->companyName }} Tour's</h3>

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
        <thead>
          <tr>
            <th>Turun Adı</th>
            <th>Başlama tarixi</th>
            <th>Bitmə tarixi</th>
            <th>Ölkə</th>
            <th>Otel</th>
            <th>Uçuş nöqtəsi</th>
            <th>Qiymət</th>
            <th>Haqqında</th>
            <th>Gözləyənlər</th>
            <th>Təsdiq olunanlar</th>
          </tr>
          </thead>
          <tbody>

            @foreach ($tour as $tur)
              <tr>
                <td>{{ $tur->tourName }}</td>
                <td>{{ $tur->start }}</td>
                <td>{{ $tur->end }}</td>
                <td>{{ $tur->country }}</td>
                <td>{{ $tur->hotel }}</td>
                <td>{{ $tur->flyPoint }}</td>
                <td>{{ $tur->price }}</td>
                <td>{{ $tur->about }}</td>
                <td>@if($tur->onoff == 0)
                    <form  action="/admin/tour/{{ $tur->id }}" method="post">
                            {{ csrf_field() }}
                        <input type="hidden" name="_method" value="PUT" >

                        <input type="submit" value="Gözləmə" class="btn btn-danger">
                    </form>
                    @endif
                </td>
            <td>@if($tur->onoff == 1) <span class="label label-success">Təsdiqlənmiş</span> @endif</td>
              </tr>
            @endforeach
          </tbody>
         


        </table>
        <div class="text-center">
            
        </div>
      </div>
      <!-- /.box-body -->
    </div>
    <!-- /.box -->
  </div>
</div>
@endsection
