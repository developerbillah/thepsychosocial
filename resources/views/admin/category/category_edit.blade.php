@extends('admin.admin_master')
@section('admin')

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
			  
			

            <!--   ------------ Add Category Page -------- -->


          <div class="col-12">

<div class="box">
   <div class="box-header with-border">
     <h3 class="box-title">Update category</h3>
   </div>
   <!-- /.box-header -->
   <div class="box-body">
       <div class="table-responsive">


<form method="post" action="{{ route('category.update',$category->id) }}" >
@csrf
          

            <div class="form-group">
            <h5>Input Category Name  <span class="text-danger">*</span></h5>
            <div class="controls">
            <input type="text"  name="category_name" class="form-control" value="{{ $category->category_name }}"> 
            @error('category_name') 
            <span class="text-danger">{{ $message }}</span>
            @enderror 
            </div>
            </div>
                

            <div class="text-xs-right">
            <input type="submit" class="btn btn-rounded btn-primary mb-5" value="Update">					 
                    </div>
</form>




         
       </div>
   </div>
   <!-- /.box-body -->
 </div>
 <!-- /.box --> 
</div>

		
		  </div>
		  <!-- /.row -->
		</section>
		<!-- /.content -->
	  
	  </div>

  <!-- /.content-wrapper -->
  

@endsection