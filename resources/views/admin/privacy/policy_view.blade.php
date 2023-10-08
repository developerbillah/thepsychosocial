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
				  <h3 class="box-title">Policy List <span class="badge badge-pill badge-danger">  </span></h3>
				  
				</div>
				<!-- /.box-header -->
				<div class="box-body">
					<div class="table-responsive">
					  <table id="example1" class="table table-bordered table-striped">
						<thead>
							<tr>
								<th>Title </th>
								<th>Description</th>
                                <th>Action</th>
								 
							</tr>
						</thead>
						<tbody>
	@foreach($privacys as $item)
	 <tr>
		<td>{{$item->privacy_title}} </td>
		<td>{{$item->description}}</td>
		
		
        <td width="30%">
        <a href="{{ route('policy-edit',$item->id)}}" class="btn btn-info" title="Edit Data"><i class="fa fa-pencil"></i> </a>

<a href="{{ route('policy-delete',$item->id)}}" class="btn btn-danger" title="Delete Data" id="delete">
    <i class="fa fa-trash"></i></a>
        </td>
		@endforeach					 
	 </tr>
	 
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