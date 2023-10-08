@extends('frontend.front_master')
@section('content')
@section('title')
Technoval BD
@endsection





<!--Start Service-->
	  <section class="dg-service2 pb120 pt0" id="services">
		<div class="container">

			<div class="row upset ">

			{{--  @php
		$services = App\Models\Services::orderBy('content_title','desc')->limit(8)->get();
		@endphp  --}}

			@foreach($services as $item)
				<div class="col-lg-3 col-sm-6 mt30 wow fadeInUp" data-wow-delay=".6s">
					<div class="s-block up-hor pt20">
						<div class="nn-card-set">
						<a href="{{ url('services/details/'.$item->id.'/'.$item->content_title ) }}">
							<div class="card-icon"><img src="{{ asset($item->thamble) }}" alt="service" class="img-fluid" /></div>
							<h6>{{ $item->content_title}}</h6>

							Learn More <i class="fas fa-chevron-right fa-icon"></i></a>
						</div>
					</div>
				</div>
				@endforeach

			</div>
		</div>
		{{--  <div class="row">
        <div class="col-lg-12 maga-btn mt60">
          <a href="{{route('all-services')}}" class="btn-outline">View More Services<i class="fas fa-chevron-right fa-icon"></i></a>
        </div>
      </div>  --}}
	</section>


	<!--End Service-->







@endsection

@section('footer_script')

@endsection
