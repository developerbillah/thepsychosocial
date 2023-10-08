<!--Start Footer-->

@php
$setting = App\Models\setting::find(1);
@endphp

<footer class="dark-footer dg-bg--1 pt60 upset dark-footer-1">
	<div class="up-curvs"><svg height="100" width="100%" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
				viewBox="0 0 1920 89.3" style="enable-background:new 0 0 1920 89.3;" xml:space="preserve" fill="#111111">
				<path d="M1919.5,89.5H-0.5c0,0,0-90,0-90c114.9,4.8,228.6,17.9,343.6,24.6c118.6,7,237.4,11.9,356.1,14.7
				c237.6,5.7,475.3,3.1,712.7-7.7c164.2-7.5,328.1-23.7,492.3-31c0.7,0,15.2-0.5,15.2-0.6C1919.5-0.5,1919.5,89.5,1919.5,89.5z"/>
			</svg>
		</div>
<div class="container">
<div class="row justify-content-between">
<div class="col-lg-3 col-sm-6  ftr-brand-pp">
<a class="navbar-brand mb30 mt30" href="#"> <img src="{{ asset($setting->logo) }}" alt="Logo" width="100" /></a>
<p>We have an experienced Logistics and supply Chain team. They
are working at Warehouse, Container Depot and Chittagong port
as well. We have also a shipping and Clearing & Forwarding
team for quick material operation from Port and Custom. </p>
<div class="ff-social-icons mt30">
<a href="{{ $setting->facebook}}" target="blank"><i class="fab fa-facebook"></i></a>
<a href="{{ $setting->twitter}}" target="blank"><i class="fab fa-twitter"></i></a>
<a href="{{ $setting->linkedin }}" target="blank"><i class="fab fa-linkedin"></i></a>
<a href="#" target="blank"><i class="fab fa-instagram"></i></a>
<a href="https://www.youtube.com/channel/UCT0osT8gKGyL6rfCPWJhJ7g" target="blank"><i class="fab fa-youtube"></i></a>
</div>
</div>
<div class="col-lg-3 col-sm-6">
<h5 class="mb30 mt30">CORPORATE OFFICE</h5>
<ul class="footer-address-list ftr-details">

 <li>
        <span><i class="fas fa-map-marker-alt"></i></span>
        <p>Address <span> {{ $setting->address }}</span></p>
 </li>
<li>
<span><i class="fas fa-envelope"></i></span>
<p>Email <span> <a href="mailto:{{ $setting->email }}">{{ $setting->email }}</a></span></p>
</li>
<li>
<span><i class="fas fa-phone-alt"></i></span>
<p>Phone <span> <a href="tel:{{ $setting->phone }}">{{ $setting->phone }}</a></span></p>
</li>



</ul>
</div>

<div class="col-lg-3 col-sm-6">
<h5 class="mb30 mt30">WARE HOUSE</h5>
<ul class="footer-address-list link-hover">
<li><p style="font-weight: 400;font-size: 15px;font-family: 'Open Sans', sans-serif;">
        GHORAMARA, KUMIRA, SHITAKUNDA
        IIUC AREA, MODERN BRICKS, CHATTOGRAM
        BANGLADESH
    </p>
</li>
<li>
    <span><i class="fas fa-phone-alt"></i></span>
    <p>CELL <span>
    <a href="tel:+880153588909 ">+880153588909 </a><br>
    </span></p>

</li>
<li>WhatsApp: +880153588909</li>
<li>WeChat: KAZI KAMRUL ISLAM/ +880153588909</li>



</ul>
</div>

<div class="col-lg-3 col-sm-6">
<h5 class="mb30 mt30">Company</h5>
<ul class="footer-address-list link-hover">
<li><a href="{{ route('contact-us')}}" target="_blank">Contact</a></li>

 <!--<li><a href="{{ route('technoval-career')}}">Career</a></li>-->

{{-- <li>
     <a href="mailto:{{ $setting->email }}">Career</a>
</li> --}}

<li><a href="{{ route('privacy-view')}}">Privacy Policy</a></li>
<li><a href="{{ route('terms-view')}}">Terms and Conditions</a></li>
<!--<li>-->
<!--     <img src="{{asset('frontend/QR/qr_code1.png')}}" alt="QR code" width="200px" height="50px"> -->
<!--</li>-->

</ul>
</div>

</div>
<div class="row end-footer-">
<div class="col-lg-6">
<div class="footer-copyrights-">
<p>© 2020-2022. All Rights Reserved By <a href="https://technovalbd.com/" target="blank">Technoval</a></p>
</div>
</div>
<div class="col-lg-6">
<ul class="footer-link-- link-hover">
<li><a href="#">Development BY Technoval Team</a></li>

</ul>
</div>
</div>
</div>
</footer>
