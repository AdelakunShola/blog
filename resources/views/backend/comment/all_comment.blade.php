@extends('admin.admin_dashboard')
@section('admin')

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
										

											<button type="button" class="btn btn-warning px-3 radius-30" data-bs-toggle="modal" data-bs-target="#category" id="{{ $item->id }}" onclick="categoryEdit(this.id) " >Edit</button>

											<a href="{{ route('delete.category', $item->id ) }}" class="btn btn-danger px-3 radius-30">Delete</a>
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








@endsection















