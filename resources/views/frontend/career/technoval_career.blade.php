@extends('frontend.front_master')
@section('content')
@section('title')
intertrade
@endsection

@php
$setting = App\Models\setting::find(1);
@endphp
   <!--Start Hero-->
   <section style="" class="hero-card-web bg-gradient12 shape-bg3">
         <div class="hero-main-rp container-fluid">
            <div class="row">
               <div style="" class="col-lg-6 col-md-3 m-auto ">



               <div class="card">
                <div class="card-body">
                 <a style="text-decoration:none" href="mailto:career@intertradebd.com"> Send your cv to career@intertradebd.com</a>
                </div>
                <div class="card-header">
                    <h6>NB: pdf or doc file will be accept</h6>
                    
                </div>
              </div>

                </div>
             </div>
            </div>



      </section>
      @php
      $setting = App\Models\setting::find(1);
      @endphp



      @endsection
