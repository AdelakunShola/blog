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
    <div class="accordion__item">
      <a class="accordion__item__title" href="{{ route('edit.profile') }}">
        Update Profile
      </a>
     
    </div>
    <div class="accordion__item">
      <a class="accordion__item__title" href="#item2">
        Password Update
      </a>
      <div class="accordion__item__content" id="item2">
        <form>
            <label for="name">Name:</label>
            <input type="text" id="name" name="name" required>

            <label for="name">Name:</label>
            <input type="text" id="name" name="name" required>

            <label for="name">Name:</label>
            <input type="text" id="name" name="name" required>
  
     
  
            <input type="submit" value="Submit">
          </form>
      </div>
    </div>
    <div class="accordion__item">
      <a class="accordion__item__title" href="{{ route('user.profile.logout') }}">
        Logout
      </a>
      
    </div>
   
  </div>
</div>

@endsection