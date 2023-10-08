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
				  <h3 class="box-title">Industries List</h3>
				</div>
				<!-- /.box-header -->
				<div class="box-body">
					<div class="table-responsive">
					  <table id="example1" class="table table-bordered table-striped">
						<thead>
							<tr>
								
								<th>Industries Photo </th>
								<th>Industries Name</th>
                                <th>Industries Details</th>
								<th>Action</th>
								
							</tr>
						</thead>
						<tbody>
                           @foreach($ind as $item) 
							<tr>
							
								<td><img src="{{ asset($item->ind_photo ) }}" style="width: 60px; height: 50px;"></td>
								<td>{{ $item->ind_title }}</td>
                                <td>{{ $item->ind_description }}</td>
								
                                
								
								<td width="30%">
                                    
                                    <a href="{{ route('edit-ind',$item->id) }}" class="btn btn-info" title="Edit"><i class="fa fa-pencil"></i></a>
                                    <a href="{{ route('delete-ind',$item->id) }}" class="btn btn-danger" id="delete" title="delete"><i class="fa fa-trash"></i></a>
                                   
                                    
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

             <div class="col-4">

			 <div class="box">
				<div class="box-header with-border">
				  <h3 class="box-title">Add Client </h3>
				</div>
				<!-- /.box-header -->
				<div class="box-body">
					<div class="table-responsive">
					  

            <form method="POST" action="{{ route('store-ind') }}"  enctype="multipart/form-data" >
                @csrf
                	
	<div class="form-group">
					<h5>Industries Name <span class="text-danger">*</span></h5>
					<div class="controls">
					<input type="text" name="ind_title" class="form-control" required="">
					@error('ind_title') 
					<span class="text-danger">{{ $message }}</span>
					@enderror
					</div>
	</div> <!---end--->

	
                       
    <div class="form-group">
        <h5>Industries Photo <span class="text-danger">*</span></h5>
        <div class="controls">
            <input type="file" name="ind_photo" class="form-control" onChange="mainThamUrl(this)" required="" >
            @error('ind_photo') 
            <span class="text-danger">{{ $message }}</span>
            @enderror
            <img src="" id="mainThmb">
        </div>
    </div>
    
    <div class="form-group">
					<h5>Industries Details <span class="text-danger">*</span></h5>
					<div class="controls">
					<input type="text" name="ind_description" class="form-control" required="">
					@error('ind_description') 
					<span class="text-danger">{{ $message }}</span>
					@enderror
					</div>
	</div> <!---end--->
                           
    <div class="text-xs-right">
    <input type="submit" class="btn btn-rounded btn-primary mb-5" value="Add Industries">
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