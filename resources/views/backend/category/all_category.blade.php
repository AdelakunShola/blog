@extends('admin.admin_dashboard')
@section('admin')

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>


<div class="page-content">
				<!--breadcrumb-->
				<div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
					
					<div class="ps-3">
						<nav aria-label="breadcrumb">
							<ol class="breadcrumb mb-0 p-0">
                        

							<button type="button" class="btn btn-primary px-5 radius-30" data-bs-toggle="modal" data-bs-target="#exampleModal">Add Category</button>
							</ol>
						</nav>
					</div>
					
				</div>
				<!--end breadcrumb-->
				<h6 class="mb-0 text-uppercase">Category List</h6>
				<hr/>
				<div class="card">
					<div class="card-body">
						<div class="table-responsive">
							<table id="example" class="table table-striped table-bordered" style="width:100%">
								<thead>
									<tr>
										<th>S1</th>
										<th>Image</th>
										<th>Category Name</th>
										<th>Category Slug</th>
										<th>Action</th>
										
									</tr>
								</thead>
								<tbody>
									@foreach($category as $key => $item)
									<tr>
										<td>{{ $key+1 }}</td>
										<td><img src= "{{ asset($item->image) }}" alt="" style ="width:70px; height:40px;" </td>
										<td>{{ $item->category_name }}</td>
										<td>{{ $item->category_slug }}</td>
										<td>
										

											<button type="button" class="btn btn-warning px-3 radius-30" data-bs-toggle="modal" data-bs-target="#category" id="{{ $item->id }}" onclick="categoryEdit(this.id) " >Edit</button>

											<a href="{{ route('delete.category', $item->id ) }}" class="btn btn-danger px-3 radius-30">Delete</a>
										</td>
									
									</tr>
									@endforeach
									
								</tbody>
								<tfoot>
									<tr>
									    <th>S1</th>
										<th>Image</th>
										<th>Category Name</th>
										<th>Category Slug</th>
										<th>Action</th>
									</tr>
								</tfoot>
							</table>
						</div>
					</div>
				</div>
				
			</div>



<!-- Modal -->
                                <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
											<div class="modal-dialog">
												<div class="modal-content">
													<div class="modal-header">
														<h5 class="modal-title" id="exampleModalLabel">Add Category</h5>
														<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
													</div>
													<div class="modal-body">


										<form action="{{ route('category.store') }}"  method="post"  enctype="multipart/form-data" >
                                            @csrf
										<div class="row mb-3">
											<div class="col-sm-3">
												<h6 class="mb-0">Category Name</h6>
											</div>
											<div class="col-sm-9 text-secondary">
												<input type="text" name="category_name" class="form-control"  />
											</div>
										</div>
										
										
										<div class="row mb-3">
											<div class="col-sm-3">
												<h6 class="mb-0">Category Image</h6>
											</div>
											<div class="col-sm-9 text-secondary">
												<input type="file" name="image" class="form-control" id="image" />
											</div>
										</div>
 

                                        <div class="row mb-3">
											<div class="col-sm-3">
												<h6 class="mb-0"> </h6>
											</div>
											<div class="col-sm-9 text-secondary">
                                            <img id="showImage" src="url('upload/category/'.$category->image) : url('upload/no_image.jpg') }}" alt="Admin" class="rounded-circle p-1 bg-primary" width="80">
											</div>
										</div>


										<div class="row">
											<div class="col-sm-3"></div>
											<div class="col-sm-9 text-secondary">
												<input type="submit" class="btn btn-primary px-4" value="Save Changes" />
											</div>
										</div>
                                        </form>



														</div>
													
												</div>
											</div>
										</div>





						
										<!-- Category Edit Modal -->
										<div class="modal fade" id="category" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
											<div class="modal-dialog">
												<div class="modal-content">
													<div class="modal-header">
														<h5 class="modal-title" id="exampleModalLabel">Edit Category</h5>
														<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
													</div>
													<div class="modal-body">


										<form action="{{ route('update.category') }}"  method="post"  enctype="multipart/form-data" >
                                            @csrf

											<input type="hidden" name="cat_id" id="cat_id">

										<div class="row mb-3">
											<div class="col-sm-3">
												<h6 class="mb-0">Category Name</h6>
											</div>
											<div class="col-sm-9 text-secondary">
												<input type="text" name="category_name" class="form-control" id="cat"  />
											</div>
										</div>
										
										
										<div class="row mb-3">
											<div class="col-sm-3">
												<h6 class="mb-0">Category Image</h6>
											</div>
											<div class="col-sm-9 text-secondary">
												<input type="file" name="image" class="form-control" id="image" />
											</div>
										</div>
 

                                        <div class="row mb-3">
											<div class="col-sm-3">
												<h6 class="mb-0"> </h6>
											</div>
											<div class="col-sm-9 text-secondary">
                                            <img id="image-preview" src="url('upload/category/'.$category->image) : url('upload/no_image.jpg') }}" alt="" class="rounded-circle p-1 bg-primary" width="80">
											</div>
										</div>


										<div class="row">
											<div class="col-sm-3"></div>
											<div class="col-sm-9 text-secondary">
												<input type="submit" class="btn btn-primary px-4" value="Save Changes" />
											</div>
										</div>
                                        </form>



														</div>
													
												</div>
											</div>
										</div>



	<script type="text/javascript" >
    $(document).ready(function(){
        $('#image').change(function(e){
            var reader = new FileReader();
            reader.onload = function(e){
                $('#showImage').attr('src',e.target.result);
            }
            reader.readAsDataURL(e.target.files['0']);

    });
});
</script>


<script type="text/javascript" >
	function categoryEdit(id){
		$.ajax({
			type: 'Get',
			url:'/category/edit/'+id,
			dataType: 'json',

			success:function(data){
				// console.log(data);

				$('#cat_id').val(data.id);
				$('#cat').val(data.category_name);

				$('#image-preview').attr('src', '/' + data.image);

			}
		})
	}

	</script>

@endsection















