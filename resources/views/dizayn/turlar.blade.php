

@extends('layouts.dizayn')
@section('head')

<link rel="stylesheet" href="/admin/bootstrap/css/bootstrap.css">
@stop
@section('basliq');
@if (auth()->guard()->guest() && auth()->guard('company')->guest())
        <a href="/login" class="login">Giriş</a>
        @endif
  <h2>Gəzmək sağlamlıqdır</h2>
@endsection

@section('content')

<style>
#panel a:hover, #panel a:focus {
color: #fff;
text-decoration: none;
}

input[type=date]{
  margin-bottom: 0;
position: relative;
top: -25px;
opacity: 0;
float: left;
}
.date{
  margin-bottom: 0;
}
</style>

<section class="filter grid_12" style="padding: 15px 60px;">
    <form action="#" class="black">

      <div class="full">
        <label>Uçuş nöqtəsi</label>
        <input type="text" name="destination" value="All" />
      </div>

      <div class="full">
        <label>Ölkə</label>
        <input type="text" id="search-input-olke" name="olke" value="" />
      </div>

      <div class="half">
          <label>Uçuş tarixi</label>
          <input type="text" class="date">
          <input type="date" class="s" id="search-input-start" name='start'>
        </div>
        <script>
          jQuery(document).ready(function($) {
            $('.s').change(function(event) {
              var a = $('.s').val();
              $('.date').val(a);
            });
          });
        </script>

      <div class="half">
        <label>Böyüklər</label>
        <input type="text" name="guests" value="2" />
      </div>

      <div class="half last">
        <label>Uşaqlar</label>
        <input type="text" name="rooms" value="1" />
      </div>

      <input type="submit" value="Search" onclick="getSer();return false" />

    </form>
  </section>

  <div class="clearfix"></div>

  <!-- Results -->
  <ul class="results">
    @foreach ($tours as $tour)


    <li class="grid_4">
      <a href="/tours/{{ $tour->latin}}"><img src="
      @if (count($tour->photos) != 0)

      {{ $tour->photos->first()->file_path }}

      @else

      /dizayn/img/1.jpg

      @endif

      " alt="{{ $tour->tour_name }}" style="width:100%;height:220px;" /></a>
      <h3><a href="/tours/{{ $tour->latin }}">{{ $tour->tourName }}</a></h3>
      <span class="price"><strong>{{ $tour->price }} Azn</strong> / {{$tour->days}} gün</span>
      <div>
        <span><a href="/tours/{{ $tour->latin }}">{{ $tour->country }}</a></span>
        <span class="stars">
          <img src="dizayn/img/star_full.png" alt="" />
          <img src="dizayn/img/star_full.png" alt="" />
          <img src="dizayn/img/star_full.png" alt="" />
          <img src="dizayn/img/star_half.png" alt="" />
          <img src="dizayn/img/star_empty.png" alt="" />
        </span>
        <span>All inclusive</span>
      </div>
    </li>

    @endforeach

  </ul>

  <div class="clearfix"></div>

  <!-- Pagination -->
  <div class="text-center">
   {!! $tours->render() !!}
  </div>
  
 <script>
    function getSer(){

      $.ajaxSetup({
  headers: {
  'X-CSRF-TOKEN': '<?php echo csrf_token() ?>',
  }
  })
  $.ajax({
  type:'POST',
  url:'/',
  data:{'hotel': $('#search-input').val(),'olke': $('#search-input-olke').val(),
  'start': $('#search-input-start').val(),
  'days': $('#search-input-days').val(),
  'price': $('#search-input-price').val()
  },
  success:function(data){
    $('.results').empty();
  $.each(data.ser, function(index, value) {
    console.log(value)
        if(value.photos != null){a = value.photos[0].file_path}else{a = "/dizayn/img/8.jpg"}
    $('.results').append('<li class="grid_4"><a href="/tours/'+value.latin+' class="thumb"><img src="'+a+'" alt="" style="width:220px;height:100px;"></a><h3 id="flyPoint"><a href="/tours/'+value.latin+'" >'+value.hotel+'</a></h3><span class="price">'+value.price+'AZN</span><div><span><a href="/tours/'+value.latin+'">'+value.country+'</a></span><span class="stars"><img src="dizayn/img/star_full.png" alt="" /><img src="dizayn/img/star_full.png" alt="" /><img src="dizayn/img/star_full.png" alt="" /><img src="dizayn/img/star_half.png" alt="" /><img src="dizayn/img/star_empty.png" alt="" /></span><span>All inclusive</span></div><br><p style="overflow:hidden;">'+value.about+'</p></li>');



  });


  }
  });
  }
  </script>

@endsection
