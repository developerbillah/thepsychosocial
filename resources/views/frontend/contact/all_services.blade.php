@extends('frontend.front_master')
@section('content')
@section('title')
Technoval BD
@endsection



<!--Start Service-->
<section class="dg-service2 pb120 pt0" id="services" >
		<div class="container">
		<div class="row justify-content-center">
			<div class="col-lg-6">
								<div class="common-heading " style="margin-top:150px !important">
									<span>Service</span>
									<h2>Our All Services</h2>
									
								</div>
							</div>
						</div>
			<div class="row upset ">
			
			@php
		$services = App\Models\Services::orderBy('content_title','desc')->get();
		@endphp

			@foreach($services as $item)
				<div class="col-lg-3 col-sm-6 mt30 wow fadeInUp" data-wow-delay=".6s">
					<div class="s-block up-hor pt20">
						<div class="nn-card-set">
						<a href="{{ url('services/details/'.$item->id.'/'.$item->content_title ) }}">
							<div class="card-icon"><img src="{{ asset($item->thamble) }}" alt="service" class="img-fluid" /></div>
							<h4>{{ $item->content_title}}</h4>
							
							Learn More <i class="fas fa-chevron-right fa-icon"></i></a>
						</div>
					</div>
				</div>
				@endforeach
			
			</div>
		</div>
		

      </div>
	</section>
	 

	<!--End Service-->


@endsection
