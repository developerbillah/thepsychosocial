@extends('admin.admin_master')
@section('admin')

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

 <!-- Content Wrapper. Contains page content -->

	  <div class="container-full">
		<!-- Content Header (Page header) -->
		<div class="content-header">
			<div class="d-flex align-items-center">
				<div class="mr-auto">
					<h3 class="page-title">Basic setting</h3>
					<div class="d-inline-block align-items-center">
						<nav>

						</nav>
					</div>
				</div>
			</div>
		</div>

		<!-- Main content -->
		<section class="content">
		  <div class="row">



             <div class="col-12">

			 <div class="box">
				<div class="box-header with-border">
				  <h3 class="box-title">Add setting </h3>
				</div>
				<!-- /.box-header -->
				<div class="box-body">
					<div class="table-responsive">


            <form method="POST" action="{{ route('setting.update') }}"  enctype="multipart/form-data" >
                @csrf

                @php
                $setting = App\Models\setting::find(1);
                @endphp

	<div class="form-group">
                        <img id="blah" src="{{ asset($setting->logo) }}" alt="logo"  width="50px" height="50px">
					<h5>Logo <span class="text-danger">*</span></h5>
					<div class="controls">
					<input type="hidden" name="old_logo" class="form-control" value="{{$setting->logo}}" onchange="document.getElementById('blah').src = window.URL.createObjectURL(this.files[0])" required="">
					<input type="file" name="logo" class="form-control" onchange="document.getElementById('blah').src = window.URL.createObjectURL(this.files[0])" required="">
					@error('logo')
					<span class="text-danger">{{ $message }}</span>
					@enderror
					</div>
	</div> <!---end--->
	<div class="form-group">
					<h5>phone <span class="text-danger">*</span></h5>
					<div class="controls">
					<input type="text" name="phone" class="form-control" value="{{$setting->phone}}" required="">
					@error('phone')
					<span class="text-danger">{{ $message }}</span>
					@enderror
					</div>
	</div> <!---end--->
	<div class="form-group">
					<h5>Email <span class="text-danger">*</span></h5>
					<div class="controls">
					<input type="text" name="email" class="form-control" value="{{$setting->email}}" required="">
					@error('email')
					<span class="text-danger">{{ $message }}</span>
					@enderror
					</div>
	</div> <!---end--->
	<div class="form-group">
					<h5>Address<span class="text-danger">*</span></h5>
					<div class="controls">
					<input type="text" name="address" class="form-control" value="{{$setting->address}}" required="">
					@error('address')
					<span class="text-danger">{{ $message }}</span>
					@enderror
					</div>
	</div> <!---end--->
	<div class="form-group">
					<h5>facebook <span class="text-danger">*</span></h5>
					<div class="controls">
					<input type="text" name="facebook" class="form-control" value="{{$setting->facebook}}" required="">
					@error('facebook')
					<span class="text-danger">{{ $message }}</span>
					@enderror
					</div>
	</div> <!---end--->
	<div class="form-group">
					<h5>instagram <span class="text-danger">*</span></h5>
					<div class="controls">
					<input type="text" name="instagram" class="form-control" value="{{$setting->instagram}}" required="">
					@error('instagram')
					<span class="text-danger">{{ $message }}</span>
					@enderror
					</div>
	</div> <!---end--->
	<div class="form-group">
					<h5>pinterest <span class="text-danger">*</span></h5>
					<div class="controls">
					<input type="text" name="pinterest" class="form-control" value="{{$setting->pinterest}}" required="">
					@error('pinterest')
					<span class="text-danger">{{ $message }}</span>
					@enderror
					</div>
	</div> <!---end--->
	<div class="form-group">
					<h5>google-plus <span class="text-danger">*</span></h5>
					<div class="controls">
					<input type="text" name="googleplus" class="form-control" value="{{$setting->googleplus}}" required="">
					@error('googleplus')
					<span class="text-danger">{{ $message }}</span>
					@enderror
					</div>
	</div> <!---end--->
	<div class="form-group">
					<h5>linkedin <span class="text-danger">*</span></h5>
					<div class="controls">
					<input type="text" name="linkedin" class="form-control" value="{{$setting->linkedin}}" required="">
					@error('linkedin')
					<span class="text-danger">{{ $message }}</span>
					@enderror
					</div>
	</div> <!---end--->
	<div class="form-group">
					<h5>twitter <span class="text-danger">*</span></h5>
					<div class="controls">
					<input type="text" name="twitter" class="form-control" value="{{$setting->twitter}}" required="">
					@error('twitter')
					<span class="text-danger">{{ $message }}</span>
					@enderror
					</div>
	</div> <!---end--->

    <div class="text-xs-right">
    <input type="submit" class="btn btn-rounded btn-primary mb-5" value="Update setting">
    </div>


           </form>



					</div>
				</div>
				<!-- /.box-body -->
			  </div>
			  <!-- /.box -->
			</div>
			<!-- /.col -->

		  </div>
		  <!-- /.row -->
		</section>
		<!-- /.content -->

	  </div>

  <!-- /.content-wrapper -->





@endsection
