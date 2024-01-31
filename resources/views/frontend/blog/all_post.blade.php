@extends('frontend.main_master')
@section('main')


@php

$blog = App\Models\BlogPost::latest()->paginate(10);
$bcategory = App\Models\Category::latest()->limit(4)->get();
$lpost = App\Models\BlogPost::latest()->limit(4)->get();

@endphp

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

                        @foreach ($blog as $item)

                        <div class="content-block post-list-view axil-control is-active mt--30">
                            <div class="post-thumbnail">
                                <a href="{{ url('blog/details/'.$item->post_slug) }}">
                                    <img src="{{ asset($item->post_image)}}" alt="Post Images">
                                </a>
                            </div>
                            <div class="post-content">
                                <div class="post-cat">
                                    <div class="post-cat-list">
                                        <a class="hover-flip-item-wrapper" href="#">
                                            <span class="">
                                                <span >{{$item['blog']['category_name']}}</span>
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
                                                    <span class="">
                                                        <span>{{$item['user']['name']}}</span>
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

                        {{ $blog->links('vendor.pagination.default') }}

                       

                    </div>
                    <div class="col-lg-4 col-xl-4 mt_md--40 mt_sm--40">
                        <!-- Start Sidebar Area  -->
                        @include('frontend.home.sidebar')
                        <!-- End Sidebar Area  -->



                    </div>
                </div>
            </div>
        </div>

@endsection