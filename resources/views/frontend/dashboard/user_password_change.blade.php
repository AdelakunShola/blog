@extends('frontend.main_master')
@section('main')


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
    <h4>Change your Password</h4>
  
   
      
     
    <form action="{{ route('user.password.update') }}"  method="post"  enctype="multipart/form-data" >
     @csrf
            <label for="name">Old Password:</label>
            <input type="password" name="old_password" id="old_password"  class=" @error('old_password') is-invalid @enderror" />

            @error('old_password')

                <span class="text-danger"> {{$message}} </span>
            @enderror

            <label for="name">New Password:</label>
            <input type="password" name="new_password" id="new_password" class=" @error('new_password') is-invalid @enderror" />

             @error('new_password')

              <span class="text-danger"> {{$message}} </span>
              @enderror

            <label for="name">confirm Password:</label>
            <input type="password" name="new_password_confirmation" id="new_password_confirmation"  />
  
     
  
            <input type="submit" value="Submit">
          </form>
      
    <div class="accordion__item">
      <a class="accordion__item__title" href="{{ route('user.profile.logout') }}">
        Logout
      </a>
      
    </div>
   
  </div>
</div>

@endsection