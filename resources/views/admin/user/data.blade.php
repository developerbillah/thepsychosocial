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
				<div class="box-header with-border">
				  <h3 class="box-title">Question List</h3>
				</div>
				<!-- /.box-header -->
				<div class="box-body">
					<div class="table-responsive">
					  <table id="example1" class="table table-bordered table-striped">
						<thead>
							<tr>

								<th>name</th>
								<th>email</th>
								<th>phone</th>
								<th>age</th>
								<th>Action</th>

							</tr>
						</thead>
						<tbody>
                           @foreach($clients as $item)
							<tr>


								<td>{{ $item->name  }}</td>
								<td>{{ $item->email  }}</td>
								<td>{{ $item->phone  }}</td>
								<td>{{ $item->age  }}</td>




								<td width="30%">

                                    <a href="{{ route('client.delete',$item->id) }}" class="btn btn-danger" id="delete" title="delete"><i class="fa fa-trash"></i></a>

                                    <a href="{{ route('admin.pdf',$item->id) }}" class="btn btn-danger" title="pdf"><i class="fa fa-arrow-down"></i> Download</a>

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

             <!-- all brand page -->


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

