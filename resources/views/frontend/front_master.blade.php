<!DOCTYPE html>
<html lang="en" class="no-js">
<head>
	<meta charset="utf-8"/>
	<title>@yield('title') </title>
	<meta name="description" content="Software Development, Digital Marketing & Video edit services">
	<meta name="keywords" content="Digital Marketing, Software Development, Video Editing">
	<meta name="author" content="technovalbd">
	<meta name="viewport" content="width=device-width,initial-scale=1">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="theme-color" content="#fff">
	<!--website-favicon-->
	<link href="frontend/assets/images/favicon.png" rel="icon">
	<!--plugin-css-->
	<link href="{{ asset('frontend/assets/css/bootstrap.min.css')}}" rel="stylesheet">
	<link href="{{ asset('frontend/assets/css/plugin.min.css')}}" rel="stylesheet">
	<link href="{{ asset('frontend/assets/css/swiper.min.css')}}" rel="stylesheet">
	<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.min.css" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600;700&family=Poppins:wght@300;400;500;600;700;800;900&display=swap" rel="stylesheet">
	<!-- template-style-->
	<link href="{{ asset('frontend/assets/css/style.css')}}" rel="stylesheet">
	<link href="{{ asset('frontend/assets/css/responsive.css')}}" rel="stylesheet">
	<link href="{{ asset('frontend/assets/css/darkmode.css')}}" rel="stylesheet">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
	
		<a href="https://u.wechat.com/kHOUrNm0RFA3ZoGF1DpQiBM" class="flot" target="_blank">
<i class="fab fa-weixin my-flot"></i>
</a>
	
	<a href="https://wa.me/+8801535880909" class="float" target="_blank">
<i class="fab fa-whatsapp my-float"></i>
</a>
	
	
	
	    <style>
        * {
            margin: 0px;
            padding: 0px;
            box-sizing: border-box;
        }

        /* we use dot (.) to target class and
        hash (#) to target id... */
        #particles-js {
            width: 100%;
            height: 100vh;

            background-position: center;
            background-size: cover;
        }

        .center-text {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
        }

        h1 {
            color: white;
            font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
            font-size: 100px;
        }
        .sticky {
  position: fixed;
  top: 0;
  width: 100%;
}
.topnav {
  overflow: hidden;
  background-color: #fff;
  height: 37px;
}

.topnav {
  float: left;
  color: #333;
  text-align: left;
  padding: 8px 6px;
  text-decoration: none;
  font-size: 15px;
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
}

.topnav li:hover {

  color: blue;
}

.topnav a.active {
  background-color: #fff;
  color: white;
}
li {
    display: inline-block;
}
ul {
    list-style-type: none;
}
.zoom:hover {
  -ms-transform: scale(1.5); /* IE 9 */
  -webkit-transform: scale(1.5); /* Safari 3-8 */
  transform: scale(2);
}


.float{
	position:fixed;
	width:60px;
	height:60px;
	bottom:100px;
	left:20px;
	background-color:#25d366;
	color:#FFF;
	border-radius:50px;
	text-align:center;
  font-size:30px;
	box-shadow: 2px 2px 3px #999;
  z-index:100;
}

.my-float{
	margin-top:16px;
}

.flot{
	position:fixed;
	width:60px;
	height:60px;
	bottom:170px;
	left:20px;
	background-color:#09B83E;
	color:#FFF;
	border-radius:50px;
	text-align:center;
  font-size:30px;
	box-shadow: 2px 2px 3px #999;
  z-index:100;
}

.my-flot{
	margin-top:16px;
}

    </style>

 </head>
 <body>



@include('frontend.body.header')

	  <!--Start Hero Slider-->

@yield('content')



@include('frontend.body.footer')
<!--End Footer-->

<!-- particles js files -->

    <script src="{{ asset('frontend/assets/js/particles.js')}}"></script>
    <script src="{{ asset('frontend/assets/js/app.js')}}"></script>

<!-- js placed at the end of the document so the pages load faster -->
<script src="{{ asset('frontend/assets/js/vendor/modernizr-3.5.0.min.js')}}"></script>
<script src="{{ asset('frontend/assets/js/jquery.min.js')}}"></script>
<script src="{{ asset('frontend/assets/js/bootstrap.bundle.min.js')}}"></script>
<script src="{{ asset('frontend/assets/js/plugin.min.js')}}"></script>
  <script src="{{ asset('frontend/assets/js/swiper.min.js')}}"></script>
<script src="{{ asset('frontend/assets/js/preloader.js')}}"></script>
<script src="{{ asset('frontend/assets/js/tweenmax.min.js')}}"></script>
<!--common script file-->
<script src="{{ asset('frontend/assets/js/main.js')}}"></script>

@yield('footer_script')
</body>
</html>
