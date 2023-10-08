@extends('admin.admin_master')
@section('admin')

<div class="wrapper">

 
  

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
	  <div class="container-full">

		<!-- Main content -->
		<section class="content">
			<div class="row">
            <div class="box box-inverse bg-img" style="background-image: url(../images/gallery/full/1.jpg);" data-overlay="2">
					  <div class="flexbox px-20 pt-20">
						<label class="toggler toggler-danger text-white">
						  <input type="checkbox">
						  
						</label>
						<div class="dropdown">
						 
						  <div class="dropdown-menu dropdown-menu-right">
							
							
						  </div>
						</div>
					  </div>

					  <div class="box-body text-center pb-50">
						<a href="#">
						  <img class="avatar avatar-xxl avatar-bordered" src="{{ (!empty($adminData->admin_photos))? url('upload/admin_images/'.$adminData->admin_photos):url('upload/no_image.jpg') }}" alt="">
						</a>
						<h4 class="mt-2 mb-0">{{ $adminData->name }}</h4><br>
						<span> {{ $adminData->email}}</span>
					  </div>

					  <a href="{{ route('admin.profile.edit')}}" style="float: center;" class="btn btn-rounded btn-success "> Edit Profile</a>

					</div>	
				
			</div>
		</section>
		<!-- /.content -->
	  </div>
  </div>
  <!-- /.content-wrapper -->
 

 
  
  <!-- Add the sidebar's background. This div must be placed immediately after the control sidebar -->
  <div class="control-sidebar-bg"></div>
  
</div>
<!-- ./wrapper -->

@endsection