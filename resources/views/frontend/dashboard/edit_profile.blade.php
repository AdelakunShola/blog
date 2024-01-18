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

<div class="container">
    <h1>User Dashboard</h1>
  <p>Update your details.</p>
  
  <div class="accordion">
   
      <a class="accordion__item__title" href="{{ route('edit.profile') }}">
        User Details
      </a>
      
        <form>
            <label for="name">Name:</label>
            <input type="text" id="name" name="name" value="{{ $profileData->name }}" required>

            <label for="name">email:</label>
            <input type="email" id="eamil" name="email" value="{{ $profileData->email }}" required>
  
            
  
            <label for="photo">Upload Photo:</label>
            <input type="file" id="photo" name="photo" accept="image/*">
  
            <input type="submit" value="Update">
          </form>
      
   
    <div class="accordion__item">
      <a class="accordion__item__title" href="#item3">
        Logout
      </a>
      
    </div>
   
  </div>
</div>

@endsection