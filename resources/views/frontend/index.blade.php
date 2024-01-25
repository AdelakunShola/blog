@extends('frontend.main_master')
@section('main')



 <!-- Start Banner Area -->
    @include('frontend.home.home_slider')
        <!-- End Banner Area -->

        <!-- Start Featured Area  -->
        @include('frontend.home.feature')
        <!-- End Featured Area  -->

    
       

        <!-- Start Categories List  -->
        @include('frontend.home.category_list')
        <!-- Start Categories List  -->

   

        <!-- Start Post Grid Area  -->
        @include('frontend.home.popular_post')
        <!-- End Post Grid Area  -->

        <!-- Start Post List Wrapper  -->
        @include('frontend.home.recent_post')
        <!-- End Post List Wrapper  -->


        @endsection