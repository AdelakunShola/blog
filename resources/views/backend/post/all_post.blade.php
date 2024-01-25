@extends('admin.admin_dashboard')
@section('admin')

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>


<div class="page-content">
				<!--breadcrumb-->
				<div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
					
					<div class="ps-3">
						<nav aria-label="breadcrumb">
							<ol class="breadcrumb mb-0 p-0">
                        
                            <a href="{{ route('add.blog.post') }}" class="btn btn-primary px-5 radius-30">Add Post</a>
							</ol>
						</nav>
					</div>
					
				</div>
				<!--end breadcrumb-->
				<h6 class="mb-0 text-uppercase">Post List</h6>
				<hr/>
				<div class="card">
					<div class="card-body">
						<div class="table-responsive">
							<table id="example" class="table table-striped table-bordered" style="width:100%">
								<thead>
									<tr>
										<th>S1</th>
                                        <th>Post Image</th>
										<th>Post Title</th>
										<th>Category Name</th>
                                        <th>Category Slug</th>
										<th>Action</th>
										
									</tr>
								</thead>
								<tbody>
									@foreach($post as $key => $item)
									<tr>
										<td>{{ $key+1 }}</td>
										<td><img src= "{{ asset($item->post_image) }}" alt="" style ="width:70px; height:40px;" </td>
                                        <td>{{ $item->post_title }}</td>
										<td>{{ $item['blog']['category_name'] }}</td>
										<td>{{ $item->post_slug }}</td>
										<td>
										

                                        <a href="{{ route('edit.blog.post', $item->id ) }}" class="btn btn-warning px-3 radius-30">Edit</a>
											<a href="{{ route('delete.blog.post', $item->id ) }}" class="btn btn-danger px-3 radius-30">Delete</a>
										</td>
									
									</tr>
									@endforeach
									
								</tbody>
								<tfoot>
									<tr>
                                        <th>S1</th>
                                        <th>Post Image</th>
										<th>Post Title</th>
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















