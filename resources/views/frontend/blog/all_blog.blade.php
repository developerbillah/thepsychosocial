@extends('frontend.front_master')
@section('content')
@section('title')
Technoval BD
@endsection


 

 <!--Start Blog Grid-->
 <section class="blog-page pad-tb pt30">
    <div class="container">
      <div class="row">
       
      @php
$blogs = App\Models\Blog::orderBy('id','desc')->get();
@endphp
        
@foreach($blogs as $item)
        <div class="col-lg-3 col-sm-6 single-card-item">
          <div class="isotope_item hover-scale">
            <div class="item-image">
              <a href="#"><img src="{{ asset($item->blog_photo)}}" alt="blog" class="img-fluid"/> </a>
             
            </div>
            <div class="item-info blog-info">
              <div class="entry-blog">
               
                <span class="posted-on">
                <a href="#"><i class="fas fa-clock"></i> Sep 24, 2019</a>
                </span>
                <span><a href="#"><i class="fas fa-comment-dots"></i> (23)</a></span>
              </div>
              <h4><a href="{{ route('view-blog',$item->id) }}">{{ $item->blog_title}}</a></h4>
              <p>{{ $item->description}}</p>
            </div>
          </div>
        </div>
        @endforeach
		<!--end-item -->
      </div>
    </div>
  </section>
  <!--End Blog Grid-->

  @endsection
  