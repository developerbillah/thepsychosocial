<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"
    integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-aFq/bzH65dt+w6FI2ooMVUpc+21e0SRygnTpmBvdBgSdnuTN7QbdgL+OapgHtvPp" crossorigin="anonymous">
  <link rel="stylesheet" href="./assets/css/style.css">


<style>
	@import url('https://fonts.googleapis.com/css2?family=Poppins:wght@100;500;600;700&display=swap');

*{
  margin: 0;
  padding: 0;
  list-style: none;
  box-sizing: border-box;
}

body{
  font-family: 'Poppins', sans-serif;
}

.menu-wrapper{
  background: #002D4B;
  box-shadow: 0 4px 6px 0 rgba(12, 0, 46, .08);
}

button.toggle-btn {
  outline: none;
  border: 0;
  background: transparent;
  font-size: 27px;
  color: #fff;
}

nav.mainmenu ul {
  margin: 0;
  padding: 0;
  list-style: none;
}

nav.mainmenu ul li a {
  text-transform: uppercase;
  text-decoration: none;
  padding: 10px 20px;
  display: block;
  font-size: 16px;
  font-weight: 500;
  color: #fff;
  line-height: 65px;
}

.mainmenu ul li a:hover{
  color: #4AAB54;
}

nav.mainmenu ul li{
  position: relative;
}

.mainmenu ul li:focus-within > ul,
.mainmenu ul li:hover > ul{
  display: initial;
  top: 100%;
  opacity: 1;
  visibility: visible;
  background: #222;
}

.has-dropdown:after {
  content: "\f0dd";
  position: absolute;
  top: 33%;
  right: 0;
  font-family: 'FontAwesome';
  color: #fff
}

.mainmenu ul li ul {
  position: absolute;
  top: calc(100% + 15px);
  left: 0;
  min-width: 200px;
  background: #fff;
  box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
  transition: 0.5s;
  opacity: 0;
  visibility: hidden;
  z-index: 10;
}
li.has-dropdown ul li a {
  line-height: 100%;
  padding: 15px;
}

li.has-dropdown ul li {
  display: block;
  text-align: left;
  border-top: 1px solid #ddd;
}

div#sideNav .mainmenu ul li a {
  line-height: 100%;
  font-size: 14px;
  padding: 13px 3px;
  color: #222;
}

div#sideNav .mainmenu ul{
  margin: 0;
  padding: 0
}

div#sideNav .mainmenu ul{
  margin: 30px 0px;
}

/* Multi Level Dropdown */
.mainmenu ul li ul li ul{
  left: 200px;
  top: 0!important;
}

.mainmenu ul li ul li ul{
  opacity: 0;
  visibility: hidden;
}

div#sideNav .mainmenu ul li ul li a {
  color: #fff;
}


/* Side Nav */

#sideNav {
  position: fixed;
  top: 0;
  left: -100%;
  z-index: 999;
  background: rgba(0, 0, 0, 0.7);
  width: 100%;
  transition: .5s;
}

div#sideNav nav {
  background: white;
  width: 250px;
  padding: 10px;
  height: 100vh;
}

div#sideNav nav img {
  width: 140px;
}

button#closeNav {
  background: #2E3192;
  border: none;
  color: #fff;
  width: 24px;
  height: 24px;
  line-height: 14px;
  border-radius: 50%;
}


.mobile-navItem {
  margin: 40px 0px;
  padding: 0;
}

ul.mobile-navItem li a {
  font-size: 12px;
  padding: 7px 0px;
  display: inline-block;
  text-decoration: none;
  text-transform: uppercase;
}

ul.mobile-navItem li {
  border-bottom: 1px dotted #ddd;
}

ul.mobile-navItem li a{
  position: relative;
  display: block;
}

ul.mobile-navItem li:last-child{
  border-bottom: none;
}

ul.mobile-navItem li a::after{
  position: absolute;
  content: "\f105";
  font-family: 'FontAwesome';
  right: 0;
}


/* Searbar */
.add-on .input-group-btn > .btn {
  border-left-width:0;
  left:-2px;
  -webkit-box-shadow: inset 0 1px 1px rgba(0, 0, 0, 0.075);
  box-shadow: inset 0 1px 1px rgba(0, 0, 0, 0.075);
}
/* stop the glowing blue shadow */
.add-on .form-control:focus {
 box-shadow:none;
 -webkit-box-shadow:none;
 border-color:#cccccc;
}
.form-control{width:20%}
.navbar-nav > li > a {
  border-right: 1px solid #ddd;
  padding-bottom: 15px;
  padding-top: 15px;
}
.navbar-nav:last-child{ border-right:0}

.searchWrapper .input-group-btn {
  background: #fff;
  padding: 0px 7px;
  border-radius: 0px 6px 6px 0px;
}

/* Mobile Search Popup */
.search-popup .overlay{
  position: fixed;
  top: 0;
  left: 0;
  width: 100vw;
  height: 100vh;
  background: rgba(0,0,0,0.7);
  z-index: 1;
  display: none;
}

.search-popup .popup-searchWrapper{
  position: absolute;
  top: 23%;
  left: 50%;
  transform: translate(-50%, -50%) scale(0);
  background: #fff;
  width: 90%;
  height: auto;
  z-index: 999;
  text-align: center;
  padding: 50px 30px;
  box-sizing: border-box;
}

.popup-close {
  position: absolute;
  right: 7px;
  top: 7px;
  width: 20px;
  height: 20px;
  background: #222;
  color: #fff;
  font-size: 15px;
  cursor: pointer;
}


.mobile-submit {
  background: #222;
  border-radius: 0px 5px 5px 0px;
  color: #fff;
}

.search-popup.active .overlay{
  display: block;
}

.search-popup.active .popup-searchWrapper{
  transition: all 300ms ease-in-out;
  transform: translate(-50%, -50%) scale(1);
}

/*  */
.shedul {
  background: #002D4B;
}



</style>



		   @php
            $setting = App\Models\setting::find(1);
            @endphp

<!--Start Header -->
{{--  <div class="container-fluid">
		<div class="row">
		 <div class="topnav">
		<ul>
			  <li style="letter-spacing:1px" > <img src="{{ asset('frontend/assets/images/bd.png')}}"></i><strong>&nbsp;{{ $setting->phone }}</strong>
			</li>
			<li style="float: right;letter-spacing:0.5px"><marquee><strong>Interrade Import & Export service</strong></marquee></li>
		</ul>



		</div>
	</div>
</div>  --}}
{{--  custom design  --}}

@php
$setting = App\Models\setting::find(1);
@endphp

<div class="menu-wrapper">
    <div class="container">
      <nav class="mainmenu d-flex justify-content-between align-items-center">
        <a  href="{{ url('/')}}" class="navbar-brand"><img src="{{ asset($setting->logo) }}" style="height: 50px;" alt="logo"></a>

              <!-- Main Menu Item -->
        <div class="d-none d-md-block d-lg-block d-xl-block d-xxl-block">
          <ul class="d-flex">
            <li><a href="{{ url('/')}}">Home</a></li>

            <li><a href="{{ route('about-us')}}">About</a></li>

            <li class="has-dropdown"><a href="#">Product</a>
              <ul>

                <!--   // Get Category Table Data -->
		@php
		$categories = App\Models\Category::orderBy('category_name','DESC')->get();
		@endphp
        @foreach($categories as $category)

                <li><a href="{{ route('front_category',$category->id) }}">{{ $category->category_name}}</a>
                  <ul>
                    @php
						$subcategories = App\Models\subcategory::where('category_id',$category->id)->orderBy('subcategory_name','DESC')->get();
					@endphp
                    @foreach($subcategories as $subcategory)
                    <li><a href="{{ url('/services/subcategory/'.$subcategory->id.'/'.$subcategory->subcategory_slug) }}">{{ $subcategory->subcategory_name}}</a></li>

                    @endforeach
                  </ul>
                </li>

                @endforeach
              </ul>
            </li>
            <li><a href="{{ route('contact-us')}}">Contact</a></li>
             <li><a href="{{ route('technoval-career')}}">Career</a></li>
          </ul>
        </div>

        <!-- Search Bar -->
        <div class="searchWrapper d-none d-md-block d-lg-block d-xl-block d-xxl-block">
           <form action="{{ route('search') }}" method="get" class="navbar-form" role="search">
            <div class="input-group add-on">
              <input  class="form-control" placeholder="Search" name="query" id="srch-term" type="text">
              <div class="input-group-btn">
                <button id="search_btn" class="btn btn-default" type="submit">
                  <i class="fa-solid fa-magnifying-glass"></i>
                </button>
              </div>
            </div>
           </form>
        </div>

        <!-- Toogle Button -->

        <!-- Toogle Button -->
        <div class=" d-sm-block d-md-none d-lg-none d-xl-none d-xxl-none">
          <button class="toggle-btn me-3" id="serch-box" onclick="togglePopup()">
            <i class="fa-solid fa-magnifying-glass"></i>
          </button>
          <button class="toggle-btn" id="openNav">
            <i class="fa-solid fa-bars"></i>
          </button>
        </div>
      </nav>

      <!-- Mobile Search Popup -->
      <div class="search-popup" id="search-popup">
        <div class="overlay"></div>
        <div class="popup-searchWrapper">
          <div class="popup-close" onclick="togglePopup()">
            <i class="fa-solid fa-xmark"></i>
          </div>
          <form action="{{ route('search') }} " class="navbar-form" role="search" method="get">
            <div class="input-group add-on">
              <input class="form-control" placeholder="Search" name="query" id="srch-term" type="text">
              <div class="input-group-btn">
                <button onclick="myFunction()" class="btn btn-default mobile-submit" >
                  <i class="fa-solid fa-magnifying-glass"></i>
                </button>
              </div>
            </div>
          </form>
        </div>
      </div>


      {{--  mobile menu  --}}
      <!-- Side Nav -->
      <div id="sideNav">
        <nav class="mainmenu">
          <div class="d-flex justify-content-between align-items-center">
            <a class="navbar-brand" href="{{ url('/')}}"><img src="{{asset($setting->logo)}}" alt=""></a>
            <button id="closeNav"><i class="fas fa-times"></i></button>
          </div>
          <ul class="d-flex flex-column">
            <li><a href="{{ url('/')}}">Home</a></li>
            <li><a href="{{ route('about-us')}}">About</a></li>

            <li class="has-dropdown"><div style="margin-left: 4px;"> PRODUCT </div>
              <ul>
                @foreach($categories as $category)

                <li><div style="color: white;">{{ $category->category_name}}</div>
                  <ul>
                       @php
						$subcategories = App\Models\subcategory::where('category_id',$category->id)->orderBy('subcategory_name','DESC')->get();
					@endphp

                    @foreach($subcategories as $subcategory)
                    <li><a href="{{ url('/services/subcategory/'.$subcategory->id.'/'.$subcategory->subcategory_slug) }}">{{$subcategory->subcategory_name}}</a></li>

                    @endforeach
                  </ul>
                </li>

                @endforeach
              </ul>
            </li>
            <li><a href="{{ route('contact-us')}}">Contact</a></li>
          </ul>
        </nav>
      </div>
    </div>
  </div>


{{--  custom design  --}}

{{--  <header class="nav-bg-w main-header navfix navbar menu-white">
         <div class="container-fluid m-pad">
            @php
            $setting = App\Models\setting::find(1);
            @endphp
				<div class="menu-header">
				   <div class="dsk-logo"><a class="nav-brand" href="/">
					  <img src="images/white-logo.png" alt="Logo" class="mega-white-logo"/>
					  <img src="{{ asset($setting->logo) }}" alt="Logo" class="mega-darks-logo"/>
					  </a>
				   </div>
				   <div class="custom-nav menu-bar" role="navigation">
					  <ul class="nav-list">
						 <li class="sbmenu">
							<a href="{{ url('/')}}" class="menu-links">HOME</a>
							<div class="nx-dropdown">

						 </li>

						 <li>
							<a href="">PRODUCT</a>
							<div class="sub-menu-1">
								<ul>
									<li>a</li>
									<li>b</li>
									<li>c</li>
									<li>d</li>
								</ul>
							</div>
						 </li>


		<!--   // Get Category Table Data -->
		@php
		$categories = App\Models\Category::orderBy('category_name','DESC')->get();
		@endphp


						@foreach($categories as $category)
						   <li class="sbmenu">
							<a href="" class="menu-links">{{ $category->category_name}}</a>
							<div class="nx-dropdown">
							   <div class="sub-menu-section">
								  <div class="container">
								  	<div class="col-md-12">
									 <div class="sub-menu-center-block">


							 @php
							$subcategories = App\Models\subcategory::where('category_id',$category->id)->orderBy('subcategory_name','DESC')->get();
							@endphp

							@foreach($subcategories as $subcategory)

							<div class="sub-menu-column">

						<a href="{{ url('/services/subcategory/'.$subcategory->id.'/'.$subcategory->subcategory_slug) }}">
							<div class="menuheading">{{ $subcategory->subcategory_name}}</div> </a>



							<!--   // Get SubCategory Table Data -->
							@php
							$childcategories = App\Models\Childcategory::where('subcategory_id',$subcategory->id)->orderBy('childcategory_name','DESC')->get();
							@endphp

							@foreach($childcategories as $childcategory)


									<ul>



									  <li><a href="{{ url('/childcategory/services/'.$childcategory->id.'/'.$childcategory->childcategory_slug) }}">{{ $childcategory->childcategory_name}}</a></li>

									</ul>
									@endforeach
							</div>

							@endforeach

									</div>
									 </div>
								  </div>
							   </div>
							</div>
						 </li>

						 @endforeach  --}}

						 {{--  <li class="sbmenu">
							<a href="{{ route('digital-marketing')}}" class="menu-links">DIGITAL MARKETING</a>
							<div class="nx-dropdown">

						 </li>  --}}


						 {{--  <li class="sbmenu rpdropdown">
                        <a href="#" class="menu-links">Portfolio</a>
                        <div class="nx-dropdown menu-dorpdown">
                           <div class="sub-menu-section">
                              <div class="sub-menu-center-block">
                                 <div class="sub-menu-column ">
                                    <ul>
                                       <li><a href="{{ route('all-portfolios')}}">Software</a> </li>
                                       <li><a href="{{ route('all-creative')}}">Creatve</a> </li>

                                    </ul>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </li>  --}}

						 {{-- <li class="sbmenu">
							<a href="{{ route('all-clients')}}" class="menu-links">CLIENTS</a>
							<div class="nx-dropdown">

						 </li> --}}

						 {{-- <li class="sbmenu">
							<a href="{{ route('about-us')}}" class="menu-links">ABOUT US</a>
							<div class="nx-dropdown">

						 </li> --}}
						 {{-- <li class="sbmenu">
							<a href="{{ route('contact-us')}}" class="menu-links">CONTACT US</a>
							<div class="nx-dropdown">

						 </li> --}}
						 {{--  <!--li class="sbmenu">
							<a href="{{ route('all-blog')}}" class="menu-links">BLOGS</a>
							<div class="nx-dropdown">

						 </li-->  --}}

						 {{-- <li><a href="get-quote.html" class="btn-br bg-btn5 btshad-b2 lnk" data-bs-toggle="modal" data-bs-target="#menu-popup">Request A Quote <span class="circle"></span></a> </li> --}}
              {{--  </ul>
              <!-- mobile + desktop - sidebar menu- dark mode witch and button -->  --}}








          {{--  </div>
		  <div class="mobile-menu2">
					<ul class="mob-nav2">
						<li><a href="#" class="btn-round- trngl btn-br bg-btn btshad-b1"  data-bs-toggle="modal" data-bs-target="#menu-popup"><i class="fas fa-envelope-open-text"></i></a></li>
						<li class="navm-"> <a class="toggle" href="#"><span></span></a></li>
					</ul>
				</div>
        </div>

				<!--Mobile Menu-->
				<nav id="main-nav">
				   <ul class="first-nav">
					  <li>
					  <a href="{{ url('/')}}" class="menu-links">HOME</a>

					  </li>
					  <!--   // Get Category Table Data -->
		@php
		$categories = App\Models\Category::orderBy('category_name','DESC')->get();
		@endphp


						@foreach($categories as $category)
						 <li class="sbmenu">
							<a href="{{ route('all-services')}}" class="menu-links">{{ $category->category_name}}</a>
							<div class="nx-dropdown">
							   <div class="sub-menu-section">
								  <div class="container">
									 <div class="sub-menu-center-block">


									 @php
							$subcategories = App\Models\subcategory::where('category_id',$category->id)->orderBy('subcategory_name','DESC')->get();
							@endphp

							@foreach($subcategories as $subcategory)

							<div class="sub-menu-column">

						<a href="{{ url('/services/subcategory/'.$subcategory->id.'/'.$subcategory->subcategory_slug) }}">
							<div class="menuheading">{{ $subcategory->subcategory_name}}</div> </a>



							<!--   // Get SubCategory Table Data -->
							@php
							$childcategories = App\Models\Childcategory::where('subcategory_id',$subcategory->id)->orderBy('childcategory_name','DESC')->get();
							@endphp

							@foreach($childcategories as $childcategory)


									<ul>



									  <li><a href="{{ url('/childcategory/services/'.$childcategory->id.'/'.$childcategory->childcategory_slug) }}">{{ $childcategory->childcategory_name}}</a></li>

									</ul>
									@endforeach
							</div>

							@endforeach


									 </div>
								  </div>
							   </div>
							</div>
						 </li>

						 @endforeach  --}}

						 {{-- <li class="sbmenu">
							<a href="{{ route('digital-marketing')}}" class="menu-links">DIGITAL MARKETING</a>
							<div class="nx-dropdown">

						 </li>

						 <li class="sbmenu">
							<a href="{{ route('contact-us')}}" class="menu-links">CONTACT US</a>
							<div class="nx-dropdown">

						 </li>
						 <li class="sbmenu">
							<a href="{{ route('all-clients')}}" class="menu-links">CLIENTS</a>
							<div class="nx-dropdown">

						 </li>
						 <li class="sbmenu">
							<a href="{{ route('all-portfolios')}}" class="menu-links">PORTFOLIOS</a>
							<div class="nx-dropdown">

						 </li>
						 <li class="sbmenu">
							<a href="{{ route('about-us')}}" class="menu-links">ABOUT US</a>
							<div class="nx-dropdown">
						 </li> --}}
					  {{--  </li>
				   </ul>
				   <ul class="bottom-nav">
					  <li class="prb">
						 <a href="tel:+8802223314131">
							<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 384">
							   <path d="M353.188,252.052c-23.51,0-46.594-3.677-68.469-10.906c-10.719-3.656-23.896-0.302-30.438,6.417l-43.177,32.594
								  c-50.073-26.729-80.917-57.563-107.281-107.26l31.635-42.052c8.219-8.208,11.167-20.198,7.635-31.448
								  c-7.26-21.99-10.948-45.063-10.948-68.583C132.146,13.823,118.323,0,101.333,0H30.813C13.823,0,0,13.823,0,30.813
								  C0,225.563,158.438,384,353.188,384c16.99,0,30.813-13.823,30.813-30.813v-70.323C384,265.875,370.177,252.052,353.188,252.052z"
								  />
							</svg>
						 </a>
					  </li>
					  <li class="prb">
						 <a href="mailto:info@technovalbd.com">
							<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
							   <path d="M20 4H4c-1.1 0-1.99.9-1.99 2L2 18c0 1.1.9 2 2 2h16c1.1 0 2-.9 2-2V6c0-1.1-.9-2-2-2zm0 4l-8 5-8-5V6l8 5 8-5v2z"/>
							   <path d="M0 0h24v24H0z" fill="none"/>
							</svg>
						 </a>
					  </li>

				   </ul>
				</nav>
			 </div>
		  </header>  --}}
		  <!--End Header -->
		  		<!--Mobile contact-->
{{-- <div class="popup-modal1">
<div class="modal" id="menu-popup">
<div class="modal-dialog">
<div class="modal-content">
<div class="modal-header">
<div class="common-heading">
<h4 class="mt0 mb0">Request A Quote </h4>
</div>
<button type="button" class="closes" data-bs-dismiss="modal">&times;</button></div>
<!-- Modal body -->
 <div class="modal-body">
<div class="form-block fdgn2 mt10 mb10">
<form action="{{ route('contact-form')}}" method="post" name="feedback-form">
	@csrf
<div class="fieldsets row">
<div class="col-md-12"><input type="text" placeholder="Full Name" name="full_name"></div>
<div class="col-md-12"><input type="email" placeholder="Email Address" name="email_address"></div>
<div class="col-md-12"><input type="number" placeholder="Contact Number" name="mobile"></div>
<div class="col-md-12"><input type="text" placeholder="Subject" name="subject"></div>
<div class="col-md-12"><textarea placeholder="Message" name="message"></textarea></div>
</div>
<div class="fieldsets mt20 pb20">
<button type="submit" name="submit" class="lnk btn-main bg-btn" data-bs-dismiss="modal">Submit <i class="fas fa-chevron-right fa-icon"></i><span class="circle"></span></button>
</div>
</form>
</div>
</div>
</div>
</div>
</div>
</div> --}}


<script>

    $('#search_btn').click(function(){
        alert();

    })
</script>

{{--  var search_input = $('#search_input').val();
var link ="{{ route('search') }}" + "?q=" +search_input;
window.location.href =link;  --}}








<script>
window.onscroll = function() {myFunction()};

var navbar = document.getElementById("navbar");
var sticky = navbar.offsetTop;

function myFunction() {
  if (window.pageYOffset >= sticky) {
    navbar.classList.add("sticky")
  } else {
    navbar.classList.remove("sticky");
  }
}
</script>

<!--Mobile contact-->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/js/bootstrap.bundle.min.js"
integrity="sha384-qKXV1j0HvMUeCBQ+QVp7JcfGl760yU08IQ+GpUo5hlbpg51QRiuqHAJz8+BrxE/N"
crossorigin="anonymous"></script>



{{--  <script>
    // Side Navigation
var nav = document.getElementById("sideNav");
var openNav = document.getElementById("openNav");
var closeNav = document.getElementById("closeNav");

openNav.addEventListener('click', function(){
  nav.style.left = '0px'
})

closeNav.addEventListener('click', function(){
  nav.style.left = '-100%'
});
</script>  --}}


<script>
    // Side Navigation
    var nav = document.getElementById("sideNav");
    var openNav = document.getElementById("openNav");
    var closeNav = document.getElementById("closeNav");

    openNav.addEventListener('click', function(){
      nav.style.left = '0px'
    })

    closeNav.addEventListener('click', function(){
      nav.style.left = '-100%'
    });

    // Mobile Popup
    function togglePopup(){
      document.getElementById("search-popup").classList.toggle("active")
    }

  </script>


