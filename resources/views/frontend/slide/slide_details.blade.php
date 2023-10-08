 @extends('frontend.front_master')
@section('content')

@section('title')
  Details
@endsection




<!--Start About-->
<section class="service pad-tb bg-gradient5">
<div class="container-fluid">
<div class="row">





<div class="col-lg-4">

<div class="image-block wow fadeIn">

<img src="{{ asset($silde_details->slide_photo)}}" alt="image" class="img-fluid no-shadow"/>

</div>

</div>
<div class="col-lg-8 block-1">
<div class="common-heading text-l pl25">
  <span>Overview</span>
  <h2>{{$silde_details->slide_title }}</h2>
  <p>{!! $silde_details->slide_description !!}</p>

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
  {{--  <p>{!! $services->long_descrip !!}</p>  --}}

</div>
</div>


</div>
</div>
</section>
<!--End About-->




 @endsection


