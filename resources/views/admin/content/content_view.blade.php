@extends('admin.admin_master')
@section('admin')


  <!-- Content Wrapper. Contains page content -->
  
	  <div class="container-full">
		<!-- Content Header (Page header) -->
		 

		<!-- Main content -->
		<section class="content">
		  <div class="row">
			   
		 

			<div class="col-12">

			 <div class="box">
				<div class="box-header with-border">
				  <h3 class="box-title">Service  List <span class="badge badge-pill badge-danger">  </span></h3>
				  <a class="btn btn-primary" href="{{ route('add-content')}}" role="button">Add New Service</a>
				</div>
				<!-- /.box-header -->
				<div class="box-body">
					<div class="table-responsive">
					  <table id="example1" class="table table-bordered table-striped">
						<thead>
							<tr>
								<th>Service Photo </th>
								<th>Service Title</th>
								<th>Status </th>
								<th>Views</th>
								<th>Action</th>
								
								 
							</tr>
						</thead>
						<tbody>
	 @foreach($services as $item)
	 <tr>
		<td> <img src="{{ asset($item->thamble) }}" style="width: 60px; height: 50px;">  </td>
		<td>{{ $item->content_title }}</td>
		


		 <td>
		 	@if($item->status == 1)
		 	<span class="badge badge-pill badge-success"> Active </span>
		 	@else
           <span class="badge badge-pill badge-danger"> InActive </span>
		 	@endif

		 </td>
		 <td>{{ $item->views }}</td>


		<td width="25%">
 
 <a href="{{ route('content.edit',$item->id) }}" class="btn btn-info" title="Edit Data"><i class="fa fa-pencil"></i> </a>

 <a href="{{ route('services.delete',$item->id) }}" class="btn btn-danger" title="Delete Data" id="delete">
 	<i class="fa fa-trash"></i></a>

@if($item->status == 1)
 <a href="{{ route('services.inactive',$item->id) }}" class="btn btn-danger" title="Inactive Now"><i class="fa fa-arrow-down"></i> </a>
	 @else
 <a href="{{ route('services.active',$item->id) }}" class="btn btn-success" title="Active Now"><i class="fa fa-arrow-up"></i> </a>
	 @endif




		</td>
	
							 
	 </tr>
	  @endforeach
						</tbody>
						 
					  </table>
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
  



@endsection