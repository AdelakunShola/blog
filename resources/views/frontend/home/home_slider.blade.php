@php

$slider = App\Models\BlogPost::where('slider',1)->limit(4)->get();

@endphp

<h1 class="d-none">Home Default Blog</h1>
        <div class="slider-area bg-color-grey">
            <div class="axil-slide slider-style-1">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="slider-activation axil-slick-arrow">


                                 @foreach($slider as $item)
                                <!-- Start Single Slide  -->
                                <div class="content-block">
                                    <!-- Start Post Thumbnail  -->
                                    <div class="post-thumbnail">
                                        <a href="{{ url('blog/details/'.$item->post_slug) }}">
                                            <img src="{{ asset($item->post_image)}}" alt="Post Images" style="height: 600px;">
                                        </a>
                                    </div>
                                    <!-- End Post Thumbnail  -->

                                    <!-- Start Post Content  -->
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
                                        <h2 class="title"><a href="{{ url('blog/details/'.$item->post_slug) }}">{{ $item->post_title }}</a></h2>
                                        <!-- Post Meta  -->
                                        <div class="post-meta-wrapper with-button">
                                            <div class="post-meta">
                                                <div class="post-author-avatar border-rounded">
                                                    <img src="{{$item['user']['photo']}}" alt="Author Images">
                                                </div>
                                                <div class="content">
                                                    <h6 class="post-author-name">
                                                        <a class="hover-flip-item-wrapper" href="author.html">
                                                            <span class="hover-flip-item">
                                                                <span data-text="{{$item->user->name}}">{{$item['user']['name']}}</span>
                                                            </span>
                                                        </a>
                                                    </h6>
                                                    <ul class="post-meta-list">
                                                        <li>{{ $item->created_at->format('M d Y') }}</li>
                                                    
                                                    </ul>
                                                </div>
                                            </div>
                                           
                                            <div class="read-more-button cerchio">
                                                <a class="axil-button button-rounded hover-flip-item-wrapper" href="{{ url('blog/details/'.$item->post_slug) }}">
                                                    <span class="hover-flip-item">
                                                        <span data-text="Read Post">Read Post</span>
                                                    </span>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- End Post Content  -->
                                </div>
                                <!-- End Single Slide  -->
                                @endforeach

                                

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>