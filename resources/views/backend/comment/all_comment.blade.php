@extends('admin.admin_dashboard')
@section('admin')

<style>
    .large-checkbox{
        transform: scale(1.5);
    }
</style>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>


<div class="page-content">
				<!--breadcrumb-->
				<div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
					
					<div class="ps-3">
						<nav aria-label="breadcrumb">
							<ol class="breadcrumb mb-0 p-0">
                        

							<button type="" class="btn btn-primary px-5 radius-30" data-bs-toggle="modal" data-bs-target="">All Comment</button>
							</ol>
						</nav>
					</div>
					
				</div>
				<!--end breadcrumb-->
				<h6 class="mb-0 text-uppercase">All Comment</h6>
				<hr/>
				<div class="card">
					<div class="card-body">
						<div class="table-responsive">
							<table id="example" class="table table-striped table-bordered" style="width:100%">
								<thead>
									<tr>
										<th>S1</th>
										<th>User Name</th>
										<th>Post Name</th>
										<th>Message</th>
										<th>Action</th>
										
									</tr>
								</thead>
								<tbody>
									@foreach($allcomment as $key => $item)
									<tr>
										<td>{{ $key+1 }}</td>
										<td>{{ $item['user']['name'] }}</td>
										<td>{{ $item['post']['post_title'] }}</td>
                                        <td>{{ Str::limit($item->message,60) }}</td>
										<td>
										

                                        <div class="form-check form-switch">
									<input class="form-check-input large-checkbox status-toggle" type="checkbox" data-comment-id= "{{$item->id }}" {{ $item->status ? 'checked' : '' }} id="flexSwitchCheckChecked" >
									<label class="form-check-label" for="flexSwitchCheckChecked"></label>
								</div>
										</td>
									
									</tr>
									@endforeach
									
								</tbody>
								<tfoot>
									<tr>
                                    <th>S1</th>
										<th>User Name</th>
										<th>Post Name</th>
										<th>Message</th>
										<th>Action</th>
									</tr>
								</tfoot>
							</table>
						</div>
					</div>
				</div>
				
			</div>




<script type="text/javascript">

$(document).ready(function(){
        $('.status-toggle').on('change', function(){
            var commentId = $(this).data('comment-id');
            var isChecked = $(this).is(':checked');

            // Send an ajax request to update status 
            $.ajax({
                url: "{{ route('update.comment.status') }}",
                method: "POST",
                data: {
                    comment_id: commentId,
                    is_checked: isChecked ? 1 : 0,
                    _token: "{{ csrf_token() }}"
                },
                success: function(response){
                    toastr.success(response.message);

                },
                error: function(){

                }
            }); 

        });
    });

    </script>



@endsection















