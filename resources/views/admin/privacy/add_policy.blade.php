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
			  
		

             <div class="col-12">

			 <div class="box">
				<div class="box-header with-border">
				  <h3 class="box-title">Add Policy </h3>
				</div>
				<!-- /.box-header -->
				<div class="box-body">
					<div class="table-responsive">
					  

            <form method="POST" action="{{ route('policy-store') }}"  enctype="multipart/form-data" >
                @csrf
                	
	<div class="form-group">
					<h5>privacy Title <span class="text-danger">*</span></h5>
					<div class="controls">
					<input type="text" name="privacy_title" class="form-control" required="">
					@error('privacy_title') 
					<span class="text-danger">{{ $message }}</span>
					@enderror
					</div>
	</div> <!---end--->

	<div class="form-group">
			<h5> Description <span class="text-danger">*</span></h5>
			<div class="controls">
	       <textarea id="editor1" name="description" rows="10" cols="80">
		
			</textarea>       
	 		 </div>
	</div>
                       
                    
            
                           
    <div class="text-xs-right">
    <input type="submit" class="btn btn-rounded btn-primary mb-5" value="Add New">
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