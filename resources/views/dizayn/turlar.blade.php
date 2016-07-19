@extends('layouts.dizayn')
@section('basliq');

  <h2>Gəzmək sağlamlıqdır</h2>
@endsection

@section('content')

<section class="filter grid_12">
    <form action="#" class="black">

      <div class="full">
        <label>Uçuş nöqtəsi</label>
        <input type="text" name="destination" value="All" />
      </div>

      <div class="full">
        <label>Ölkə</label>
        <input type="text" name="transportation" value="Plane" />
      </div>

      <div class="half">
        <label>Uçuş tarixi</label>
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

      <input type="submit" value="Search" />

    </form>
  </section>

  <div class="clearfix"></div>

  <!-- Results -->
  <ul class="results">

    <li class="grid_4">
      <a href="hotel.html"><img src="dizayn/img/8.jpg" alt="" /></a>
      <h3><a href="hotel.html">Marina Bay Sands</a></h3>
      <span class="price"><strong>1 899 €</strong> / 10 days</span>
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
    </li>

    <li class="grid_4">
      <a href="hotel.html"><img src="dizayn/img/9.jpg" alt="" /></a>
      <h3><a href="hotel.html">Hotel Palma</a></h3>
      <span class="price"><strong>1 899 €</strong> / 10 days</span>
      <div>
        <span><a href="#">Mallorca, Spain</a></span>
        <span class="stars">
          <img src="dizayn/img/star_full.png" alt="" />
          <img src="dizayn/img/star_full.png" alt="" />
          <img src="dizayn/img/star_full.png" alt="" />
          <img src="dizayn/img/star_full.png" alt="" />
          <img src="dizayn/img/star_empty.png" alt="" />
        </span>
        <span>All inclusive</span>
      </div>
    </li>

    <li class="grid_4">
      <a href="hotel.html"><img src="dizayn/img/13.jpg" alt="" /></a>
      <h3><a href="hotel.html">Holiday Inn</a></h3>
      <span class="price"><strong>1 899 €</strong> / 10 days</span>
      <div>
        <span><a href="#">Cannes, France</a></span>
        <span class="stars">
          <img src="dizayn/img/star_full.png" alt="" />
          <img src="dizayn/img/star_full.png" alt="" />
          <img src="dizayn/img/star_full.png" alt="" />
          <img src="dizayn/img/star_full.png" alt="" />
          <img src="dizayn/img/star_full.png" alt="" />
        </span>
        <span>All inclusive</span>
      </div>
    </li>

    <li class="grid_4">
      <a href="hotel.html"><img src="dizayn/img/8.jpg" alt="" /></a>
      <h3><a href="hotel.html">Marina Bay Sands</a></h3>
      <span class="price"><strong>1 899 €</strong> / 10 days</span>
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
    </li>

    <li class="grid_4">
      <a href="hotel.html"><img src="dizayn/img/9.jpg" alt="" /></a>
      <h3><a href="hotel.html">Hotel Palma</a></h3>
      <span class="price"><strong>1 899 €</strong> / 10 days</span>
      <div>
        <span><a href="#">Mallorca, Spain</a></span>
        <span class="stars">
          <img src="dizayn/img/star_full.png" alt="" />
          <img src="dizayn/img/star_full.png" alt="" />
          <img src="dizayn/img/star_full.png" alt="" />
          <img src="dizayn/img/star_full.png" alt="" />
          <img src="dizayn/img/star_empty.png" alt="" />
        </span>
        <span>All inclusive</span>
      </div>
    </li>

    <li class="grid_4">
      <a href="hotel.html"><img src="dizayn/img/13.jpg" alt="" /></a>
      <h3><a href="hotel.html">Holiday Inn</a></h3>
      <span class="price"><strong>1 899 €</strong> / 10 days</span>
      <div>
        <span><a href="#">Cannes, France</a></span>
        <span class="stars">
          <img src="dizayn/img/star_full.png" alt="" />
          <img src="dizayn/img/star_full.png" alt="" />
          <img src="dizayn/img/star_full.png" alt="" />
          <img src="dizayn/img/star_full.png" alt="" />
          <img src="dizayn/img/star_full.png" alt="" />
        </span>
        <span>All inclusive</span>
      </div>
    </li>

    <li class="grid_4">
      <a href="hotel.html"><img src="dizayn/img/8.jpg" alt="" /></a>
      <h3><a href="hotel.html">Marina Bay Sands</a></h3>
      <span class="price"><strong>1 899 €</strong> / 10 days</span>
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

    <li class="grid_4">
      <a href="hotel.html"><img src="dizayn/img/9.jpg" alt="" /></a>
      <h3><a href="hotel.html">Hotel Palma</a></h3>
      <span class="price"><strong>1 899 €</strong> / 10 days</span>
      <div>
        <span><a href="#">Mallorca, Spain</a></span>
        <span class="stars">
          <img src="dizayn/img/star_full.png" alt="" />
          <img src="dizayn/img/star_full.png" alt="" />
          <img src="dizayn/img/star_full.png" alt="" />
          <img src="dizayn/img/star_full.png" alt="" />
          <img src="dizayn/img/star_empty.png" alt="" />
        </span>
        <span>All inclusive</span>
      </div>
      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam interdum nunc at mauris condimentum rhoncus. Proin fermentum ligula vitae elit laoreet a ullamcorper lorem cursus.</p>
    </li>

    <li class="grid_4">
      <a href="hotel.html"><img src="dizayn/img/13.jpg" alt="" /></a>
      <h3><a href="hotel.html">Holiday Inn</a></h3>
      <span class="price"><strong>1 899 €</strong> / 10 days</span>
      <div>
        <span><a href="#">Cannes, France</a></span>
        <span class="stars">
          <img src="dizayn/img/star_full.png" alt="" />
          <img src="dizayn/img/star_full.png" alt="" />
          <img src="dizayn/img/star_full.png" alt="" />
          <img src="dizayn/img/star_full.png" alt="" />
          <img src="dizayn/img/star_empty.png" alt="" />
        </span>
        <span>All inclusive</span>
      </div>
      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam interdum nunc at mauris condimentum rhoncus. Proin fermentum ligula vitae elit laoreet a ullamcorper lorem cursus.</p>
    </li>

  </ul>

  <div class="clearfix"></div>

  <!-- Pagination -->
  <nav class="grid_12">
    <a href="#" class="previous">Previous</a>
    <a href="#" class="next">Next</a>
  </nav>



@endsection
