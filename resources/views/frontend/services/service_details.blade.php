@extends('frontend.front_master')
@section('content')

@section('title')
{{ $services->content_title }} Service Details
@endsection


<!--Breadcrumb Area-->
{{--  <section class="breadcrumb-area ">
    <div class="text-block">
      <div class="container">
        <div class="row">
          <div class="col-lg-12 v-center">
            <div class="bread-inner">
              <div class="bread-menu">

              </div>
              <div class="bread-title">
                <h4>{{ $services->content_slide_title}}</h4>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>  --}}
  <!--End Breadcrumb Area-->

<!--Start About-->
<section class="service pad-tb bg-gradient5">
<div class="container-fluid">
<div class="row">





<div class="col-lg-4">

<div class="image-block wow fadeIn">

<img src="{{ asset($services->thamble) }}" alt="image" class="img-fluid no-shadow"/>

</div>

</div>
<div class="col-lg-8 block-1">
<div class="common-heading text-l pl25">
  <span>Overview</span>
  <h2>{{ $services->content_title}}</h2>
  <p>{{ $services->content_descrip}}</p>

</div>
</div>


</div>
</div>
</section>
<!--End About-->

<!--Start About-->
<section class="service pad-tb bg-gradient5">
<div class="container">
<div class="row">




<div class="col-lg-8 block-1">
<div class="common-heading text-l pl25">
  <span>Details</span>
  <p>{!! $services->long_descrip !!}</p>

</div>
</div>


</div>
</div>
</section>
<!--End About-->




@endsection
