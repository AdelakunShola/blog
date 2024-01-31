@php

$popular = App\Models\BlogPost::where('popular',1)->limit(4)->get();

@endphp
<div class="axil-post-grid-area axil-section-gap bg-color-grey">
            <div class="container">
                <div class="row axil-section-gapBottom">
                    <div class="col-lg-12">
                        <div class="axil-social-wrapper bg-color-white radius">
                            <ul class="social-with-text">
                                <li class="twitter"><a href="#"><i class="fab fa-twitter"></i><span>Twitter</span></a></li>
                                <li class="facebook"><a href="#"><i class="fab fa-facebook-f"></i><span>Facebook</span></a></li>
                                <li class="instagram"><a href="#"><i class="fab fa-instagram"></i><span>Instagram</span></a></li>
                                <li class="youtube"><a href="#"><i class="fab fa-youtube"></i><span>Youtube</span></a></li>
                                <li class="pinterest"><a href="#"><i class="fab fa-pinterest"></i><span>Pinterest</span></a></li>
                                <li class="discord"><a href="#"><i class="fab fa-discord"></i><span>Discord</span></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12">
                        <div class="section-title">
                            <h2 class="title">Most Popular</h2>
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <ul class="axil-tab-button nav nav-tabs mt--20" role="tablist">
                            <li class="nav-item" role="presentation">
                                <a class="nav-link active" id="grid-one" data-bs-toggle="tab" href="#gridone" role="tab" aria-controls="grid-one" aria-selected="true">Accessibility</a>
                            </li>
                            <li class="nav-item" role="presentation">
                                <a class="nav-link" id="grid-two" data-bs-toggle="tab" href="#gridtwo" role="tab" aria-controls="grid-two" aria-selected="false">Android Dev</a>
                            </li>
                            <li class="nav-item" role="presentation">
                                <a class="nav-link" id="grid-three" data-bs-toggle="tab" href="#gridthree" role="tab" aria-controls="grid-three" aria-selected="false">Blockchain</a>
                            </li>
                            <li class="nav-item" role="presentation">
                                <a class="nav-link" id="grid-four" data-bs-toggle="tab" href="#gridfour" role="tab" aria-controls="grid-four" aria-selected="false">Gadgets</a>
                            </li>
                        </ul>
                        <!-- Start Tab Content  -->
                        <div class="grid-tab-content tab-content mt--10">

                            <!-- Start Single Tab Content  -->
                            <div class="single-post-grid tab-pane fade show active" id="gridone" role="tabpanel">
                                <div class="row">

                                @foreach($popular as $item)
                                   
                                    <div class="col-xl-5 col-lg-5 col-md-12 col-12">
                                        <div class="row">
                                            
                                            <div class="col-xl-12 col-lg-12 col-md-6 col-12">
                                                <!-- Start Post Grid  -->
                                                <div class="content-block post-grid mt--30">
                                                    <div class="post-thumbnail">
                                                        <a href="{{ url('blog/details/'.$item->post_slug) }}">
                                                            <img src="{{ asset($item->post_image)}}" alt="Post Images">
                                                        </a>
                                                    </div>
                                                    <div class="post-grid-content">
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
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- Start Post Grid  -->
                                            </div>
                                        </div>
                                    </div>

                                    @endforeach
                                </div>
                            </div>
                            <!-- End Single Tab Content  -->


                        </div>
                        <!-- End Tab Content  -->
                    </div>
                </div>
            </div>
        </div>