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
			  
			<div class="col-8">
				<div class="box">
					<div class="box-header">						
						<h4 class="box-title">Main category Table</h4>
					</div>
					<div class="box-body">
						<div class="table-responsive">
							<table id="complex_header" class="table table-striped table-bordered display" style="width:100%">
								<thead>
									<tr>
										<th rowspan="2">Category Name</th>
										
									</tr>
									<tr>
										<th>Action</th>
										
									</tr>
								</thead>
                                <tbody>
	 @foreach($category as $item)
	 <tr>
		
		<td>{{ $item->category_name }}</td>
		
					<td>
			<a href="{{ route('category.edit',$item->id) }}" class="btn btn-info" title="Edit Data"><i class="fa fa-pencil"></i> </a>
			<a href="{{ route('category.delete',$item->id) }}" class="btn btn-danger" title="Delete Data" id="delete">
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
		<h3 class="box-title">Add Category </h3>
	</div>
   <!-- /.box-header -->
   <div class="box-body">
       <div class="table-responsive">


<form method="post" action="{{ route('category.store') }}" >
@csrf
          

            <div class="form-group">
            <h5>Input Category Name  <span class="text-danger">*</span></h5>
            <div class="controls">
            <input type="text"  name="category_name" class="form-control" > 
            @error('category_name') 
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
  

@endsection