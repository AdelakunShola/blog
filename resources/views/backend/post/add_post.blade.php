@extends('admin.admin_dashboard')
@section('admin')


<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>


<div class="page-content">
				<!--breadcrumb-->
				<div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
					<div class="breadcrumb-title pe-3">Add Blog Post</div>
					<div class="ps-3">
						
					</div>
					
				</div>
				<!--end breadcrumb-->
				<div class="container">
					<div class="main-body">
						<div class="row">
							
							<div class="col-lg-12">


                            <div class="card">
							<div class="card-body p-4">
								<h5 class="mb-4">Add Post</h5>

                                <form id="form" action="{{ route('store.blog.post') }}"  class="row g-3"  method="post"  enctype="multipart/form-data" >
                                            @csrf

                                <div class="col-md-6">
										<label for="input7" class="form-label">Category</label>
										<select name="blogcat_id" id="input7" class="form-select">
											<option selected="">Choose Category...</option>
                                            @foreach($blog_cat as $cat)
											<option value="{{ $cat->id }}">{{ $cat->category_name }}</option>
                                            @endforeach
											
										</select>
									</div>

									<div class="col-md-6">
										<label for="input1" class="form-label">Post Title</label>
										<input type="text" name="post_title" class="form-control" id="input1" placeholder="First Name">
									</div>


                                    <div class="border rounded-4 text-center p-4 mb-4">
						              <h5>Description</h5>
						                <div id="editor" name="long_desc"> 
						              </div>
						            </div> 
                                    <input type="hidden"  id="long_desc" name="long_desc" value="">
                             

                                     <div class="row mb-3">
											<div class="col-sm-3">
												<h6 class="mb-0">Photo</h6>
											</div>
											<div class="col-sm-9 text-secondary">
												<input type="file" name="post_image" class="form-control" id="image" />
											</div>
							 			</div> 
              
   
                                        <div class="row mb-3">
											<div class="col-sm-3">
												<h6 class="mb-0"> </h6>
											</div>
											<div class="col-sm-9 text-secondary">
                                            <img id="showImage" src="{{ url('upload/no_image.jpg') }}" alt="Admin" class="rounded-circle p-1 bg-primary" width="80">
											</div>
										</div>

									
									
									<div class="col-md-12">
										<div class="d-md-flex d-grid align-items-center gap-3">
											<button type="submit" class="btn btn-primary px-4">Submit</button>
											
										</div>
									</div>
								</form>
							</div>
						</div>
								
							</div>
						</div>
					</div>
				</div>
			</div>



			<script type="text/javascript">
    $(document).ready(function () {
        $('#image').change(function (e) {
            var reader = new FileReader();
            reader.onload = function (e) {
                $('#showImage').attr('src', e.target.result);
            }
            reader.readAsDataURL(e.target.files['0']);
        });

        
    });
</script>

<script type="text/javascript" >

$(document).ready(function(){
    $('#form').ready(function(){
        $('#long_desc').val($('#editor').html());

    });

});

</script>




@endsection