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
					<div class="box-header">
						<h4 class="box-title">All Slide</h4>
					</div>
					<div class="box-body">
						<div class="table-responsive">
                        <table id="example1" class="table table-bordered table-striped">
						<thead>
							<tr>

								<th>Slide Photo</th>
                                <th>Slide Title</th>
                                <th>Slide link</th>
                                <th>Slide Description</th>
								<th>Status</th>
								<th>Action</th>

							</tr>
						</thead>
						<tbody>
						@foreach($slide as $item)
	 <tr>

		<td><img src="{{ asset($item->slide_photo) }}" style="width: 60px; height: 50px;"></td>
        <td>{{ $item->slide_title }}</td>
        <td>{{ $item->slide_link }}</td>

        <td>{!! $item->slide_description !!}</td>
		<td>
		@if($item->status == 1)
		 	<span class="badge badge-pill badge-success"> Active </span>
		 	@else
           <span class="badge badge-pill badge-danger"> InActive </span>
		 	@endif
		</td>
		<td width="25%">
 <a href="{{ route('slide_edit',$item->id) }}" class="btn btn-info" title="Edit Data"><i class="fa fa-pencil"></i> </a>

 <a href="{{ route('slide_delete',$item->id) }}" class="btn btn-danger" title="Delete Data" id="delete">
 	<i class="fa fa-trash"></i></a>

	 @if($item->status == 1)
     <a href="{{ route('slide_inactive',$item->id) }}" class="btn btn-success" title="Inactive Now"><i class="fa fa-arrow-up"></i> </a>
	 @else
     <a href="{{ route('slide_active',$item->id) }}" class="btn btn-danger" title="active Now"><i class="fa fa-arrow-down"></i> </a>
@endif



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




		  </div>
		  <!-- /.row -->
		</section>
		<!-- /.content -->

	  </div>

  <!-- /.content-wrapper -->

  <



@endsection
