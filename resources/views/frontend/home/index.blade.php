@extends('frontend.layout')
@section('content')
    <div class="container-fluid" style="margin-top: 40px;">
        <div class="row">
            <div class="col-md-8 col-sm-8">
                <!-- left content inner -->
                <section class="recent_news_inner">
                    <h3 class="category-headding ">RECENT NEWS</h3>
                    <div class="headding-border"></div>
                    <div class="row">
                        <div id="content-slide" class="owl-carousel">
                            @foreach ($recent_news->take(5) as $recent_new)
                                <div class="item home2-post">
                                    <div class="post-wrapper wow fadeIn" data-wow-duration="1s">
                                        <!-- image -->
                                        <div class="post-thumb">
                                            <a href="#">
                                                <img class="img-responsive" src="{{ asset($recent_new->image) }}"
                                                    alt="">
                                            </a>
                                        </div>
                                        <div class="post-info meta-info-rn">
                                            {{-- <div class="slide">
                                                <a target="_blank" href="#" class="post-badge btn_six">T</a>
                                            </div> --}}
                                        </div>
                                    </div>
                                    <h3><a href="#">{{ $recent_new->title }}</a></h3>
                                    <div class="post-title-author-details">
                                        <div class="date">
                                            <ul>
                                                <li>By <a title=""
                                                        href="#"><span>{{ $recent_new->userCreator->name }}</span></a>
                                                    --
                                                </li>
                                                <li><a title=""
                                                        href="#">{{ $recent_new->created_at->format('M j, Y') }}</a>
                                                    --</li>
                                                <li><a title=""
                                                        href="#"><span>{{ $recent_new->category->name ?? null }}</span></a>
                                                </li>
                                            </ul>
                                        </div>
                                        <p>
                                            {{ strlen(strip_tags($recent_new->description)) > 50 ? substr(strip_tags($recent_new->description), 0, 50) . '...' : strip_tags($recent_new->description) }}
                                            @if (strlen(strip_tags($recent_new->description)) > 50)
                                                <a href="#">Read More</a>
                                            @endif

                                        </p>
                                    </div>
                                </div>
                            @endforeach

                        </div>
                    </div>
                    <div class="row rn_block">
                        @foreach ($recent_news->skip(5) as $recent_new)
                            <div class="col-md-4 col-sm-4 padd">
                                <div class="home2-post">
                                    <div class="post-wrapper wow fadeIn" data-wow-duration="1s">
                                        <!-- image -->
                                        <div class="post-thumb">
                                            <a href="#">
                                                <img class="img-responsive" src="{{ asset($recent_new->image) }}"
                                                    alt="">
                                            </a>
                                        </div>
                                        <div class="post-info meta-info-rn">
                                            {{-- <div class="slide">
                                                <a target="_blank" href="#" class="post-badge btn_eight">H</a>
                                            </div> --}}
                                        </div>
                                    </div>
                                    <div class="post-title-author-details">
                                        <h4><a href="#">{{ $recent_new->title }}</a></h4>
                                        <div class="date">
                                            <ul>
                                                <li>By <a title=""
                                                        href="#"><span>{{ $recent_new->userCreator->name }}</span></a>
                                                    --
                                                </li>
                                                <li><a title=""
                                                        href="#">{{ $recent_new->created_at->format('M j, Y') }}</a>
                                                </li>
                                                <li><a title=""
                                                        href="#"><span>{{ $recent_new->category->name ?? null }}</span></a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </section>
                <!-- Politics Area
                                                            ============================================ -->
                <section class="politics_wrapper">
                    <h3 class="category-headding ">POLITICS</h3>
                    <div class="headding-border"></div>
                    <div class="row">
                        <div id="content-slide-2" class="owl-carousel">
                            <!-- item-1 -->
                            <div class="item">
                                <div class="row">
                                    <!-- main post -->
                                    <div class="col-sm-6 col-md-6">
                                        @foreach ($politics->take(1) as $politic)
                                            <div class="home2-post">
                                                <div class="post-wrapper wow fadeIn" data-wow-duration="1s">
                                                    <!-- post image -->
                                                    <div class="post-thumb">
                                                        <a href="#">
                                                            <img src="{{ asset($politic->image) }}" class="img-responsive"
                                                                alt="">
                                                        </a>
                                                    </div>
                                                    <!-- post title -->
                                                    <h3><a href="#">{{ $politic->title }}</a></h3>
                                                </div>
                                                <div class="post-title-author-details">
                                                    <div class="date">
                                                        <ul>
                                                            <li>By <a title=""
                                                                    href="#"><span>{{ $politic->userCreator->name }}</span></a>
                                                                --</li>
                                                            <li><a title=""
                                                                    href="#">{{ $politic->created_at->format('M j, Y') }}</a>
                                                                --</li>
                                                            <li><a title=""
                                                                    href="#"><span>{{ $politic->category->name ?? null }}</span></a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                    <p> {{ strlen(strip_tags($politic->description)) > 50 ? substr(strip_tags($politic->description), 0, 150) . '...' : strip_tags($politic->description) }}
                                                        @if (strlen(strip_tags($politic->description)) > 50)
                                                            <a href="#">Read More</a>
                                                        @endif
                                                    </p>
                                                </div>
                                            </div>
                                        @endforeach
                                    </div>
                                    <!-- right side post -->
                                    <div class="col-sm-6 col-md-6">
                                        <div class="row rn_block">
                                            @foreach ($politics->skip(1) as $politic)
                                                <div class="col-xs-6 col-md-6 col-sm-6 post-padding">
                                                    <div class="home2-post">
                                                        <!-- post image -->
                                                        <div class="post-thumb wow fadeIn" data-wow-duration="1s"
                                                            data-wow-delay="0.2s">
                                                            <a href="#">
                                                                <img src="{{ asset($politic->image) }}"
                                                                    class="img-responsive" alt="">
                                                            </a>
                                                        </div>
                                                        <div class="post-title-author-details">
                                                            <!-- post image -->
                                                            <h5><a href="#">{{ $politic->title }}</a></h5>
                                                            <div class="date">
                                                                <ul>
                                                                    <li><a title=""
                                                                            href="#"><span>{{ $politic->userCreator->name }}</span></a>
                                                                        --</li>
                                                                    <li><a title=""
                                                                            href="#">{{ $politic->created_at->format('M j, Y') }}</a>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            @endforeach
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- item-2 -->
                        </div>
                    </div>
                    <!-- /.row -->
                </section>
                <!-- /.Politics -->
                <div class="ads">
                    <a href="#"><img src="{{ asset('frontend') }}/images/top-bannner2.jpg"
                            class="img-responsive center-block" alt=""></a>
                </div>


            </div>
            <!-- /.left content inner -->
            <div class="col-md-4 col-sm-4 left-padding">
                <!-- right content wrapper -->
                <div class="input-group search-area">
                    <!-- search area -->
                    <input type="text" class="form-control" placeholder="Search articles here ..." name="q">
                    <div class="input-group-btn">
                        <button class="btn btn-search" type="submit"><i class="fa fa-search"
                                aria-hidden="true"></i></button>
                    </div>
                </div>
                <!-- /.search area -->
                <!-- social icon -->
                <h3 class="category-headding ">SOCIAL PIXEL</h3>
                <div class="headding-border"></div>
                <div class="social">
                    <ul>
                        <li><a href="#" class="facebook"><i class="fa  fa-facebook"></i><span>3987</span>
                            </a>
                        </li>
                        <li><a href="#" class="twitter"><i class="fa  fa-twitter"></i><span>3987</span></a>
                        </li>
                        <li><a href="#" class="google"><i class="fa  fa-google-plus"></i><span>3987</span></a>
                        </li>
                        <li><a href="#" class="flickr"><i class="fa fa-flickr"></i><span>3987</span> </a>
                        </li>
                    </ul>
                </div>
                <!-- /.social icon -->
                <div class="banner-add">
                    <!-- add -->
                    <span class="add-title">- Advertisement -</span>
                    <a href="#"><img src="{{ asset('frontend') }}/images/ad-banner.jpg"
                            class="img-responsive center-block" alt=""></a>
                </div>
                <div class="tab-inner">
                    <ul class="tabs">
                        <li><a href="#">POPULAR</a></li>
                        <li><a href="#">MOST VIEWED</a></li>
                    </ul>
                    <hr>
                    <!-- tabs -->
                    <div class="tab_content">
                        <div class="tab-item-inner">
                            <div class="box-item wow fadeIn" data-wow-duration="1s">
                                <div class="img-thumb">
                                    <a href="#" rel="bookmark"><img class="entry-thumb"
                                            src="{{ asset('frontend') }}/images/popular_news_01.jpg" alt=""
                                            height="80" width="90"></a>
                                </div>
                                <div class="item-details">
                                    <h6 class="sub-category-title bg-color-1">
                                        <a href="#">SPORTS</a>
                                    </h6>
                                    <h3 class="td-module-title"><a href="#">It is a long established fact that
                                            a
                                            reader will</a></h3>
                                    <div class="post-editor-date">
                                        <!-- post date -->
                                        <div class="post-date">
                                            <i class="pe-7s-clock"></i> Oct 6, 2016
                                        </div>
                                        <!-- post comment -->
                                        <div class="post-author-comment"><i class="pe-7s-comment"></i> 13 </div>
                                    </div>
                                </div>
                            </div>
                            <div class="box-item wow fadeIn" data-wow-duration="1s" data-wow-delay="0.1s">
                                <div class="img-thumb">
                                    <a href="#" rel="bookmark"><img class="entry-thumb"
                                            src="{{ asset('frontend') }}/images/popular_news_02.jpg" alt=""
                                            height="80" width="90"></a>
                                </div>
                                <div class="item-details">
                                    <h6 class="sub-category-title bg-color-2">
                                        <a href="#">TECHNOLOGY </a>
                                    </h6>
                                    <h3 class="td-module-title"><a href="#">The generated Lorem Ipsum is
                                            therefore</a></h3>
                                    <div class="post-editor-date">
                                        <!-- post date -->
                                        <div class="post-date">
                                            <i class="pe-7s-clock"></i> Oct 6, 2016
                                        </div>
                                        <!-- post comment -->
                                        <div class="post-author-comment"><i class="pe-7s-comment"></i> 13 </div>
                                    </div>
                                </div>
                            </div>
                            <div class="box-item wow fadeIn" data-wow-duration="1s" data-wow-delay="0.2s">
                                <div class="img-thumb">
                                    <a href="#" rel="bookmark"><img class="entry-thumb"
                                            src="{{ asset('frontend') }}/images/popular_news_03.jpg" alt=""
                                            height="80" width="90"></a>
                                </div>
                                <div class="item-details">
                                    <h6 class="sub-category-title bg-color-3">
                                        <a href="#">HEALTH</a>
                                    </h6>
                                    <h3 class="td-module-title"><a href="#">The standard chunk of Lorem Ipsum
                                            used since</a></h3>
                                    <div class="post-editor-date">
                                        <!-- post date -->
                                        <div class="post-date">
                                            <i class="pe-7s-clock"></i> Oct 6, 2016
                                        </div>
                                        <!-- post comment -->
                                        <div class="post-author-comment"><i class="pe-7s-comment"></i> 13 </div>
                                    </div>
                                </div>
                            </div>
                            <div class="box-item wow fadeIn" data-wow-duration="1s" data-wow-delay="0.3s">
                                <div class="img-thumb">
                                    <a href="#" rel="bookmark"><img class="entry-thumb"
                                            src="{{ asset('frontend') }}/images/popular_news_04.jpg" alt=""
                                            height="80" width="90"></a>
                                </div>
                                <div class="item-details">
                                    <h6 class="sub-category-title bg-color-4">
                                        <a href="#">FASHION</a>
                                    </h6>
                                    <h3 class="td-module-title"><a href="#">Lorem Ipum therefore always free
                                            from</a></h3>
                                    <div class="post-editor-date">
                                        <!-- post date -->
                                        <div class="post-date">
                                            <i class="pe-7s-clock"></i> Oct 6, 2016
                                        </div>
                                        <!-- post comment -->
                                        <div class="post-author-comment"><i class="pe-7s-comment"></i> 13 </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- / tab item -->
                        <div class="tab-item-inner">
                            <div class="box-item">
                                <div class="img-thumb">
                                    <a href="#" rel="bookmark"><img class="entry-thumb"
                                            src="{{ asset('frontend') }}/images/popular_news_01.jpg" alt=""
                                            height="80" width="90"></a>
                                </div>
                                <div class="item-details">
                                    <h6 class="sub-category-title bg-color-5">
                                        <a href="#">BUSINESS</a>
                                    </h6>
                                    <h3 class="td-module-title"><a href="#">It is a long established fact that
                                            a
                                            reader will</a></h3>
                                    <div class="post-editor-date">
                                        <!-- post date -->
                                        <div class="post-date">
                                            <i class="pe-7s-clock"></i> Oct 6, 2016
                                        </div>
                                        <!-- post comment -->
                                        <div class="post-author-comment"><i class="pe-7s-comment"></i> 13 </div>
                                    </div>
                                </div>
                            </div>
                            <div class="box-item">
                                <div class="img-thumb">
                                    <a href="#" rel="bookmark"><img class="entry-thumb"
                                            src="{{ asset('frontend') }}/images/popular_news_02.jpg" alt=""
                                            height="80" width="90"></a>
                                </div>
                                <div class="item-details">
                                    <h6 class="sub-category-title bg-color-2">
                                        <a href="#">TECHNOLOGY </a>
                                    </h6>
                                    <h3 class="td-module-title"><a href="#">The generated Lorem Ipsum is
                                            therefore</a></h3>
                                    <div class="post-editor-date">
                                        <!-- post date -->
                                        <div class="post-date">
                                            <i class="pe-7s-clock"></i> Oct 6, 2016
                                        </div>
                                        <!-- post comment -->
                                        <div class="post-author-comment"><i class="pe-7s-comment"></i> 13 </div>
                                    </div>
                                </div>
                            </div>
                            <div class="box-item">
                                <div class="img-thumb">
                                    <a href="#" rel="bookmark"><img class="entry-thumb"
                                            src="{{ asset('frontend') }}/images/popular_news_03.jpg" alt=""
                                            height="80" width="90"></a>
                                </div>
                                <div class="item-details">
                                    <h6 class="sub-category-title bg-color-3">
                                        <a href="#">HEALTH</a>
                                    </h6>
                                    <h3 class="td-module-title"><a href="#">The standard chunk of Lorem Ipsum
                                            used since</a></h3>
                                    <div class="post-editor-date">
                                        <!-- post date -->
                                        <div class="post-date">
                                            <i class="pe-7s-clock"></i> Oct 6, 2016
                                        </div>
                                        <!-- post comment -->
                                        <div class="post-author-comment"><i class="pe-7s-comment"></i> 13 </div>
                                    </div>
                                </div>
                            </div>
                            <div class="box-item">
                                <div class="img-thumb">
                                    <a href="#" rel="bookmark"><img class="entry-thumb"
                                            src="{{ asset('frontend') }}/images/popular_news_04.jpg" alt=""
                                            height="80" width="90"></a>
                                </div>
                                <div class="item-details">
                                    <h6 class="sub-category-title bg-color-4">
                                        <a href="#">FASHION</a>
                                    </h6>
                                    <h3 class="td-module-title"><a href="#">Lorem Ipum therefore always free
                                            from</a></h3>
                                    <div class="post-editor-date">
                                        <!-- post date -->
                                        <div class="post-date">
                                            <i class="pe-7s-clock"></i> Oct 6, 2016
                                        </div>
                                        <!-- post comment -->
                                        <div class="post-author-comment"><i class="pe-7s-comment"></i> 13 </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- / tab item -->
                    </div>
                    <!-- / tab_content -->
                </div>
                <!-- / tab -->
                <!-- comments -->
                <div class="latest-comments-inner">
                    <h3 class="category-headding ">LATEST COMMENT</h3>
                    <div class="headding-border"></div>
                    <!-- latest comment post -->
                    <div class="post-style2 latest-com">
                        <img src="{{ asset('frontend') }}/images/comment-01.jpg" alt="">
                        <div class="latest-com-detail">
                            <h5><a href="#" title="">It uses a dictionary of over</a></h5>
                            <span>Nec sagittis sem nibh dictionary...</span>
                            <p>Proin gravida nibh vel velit auctor aliquet. </p>
                        </div>
                    </div>
                    <!-- latest comment post -->
                    <div class="post-style2 latest-com">
                        <img src="{{ asset('frontend') }}/images/comment-02.jpg" alt="">
                        <div class="latest-com-detail">
                            <h5><a href="#" title="">It uses a dictionary of over</a></h5>
                            <span>Nec sagittis sem nibh dictionary...</span>
                            <p>Proin gravida nibh vel velit auctor aliquet. </p>
                        </div>
                    </div>
                </div>
            </div>
            <!-- side content end -->
        </div>
        <!-- row end -->
    </div>
    <!-- container-fluid end -->

    <!-- second content -->
    <section>
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-8 col-sm-8">
                    <div class="row">
                        <!-- business Area
                                                                    ============================================ -->
                        <div class="col-sm-6 col-md-6">
                            <div class="buisness">
                                <h3 class="category-headding ">BUSINESS</h3>
                                <div class="headding-border bg-color-5"></div>
                                <div class="post-wrapper wow fadeIn" data-wow-duration="1s">
                                    <!-- post title -->
                                    <h3><a href="#">There are many variations of passages of Lorem
                                            Ipsum available</a></h3>
                                    <!-- post image -->
                                    <div class="post-thumb">
                                        <a href="#">
                                            <img src="{{ asset('frontend') }}/images/business-01.jpg"
                                                class="img-responsive" alt="">
                                        </a>
                                    </div>
                                </div>
                                <div class="post-title-author-details">
                                    <div class="post-editor-date">
                                        <!-- post date -->
                                        <div class="post-date">
                                            <i class="pe-7s-clock"></i> Oct 6, 2016
                                        </div>
                                        <!-- post comment -->
                                        <div class="post-author-comment"><i class="pe-7s-comment"></i> 13
                                        </div>
                                    </div>
                                    <p>All the Lorem Ipsum generators on the Internet tend to repeat
                                        predefined chunks as necessary, making this the first true <a href="#">Read
                                            more...</a></p>
                                </div>
                                <div class="box-item wow fadeIn" data-wow-duration="1s" data-wow-delay="0.2s">
                                    <div class="img-thumb">
                                        <a href="#" rel="bookmark"><img class="entry-thumb"
                                                src="{{ asset('frontend') }}/images/business-02.jpg" alt=""
                                                height="70" width="100"></a>
                                    </div>
                                    <div class="item-details">
                                        <h3 class="td-module-title"><a href="#">Lorem Ipum therefore
                                                always free from repetition</a></h3>
                                        <div class="post-editor-date">
                                            <!-- post date -->
                                            <div class="post-date">
                                                <i class="pe-7s-clock"></i> Oct 6, 2016
                                            </div>
                                            <!-- post comment -->
                                            <div class="post-author-comment"><i class="pe-7s-comment"></i>
                                                13 </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="box-item wow fadeIn" data-wow-duration="1s" data-wow-delay="0.3s">
                                    <div class="img-thumb">
                                        <a href="#" rel="bookmark"><img class="entry-thumb"
                                                src="{{ asset('frontend') }}/images/business-03.jpg" alt=""
                                                height="70" width="100"></a>
                                    </div>
                                    <div class="item-details">
                                        <h3 class="td-module-title"><a href="#">Lorem Ipum therefore
                                                always free from repetition</a></h3>
                                        <div class="post-editor-date">
                                            <!-- post date -->
                                            <div class="post-date">
                                                <i class="pe-7s-clock"></i> Oct 6, 2016
                                            </div>
                                            <!-- post comment -->
                                            <div class="post-author-comment"><i class="pe-7s-comment"></i>
                                                13 </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- international Area
                                                                    ============================================ -->
                        <div class="col-sm-6 col-md-6">
                            <div class="international">
                                <h3 class="category-headding ">INTERNATIONAL</h3>
                                <div class="headding-border bg-color-2"></div>
                                <div class="post-wrapper wow fadeIn" data-wow-duration="1s">
                                    <!-- post title -->
                                    <h3><a href="#">There are many variations of passages of Lorem
                                            Ipsum available</a></h3>
                                    <!-- post image -->
                                    <div class="post-thumb">
                                        <a href="#">
                                            <img src="{{ asset('frontend') }}/images/international.jpg"
                                                class="img-responsive" alt="">
                                        </a>
                                    </div>
                                </div>
                                <div class="post-title-author-details">
                                    <div class="post-editor-date">
                                        <!-- post date -->
                                        <div class="post-date">
                                            <i class="pe-7s-clock"></i> Oct 6, 2016
                                        </div>
                                        <!-- post comment -->
                                        <div class="post-author-comment"><i class="pe-7s-comment"></i> 13
                                        </div>
                                    </div>
                                    <p>All the Lorem Ipsum generators on the Internet tend to repeat
                                        predefined chunks as necessary, making this the first true <a href="#">Read
                                            more...</a></p>
                                </div>
                                <div class="box-item wow fadeIn" data-wow-duration="1s" data-wow-delay="0.2s">
                                    <div class="img-thumb">
                                        <a href="#" rel="bookmark"><img class="entry-thumb"
                                                src="{{ asset('frontend') }}/images/international-2.jpg" alt=""
                                                height="70" width="100"></a>
                                    </div>
                                    <div class="item-details">
                                        <h3 class="td-module-title"><a href="#">Lorem Ipum therefore
                                                always free from repetition</a></h3>
                                        <div class="post-editor-date">
                                            <!-- post date -->
                                            <div class="post-date">
                                                <i class="pe-7s-clock"></i> Oct 6, 2016
                                            </div>
                                            <!-- post comment -->
                                            <div class="post-author-comment"><i class="pe-7s-comment"></i>
                                                13 </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="box-item wow fadeIn" data-wow-duration="1s" data-wow-delay="0.3s">
                                    <div class="img-thumb">
                                        <a href="#" rel="bookmark"><img class="entry-thumb"
                                                src="{{ asset('frontend') }}/images/international-3.jpg" alt=""
                                                height="70" width="100"></a>
                                    </div>
                                    <div class="item-details">
                                        <h3 class="td-module-title"><a href="#">Lorem Ipum therefore
                                                always free from repetition</a></h3>
                                        <div class="post-editor-date">
                                            <!-- post date -->
                                            <div class="post-date">
                                                <i class="pe-7s-clock"></i> Oct 6, 2016
                                            </div>
                                            <!-- post comment -->
                                            <div class="post-author-comment"><i class="pe-7s-comment"></i>
                                                13 </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- /.international -->
                        </div>
                    </div>
                    <!-- technology Area
                                                                ============================================ -->
                    <section class="politics_wrapper">
                        <h3 class="category-headding ">TECHNOLOGY</h3>
                        <div class="headding-border"></div>
                        <div class="row">
                            <div id="content-slide-3" class="owl-carousel">
                                <!-- item-1 -->
                                <div class="item">
                                    <div class="row">
                                        <!-- left side post -->
                                        <div class="col-sm-6 col-md-6">
                                            <div class="post-wrapper wow fadeIn" data-wow-duration="1s">
                                                <!-- post title -->
                                                <h3><a href="#">There are many variations of passages
                                                        of Lorem Ipsum available</a></h3>
                                                <!-- post image -->
                                                <div class="post-thumb">
                                                    <a href="#">
                                                        <img src="{{ asset('frontend') }}/images/technology/tecnology-01.jpg"
                                                            class="img-responsive" alt="">
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="post-title-author-details">
                                                <div class="post-editor-date">
                                                    <!-- post date -->
                                                    <div class="post-date">
                                                        <i class="pe-7s-clock"></i> Oct 6, 2016
                                                    </div>
                                                    <!-- post comment -->
                                                    <div class="post-author-comment"><i class="pe-7s-comment"></i>
                                                        13 </div>
                                                </div>
                                                <p>All the Lorem Ipsum generators on the Internet tend to
                                                    repeat predefined chunks as necessary, making this the
                                                    first true <a href="#">Read more...</a></p>
                                            </div>
                                        </div>
                                        <!-- right side post -->
                                        <div class="col-sm-6 col-md-6">
                                            <div class="row rn_block">
                                                <div class="col-xs-6 col-md-6 col-sm-6 post-padding">
                                                    <!-- post image -->
                                                    <div class="post-thumb wow fadeIn" data-wow-duration="1s"
                                                        data-wow-delay="0.2s">
                                                        <a href="#">
                                                            <img src="{{ asset('frontend') }}/images/technology/tecnology-02.jpg"
                                                                class="img-responsive" alt="">
                                                        </a>
                                                    </div>
                                                    <div class="post-title-author-details">
                                                        <!-- post image -->
                                                        <h5><a href="#">Microbus runs over 2
                                                                pedestrians in Banani</a></h5>
                                                        <div class="post-editor-date">
                                                            <!-- post date -->
                                                            <div class="post-date">
                                                                <i class="pe-7s-clock"></i> Oct 6, 2016
                                                            </div>
                                                            <!-- post comment -->
                                                            <div class="post-author-comment"><i class="pe-7s-comment"></i>
                                                                13 </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-xs-6 col-md-6 col-sm-6 post-padding">
                                                    <!-- post image -->
                                                    <div class="post-thumb wow fadeIn" data-wow-duration="1s"
                                                        data-wow-delay="0.3s">
                                                        <a href="#">
                                                            <img src="{{ asset('frontend') }}/images/technology/tecnology-03.jpg"
                                                                class="img-responsive" alt="">
                                                        </a>
                                                    </div>
                                                    <div class="post-title-author-details">
                                                        <!-- post image -->
                                                        <h5><a href="#">Microbus runs over 2
                                                                pedestrians in Banani</a></h5>
                                                        <div class="post-editor-date">
                                                            <!-- post date -->
                                                            <div class="post-date">
                                                                <i class="pe-7s-clock"></i> Oct 6, 2016
                                                            </div>
                                                            <!-- post comment -->
                                                            <div class="post-author-comment"><i class="pe-7s-comment"></i>
                                                                13 </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-xs-6 col-md-6 col-sm-6 post-padding">
                                                    <!-- post image -->
                                                    <div class="post-thumb wow fadeIn" data-wow-duration="1s"
                                                        data-wow-delay="0.4s">
                                                        <a href="#">
                                                            <img src="{{ asset('frontend') }}/images/technology/tecnology-04.jpg"
                                                                class="img-responsive" alt="">
                                                        </a>
                                                    </div>
                                                    <div class="post-title-author-details">
                                                        <!-- post image -->
                                                        <h5><a href="#">Microbus runs over 2
                                                                pedestrians in Banani</a></h5>
                                                        <div class="post-editor-date">
                                                            <!-- post date -->
                                                            <div class="post-date">
                                                                <i class="pe-7s-clock"></i> Oct 6, 2016
                                                            </div>
                                                            <!-- post comment -->
                                                            <div class="post-author-comment"><i class="pe-7s-comment"></i>
                                                                13 </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-xs-6 col-md-6 col-sm-6 post-padding">
                                                    <!-- post image -->
                                                    <div class="post-thumb wow fadeIn" data-wow-duration="1s"
                                                        data-wow-delay="0.5s">
                                                        <a href="#">
                                                            <img src="{{ asset('frontend') }}/images/technology/tecnology-05.jpg"
                                                                class="img-responsive" alt="">
                                                        </a>
                                                    </div>
                                                    <div class="post-title-author-details">
                                                        <!-- post image -->
                                                        <h5><a href="#">Microbus runs over 2
                                                                pedestrians in Banani</a></h5>
                                                        <div class="post-editor-date">
                                                            <!-- post date -->
                                                            <div class="post-date">
                                                                <i class="pe-7s-clock"></i> Oct 6, 2016
                                                            </div>
                                                            <!-- post comment -->
                                                            <div class="post-author-comment"><i class="pe-7s-comment"></i>
                                                                13 </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- item-2 -->
                                <div class="item">
                                    <div class="row">
                                        <!-- left side post -->
                                        <div class="col-sm-6 col-md-6">
                                            <div class="post-wrapper wow fadeIn" data-wow-duration="1s">
                                                <!-- post title -->
                                                <h3><a href="#">There are many variations of passages
                                                        of Lorem Ipsum available</a></h3>
                                                <!-- post image -->
                                                <div class="post-thumb">
                                                    <a href="#">
                                                        <img src="{{ asset('frontend') }}/images/technology/tecnology-01.jpg"
                                                            class="img-responsive" alt="">
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="post-title-author-details">
                                                <div class="post-editor-date">
                                                    <!-- post date -->
                                                    <div class="post-date">
                                                        <i class="pe-7s-clock"></i> Oct 6, 2016
                                                    </div>
                                                    <!-- post comment -->
                                                    <div class="post-author-comment"><i class="pe-7s-comment"></i>
                                                        13 </div>
                                                </div>
                                                <p>All the Lorem Ipsum generators on the Internet tend to
                                                    repeat predefined chunks as necessary, making this the
                                                    first true <a href="#">Read more...</a></p>
                                            </div>
                                        </div>
                                        <!-- right side post -->
                                        <div class="col-sm-6 col-md-6">
                                            <div class="row rn_block">
                                                <div class="col-xs-6 col-md-6 col-sm-6 post-padding">
                                                    <!-- post image -->
                                                    <div class="post-thumb wow fadeIn" data-wow-duration="1s"
                                                        data-wow-delay="0.2s">
                                                        <a href="#">
                                                            <img src="{{ asset('frontend') }}/images/technology/tecnology-02.jpg"
                                                                class="img-responsive" alt="">
                                                        </a>
                                                    </div>
                                                    <div class="post-title-author-details">
                                                        <!-- post image -->
                                                        <h5><a href="#">Microbus runs over 2
                                                                pedestrians in Banani</a></h5>
                                                        <div class="post-editor-date">
                                                            <!-- post date -->
                                                            <div class="post-date">
                                                                <i class="pe-7s-clock"></i> Oct 6, 2016
                                                            </div>
                                                            <!-- post comment -->
                                                            <div class="post-author-comment"><i class="pe-7s-comment"></i>
                                                                13 </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-xs-6 col-md-6 col-sm-6 post-padding">
                                                    <!-- post image -->
                                                    <div class="post-thumb wow fadeIn" data-wow-duration="1s"
                                                        data-wow-delay="0.2s">
                                                        <a href="#">
                                                            <img src="{{ asset('frontend') }}/images/technology/tecnology-03.jpg"
                                                                class="img-responsive" alt="">
                                                        </a>
                                                    </div>
                                                    <div class="post-title-author-details">
                                                        <!-- post image -->
                                                        <h5><a href="#">Microbus runs over 2
                                                                pedestrians in Banani</a></h5>
                                                        <div class="post-editor-date">
                                                            <!-- post date -->
                                                            <div class="post-date">
                                                                <i class="pe-7s-clock"></i> Oct 6, 2016
                                                            </div>
                                                            <!-- post comment -->
                                                            <div class="post-author-comment"><i class="pe-7s-comment"></i>
                                                                13 </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-xs-6 col-md-6 col-sm-6 post-padding">
                                                    <!-- post image -->
                                                    <div class="post-thumb wow fadeIn" data-wow-duration="1s"
                                                        data-wow-delay="0.3s">
                                                        <a href="#">
                                                            <img src="{{ asset('frontend') }}/images/technology/tecnology-04.jpg"
                                                                class="img-responsive" alt="">
                                                        </a>
                                                    </div>
                                                    <div class="post-title-author-details">
                                                        <!-- post image -->
                                                        <h5><a href="#">Microbus runs over 2
                                                                pedestrians in Banani</a></h5>
                                                        <div class="post-editor-date">
                                                            <!-- post date -->
                                                            <div class="post-date">
                                                                <i class="pe-7s-clock"></i> Oct 6, 2016
                                                            </div>
                                                            <!-- post comment -->
                                                            <div class="post-author-comment"><i class="pe-7s-comment"></i>
                                                                13 </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-xs-6 col-md-6 col-sm-6 post-padding">
                                                    <!-- post image -->
                                                    <div class="post-thumb wow fadeIn" data-wow-duration="1s"
                                                        data-wow-delay="0.4s">
                                                        <a href="#">
                                                            <img src="{{ asset('frontend') }}/images/technology/tecnology-05.jpg"
                                                                class="img-responsive" alt="">
                                                        </a>
                                                    </div>
                                                    <div class="post-title-author-details">
                                                        <!-- post image -->
                                                        <h5><a href="#">Microbus runs over 2
                                                                pedestrians in Banani</a></h5>
                                                        <div class="post-editor-date">
                                                            <!-- post date -->
                                                            <div class="post-date">
                                                                <i class="pe-7s-clock"></i> Oct 6, 2016
                                                            </div>
                                                            <!-- post comment -->
                                                            <div class="post-author-comment"><i class="pe-7s-comment"></i>
                                                                13 </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- /.row -->
                    </section>
                </div>
                <!-- second content aside -->
                <div class="col-md-4 col-sm-4 left-padding">
                    <aside>
                        <!-- online vote -->
                        <div class="online-vote">
                            <h3 class="category-headding ">ONLINE VOTE</h3>
                            <div class="headding-border"></div>
                            <div class="vote-inner">
                                <p>All the Lorem Ipsum generators the Internet tend repeat predefined chunks
                                    as necessary, making this the first true Internet. </p>
                                <div class="radio-btn">
                                    <label class="radio-inline">
                                        <input type="radio" name="optradio">Yes</label>
                                    <label class="radio-inline">
                                        <input type="radio" name="optradio">No</label>
                                    <label class="radio-inline">
                                        <input type="radio" name="optradio">No comment</label>
                                </div>
                                <button type="button" class="btn btn-style">Success</button>
                            </div>
                        </div>
                        <!-- /.online vote -->
                        <!-- social icon -->
                        <h3 class="category-headding ">SOCIAL PIXEL</h3>
                        <div class="headding-border"></div>
                        <div class="social">
                            <ul>
                                <li><a href="#" class="facebook"><i class="fa  fa-facebook"></i><span>3987</span>
                                    </a></li>
                                <li><a href="#" class="twitter"><i class="fa  fa-twitter"></i><span>3987</span></a>
                                </li>
                                <li><a href="#" class="google"><i
                                            class="fa  fa-google-plus"></i><span>3987</span></a></li>
                                <li><a href="#" class="flickr"><i class="fa fa-flickr"></i><span>3987</span>
                                    </a></li>
                            </ul>
                        </div>
                        <!-- /.social icon -->
                        <!-- video -->
                        <div class="video-headding">Streaming Videos</div>
                        <div id="rypp-demo-4" class="RYPP r16-9" data-playlist="PLw8TejMbmHM6IegrJ4iECWNoFuG7RiCV_">
                            <div class="RYPP-video">
                                <div class="RYPP-video-player">
                                    <!-- Will be replaced -->
                                </div>
                            </div>
                            <div class="RYPP-playlist">
                                <header>
                                    <h2 class="_h1 RYPP-title">Playlist title</h2>
                                    <p class="RYPP-desc">Playlist subtitle <a href="#" target="_blank">#hashtag</a>
                                    </p>
                                </header>
                                <div class="RYPP-items"></div>
                            </div>
                        </div>
                        <!-- /.video -->
                    </aside>
                </div>
            </div>
        </div>
    </section>
    <!-- second content end -->
    <!-- Video News Area
                                                ============================================ -->
    <section class="video-post-inner">
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-12">
                    <h3 class="category-headding ">VIDEO POST</h3>
                    <div class="headding-border"></div>
                </div>
                <div class="col-sm-4">
                    <div class="post-style1">
                        <div class="post-wrapper wow fadeIn" data-wow-duration="1s">
                            <!-- post image -->
                            <a href="#" class="video-img-icon">
                                <i class="fa fa-play"></i>
                                <img src="{{ asset('frontend') }}/images/video-02.jpg" alt=""
                                    class="img-responsive">
                            </a>
                        </div>
                        <!-- post title -->
                        <h3><a href="#">There are many variations of passages of.</a></h3>
                        <div class="post-title-author-details">
                            <div class="date">
                                <ul>
                                    <li><img src="{{ asset('frontend') }}/images/comment-02.jpg" class="img-responsive"
                                            alt="">
                                    </li>
                                    <li>By <a title="" href="#"><span>Naeem Khan</span></a> --</li>
                                    <li><a title="" href="#">Oct 6, 2016</a> --</li>
                                    <li><a title="" href="#"><span>275 Comments</span></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="post-style1">
                        <div class="post-wrapper wow fadeIn" data-wow-duration="1s" data-wow-delay="0.2s">
                            <!-- post image -->
                            <a href="#" class="video-img-icon">
                                <i class="fa fa-play"></i>
                                <img src="{{ asset('frontend') }}/images/video-03.jpg" alt=""
                                    class="img-responsive">
                            </a>
                        </div>
                        <!-- post title -->
                        <h3><a href="#">There are many variations of passages of.</a></h3>
                        <div class="post-title-author-details">
                            <div class="date">
                                <ul>
                                    <li><img src="{{ asset('frontend') }}/images/comment-01.jpg" class="img-responsive"
                                            alt="">
                                    </li>
                                    <li>By <a title="" href="#"><span>Naeem Khan</span></a> --</li>
                                    <li><a title="" href="#">Oct 6, 2016</a> --</li>
                                    <li><a title="" href="#"><span>275 Comments</span></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="post-style1">
                        <div class="post-wrapper wow fadeIn" data-wow-duration="1s" data-wow-delay="0.4s">
                            <!-- post image -->
                            <a href="#" class="video-img-icon">
                                <i class="fa fa-play"></i>
                                <img src="{{ asset('frontend') }}/images/video-04.jpg" alt=""
                                    class="img-responsive">
                            </a>
                        </div>
                        <!-- post title -->
                        <h3><a href="#">There are many variations of passages of.</a></h3>
                        <div class="post-title-author-details">
                            <div class="date">
                                <ul>
                                    <li><img src="{{ asset('frontend') }}/images/comment-02.jpg" class="img-responsive"
                                            alt="">
                                    </li>
                                    <li>By <a title="" href="#"><span>Naeem Khan</span></a> --</li>
                                    <li><a title="" href="#">Oct 6, 2016</a> --</li>
                                    <li><a title="" href="#"><span>275 Comments</span></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Article Post
                                                ============================================ -->
    <section class="article-post-inner">
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-8">
                    <div class="articale-list">
                        <h3 class="category-headding ">Latest News</h3>
                        <div class="headding-border"></div>
                        <!--Post list-->
                        <div class="post-style2 wow fadeIn" data-wow-duration="1s">
                            <a href="#"><img src="{{ asset('frontend') }}/images/category/category-post-11.jpg"
                                    alt=""></a>
                            <div class="post-style2-detail">
                                <h3><a href="#" title="">It uses a dictionary of over 200 Latin words,
                                        combined with</a></h3>
                                <div class="date">
                                    <ul>
                                        <li><img src="{{ asset('frontend') }}/images/comment-01.jpg"
                                                class="img-responsive" alt="">
                                        </li>
                                        <li>By <a title="" href="#"><span>Naeem Khan</span></a> --</li>
                                        <li><a title="" href="#">Oct 6, 2016</a> --</li>
                                        <li><a title="" href="#"><span>275 Comments</span></a></li>
                                    </ul>
                                </div>
                                <p>Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum
                                    auctor, nisi elit consequat ipsum, nec sagittis sem nibh.</p>
                                <button type="button" class="btn btn-style">Reade more</button>
                            </div>
                        </div>
                        <!--Post list-->
                        <div class="post-style2 wow fadeIn" data-wow-duration="1s" data-wow-delay="0.1s">
                            <a href="#"><img src="{{ asset('frontend') }}/images/category/category-post-12.jpg"
                                    alt=""></a>
                            <div class="post-style2-detail">
                                <h3><a href="#" title="">Lorem Ipsum is simply dummy text of the
                                        printing
                                        .</a></h3>
                                <div class="date">
                                    <ul>
                                        <li><img src="{{ asset('frontend') }}/images/comment-02.jpg"
                                                class="img-responsive" alt="">
                                        </li>
                                        <li>By <a title="" href="#"><span>Naeem Khan</span></a> --</li>
                                        <li><a title="" href="#">Oct 6, 2016</a> --</li>
                                        <li><a title="" href="#"><span>275 Comments</span></a></li>
                                    </ul>
                                </div>
                                <p>Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum
                                    auctor, nisi elit consequat ipsum, nec sagittis sem nibh.</p>
                                <button type="button" class="btn btn-style">Reade more</button>
                            </div>
                        </div>
                        <!-- Post list -->
                        <div class="post-style2 wow fadeIn" data-wow-duration="1s" data-wow-delay="0.2s">
                            <a href="#"><img src="{{ asset('frontend') }}/images/category/category-post-13.jpg"
                                    alt=""></a>
                            <div class="post-style2-detail">
                                <h3><a href="#" title="">If you are going to use a passage of Lorem
                                        Ipsum
                                        .</a></h3>
                                <div class="date">
                                    <ul>
                                        <li><img src="{{ asset('frontend') }}/images/comment-01.jpg"
                                                class="img-responsive" alt="">
                                        </li>
                                        <li>By <a title="" href="#"><span>Naeem Khan</span></a> --</li>
                                        <li><a title="" href="#">Oct 6, 2016</a> --</li>
                                        <li><a title="" href="#"><span>275 Comments</span></a></li>
                                    </ul>
                                </div>
                                <p>Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum
                                    auctor, nisi elit consequat ipsum, nec sagittis sem nibh.</p>
                                <button type="button" class="btn btn-style">Reade more</button>
                            </div>
                        </div>
                        <!-- Post list -->
                        <div class="post-style2 wow fadeIn" data-wow-duration="1s" data-wow-delay="0.3s">
                            <a href="#"><img src="{{ asset('frontend') }}/images/category/category-post-14.jpg"
                                    alt=""></a>
                            <div class="post-style2-detail">
                                <h3><a href="#" title="">Check Out the Amazing Photos of Lauren
                                        Conradâ€™s
                                        Trip</a></h3>
                                <div class="date">
                                    <ul>
                                        <li><img src="{{ asset('frontend') }}/images/comment-02.jpg"
                                                class="img-responsive" alt="">
                                        </li>
                                        <li>By <a title="" href="#"><span>Naeem Khan</span></a> --</li>
                                        <li><a title="" href="#">Oct 6, 2016</a> --</li>
                                        <li><a title="" href="#"><span>275 Comments</span></a></li>
                                    </ul>
                                </div>
                                <p>Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum
                                    auctor, nisi elit consequat ipsum, nec sagittis sem nibh.</p>
                                <button type="button" class="btn btn-style">Reade more</button>
                            </div>
                        </div>
                        <!-- Post list -->
                        <div class="post-style2 wow fadeIn" data-wow-duration="1s" data-wow-delay="0.4s">
                            <a href="#"><img src="{{ asset('frontend') }}/images/category/category-post-15.jpg"
                                    alt=""></a>
                            <div class="post-style2-detail">
                                <h3><a href="#" title="">Many desktop publishing packages and web
                                        page.</a></h3>
                                <div class="date">
                                    <ul>
                                        <li><img src="{{ asset('frontend') }}/images/comment-01.jpg"
                                                class="img-responsive" alt=""></li>
                                        <li>By <a title="" href="#"><span>Naeem Khan</span></a> --</li>
                                        <li><a title="" href="#">Oct 6, 2016</a> --</li>
                                        <li><a title="" href="#"><span>275 Comments</span></a></li>
                                    </ul>
                                </div>
                                <p>Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum
                                    auctor, nisi elit consequat ipsum, nec sagittis sem nibh.</p>
                                <button type="button" class="btn btn-style">Reade more</button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4 left-padding">
                    <!-- online vote -->
                    <div class="online-vote">
                        <h3 class="category-headding ">ONLINE VOTE</h3>
                        <div class="headding-border"></div>
                        <div class="vote-inner">
                            <p>All the Lorem Ipsum generators the Internet tend repeat predefined chunks as necessary,
                                making this the . </p>
                            <div class="radio-btn">
                                <label class="radio-inline">
                                    <input type="radio" name="optradio">Yes</label>
                                <label class="radio-inline">
                                    <input type="radio" name="optradio">No</label>
                                <label class="radio-inline">
                                    <input type="radio" name="optradio">No comment</label>
                            </div>
                            <button type="button" class="btn btn-style">Success</button>
                        </div>
                    </div>
                    <!-- /.online vote -->
                    <!-- slider widget -->
                    <div class="widget-slider-inner">
                        <h3 class="category-headding ">Slider Widget</h3>
                        <div class="headding-border"></div>
                        <div id="widget-slider" class="owl-carousel owl-theme">
                            <!-- widget item -->
                            <div class="item">
                                <a href="#"><img src="{{ asset('frontend') }}/images/slider-widget-1.jpg"
                                        alt=""></a>
                                <h4><a href="#">For good results must be make good plan</a></h4>
                                <div class="date">
                                    <ul>
                                        <li>By<a title="" href="#"><span>Jone Kilna</span></a> --</li>
                                        <li><a title="" href="#">Oct 6, 2016</a></li>
                                    </ul>
                                </div>
                                <p>Dhaka: Dhaka Metropolitan Sessions a Judge Court on Wednesday issued warrants for the
                                    arrest of 29 BNP leaders, including some ina senior leaders...</p>
                            </div>
                            <!-- widget item -->
                            <div class="item">
                                <a href="#"><img src="{{ asset('frontend') }}/images/slider-widget-2.jpg"
                                        alt=""></a>
                                <h4><a href="#">Dog invason sparks chaos at IPL match</a></h4>
                                <div class="date">
                                    <ul>
                                        <li>By<a title="" href="#"><span>Jone Kilna</span></a> --</li>
                                        <li><a title="" href="#">Oct 6, 2016</a></li>
                                    </ul>
                                </div>
                                <p>Dhaka: Dhaka Metropolitan Sessions a Judge Court on Wednesday issued warrants for the
                                    arrest of 29 BNP leaders, including some ina senior leaders ...</p>
                            </div>
                            <!-- widget item -->
                            <div class="item">
                                <a href="#"><img src="{{ asset('frontend') }}/images/slider-widget-3.jpg"
                                        alt=""></a>
                                <h4><a href="#">For good results must be make good plan</a></h4>
                                <div class="date">
                                    <ul>
                                        <li>By<a title="" href="#"><span>Jone Kilna</span></a> --</li>
                                        <li><a title="" href="#">Oct 6, 2016</a></li>
                                    </ul>
                                </div>
                                <p>Dhaka: Dhaka Metropolitan Sessions a Judge Court on Wednesday issued warrants for the
                                    arrest of 29 BNP leaders, including some ina senior leaders ...</p>
                            </div>
                        </div>
                    </div>
                    <!-- twitter feed -->
                    <h3 class="category-headding ">TWITTER FEED</h3>
                    <div class="headding-border"></div>
                    <div class="feed-inner">
                        <p>It is a long established fact that a reader will be distracted by the.</p>
                        <div class="feed-footer">
                            <i class="fa fa-twitter" aria-hidden="true"></i>
                            <cite><a href="#" class="social-feed__author">@newsagency</a></cite>
                            <span class="feed-date">2 hours ago</span>
                        </div>
                        <hr>
                        <p>Contrary to popular belief, Lorem Ipsum is not simply random text.</p>
                        <div class="feed-footer">
                            <i class="fa fa-twitter" aria-hidden="true"></i>
                            <cite><a href="#" class="social-feed__author">@newsagency</a></cite>
                            <span class="feed-date">2 hours ago</span>
                        </div>
                        <hr>
                        <p>The standard chunk of Lorem Ipsum used since the 1500s is.</p>
                        <div class="feed-footer">
                            <i class="fa fa-twitter" aria-hidden="true"></i>
                            <cite><a href="#" class="social-feed__author">@newsagency</a></cite>
                            <span class="feed-date">2 hours ago</span>
                        </div>
                    </div>
                    <!-- /.twitter feed -->
                </div>
            </div>
        </div>
    </section>
    <!-- pagination
                                                ============================================ -->
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <ul class="pagination">
                    <li>
                        <a href="#" class="prev">
                            <i class="pe-7s-angle-left"></i>
                        </a>
                    </li>
                    <li> <a href="#">1</a></li>
                    <li> <a href="#" class="active">2</a></li>
                    <li> <a href="#">3</a></li>
                    <li> <a href="#">4</a></li>
                    <li> ... </li>
                    <li> <a href="#">15</a></li>
                    <li>
                        <a href="#" class="next"> <i class="pe-7s-angle-right"></i></a>
                    </li>
                </ul>
            </div>
            <div class="col-sm-12">
                <div class="banner">
                    <img src="{{ asset('frontend') }}/images/top-bannner2.jpg" class="img-responsive center-block"
                        alt="">
                </div>
            </div>
        </div>
    </div>
@endsection
