@extends('frontend.main_master')
@section('main')



 <!-- Start Breadcrumb Area  -->
 <div class="axil-breadcrumb-area breadcrumb-style-1 bg-color-grey">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="inner">
                            <h1 class="page-title">{{$namecat->category_name}}</h1>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Breadcrumb Area  -->
        <!-- Start Post List Wrapper  -->
        <div class="axil-post-list-area axil-section-gap bg-color-white">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-xl-8">


                    @foreach($blog as $item)
                        <!-- Start Post List  -->
                        <div class="content-block post-list-view mt--30">
                            <div class="post-thumbnail">
                                <a href="{{ url('blog/details/'.$item->post_slug) }}">
                                    <img src="{{ asset($item->post_image)}}" alt="Post Images">
                                </a>
                                <a class="video-popup icon-color-secondary size-medium position-top-center" href="post-details.html"><span class="play-icon"></span></a>
                            </div>
                            <div class="post-content">
                                <div class="post-cat">
                                    <div class="post-cat-list">
                                        <a class="hover-flip-item-wrapper" href="#">
                                            <span class="hover-flip-item">
                                                <span data-text="{{$item['blog']['category_name']}}">{{$item['blog']['category_name']}}</span>
                                            </span>
                                        </a>
                                    </div>
                                </div>
                                <h4 class="title"><a href="{{ url('blog/details/'.$item->post_slug) }}">{{ $item->post_title }}</a></h4>
                                <div class="post-meta-wrapper">
                                    <div class="post-meta">
                                        <div class="content">
                                            <h6 class="post-author-name">
                                                <a class="hover-flip-item-wrapper" href="author.html">
                                                    <span class="hover-flip-item">
                                                        <span data-text="Rahabi Khan">{{$item['user']['name']}}</span>
                                                    </span>
                                                </a>
                                            </h6>
                                            <ul class="post-meta-list">
                                                <li>{{ $item->created_at->format('M d Y')}}</li>
                                               
                                            </ul>
                                        </div>
                                    </div>
                                    <ul class="social-share-transparent justify-content-end">
                                        <li><a href="{{ url('blog/details/'.$item->post_slug) }}"><p>Read more</p></a></li>
                                       
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <!-- End Post List  -->
                        @endforeach

                       

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