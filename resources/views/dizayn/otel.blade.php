@extends('layouts.dizayn')
@section('basliq');
<h2>Öz mənzərəni KƏŞF ET</h2>
@endsection
@section('content')


<!-- Search form -->
<section class="search_box sidebar grid_4">

  <h2>Otel axtar</h2>

  <!-- Find a hotel form -->
  <form action="#" class="black">

    <label>Destination</label>
    <input type="text" name="destination" value="All" />

    <div class="half">
      <label>Check in</label>
      <input type="text" name="check_in" class="date" value="11/23/2011" />
    </div>

    <div class="half last">
      <label>Check out</label>
      <input type="text" name="check_out" class="date" value="11/23/2011" />
    </div>

    <div class="half">
      <label>Guests</label>
      <input type="text" name="guests" value="2" />
    </div>

    <div class="half last">
      <label>Rooms</label>
      <input type="text" name="rooms" value="1" />
    </div>

    <input type="submit" value="Search">

  </form>

</section>

<!-- Results -->
<ul class="results_wide grid_8">

  <li>
    <a href="hotel.html" class="thumb"><img src="dizayn/img/8.jpg" alt="" /></a>
    <h3><a href="hotel.html">Marina Bay Sands</a></h3>
    <span class="price">40 €</span>
    <div>
      <span><a href="#">Singapore</a></span>
      <span class="stars">
        <img src="dizayn/img/star_full.png" alt="" />
        <img src="dizayn/img/star_full.png" alt="" />
        <img src="dizayn/img/star_full.png" alt="" />
        <img src="dizayn/img/star_half.png" alt="" />
        <img src="dizayn/img/star_empty.png" alt="" />
      </span>
      <span>All inclusive</span>
    </div>
    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam interdum nunc at mauris condimentum rhoncus. Proin fermentum ligula vitae elit laoreet a ullamcorper lorem cursus.</p>
  </li>

  <li>
    <a href="hotel.html" class="thumb"><img src="dizayn/img/9.jpg" alt="" /></a>
    <h3><a href="hotel.html">Hotel Palma</a></h3>
    <span class="price">40 €</span>
    <div>
      <span><a href="#">Mallorca, Spain</a></span>
      <span class="stars">
        <img src="dizayn/img/star_full.png" alt="" />
        <img src="dizayn/img/star_full.png" alt="" />
        <img src="dizayn/img/star_full.png" alt="" />
        <img src="dizayn/img/star_half.png" alt="" />
        <img src="dizayn/img/star_empty.png" alt="" />
      </span>
      <span>All inclusive</span>
    </div>
    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam interdum nunc at mauris condimentum rhoncus. Proin fermentum ligula vitae elit laoreet a ullamcorper lorem cursus.</p>
  </li>

  <li>
    <a href="hotel.html" class="thumb"><img src="dizayn/img/13.jpg" alt="" /></a>
    <h3><a href="hotel.html">Holiday Inn</a></h3>
    <span class="price">40 €</span>
    <div>
      <span><a href="#">Cannes, France</a></span>
      <span class="stars">
        <img src="dizayn/img/star_full.png" alt="" />
        <img src="dizayn/img/star_full.png" alt="" />
        <img src="dizayn/img/star_full.png" alt="" />
        <img src="dizayn/img/star_half.png" alt="" />
        <img src="dizayn/img/star_empty.png" alt="" />
      </span>
      <span>All inclusive</span>
    </div>
    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam interdum nunc at mauris condimentum rhoncus. Proin fermentum ligula vitae elit laoreet a ullamcorper lorem cursus.</p>
  </li>

</ul>

<div class="clearfix"></div>

<!-- Pagination -->
<nav class="grid_8 prefix_4">
  <a href="#" class="previous">Previous</a>
  <a href="#" class="next">Next</a>
</nav>


@endsection
