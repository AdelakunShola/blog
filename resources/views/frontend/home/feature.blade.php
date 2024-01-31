@php

$featured = App\Models\BlogPost::where('featured',1)->limit(2)->get();

@endphp

<div class="axil-featured-post axil-section-gap bg-color-grey">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="section-title">
                            <h2 class="title"> Featured Posts.</h2>
                        </div>
                    </div>
                </div>
                <div class="row">

                @foreach($featured as $item)
                    <!-- Start Single Post  -->
                    <div class="col-lg-6 col-xl-6 col-md-12 col-12 mt--30">
                        <div class="content-block content-direction-column axil-control is-active post-horizontal thumb-border-rounded">
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
                                <div class="post-meta">
                                    <div class="post-author-avatar border-rounded ">
                                        <img src="{{$item['user']['photo']}}" alt="Author Images" >
                                    </div>
                                    <div class="content">
                                        <h6 class="post-author-name">
                                            <a class="hover-flip-item-wrapper" href="author.html">
                                                <span class="hover-flip-item">
                                                    <span data-text="Ismat Jahan">{{$item['user']['name']}}</span>
                                                </span>
                                            </a>
                                        </h6>
                                        <ul class="post-meta-list">
                                            <li>{{ $item->created_at->format('M d Y') }}</li>
                                           
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="post-thumbnail">
                                <a href="{{ url('blog/details/'.$item->post_slug) }}">
                                    <img src="{{ asset($item->post_image)}}" alt="Post Images" style="border-radius: 20%;">
                                </a>
                            </div>
                        </div>
                    </div>
                    <!-- End Single Post  -->
                    @endforeach

                   
                </div>
            </div>
        </div>