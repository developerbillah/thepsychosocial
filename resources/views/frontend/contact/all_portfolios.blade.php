@extends('frontend.front_master')
@section('content')
@section('title')
Technoval BD
@endsection




<!--Start Portfolio-->
<section class="portfolio-section pad-tb" id="work">
			<div class="container">
				<div class="row justify-content-center ">
					<div class="col-lg-8">
						<div class="common-heading">
							
							<h2 class="mb20">Our Latest In-House Software</h2>
						</div>
					</div>
				</div>
				<div class="row">

@php
$portfolios = App\Models\Portfolio::orderBy('id','desc')->get();
@endphp

		@foreach($portfolios as $item)
					<div class="col-lg-3 col-sm-6 col mt40 wow fadeIn" data-wow-delay="0.2s">
						<div class="isotope_item up-hor">
							<div class="item-image">
								<a href="#"><img src="{{ asset($item->port_image)}}" alt="image" class="img-fluid" /> </a>
							</div>
							<div class="item-info-div shdo">
								<h4>{{ $item->port_title}}</h4>
								<p>{{ $item->port_subtitle}}</p>
							</div>
						</div>
					</div>
		@endforeach
					
					
					
					
				</div>
			</div>
		</section>
		<!--End Portfolio-->
	

        @endsection
