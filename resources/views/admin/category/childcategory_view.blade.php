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
				<div class="box">
					<div class="box-header">						
						<h4 class="box-title">Child category Table</h4>
					</div>
					<div class="box-body">
						<div class="table-responsive">
                        <table id="example1" class="table table-bordered table-striped">
						<thead>
							<tr>
								
								<th>Child Category Name</th>
								<th>Action</th>
								 
							</tr>
						</thead>
						<tbody>
	 @foreach($childcategory as $item)
	 <tr>
		
		<td>{{ $item->childcategory_name }}</td>
		<td width="30%">
 <a href="{{ route('childcategory.edit',$item->id) }}" class="btn btn-info" title="Edit Data"><i class="fa fa-pencil"></i> </a>

 <a href="{{ route('childcategory.delete',$item->id) }}" class="btn btn-danger" title="Delete Data" id="delete">
 	<i class="fa fa-trash"></i></a>
		</td>
							 
	 </tr>
	  @endforeach
						</tbody>
						 
					  </table>
						</div>
					</div>
				</div>
			</div> <!-- end col-->

            <!--   ------------ Add Category Page -------- -->


<div class="col-4">

<div class="box">
   <div class="box-header with-border">
     <h3 class="box-title">Add  Child Category </h3>
   </div>
   <!-- /.box-header -->
   <div class="box-body">
       <div class="table-responsive">


<form method="post" action="{{ route('childcategory.store') }}" >
@csrf
          
<div class="form-group">
	<h5>Category Select <span class="text-danger">*</span></h5>
	<div class="controls">
		<select name="category_id" class="form-control"  >
			<option value="" selected="" disabled="">Select Category</option>
			@foreach($categories as $category)
			<option value="{{ $category->id }}">{{ $category->category_name }}</option>	
			@endforeach
		</select>
		@error('category_id') 
	 <span class="text-danger">{{ $message }}</span>
	 @enderror 
	 </div>
		 </div>


         <div class="form-group">
						<h5>Sub Category Select <span class="text-danger">*</span></h5>
							<div class="controls">
									<select name="subcategory_id"   class="form-control">
										<option value="" selected="" disable="">Select Your sub  Category</option>
										
										
									</select>
                                    @error('subcategory_id')
										<span class="text-danger">{{ $message }}</span>
										@enderror
					<div class="help-block"></div></div>
			</div>


            <div class="form-group">
            <h5>Input Child Category Name  <span class="text-danger">*</span></h5>
            <div class="controls">
            <input type="text"  name="childcategory_name" class="form-control" > 
            @error('childcategory_name') 
            <span class="text-danger">{{ $message }}</span>
            @enderror 
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

		
		  </div>
		  <!-- /.row -->
		</section>
		<!-- /.content -->
	  
	  </div>
 
  <!-- /.content-wrapper -->

  <script type="text/javascript">
      $(document).ready(function() {
        $('select[name="category_id"]').on('change', function(){
            var category_id = $(this).val();
            if(category_id) {
                $.ajax({
                    url: "{{  url('/category/subcategory/ajax') }}/"+category_id,
                    type:"GET",
                    dataType:"json",
                    success:function(data) {
                    	$('select[name="subsubcategory_id"]').html('');
                       var d =$('select[name="subcategory_id"]').empty();
                          $.each(data, function(key, value){
                              $('select[name="subcategory_id"]').append('<option value="'+ value.id +'">' + value.subcategory_name + '</option>');
                          });
                    },
                });
            } else {
                alert('danger');
            }
        });
 
 
    });
    </script>

  

@endsection