@extends('frontend.front_master')
@section('content')
@section('title')
Technoval BD
@endsection




<!--Start Clients-->
<section class="clients-section-app pad-tb" id="clients">
			<div class="container">
				<div class="row justify-content-center">
					<div class="col-lg-8">
						<div class="common-heading text-w">
							<span>Our happy customers</span>
							<h2 class="mb30" style="color:black;">Some of our Clients</h2>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-lg-12">
						<div class="client-logoset">
							<ul class="row text-center clearfix apppg">

@php
$clients = App\Models\Client::orderBy('id','desc')->get();
@endphp

							@foreach($clients as $item)
							<li class="col-lg-2 col-md-3 col-sm-4 col-6 mt30 wow fadeIn" data-wow-delay=".6s">
									<div class="brand-logo hoshd"><img src="{{ asset($item->client_logo)}}" alt="clients" class="img-fluid"></div>
									<p>{{ $item->client_title}}</p>
							</li>
								@endforeach
							</ul>
						</div>
					</div>
				</div>
			</div>
		</section>
		<!--End Clients-->

        @endsection
