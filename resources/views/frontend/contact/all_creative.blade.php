@extends('frontend.front_master')
@section('content')
@section('title')
Technoval BD
@endsection




<!--Start gallery -->
<section class="dg-portfolio-section pb120 pt120">
<div class="container">
<div class="row justify-content-center ">
<div class="col-lg-8">
<div class="common-heading-2">
	
	<h2 class="mb0">Our Latest Creative Work</h2>
</div>
</div>
</div>
<div class="row">
	
@php
$gallery = App\Models\Gallery::orderBy('id','desc')->limit(112)->get();
@endphp


@foreach($gallery as $item)
<div class="col-lg-3 col-sm-6 single-card-item wow fadeInUp" data-wow-delay=".2s">
<div class="isotope_item h-scl-">
	<div class="item-image h-scl-base">
		<a href="#"><img src="{{ asset($item->gallery) }}" alt="portfolio" class="img-fluid"/> </a>
	</div>
	
</div>
</div>
@endforeach
					
					
				</div>
			</div>
		</section>
		<!--End Portfolio-->
	

        @endsection
