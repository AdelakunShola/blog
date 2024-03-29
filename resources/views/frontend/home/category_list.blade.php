@php

$blog = App\Models\BlogPost::latest()->get();
$bcategory = App\Models\Category::latest()->get();
$lpost = App\Models\BlogPost::latest()->limit(4)->get();

@endphp

<div class="axil-categories-list axil-section-gap bg-color-grey">
            <div class="container">
                <div class="row align-items-center mb--30">
                    <div class="col-lg-6 col-md-8 col-sm-8 col-12">
                        <div class="section-title">
                            <h2 class="title">Trending Categories</h2>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-4 col-sm-4 col-12">
                        <div class="see-all-topics text-start text-sm-end mt_mobile--20">
                            <a class="axil-link-button" href="#">See All Categories</a>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12">
                        <!-- Start List Wrapper  -->
                        <div class="list-categories d-flex flex-wrap">

                        @foreach($bcategory as $cat)
                            <!-- Start Single Category  -->
                            <div class="single-cat">
                                <div class="inner">
                                    <a href="#">
                                        <div class="thumbnail">
                                            <img src="{{$cat->image}}" alt="post categories images">
                                        </div>
                                        <div class="content">
                                            <h5 class="title">{{$cat->category_name}}</h5>
                                        </div>
                                    </a>
                                </div>
                            </div>
                            <!-- End Single Category  -->
                            @endforeach

                          

                          

                        </div>
                        <!-- Start List Wrapper  -->
                    </div>
                </div>
            </div>
        </div>