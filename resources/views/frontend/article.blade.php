@extends('frontend.common_template')

@section('content')

    <div class="section">
        <div class="container">

            <div class="row">

                <div class="col-lg-4">
                    <div class="sidebar">

                        <!-- Search Widget Start -->
                        <div class="sidebar-widget widget-search">
                            <h5 class="widget-title">Search</h5>
                            <form method="post">
                                <div class="sigma_search-adv-input">
                                    <input type="text" class="form-control" placeholder="Search Posts" name="search"
                                           value="">
                                    <button type="submit" name="button"><i class="fa fa-search"></i></button>
                                </div>
                            </form>
                        </div>
                        <!-- Search Widget End -->

                        <!-- Popular Feed Start -->
                        <div class="sidebar-widget widget-recent-posts">
                            <h5 class="widget-title">Recent Posts</h5>
                            <article class="sigma_recent-post">
                                <a href="blog-details.html"><img src="assets/img/blog/md/1.jpg" alt="post"></a>
                                <div class="sigma_recent-post-body">
                                    <h6><a href="blog-details.html">World Scholars Meetup</a></h6>
                                    <a href="blog-details.html"> <i class="far fa-calendar"></i> May 20, 2022</a>
                                </div>
                            </article>
                            <article class="sigma_recent-post">
                                <a href="blog-details.html"><img src="assets/img/blog/md/2.jpg" alt="post"></a>
                                <div class="sigma_recent-post-body">
                                    <h6><a href="blog-details.html">Importance of Lailatul Qadr</a></h6>
                                    <a href="blog-details.html"> <i class="far fa-calendar"></i> May 20, 2022</a>
                                </div>
                            </article>
                            <article class="sigma_recent-post">
                                <a href="blog-details.html"><img src="assets/img/blog/md/3.jpg" alt="post"></a>
                                <div class="sigma_recent-post-body">
                                    <h6><a href="blog-details.html">Modern Islam Challenge</a></h6>
                                    <a href="blog-details.html"> <i class="far fa-calendar"></i> May 20, 2022</a>
                                </div>
                            </article>
                        </div>
                        <!-- Popular Feed End -->

                        <!-- Social Media Start -->
                        <div class="sidebar-widget">
                            <h5 class="widget-title">Never Miss Out</h5>
                            <ul class="sigma_sm square light">
                                <li>
                                    <a href="#">
                                        <i class="fab fa-facebook-f"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <i class="fab fa-linkedin-in"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <i class="fab fa-twitter"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <i class="fab fa-youtube"></i>
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <!-- Social Media End -->

                        <!-- Twitter Feed Start -->
                        <div class="sidebar-widget widget-twitter">
                            <h5 class="widget-title">Twitter Feed</h5>
                            <div class="twitter-item d-flex align-items-start">
                                <i class="fab fa-twitter custom-primary me-4 mt-2"></i>
                                <div class="twitter-item-content">
                                    <p>Rescue - #Gutenberg ready @ wordpress Theme for Creative Bloggers available on
                                        @Templatemonster https://t.co/2r1POkkgVC ... </p>
                                    <strong>November 25, 2022</strong>
                                </div>
                            </div>
                            <div class="twitter-item d-flex align-items-start">
                                <i class="fab fa-twitter custom-primary me-4 mt-2"></i>
                                <div class="twitter-item-content">
                                    <p>Rescue - #Gutenberg ready @ wordpress Theme for Creative Bloggers available on
                                        @Templatemonster https://t.co/2r1POkkgVC ... </p>
                                    <strong>November 25, 2022</strong>
                                </div>
                            </div>
                            <div class="twitter-item d-flex align-items-start">
                                <i class="fab fa-twitter custom-primary me-4 mt-2"></i>
                                <div class="twitter-item-content">
                                    <p>Rescue - #Gutenberg ready @ wordpress Theme for Creative Bloggers available on
                                        @Templatemonster https://t.co/2r1POkkgVC ... </p>
                                    <strong>November 25, 2022</strong>
                                </div>
                            </div>
                        </div>
                        <!-- Twitter Feed End -->

                        <!-- Popular Tags Start -->
                        <div class="sidebar-widget">
                            <h5 class="widget-title">Popular Tags</h5>
                            <div class="tagcloud">
                                <a href="#">Isabella</a>
                                <a href="#">Samantha</a>
                                <a href="#">Emily</a>
                                <a href="#">June</a>
                                <a href="#">Grace</a>
                                <a href="#">Madison</a>
                                <a href="#">Heather</a>
                                <a href="#">Micheal</a>
                            </div>
                        </div>
                        <!-- Popular Tags End -->

                    </div>
                </div>

                <div class="col-lg-8">
                    <div class="row">

                        <!-- Article Start -->
                        <div class="col-md-6">
                            <article class="sigma_post">
                                <div class="sigma_post-thumb">
                                    <a href="blog-details.html">
                                        <img src="assets/img/blog/1.jpg" alt="post">
                                    </a>
                                </div>
                                <div class="sigma_post-body">
                                    <div class="sigma_post-meta">
                                        <div class="me-3">
                                            <i class="fas fa-star-and-crescent"></i>
                                            <a href="blog-details.html" class="sigma_post-category">Mosque</a>
                                        </div>
                                        <a href="blog-details.html" class="sigma_post-date"> <i
                                                class="far fa-calendar"></i> May 20, 2022</a>
                                    </div>
                                    <h5><a href="{{route('article_detail')}}">Learn Hajj Ritual, Munajaat</a></h5>
                                    <div class="sigma_post-single-author">
                                        <img src="assets/img/people/1.jpg" alt="author">
                                        <div class="sigma_post-single-author-content">
                                            By <p>Yaseen Asad</p>
                                        </div>
                                    </div>
                                </div>
                            </article>
                        </div>
                        <!-- Article End -->

                        <!-- Article Start -->
                        <div class="col-md-6">
                            <article class="sigma_post">
                                <div class="sigma_post-thumb">
                                    <a href="blog-details.html">
                                        <img src="assets/img/blog/2.jpg" alt="post">
                                    </a>
                                </div>
                                <div class="sigma_post-body">
                                    <div class="sigma_post-meta">
                                        <div class="me-3">
                                            <i class="fas fa-star-and-crescent"></i>
                                            <a href="blog-details.html" class="sigma_post-category">Mosque</a>,
                                            <a href="blog-details.html" class="sigma_post-category">Love</a>
                                        </div>
                                        <a href="blog-details.html" class="sigma_post-date"> <i
                                                class="far fa-calendar"></i> May 20, 2022</a>
                                    </div>
                                    <h5><a href="blog-details.html">Importance of Prayer</a></h5>
                                    <div class="sigma_post-single-author">
                                        <img src="assets/img/people/2.jpg" alt="author">
                                        <div class="sigma_post-single-author-content">
                                            By <p>Yaseen Asad</p>
                                        </div>
                                    </div>
                                </div>
                            </article>
                        </div>
                        <!-- Article End -->

                        <!-- Article Start -->
                        <div class="col-md-6">
                            <article class="sigma_post">
                                <div class="sigma_post-thumb">
                                    <a href="blog-details.html">
                                        <img src="assets/img/blog/3.jpg" alt="post">
                                    </a>
                                </div>
                                <div class="sigma_post-body">
                                    <div class="sigma_post-meta">
                                        <div class="me-3">
                                            <i class="fas fa-star-and-crescent"></i>
                                            <a href="blog-details.html" class="sigma_post-category">Mosque</a>,
                                            <a href="blog-details.html" class="sigma_post-category">Love</a>
                                        </div>
                                        <a href="blog-details.html" class="sigma_post-date"> <i
                                                class="far fa-calendar"></i> May 20, 2022</a>
                                    </div>
                                    <h5><a href="blog-details.html">World Scholars Meetup</a></h5>
                                    <div class="sigma_post-single-author">
                                        <img src="assets/img/people/1.jpg" alt="author">
                                        <div class="sigma_post-single-author-content">
                                            By <p>Yaseen Asad</p>
                                        </div>
                                    </div>
                                </div>
                            </article>
                        </div>
                        <!-- Article End -->

                        <!-- Article Start -->
                        <div class="col-md-6">
                            <article class="sigma_post">
                                <div class="sigma_post-thumb">
                                    <a href="blog-details.html">
                                        <img src="assets/img/blog/4.jpg" alt="post">
                                    </a>
                                </div>
                                <div class="sigma_post-body">
                                    <div class="sigma_post-meta">
                                        <div class="me-3">
                                            <i class="fas fa-star-and-crescent"></i>
                                            <a href="blog-details.html" class="sigma_post-category">Mosque</a>,
                                            <a href="blog-details.html" class="sigma_post-category">Love</a>
                                        </div>
                                        <a href="blog-details.html" class="sigma_post-date"> <i
                                                class="far fa-calendar"></i> May 20, 2022</a>
                                    </div>
                                    <h5><a href="blog-details.html">Modern Islam Challenge</a></h5>
                                    <div class="sigma_post-single-author">
                                        <img src="assets/img/people/1.jpg" alt="author">
                                        <div class="sigma_post-single-author-content">
                                            By <p>Yaseen Asad</p>
                                        </div>
                                    </div>
                                </div>
                            </article>
                        </div>
                        <!-- Article End -->

                        <!-- Article Start -->
                        <div class="col-md-6">
                            <article class="sigma_post">
                                <div class="sigma_post-thumb">
                                    <a href="blog-details.html">
                                        <img src="assets/img/blog/5.jpg" alt="post">
                                    </a>
                                </div>
                                <div class="sigma_post-body">
                                    <div class="sigma_post-meta">
                                        <div class="me-3">
                                            <i class="fas fa-star-and-crescent"></i>
                                            <a href="blog-details.html" class="sigma_post-category">Mosque</a>,
                                            <a href="blog-details.html" class="sigma_post-category">Love</a>
                                        </div>
                                        <a href="blog-details.html" class="sigma_post-date"> <i
                                                class="far fa-calendar"></i> May 20, 2022</a>
                                    </div>
                                    <h5><a href="blog-details.html">Importance of Lailatul Qadr</a></h5>
                                    <div class="sigma_post-single-author">
                                        <img src="assets/img/people/2.jpg" alt="author">
                                        <div class="sigma_post-single-author-content">
                                            By <p>Yaseen Asad</p>
                                        </div>
                                    </div>
                                </div>
                            </article>
                        </div>
                        <!-- Article End -->

                        <!-- Article Start -->
                        <div class="col-md-6">
                            <article class="sigma_post">
                                <div class="sigma_post-thumb">
                                    <a href="blog-details.html">
                                        <img src="assets/img/blog/6.html" alt="post">
                                    </a>
                                </div>
                                <div class="sigma_post-body">
                                    <div class="sigma_post-meta">
                                        <div class="me-3">
                                            <i class="fas fa-star-and-crescent"></i>
                                            <a href="blog-details.html" class="sigma_post-category">Mosque</a>,
                                            <a href="blog-details.html" class="sigma_post-category">Love</a>
                                        </div>
                                        <a href="blog-details.html" class="sigma_post-date"> <i
                                                class="far fa-calendar"></i> May 20, 2022</a>
                                    </div>
                                    <h5><a href="blog-details.html">Learn Hajj Ritual, Munajaat</a></h5>
                                    <div class="sigma_post-single-author">
                                        <img src="assets/img/people/1.jpg" alt="author">
                                        <div class="sigma_post-single-author-content">
                                            By <p>Yaseen Asad</p>
                                        </div>
                                    </div>
                                </div>
                            </article>
                        </div>
                        <!-- Article End -->

                        <!-- Article Start -->
                        <div class="col-md-6">
                            <article class="sigma_post">
                                <div class="sigma_post-thumb">
                                    <a href="blog-details.html">
                                        <img src="assets/img/blog/7.jpg" alt="post">
                                    </a>
                                </div>
                                <div class="sigma_post-body">
                                    <div class="sigma_post-meta">
                                        <div class="me-3">
                                            <i class="fas fa-star-and-crescent"></i>
                                            <a href="blog-details.html" class="sigma_post-category">Mosque</a>,
                                            <a href="blog-details.html" class="sigma_post-category">Love</a>
                                        </div>
                                        <a href="blog-details.html" class="sigma_post-date"> <i
                                                class="far fa-calendar"></i> May 20, 2022</a>
                                    </div>
                                    <h5><a href="blog-details.html">Importance of Prayer</a></h5>
                                    <div class="sigma_post-single-author">
                                        <img src="assets/img/people/1.jpg" alt="author">
                                        <div class="sigma_post-single-author-content">
                                            By <p>Yaseen Asad</p>
                                        </div>
                                    </div>
                                </div>
                            </article>
                        </div>
                        <!-- Article End -->

                        <!-- Article Start -->
                        <div class="col-md-6">
                            <article class="sigma_post">
                                <div class="sigma_post-thumb">
                                    <a href="blog-details.html">
                                        <img src="assets/img/blog/8.jpg" alt="post">
                                    </a>
                                </div>
                                <div class="sigma_post-body">
                                    <div class="sigma_post-meta">
                                        <div class="me-3">
                                            <i class="fas fa-star-and-crescent"></i>
                                            <a href="blog-details.html" class="sigma_post-category">Mosque</a>,
                                            <a href="blog-details.html" class="sigma_post-category">Love</a>
                                        </div>
                                        <a href="blog-details.html" class="sigma_post-date"> <i
                                                class="far fa-calendar"></i> May 20, 2022</a>
                                    </div>
                                    <h5><a href="blog-details.html">World Scholars Meetup</a></h5>
                                    <div class="sigma_post-single-author">
                                        <img src="assets/img/people/2.jpg" alt="author">
                                        <div class="sigma_post-single-author-content">
                                            By <p>Yaseen Asad</p>
                                        </div>
                                    </div>
                                </div>
                            </article>
                        </div>
                        <!-- Article End -->

                    </div>
                    <!-- Pagination Start -->
                    <ul class="pagination mb-0">
                        <li class="page-item"><a class="page-link" href="#"> <i class="far fa-chevron-left"></i> </a>
                        </li>
                        <li class="page-item"><a class="page-link" href="#">1</a></li>
                        <li class="page-item active">
                            <a class="page-link" href="#">2 <span class="sr-only">(current)</span></a>
                        </li>
                        <li class="page-item"><a class="page-link" href="#">3</a></li>
                        <li class="page-item"><a class="page-link" href="#"> <i class="far fa-chevron-right"></i> </a>
                        </li>
                    </ul>
                    <!-- Pagination End -->

                </div>

            </div>

        </div>
    </div>

@endsection
