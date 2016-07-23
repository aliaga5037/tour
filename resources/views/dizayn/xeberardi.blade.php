@extends('layouts.dizayn')
@section('basliq')
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

				<a href="/dizayn/img/8.jpg">
					<img src="/dizayn/img/8.jpg" alt="" />
				</a>
				<a href="/dizayn/img/9.jpg">
					<img src="/dizayn/img/9.jpg" alt="" />
				</a>
				<a href="/dizayn/img/12.jpg">
					<img src="/dizayn/img/12.jpg" alt="" />
				</a>
				<a href="/dizayn/img/13.jpg">
					<img src="/dizayn/img/13.jpg" alt="" />
				</a>
				<a href="/dizayn/img/14.jpg">
					<img src="/dizayn/img/14.jpg" alt="" />
				</a>
				<a href="/dizayn/img/9.jpg">
					<img src="/dizayn/img/9.jpg" alt="" />
				</a>
				<a href="/dizayn/img/12.jpg">
					<img src="/dizayn/img/12.jpg" alt="" />
				</a>
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
  {{ $tourlink->price }}
  @endif
</p>



	</section>

	<!-- Video -->
	<section class="video grid_4">
		<iframe src="http://player.vimeo.com/video/27246366?color=ffffff"></iframe>
	</section>

	<div class="clearfix"></div>
	<hr class="dashed grid_12" />

@endsection
