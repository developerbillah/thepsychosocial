@extends('frontend.front_master')
@section('content')
@section('title')
intertrade
@endsection

 <!--Start Blog Details-->
 <section class="blog-page pad-tb">
      <div class="container">
        <div class="row">
          <div class="col-lg-12">
            <div class="blog-header">
              <h2>{{ $blogs->blog_title}}</h2>
              <div class="row mt20 mb20">
                <div class="col-md-8 col-9">
                  <div class="media">
                    
                    <div class="media-body user-info">
                      
                      <p>{{ Carbon\Carbon::parse($blogs->created_at)->diffForHumans()}}</p>
                    </div>
                  </div>
                </div>
                <div class="col-md-4 col-3">
                  <div class="postwatch"><i class="far fa-eye"></i>{{ $blogs->views}}</div>
                </div>
              </div>
            </div>
            <div class="image-set"><img style=" height:400px" src="{{ asset($blogs->blog_photo)}}" alt="blog images"  /></div>
            <div class="blog-content mt30">
              <p>{!! $blogs->blog_description !!}</p>
             
             
              

			  <div class="row">
									
									
			</div>
			<div class="row">

								
									
								</div>

            </div>
            
            
          </div>
          <!--End Blog Details-->
         
           
             
            </div>
          </div>
		   <!--End Sidebar-->
        </div>
      </div>
    </section>

    @endsection