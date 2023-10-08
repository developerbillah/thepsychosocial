@extends('frontend.front_master')
@section('content')











<div  style="margin-bottom: 100px;" class="row upset ">

			  {{-- @php
		$services = App\Models\Services::orderBy('content_title','desc')->get();
		@endphp --}}

		{{--  @php
		$categories = App\Models\Category::orderBy('category_name','DESC')->get();
		@endphp  --}}

		{{--  @php
		$subcategories = App\Models\subcategory::where('category_id',$category->id)->orderBy('subcategory_name','DESC')->get();
		@endphp  --}}

		{{--  @php
		$childcategories = App\Models\Childcategory::where('subcategory_id',$subcategory->id)->orderBy('childcategory_name','DESC')->get();
		@endphp  --}}

			@foreach($subCategory as $item)
				<div class="col-lg-3 col-sm-6 mt30 wow fadeInUp" data-wow-delay=".6s">
					<div class="s-block up-hor pt20">
						<div class="nn-card-set">
							<div class="card-icon"><img src="{{ asset($item->thamble) }}" alt="service" class="img-fluid" /></div>
							<h4>{{ $item->content_title}}</h4>

							<a href="{{ url('services/details/'.$item->id.'/'.$item->id ) }}">Learn More <i class="fas fa-chevron-right fa-icon"></i></a>
						</div>
					</div>
				</div>
				@endforeach

</div>

@endsection
