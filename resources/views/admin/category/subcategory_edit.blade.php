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


          <div class="col-4">

<div class="box">
   <div class="box-header with-border">
     <h3 class="box-title">Update Sub Category </h3>
   </div>
   <!-- /.box-header -->
   <div class="box-body">
       <div class="table-responsive">


<form method="post" action="{{ route('subcategory.update') }}" >
@csrf

<input type="hidden" name="id" value="{{ $subcategory->id }}">  

<div class="form-group">
	<h5>Category Select <span class="text-danger">*</span></h5>
	<div class="controls">
		<select name="category_id" class="form-control"  >
			<option value="" selected="" disabled="">Select Category</option>
			@foreach($categories as $category)
			<option {{ $category->id == $subcategory->category_id ? 'selected': ''}} >{{ $category->category_name }}</option>	
			@endforeach
		</select>
		@error('category_id') 
	 <span class="text-danger">{{ $message }}</span>
	 @enderror 
	 </div>
		 </div>


            <div class="form-group">
            <h5>Input Sub Category Name  <span class="text-danger">*</span></h5>
            <div class="controls">
            <input type="text"  name="subcategory_name" class="form-control" value="{{ $subcategory->subcategory_name }}" > 
            @error('subcategory_name') 
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