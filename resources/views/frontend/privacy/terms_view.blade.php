@extends('frontend.front_master')
@section('content')
@section('title')
intertrade
@endsection

 <!--Start -->
 <section class="about-agency pad-tb block-1">
    <div class="container">
        @foreach ($terms as $term )


      <div class="row">
        <div class="col-lg-12">

			<div class="pvcpolcy">
<h4 class="mb10">{{$term->terms_title}}</h4>
<p class="mb10">{!! $term->t_description!!}</p>



</div>
        </div>
      </div>
      @endforeach
    </div>
  </section>
  <!--End Terms and Conditions-->


  @endsection
