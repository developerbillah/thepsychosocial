@extends('frontend.front_master')
@section('content')
@section('title')
intertradebd
@endsection

<!--Start Privacy Policy-->
<section class="about-agency pad-tb block-1">
    <div class="container">
        @foreach ($privacy as $new)
      <div class="row">
        <div class="col-lg-12">

			<div class="pvcpolcy">
<h4 class="">{{$new->privacy_title}}</h4>

  <p class="mb10">{!! $new->description !!}</p>

</div>
        </div>
      </div>
      @endforeach
    </div>
  </section>
  <!--End Privacy Policy-->

  @endsection
