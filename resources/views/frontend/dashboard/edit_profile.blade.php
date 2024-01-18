@extends('frontend.main_master')
@section('main')


<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>

<style>
       /* Existing styles remain unchanged */

.accordion__item__title {
  display: block;
  padding: 20px;
  cursor: pointer;
  background: #eee;
  color: #333;
  position: relative;
}

.accordion__item__title:after {
  content: '+';
  position: absolute;
  right: 20px;
  top: 50%;
  font-size: 2rem;
  line-height: 2rem;
  margin-top: -1rem;
  font-weight: bold;
}

.accordion__item:nth-of-type(2n) .accordion__item__title {
  background: #ddd;
}

.accordion__item__content {
  display: none;
  padding: 20px;
}

.accordion__item__content:target {
  display: block;
}

    </style>

@php

        $id = Auth::user()->id;
        $profileData = App\Models\User::find($id);

@endphp
<div class="container">
    <h1>User Dashboard</h1>
    <img src="{{ (!empty($profileData->photo)) ? url('upload/user_images/'.$profileData->photo) : url('upload/no_image.jpg') }}" alt="Admin" class="rounded-circle p-1 bg-primary" width="110">
  <p>{{ $profileData->name }} <br/><br/>
     {{ $profileData->email }}</p>
  
  <div class="accordion">
    <h4>Update Profile</h4>
      
      
        <form action="{{ route('profile.store') }}"  method="post"  enctype="multipart/form-data" >
        @csrf
            <label for="name">Name:</label>
            <input type="text" id="name" name="name" value="{{ $profileData->name }}" required>

            <label for="name">email:</label>
            <input type="email" id="eamil" name="email" value="{{ $profileData->email }}" required>
  
            
  
            <div class="mb-3">
											<div class="col-sm-3">
												<h6 class="mb-0">Photo</h6>
											</div>
											<div class="col-sm-9 text-secondary">
												<input type="file" name="photo" id="image" />
											</div>
										</div>


                      <div class="mb-3">
											<div class="col-sm-3">
												<h6 class="mb-0"> </h6>
											</div>
											<div class="col-sm-9 text-secondary">
                       <img id="showImage" src="{{ (!empty($profileData->photo)) ? url('upload/user_images/'.$profileData->photo) : url('upload/no_image.jpg') }}" alt="Admin" class="rounded-circle p-1 bg-primary" width="80">
											</div>
										</div>
  
            <input type="submit" value="Update">
          </form>
      
   
    <div class="accordion__item">
      <a class="accordion__item__title" href="{{ route('user.profile.logout') }}">
        Logout
      </a>
      
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

@endsection