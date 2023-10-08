@extends('admin.admin_master')
@section('admin')

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

 <!-- Content Wrapper. Contains page content -->
 
	  <div class="container-full">
		<!-- Content Header (Page header) -->
		<div class="content-header">
			<div class="d-flex align-items-center">
				<div class="mr-auto">
					<h3 class="page-title">Data Tables</h3>
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
			

             <div class="col-8">

			 <div class="box text-center">
				<div class="box-header with-border text-alig">
				  <h3 class="box-title">Update Gallery </h3>
				</div>
				<!-- /.box-header -->
				<div class="box-body">
					<div class="table-responsive">
					  

                    <form method="POST" action="{{ route('gallery-update') }}"  enctype="multipart/form-data" >
                    @csrf
                			
					<input type="hidden" name="id" value="{{ $gallery->id }}">
				<input type="hidden" name="old_img" value="{{ $gallery->gallery }}">
                       
    <div class="form-group">
            <h5>Gallery Image Choose <span class="text-danger">*</span></h5>
            <div class="controls">
            <input type="file" name="gallery" class="form-control" onChange="mainThamUrl(this)" required="" >
            @error('gallery') 
            <span class="text-danger">{{ $message }}</span>
            @enderror
            <img src="" id="mainThmb">
                </div>
     </div>
            
                           
    <div class="text-xs-right">
    <input type="submit" class="btn btn-rounded btn-primary mb-5" value="Update Now">
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