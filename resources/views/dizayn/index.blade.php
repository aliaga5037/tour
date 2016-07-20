@extends('layouts.dizayn')
@section('basliq');
@if (auth()->guard()->guest() && auth()->guard('company')->guest())
				<a href="/login" class="login">Giriş</a>
				@endif
<!-- Title and navigation panel -->




<!-- Slider navigation -->
<nav class="slider_nav">
<a href="#" class="left">&nbsp;</a>
<a href="#" class="right">&nbsp;</a>
</nav>

<!-- Slider -->
<div class="slider_wrapper">

<!-- Slider content -->
<ul class="homepage_slider">

	<!-- First slide -->
	<li>
		<h2><a href="trip.html">The Indonesia Expedition from <strong>799 €</strong></a></h2>
		<p>Ubud, Uluwatu, Batur, Besakih and Tenganan</p>
	</li>

	<!-- Second slide -->
	<li>
		<h2><a href="hotel.html">A wonderful week in Singapore from <strong>999 €</strong></a></h2>
		<p>With accomodation in Marina Bay Sands</p>
	</li>

</ul>

<div class="clearfix"></div>
</div>
@endsection
@section('content')



<!-- Main content -->
<div class="container_12">

	<!-- Recommended trips -->
	<ul class="results">

		<li class="short grid_3">
			<a href="hotel.html"><img src="/dizayn/img/8.jpg" alt="" /></a>
			<h3><a href="hotel.html">Marina Bay Sands</a></h3>
			<span class="stars">
				<img src="/dizayn/img/star_full.png" alt="" />
				<img src="/dizayn/img/star_full.png" alt="" />
				<img src="/dizayn/img/star_full.png" alt="" />
				<img src="/dizayn/img/star_half.png" alt="" />
				<img src="/dizayn/img/star_empty.png" alt="" />
			</span>
			<div>
				<span><a href="#">Singapore</a></span>
				<span><strong>1 899 €</strong> / 10 days</span>
			</div>
		</li>

		<li class="short grid_3">
			<a href="hotel.html"><img src="/dizayn/img/9.jpg" alt="" /></a>
			<h3><a href="hotel.html">Hotel Palma</a></h3>
			<span class="stars">
				<img src="/dizayn/img/star_full.png" alt="" />
				<img src="/dizayn/img/star_full.png" alt="" />
				<img src="/dizayn/img/star_full.png" alt="" />
				<img src="/dizayn/img/star_half.png" alt="" />
				<img src="/dizayn/img/star_empty.png" alt="" />
			</span>
			<div>
				<span><a href="#">Mallorca</a></span>
				<span><strong>1 899 €</strong> / 10 days</span>
			</div>
		</li>

		<li class="short grid_3">
			<a href="hotel.html"><img src="/dizayn/img/13.jpg" alt="" /></a>
			<h3><a href="hotel.html">Holiday Inn</a></h3>
			<span class="stars">
				<img src="/dizayn/img/star_full.png" alt="" />
				<img src="/dizayn/img/star_full.png" alt="" />
				<img src="/dizayn/img/star_full.png" alt="" />
				<img src="/dizayn/img/star_half.png" alt="" />
				<img src="/dizayn/img/star_empty.png" alt="" />
			</span>
			<div>
				<span><a href="#">Cannes</a></span>
				<span><strong>1 899 €</strong> / 10 days</span>
			</div>
		</li>

		<li class="short grid_3">
			<a href="hotel.html"><img src="/dizayn/img/14.jpg" alt="" /></a>
			<h3><a href="hotel.html">Hotel Grand</a></h3>
			<span class="stars">
				<img src="/dizayn/img/star_full.png" alt="" />
				<img src="/dizayn/img/star_full.png" alt="" />
				<img src="/dizayn/img/star_full.png" alt="" />
				<img src="/dizayn/img/star_half.png" alt="" />
				<img src="/dizayn/img/star_half.png" alt="" />
			</span>
			<div>
				<span><a href="#">Singapore</a></span>
				<span><strong>1 899 €</strong> / 10 days</span>
			</div>
		</li>

	</ul>

	<ul class="results">

		<li class="short grid_3">
			<a href="hotel.html"><img src="/dizayn/img/8.jpg" alt="" /></a>
			<h3><a href="hotel.html">Marina Bay Sands</a></h3>
			<span class="stars">
				<img src="/dizayn/img/star_full.png" alt="" />
				<img src="/dizayn/img/star_full.png" alt="" />
				<img src="/dizayn/img/star_full.png" alt="" />
				<img src="/dizayn/img/star_half.png" alt="" />
				<img src="/dizayn/img/star_empty.png" alt="" />
			</span>
			<div>
				<span><a href="#">Singapore</a></span>
				<span><strong>1 899 €</strong> / 10 days</span>
			</div>
		</li>

		<li class="short grid_3">
			<a href="hotel.html"><img src="/dizayn/img/9.jpg" alt="" /></a>
			<h3><a href="hotel.html">Hotel Palma</a></h3>
			<span class="stars">
				<img src="/dizayn/img/star_full.png" alt="" />
				<img src="/dizayn/img/star_full.png" alt="" />
				<img src="/dizayn/img/star_full.png" alt="" />
				<img src="/dizayn/img/star_half.png" alt="" />
				<img src="/dizayn/img/star_empty.png" alt="" />
			</span>
			<div>
				<span><a href="#">Mallorca</a></span>
				<span><strong>1 899 €</strong> / 10 days</span>
			</div>
		</li>

		<li class="short grid_3">
			<a href="hotel.html"><img src="/dizayn/img/13.jpg" alt="" /></a>
			<h3><a href="hotel.html">Holiday Inn</a></h3>
			<span class="stars">
				<img src="/dizayn/img/star_full.png" alt="" />
				<img src="/dizayn/img/star_full.png" alt="" />
				<img src="/dizayn/img/star_full.png" alt="" />
				<img src="/dizayn/img/star_half.png" alt="" />
				<img src="/dizayn/img/star_empty.png" alt="" />
			</span>
			<div>
				<span><a href="#">Cannes</a></span>
				<span><strong>1 899 €</strong> / 10 days</span>
			</div>
		</li>

		<li class="short grid_3">
			<a href="hotel.html"><img src="/dizayn/img/14.jpg" alt="" /></a>
			<h3><a href="hotel.html">Hotel Grand</a></h3>
			<span class="stars">
				<img src="/dizayn/img/star_full.png" alt="" />
				<img src="/dizayn/img/star_full.png" alt="" />
				<img src="/dizayn/img/star_full.png" alt="" />
				<img src="/dizayn/img/star_half.png" alt="" />
				<img src="/dizayn/img/star_half.png" alt="" />
			</span>
			<div>
				<span><a href="#">Singapore</a></span>
				<span><strong>1 899 €</strong> / 10 days</span>
			</div>
		</li>

	</ul>

	<ul class="results">

		<li class="short grid_3">
			<a href="hotel.html"><img src="/dizayn/img/8.jpg" alt="" /></a>
			<h3><a href="hotel.html">Marina Bay Sands</a></h3>
			<span class="stars">
				<img src="/dizayn/img/star_full.png" alt="" />
				<img src="/dizayn/img/star_full.png" alt="" />
				<img src="/dizayn/img/star_full.png" alt="" />
				<img src="/dizayn/img/star_half.png" alt="" />
				<img src="/dizayn/img/star_empty.png" alt="" />
			</span>
			<div>
				<span><a href="#">Singapore</a></span>
				<span><strong>1 899 €</strong> / 10 days</span>
			</div>
		</li>

		<li class="short grid_3">
			<a href="hotel.html"><img src="/dizayn/img/9.jpg" alt="" /></a>
			<h3><a href="hotel.html">Hotel Palma</a></h3>
			<span class="stars">
				<img src="/dizayn/img/star_full.png" alt="" />
				<img src="/dizayn/img/star_full.png" alt="" />
				<img src="/dizayn/img/star_full.png" alt="" />
				<img src="/dizayn/img/star_half.png" alt="" />
				<img src="/dizayn/img/star_empty.png" alt="" />
			</span>
			<div>
				<span><a href="#">Mallorca</a></span>
				<span><strong>1 899 €</strong> / 10 days</span>
			</div>
		</li>

		<li class="short grid_3">
			<a href="hotel.html"><img src="/dizayn/img/13.jpg" alt="" /></a>
			<h3><a href="hotel.html">Holiday Inn</a></h3>
			<span class="stars">
				<img src="/dizayn/img/star_full.png" alt="" />
				<img src="/dizayn/img/star_full.png" alt="" />
				<img src="/dizayn/img/star_full.png" alt="" />
				<img src="/dizayn/img/star_half.png" alt="" />
				<img src="/dizayn/img/star_empty.png" alt="" />
			</span>
			<div>
				<span><a href="#">Cannes</a></span>
				<span><strong>1 899 €</strong> / 10 days</span>
			</div>
		</li>

		<li class="short grid_3">
			<a href="hotel.html"><img src="/dizayn/img/14.jpg" alt="" /></a>
			<h3><a href="hotel.html">Hotel Grand</a></h3>
			<span class="stars">
				<img src="/dizayn/img/star_full.png" alt="" />
				<img src="/dizayn/img/star_full.png" alt="" />
				<img src="/dizayn/img/star_full.png" alt="" />
				<img src="/dizayn/img/star_half.png" alt="" />
				<img src="/dizayn/img/star_half.png" alt="" />
			</span>
			<div>
				<span><a href="#">Singapore</a></span>
				<span><strong>1 899 €</strong> / 10 days</span>
			</div>
		</li>

	</ul>

	<div class="clearfix"></div>
	<hr class="dashed grid_12" />


	<!-- Search form and last minute -->
	<section class="search_lm grid_12">

		<!-- Ticket search form -->
		<section class="search sidebar">

			<h2>
				<span data-form="find_trip" class="selected">Turlar</span>
				<span data-form="find_hotel">Otellər</span>

			</h2>

			<!-- Find a trip form -->
			<form action="#" data-form="find_trip" class="black">

				<label>Uçuş nöqtəsi</label>
				<input type="text" name="destination" value="All" />

				<div class="half">
					<label>Ölkə</label>
					<input type="text" name="transportation" value="Plane" />
				</div>

				<div class="half last">
					<label>Səfərin başlama tarixi</label>
					<input type="text" name="date" class="date" value="11/23/2011" />
				</div>

				<div class="half">
					<label>Böyüklər</label>
					<input type="text" name="guests" value="2" />
				</div>



				<div class="half last">
					<label>Uşaqlar</label>
					<input type="text" name="rooms" value="1" />
				</div>

				<input type="submit" value="Axtar">

			</form>

			<!-- Find a hotel form -->
			<form action="#" data-form="find_hotel" class="black" style="display:none;">

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

			</form>


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
				<tr>
					<td><a href="browse.html">Spain</a></td>
					<td>Hotel Grand 5*</td>
					<td>13 Oct - 25 Oct</td>
					<td>12 nights</td>
					<td><del>1 099 €</del> 899 €</td>
				</tr>
				<tr>
					<td><a href="browse.html">Greece</a></td>
					<td>Hotel Palma 4*</td>
					<td>15 Oct - 25 Oct</td>
					<td>10 nights</td>
					<td><del>1 099 €</del> 749 €</td>
				</tr>
				<tr>
					<td><a href="browse.html">Italy</a></td>
					<td>Holiday Inn 4*</td>
					<td>15 Oct - 25 Oct</td>
					<td>10 nights</td>
					<td><del>1 099 €</del> 799 €</td>
				</tr>
				<tr>
					<td><a href="browse.html">Egypt</a></td>
					<td>Beach Resort 5*</td>
					<td>18 Oct - 28 Oct</td>
					<td>9 nights</td>
					<td><del>1 099 €</del> 799 €</td>
				</tr>
				<tr>
					<td><a href="browse.html">United Kingdom</a></td>
					<td>Spa & Golf Resort 4*</td>
					<td>18 Oct - 28 Oct</td>
					<td>9 nights</td>
					<td><del>1 099 €</del> 749 €</td>
				</tr>
				<tr>
					<td><a href="browse.html">Thailand</a></td>
					<td>Welness Resort 5*</td>
					<td>20 Oct - 29 Oct</td>
					<td>9 nights</td>
					<td><del>1 099 €</del> 849 €</td>
				</tr>
				<tr>
					<td><a href="browse.html">Spain</a></td>
					<td>Hotel Grand 5*</td>
					<td>25 Oct - 05 Nov</td>
					<td>11 nights</td>
					<td><del>1 099 €</del> 899 €</td>
				</tr>
			</table>
		</section>

	</section>

	<div class="clearfix"></div>
	<hr class="dashed grid_12" />

	<!-- Latest blog articles -->


@endsection
