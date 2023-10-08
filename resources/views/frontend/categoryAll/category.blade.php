@extends('frontend.front_master')
@section('content')



<!--Start Service-->
	  <section class="dg-service2 pb120 pt0" id="services">
		<div class="container">
		<div class="row justify-content-center">
							<div class="col-lg-6">
								<div class="common-heading ptag">

									<!--<h2>Category</h2>-->

								</div>
							</div>
						</div>
			<div class="row upset ">

			{{--  @php
		$services = App\Models\Services::orderBy('content_title','desc')->limit(8)->get();
		@endphp  --}}

			@foreach($fron_cat as $item)
				<div class="col-lg-3 col-sm-6 mt30 wow fadeInUp" data-wow-delay=".6s">
					<div class="s-block up-hor">
						<div class="nn-card-set">
						<a href="{{ url('services/details/'.$item->id.'/'.$item->content_title ) }}">
							<div class="card-icon"><img  width="917px" height="1000px" src="{{ asset($item->thamble) }}" alt="service" class="img-fluid" /></div>
                            <div class="p-3">
                                <h6>{{ $item->content_title}}</h6>
                                Learn More <i class="fas fa-chevron-right fa-icon"></i>
                            </div>
                        </a>
						</div>
					</div>
				</div>
				@endforeach

			</div>
		</div>

	</section>


	<!--End Service-->









@endsection
