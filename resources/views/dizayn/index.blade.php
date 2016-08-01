@extends('layouts.dizayn')

@section('head')
	<link rel="stylesheet" href="/admin/bootstrap/css/bootstrap.css">
@stop
@section('basliq');
@if (auth()->guard()->guest() && auth()->guard('company')->guest())
				<a href="/login" class="login">Giriş</a>
				@endif
<!-- Title and navigation panel -->



@if (count($slide) != 0)
	{{-- expr --}}

<!-- Slider navigation -->
<nav class="slider_nav">
<a href="#" class="left">&nbsp;</a>
<a href="#" class="right">&nbsp;</a>
</nav>

<!-- Slider -->
<div class="slider_wrapper">

<!-- Slider content -->
<ul class="homepage_slider">


	@foreach($slide as $tourin)
	<!-- First slide -->
	<li style="display: block;">
		<h2><a href="/tours/{{ $tourin->latin }}">The {{ $tourin->country }} Expedition from <strong>{{ $tourin->price }} AZN</strong></a></h2>
		<p>{{ $tourin->about }}</p>
	</li>
	@endforeach

</ul>

<div class="clearfix"></div>
</div>
@endif
@endsection
@section('content')
<style>
a:hover, a:focus {
color: #fff;
text-decoration: none;
}
</style>


<!-- Main content -->
<div class="container_12">

	<!-- Recommended trips -->
	<ul class="results">
	<li class="text-center">
			@foreach($tourindex as $tourin)

					<li class="short grid_3">
						<a href="/tours/{{ $tourin->latin }}"><img src="
							@if (count($tourin->photos) != 0)

								{{ $tourin->photos->first()->file_path }}
							@else
								/dizayn/img/1.jpg
							@endif
						" alt="" style="width: 100%; height: 220px;" /></a>
						<h3><a href="/tours/{{ $tourin->latin }}">{{ $tourin->tourName }}</a></h3>
						<span class="stars">
							<img src="/dizayn/img/star_full.png" alt="" />
							<img src="/dizayn/img/star_full.png" alt="" />
							<img src="/dizayn/img/star_full.png" alt="" />
							<img src="/dizayn/img/star_half.png" alt="" />
							<img src="/dizayn/img/star_empty.png" alt="" />
						</span>
						<div>
							<span><a href="/tours/{{ $tourin->latin }}">{{ $tourin->country }}</a></span>
							<span><strong>{{ $tourin->price }}AZN</strong> / {{$tourin->days}} gün</span>
						</div>
					</li>
			@endforeach
			</li>
	</ul>





	<div class="clearfix"></div>
	<div class="text-center">
		{{ $tourindex->render() }}
	</div>
	<hr class="dashed grid_12" />


	<!-- Search form and last minute -->
	<section class="search_lm grid_12">

		<!-- Ticket search form -->
		<section class="search sidebar">

			<h2>
				<span data-form="find_trip" class="selected">Turlar</span>
				<span data-form="find_hotel">Ətraflı Axtarış</span>

			</h2>

			<!-- Find a trip form -->
			<form action="#" method="GET" data-form="find_trip" class="black">

				<label>Uçuş nöqtəsi</label>
				<input type="text" id="search-input" name="ucus_noqtesi" value="" />

				<div class="half">
					<label>Ölkə</label>
					<input type="text" id="search-input-olke" name="olke" value="" />
				</div>

				<div class="half last">
					<label>Səfərin başlama tarixi</label>
					<input type="date" id="search-input-start" name="start"  value="" />
				</div>

				<div class="half">
					<label>Gün Sayı</label>
					<input type="text" id="search-input-days" name="days" value="" />
				</div>



				<div class="half last">
					<label>Qiymət-dək</label>
					<input type="text" id="search-input-price" name="price" value="" />
				</div>

					<input type="button" name="name"   onclick="return false , getSer()" value="Axtar">

			</form>



			<!-- Find a hotel form -->
			<!-- <form action="#" data-form="find_hotel" class="black" style="display:none;">

				<label>Ölkə</label>
				<input type="text" name="destination" value="All" />

				<div class="half">
					<label>Giriş</label>
					<input type="text" name="check_in" class="date" value="11/23/2011" />
				</div>

				<div class="half last">
					<label>Çıxış</label>
					<input type="text" name="check_out" class="date" value="11/23/2011" />
				</div>

				<div class="half">
						<label>Nəfər sayı</label>
					<input type="text" name="guests" value="2" />
				</div>

				<div class="half last">
					<label>Otaqlar</label>
					<input type="text" name="rooms" value="1" />
				</div>

				<input type="submit" value="Axtar">

			</form> -->


		</section>

		<!-- Last minute -->
		<section class="last_minute">
			<table>
				<tr class="header">
					<th>Ölkə</th>
					<th>Otel</th>
					<th>Vaxt aralıqı</th>
					<th>Müddət</th>
					<th>Qiymət</th>
				</tr>
				<tbody id="dongu">
					<!-- <tr>
						<td id='flyPoint'></td>
						<td id='hotel'></td>
						<td id='start-end'></td>
						<td id='days'></td>
						<td id='price'></td>
					</tr> -->
				</tbody>

			</table>


		</section>



	</section>

	<div class="clearfix"></div>
	<hr class="dashed grid_12" />

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
										data:{'ucus_noqtesi': $('#search-input').val(),'olke': $('#search-input-olke').val(),
													'start': $('#search-input-start').val(),
													'days': $('#search-input-days').val(),
													'price': $('#search-input-price').val()
									 },


										 success:function(data){
												$.each(data.ser, function(index, value) {

																$('#dongu').append('<tr><td id="flyPoint"><a href="/tours/'+value.latin+'" >'+value.flyPoint+'</a></td><td id="hotel">'+value.hotel+'</td>	<td id="start-end">'+value.start+'-'+value.end+'</td><td id="days">'+value.days+'</td><td id="price">'+value.price+'</td></tr>');



												});
										 }

									});




		 }

		 </script>



	<!-- Latest blog articles -->


@endsection
