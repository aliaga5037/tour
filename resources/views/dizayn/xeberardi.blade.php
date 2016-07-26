@extends('layouts.dizayn')
@section('basliq')
@if (auth()->guard()->guest() && auth()->guard('company')->guest())
				<a href="/login" class="login">Giriş</a>
				@endif
<h2>
    @if(auth()->guard('')->user() or auth()->guard('company')->user() or auth()->guard('')->guest() )
    {{ $tourlink->tourName }}
    @endif
</h2>
@endsection
@section('content')


	<!-- Image gallery -->
	<section class="gallery grid_12">

		<!-- Slider navigation -->
		<nav class="slider_nav">
			<a href="#" class="left">&nbsp;</a>
			<a href="#" class="right">&nbsp;</a>
		</nav>

		<!-- Slider -->
		<div class="slider_wrapper">

			<!-- Slider content -->
			<div class="slider_content">
					@foreach ($tourlink->photos as $image)
						{{-- expr --}}
					
				@if (count($tourlink->photos) == 0)
					<a href="/dizayn/img/1.jpg">
					<img src="/dizayn/img/1.jpg" alt="" />
				</a>
				@else
				<a href="{{ $image->file_path }} ">
					<img src="{{ $image->file_path }} " alt="" />
				</a>
				@endif
				@endforeach

			</div>

		</div>

	</section>

	<div class="clearfix"></div>
	<hr class="dashed grid_12" />

	<!-- Simple text -->
	<section class="text padded_right grid_8">
		<h3 class="text_big">
      @if(auth()->guard('')->user() or auth()->guard('company')->user() or auth()->guard('')->guest() )
      {{ $tourlink->tourName }}
      @endif
    </h3>

		<p>
      @if(auth()->guard('')->user() or auth()->guard('company')->user() or auth()->guard('')->guest() )
      {{ $tourlink->about }}
      @endif

    </p>

    <p> <b>Vaxt aralığı</b>  </p>
    <p>

      @if(auth()->guard('')->user() or auth()->guard('company')->user() or auth()->guard('')->guest() )
      {{ $tourlink->start }}
      @endif

        -   @if(auth()->guard('')->user() or auth()->guard('company')->user() or auth()->guard('')->guest() )
          {{ $tourlink->end }}
          @endif
    </p>

      <p> <b>Qiymət</b>  </p>

<p>
  @if(auth()->guard('')->user() or auth()->guard('company')->user() or auth()->guard('')->guest() )
  {{ $tourlink->price }}&nbspAZN
  @endif
</p>



	</section>

	<!-- Video -->
	<section class="video grid_4">
			
		
		<img src="@if (count($tourlink->photos) == 0)
			/dizayn/img/1.jpg
			@else
			{{ $tourlink->photos->first()->file_path }} 
			
		@endif" alt="">
	</section>

	<div class="clearfix"></div>
	<hr class="dashed grid_12" />

@endsection
