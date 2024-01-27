<div class="sidebar-inner">

                            <!-- Start Single Widget  -->
                            <div class="axil-single-widget widget widget_categories mb--30">
                                <ul>
                                    
                                  
                                @foreach($bcategory as $cat)
                                    <li class="cat-item">
                                        <a href="{{ url('blog/category/list/'.$cat->id) }}" class="inner">
                                            <div class="thumbnail">
                                                <img src="{{$cat->image}}" alt="">
                                            </div>
                                            <div class="content">
                                                <h5 class="title">{{$cat->category_name}}</h5>
                                            </div>
                                        </a>
                                    </li>

                                    @endforeach

                                </ul>
                            </div>
                            <!-- End Single Widget  -->

                            <!-- Start Single Widget  -->
                            <div class="axil-single-widget widget widget_search mb--30">
                                <h5 class="widget-title">Search</h5>
                                <form action="#">
                                    <div class="axil-search form-group">
                                        <button type="submit" class="search-button"><i class="fal fa-search"></i></button>
                                        <input type="text" class="form-control" placeholder="Search">
                                    </div>
                                </form>
                            </div>
                            <!-- End Single Widget  -->

                            <!-- Start Single Widget  -->
                            <div class="axil-single-widget widget widget_postlist mb--30">
                                <h5 class="widget-title">Recent Post</h5>
                                <!-- Start Post List  -->
                                <div class="post-medium-block">

                                    <!-- Start Single Post  -->
                                    @foreach($lpost as $item)
                                    <div class="content-block post-medium mb--20">
                                        <div class="post-thumbnail">
                                            <a href="post-details.html">
                                                <img src="{{ asset($item->post_image)}}" alt="Post Images">
                                            </a>
                                        </div>
                                        <div class="post-content">
                                            <h6 class="title"><a href="{{ url('blog/details/'.$item->post_slug) }}">{{ $item->post_title }} </a></h6>
                                            <div class="post-meta">
                                                <ul class="post-meta-list">
                                                    <li>{{ $item->created_at->format('M d Y')}}</li>
                                                  
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    @endforeach
                                    <!-- End Single Post  -->


                                </div>
                                <!-- End Post List  -->

                            </div>
                            <!-- End Single Widget  -->

                            <!-- Start Single Widget  -->
                            <div class="axil-single-widget widget widget_social mb--30">
                                <h5 class="widget-title">Stay In Touch</h5>
                                <!-- Start Post List  -->
                                <ul class="social-icon md-size justify-content-center">
                                    <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                    <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                                    <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                    <li><a href="#"><i class="fab fa-slack"></i></a></li>
                                    <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                                </ul>
                                <!-- End Post List  -->
                            </div>
                            <!-- End Single Widget  -->

                          
                        </div>