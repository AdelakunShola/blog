@extends('frontend.main_master')
@section('main')



<div class="maintanence-area">
            <div class="container">
                <div class="row align-items-center">
                    <div class="order-2 order-lg-1 col-lg-6 mt_md--40 mt_sm--40">
                        <div class="content">
                            <div class="logo">
                                <a href="index.html">
                                    <img class="dark-logo" src="{{asset('frontend/assets/images/logo/logo-black.png')}}" alt="Logo Images">
                                    <img class="light-logo" src="{{asset('frontend/assets/images/logo/logo-white2.png')}}" alt="Logo Images">
                                </a>
                            </div>
                           
                            <form method="POST" action="{{ route('register') }}"  style="max-width: 800px; margin: 0 auto; background-color: #fff; padding: 20px; border-radius: 8px; box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);">
                            
                              @csrf 
                                <label for="username" style="display: block; margin-bottom: 10px; text-align: left;">Username:</label>
                                <input type="text" id="name" name="name" style="width: 100%; padding: 8px; margin-bottom: 15px; box-sizing: border-box; border: 1px solid #ccc; border-radius: 4px;" required>


                                <label for="username" style="display: block; margin-bottom: 10px; text-align: left;">Email:</label>
                                <input type="email" id="email" name="email" style="width: 100%; padding: 8px; margin-bottom: 15px; box-sizing: border-box; border: 1px solid #ccc; border-radius: 4px;" required>
                        
                        
                                <label for="password" style="display: block; margin-bottom: 10px; text-align: left;">Password:</label>
                                <input type="password" id="password" name="password" style="width: 100%; padding: 8px; margin-bottom: 20px; box-sizing: border-box; border: 1px solid #ccc; border-radius: 4px;" required>
                                

                                <label for="password" style="display: block; margin-bottom: 10px; text-align: left;">Confirm Password:</label>
                                <input type="password" id="password_confirmation" name="password_confirmation" style="width: 100%; padding: 8px; margin-bottom: 20px; box-sizing: border-box; border: 1px solid #ccc; border-radius: 4px;" required>
                        

                                <button type="submit" style="background-color: #4caf50; color: #fff; padding: 10px 15px; border: none; border-radius: 4px; cursor: pointer;">Sign up</button>
                                  

                                <a href="{{ route('login') }}" style="text-decoration: none; color: #333;">login</a>
                            </form>
                            <div class="inner d-flex align-items-center flex-wrap">
                                <h5 class="follow-title mb--0 mr--20">Follow Us</h5>
                                <ul class="social-icon color-tertiary md-size justify-content-start">
                                    <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                    <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                                    <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                    <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                                </ul>
                            </div>
                           
                        </div>
                    </div>
                    <div class="order-1 order-lg-2 col-lg-5 offset-lg-1">
                        <div class="thumbnail">
                            <img src="{{asset('frontend/assets/images/others/maintenence.png')}}" alt="Images">
                        </div>
                    </div>
                </div>
            </div>
        </div>


@endsection