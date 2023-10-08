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
				  <h3 class="box-title">Request  List <span class="badge badge-pill badge-danger">  </span></h3>
				  
				</div>
				<!-- /.box-header -->
				<div class="box-body">
					<div class="table-responsive">
					  <table id="example1" class="table table-bordered table-striped">
						<thead>
							<tr>
								<th>Full Name </th>
								<th>Email Address</th>
								<th>Phone </th>
								<th>Subject</th>
                                <th>Message</th>
								 
							</tr>
						</thead>
						<tbody>
	@foreach($message as $msg)
	 <tr>
		<td>{{$msg->full_name}} </td>
		<td>{{$msg->email_address}}</td>
		<td>{{$msg->mobile}} </td>
		<td width="">{{$msg->subject}}</td>
        <td width="30%">{{$msg->message}}</td>
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