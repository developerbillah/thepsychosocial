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
			  <h4 class="box-title">Add slide </h4>

			</div>
			<!-- /.box-header -->
			<div class="box-body">
			  <div class="row">
				<div class="col">

  <form method="POST" action="{{ route('slide-store')}}" enctype="multipart/form-data" >
		 	@csrf


	<div class="row">
	 <div class="col-12">





<div class="row"> <!-- start 2nd row  -->


			<div class="col-md-6">

				 <div class="form-group">
			<h5>slide title <span class="text-danger">*</span></h5>
			<div class="controls">
				<input type="text" name="slide_title" class="form-control" required="">

	 <span class="text-danger"></span>

	 	  </div>
		</div>

			</div> <!-- end col md 6 -->


			<div class="col-md-6">

<div class="form-group">
	<h5>slide Photo <span class="text-danger">*</span></h5>
	<div class="controls">
<input type="file" name="slide_photo" class="form-control" onChange="mainThamUrl(this)" required="" >

<span class="text-danger"></span>

<img src="" id="mainThmb">
	  </div>
</div>


	</div> <!-- end col md 6 -->



		</div> <!-- end 2nd row  -->



        <div class="row"> <!-- start 3nd row  -->


			<div class="col-md-12">

				 <div class="form-group">
			<h5>slide link <span class="text-danger">*</span></h5>
			<div class="controls">
				<input type="text" name="slide_link" class="form-control" required="">

	 <span class="text-danger"></span>

	 	  </div>
		</div>

			</div> <!-- end col md 6 -->

		</div> <!-- end 3nd row  -->





<div class="row"> <!-- start 3rd row  -->


			<div class="col-md-12">

	     <div class="form-group">
			<h5>Long Description <span class="text-danger">*</span></h5>
			<div class="controls">
	<textarea id="editor1" name="slide_description" rows="10" cols="80">

						</textarea>
	 		 </div>
		</div>


			</div> <!-- end col md 12 -->

		</div> <!-- end 3rd row  -->

	 <hr>

	<div class="row">

						<div class="text-lg-center">
 <input type="submit" class="btn btn-primary  " value="Add slide">
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




<script type="text/javascript">
	function mainThamUrl(input){
		if (input.files && input.files[0]) {
			var reader = new FileReader();
			reader.onload = function(e){
				$('#mainThmb').attr('src',e.target.result).width(80).height(80);
			};
			reader.readAsDataURL(input.files[0]);
		}
	}
</script>



@endsection
