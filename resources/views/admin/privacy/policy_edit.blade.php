@extends('admin.admin_master')
@section('admin')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

   
	  <div class="container-full">
		<!-- Content Header (Page header) -->
		  

		<!-- Main content -->
		<section class="content">
 
		 <!-- Basic Forms -->
		  <div class="box">
			<div class="box-header with-border">
			  <h4 class="box-title">Update Privacy </h4>
			   
			</div>
			<!-- /.box-header -->
			<div class="box-body">
			  <div class="row">
				<div class="col">

  <form method="POST" action="{{ route('policy-update')}}" enctype="multipart/form-data" >
		 	@csrf

             <input type="hidden" name="id" value="{{ $privacys->id }}">
			
		
	<div class="row">
	 <div class="col-12">	





<div class="row"> <!-- start 2nd row  -->
		

			<div class="col-md-12">

				 <div class="form-group">
			<h5> Title <span class="text-danger">*</span></h5>
			<div class="controls">
				<input type="text" name="privacy_title" class="form-control" required="" value="{{ $privacys->privacy_title}}">
                @error('privacy_title') 
	 <span class="text-danger">{{ $message }}</span>
	 @enderror
	
	 	  </div>
		</div>
				
			</div> <!-- end col md 6 -->


			
		</div> <!-- end 2nd row  -->


	 
<div class="row"> <!-- start 3rd row  -->
	

			<div class="col-md-12">

	     <div class="form-group">
			<h5> Description <span class="text-danger">*</span></h5>
			<div class="controls">
	<textarea id="editor1" name="description" rows="10" cols="80">
    {!! $privacys->description !!}
		
						</textarea>       
	 		 </div>
		</div>
				 
				
			</div> <!-- end col md 12 -->		 
			
		</div> <!-- end 3rd row  -->

	 <hr>
 
	<div class="row">
 
						<div class="text-lg-center">
 <input type="submit" class="btn btn-primary  " value=" Update Policy">
						</div>
					</form>

				</div>
				<!-- /.col -->
			  </div>
			  <!-- /.row -->
			</div>
			<!-- /.box-body -->
		  </div>
		  <!-- /.box -->

		</section>
		<!-- /.content -->
	  </div>
 
	 






@endsection