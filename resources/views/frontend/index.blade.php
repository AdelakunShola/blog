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
        <div class="axil-post-list-area post-listview-visible-color axil-section-gap bg-color-white">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-xl-8">
                        <div class="axil-banner">
                            <div class="thumbnail">
                                <a href="#">
                                    <img class="w-100" src="{{asset('frontend/assets/images/add-banner/banner-01.png')}}" alt="Banner Images">
                                </a>
                            </div>
                        </div>
                        <!-- Start Post List  -->

                        <div class="col-lg-12">
                            <div class="section-title">
                                <h2 class="title">Recent Post</h2>
                            </div>
                        </div>

                        <div class="content-block post-list-view axil-control is-active mt--30">
                            <div class="post-thumbnail">
                                <a href="post-details.html">
                                    <img src="{{asset('frontend/assets/images/post-images/post-list-11.jpg')}}" alt="Post Images">
                                </a>
                            </div>
                            <div class="post-content">
                                <div class="post-cat">
                                    <div class="post-cat-list">
                                        <a class="hover-flip-item-wrapper" href="#">
                                            <span class="hover-flip-item">
                                                <span data-text="FOOD">FOOD</span>
                                            </span>
                                        </a>
                                    </div>
                                </div>
                                <h4 class="title"><a href="post-details.html">Security isn’t just a technology problem
                                        it’s about design, too </a></h4>
                                <div class="post-meta-wrapper">
                                    <div class="post-meta">
                                        <div class="content">
                                            <h6 class="post-author-name">
                                                <a class="hover-flip-item-wrapper" href="author.html">
                                                    <span class="hover-flip-item">
                                                        <span data-text="Jane Ara">Jane Ara</span>
                                                    </span>
                                                </a>
                                            </h6>
                                            <ul class="post-meta-list">
                                                <li>Feb 17, 2019</li>
                                                <li>3 min read</li>
                                            </ul>
                                        </div>
                                    </div>
                                    <ul class="social-share-transparent justify-content-end">
                                        <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                        <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                                        <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                        <li><a href="#"><i class="fas fa-link"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <!-- End Post List  -->

                        <!-- Start Post List  -->
                        <div class="content-block post-list-view axil-control mt--30">
                            <div class="post-thumbnail">
                                <a href="post-details.html">
                                    <img src="{{asset('frontend/assets/images/post-images/post-list-12.jpg')}}" alt="Post Images">
                                </a>
                            </div>
                            <div class="post-content">
                                <div class="post-cat">
                                    <div class="post-cat-list">
                                        <a class="hover-flip-item-wrapper" href="#">
                                            <span class="hover-flip-item">
                                                <span data-text="LIFESTYLE">LIFESTYLE</span>
                                            </span>
                                        </a>
                                    </div>
                                </div>
                                <h4 class="title"><a href="post-details.html">The 1 tool that helps remote teams collaborate better</a></h4>
                                <div class="post-meta-wrapper">
                                    <div class="post-meta">
                                        <div class="content">
                                            <h6 class="post-author-name">
                                                <a class="hover-flip-item-wrapper" href="author.html">
                                                    <span class="hover-flip-item">
                                                        <span data-text="Fatima Jane">Fatima Jane</span>
                                                    </span>
                                                </a>
                                            </h6>
                                            <ul class="post-meta-list">
                                                <li>Feb 17, 2019</li>
                                                <li>3 min read</li>
                                            </ul>
                                        </div>
                                    </div>
                                    <ul class="social-share-transparent justify-content-end">
                                        <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                        <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                                        <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                        <li><a href="#"><i class="fas fa-link"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <!-- End Post List  -->

                        <!-- Start Post List  -->
                        <div class="content-block post-list-view axil-control mt--30">
                            <div class="post-thumbnail">
                                <a href="post-details.html">
                                    <img src="{{asset('frontend/assets/images/post-images/post-list-15.jpg')}}" alt="Post Images">
                                </a>
                            </div>
                            <div class="post-content">
                                <div class="post-cat">
                                    <div class="post-cat-list">
                                        <a class="hover-flip-item-wrapper" href="#">
                                            <span class="hover-flip-item">
                                                <span data-text="TRAVEL">TRAVEL</span>
                                            </span>
                                        </a>
                                    </div>
                                </div>
                                <h4 class="title"><a href="post-details.html">Traditional design won’t save us in the COVID-19 era</a></h4>
                                <div class="post-meta-wrapper">
                                    <div class="post-meta">
                                        <div class="content">
                                            <h6 class="post-author-name">
                                                <a class="hover-flip-item-wrapper" href="author.html">
                                                    <span class="hover-flip-item">
                                                        <span data-text="Esrat Ara">Esrat Ara</span>
                                                    </span>
                                                </a>
                                            </h6>
                                            <ul class="post-meta-list">
                                                <li>Feb 17, 2019</li>
                                                <li>3 min read</li>
                                            </ul>
                                        </div>
                                    </div>
                                    <ul class="social-share-transparent justify-content-end">
                                        <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                        <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                                        <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                        <li><a href="#"><i class="fas fa-link"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <!-- End Post List  -->

                        <!-- Start Post List  -->
                        <div class="content-block post-list-view axil-control mt--30">
                            <div class="post-thumbnail">
                                <a href="post-details.html">
                                    <img src="{{asset('frontend/assets/images/post-images/post-list-13.jpg')}}" alt="Post Images">
                                </a>
                            </div>
                            <div class="post-content">
                                <div class="post-cat">
                                    <div class="post-cat-list">
                                        <a class="hover-flip-item-wrapper" href="#">
                                            <span class="hover-flip-item">
                                                <span data-text="DESIGN">DESIGN</span>
                                            </span>
                                        </a>
                                    </div>
                                </div>
                                <h4 class="title"><a href="post-details.html">Get Ready To Up Your Creative Game With The New DJI Mavic Air 2</a></h4>
                                <div class="post-meta-wrapper">
                                    <div class="post-meta">
                                        <div class="content">
                                            <h6 class="post-author-name">
                                                <a class="hover-flip-item-wrapper" href="author.html">
                                                    <span class="hover-flip-item">
                                                        <span data-text="John Doe">John Doe</span>
                                                    </span>
                                                </a>
                                            </h6>
                                            <ul class="post-meta-list">
                                                <li>Feb 17, 2019</li>
                                                <li>3 min read</li>
                                            </ul>
                                        </div>
                                    </div>
                                    <ul class="social-share-transparent justify-content-end">
                                        <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                        <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                                        <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                        <li><a href="#"><i class="fas fa-link"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <!-- End Post List  -->

                        <!-- Start Post List  -->
                        <div class="content-block post-list-view axil-control mt--30">
                            <div class="post-thumbnail">
                                <a href="post-details.html">
                                    <img src="{{asset('frontend/assets/images/post-images/post-list-14.jpg')}}" alt="Post Images">
                                </a>
                            </div>
                            <div class="post-content">
                                <div class="post-cat">
                                    <div class="post-cat-list">
                                        <a class="hover-flip-item-wrapper" href="#">
                                            <span class="hover-flip-item">
                                                <span data-text="FOOD">FOOD</span>
                                            </span>
                                        </a>
                                    </div>
                                </div>
                                <h4 class="title"><a href="post-details.html">Security isn’t just a technology problem
                                        it’s about design, too </a></h4>
                                <div class="post-meta-wrapper">
                                    <div class="post-meta">
                                        <div class="content">
                                            <h6 class="post-author-name">
                                                <a class="hover-flip-item-wrapper" href="author.html">
                                                    <span class="hover-flip-item">
                                                        <span data-text="Asifa Fr">Asifa Fr</span>
                                                    </span>
                                                </a>
                                            </h6>
                                            <ul class="post-meta-list">
                                                <li>Feb 17, 2019</li>
                                                <li>3 min read</li>
                                            </ul>
                                        </div>
                                    </div>
                                    <ul class="social-share-transparent justify-content-end">
                                        <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                        <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                                        <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                        <li><a href="#"><i class="fas fa-link"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <!-- End Post List  -->

                    </div>
                    <div class="col-lg-4 col-xl-4 mt_md--40 mt_sm--40">
                        <!-- Start Sidebar Area  -->
                        @include('frontend.home.sidebar')
                        <!-- End Sidebar Area  -->



                    </div>
                </div>
            </div>
        </div>
        <!-- End Post List Wrapper  -->


        @endsection