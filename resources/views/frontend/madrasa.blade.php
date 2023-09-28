@extends('frontend.common_template')

@section('content')

    <!-- Categories Start -->
    <div class="section section-padding">
        <div class="container">

            <div class="text-center filter-items">
                <h5 class="active portfolio-trigger" data-filter="*">All</h5>
                <h5 class="portfolio-trigger" data-filter=".coaching">Coaching</h5>
                <h5 class="portfolio-trigger" data-filter=".stakeholder">Stakeholder</h5>
                <h5 class="portfolio-trigger" data-filter=".strategy">Strategy</h5>
                <h5 class="portfolio-trigger" data-filter=".relations">Relations</h5>
            </div>

            <div class="portfolio-filter row">
                <div class="col-lg-4 coaching">
                    <div class="sigma_portfolio-item">
                        <img src="assets/img/ministries/13.jpg" alt="portfolio">
                        <div class="sigma_portfolio-item-content">
                            <div class="sigma_portfolio-item-content-inner">
                                <h5><a href="ministry-details.html"> Quraan Learning </a></h5>
                                <p>The Center is committed to preserving an Islamic identity, building.</p>
                            </div>
                            <a href="{{route('madrasa_detail')}}"><i class="fal fa-plus"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 strategy">
                    <div class="sigma_portfolio-item">
                        <img src="assets/img/ministries/14.jpg" alt="portfolio">
                        <div class="sigma_portfolio-item-content">
                            <div class="sigma_portfolio-item-content-inner">
                                <h5><a href="ministry-details.html"> Funeral Service </a></h5>
                                <p>The Center is committed to preserving an Islamic identity, building.</p>
                            </div>
                            <a href="{{route('madrasa_detail')}}"><i class="fal fa-plus"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 coaching strategy">
                    <div class="sigma_portfolio-item">
                        <img src="assets/img/ministries/15.jpg" alt="portfolio">
                        <div class="sigma_portfolio-item-content">
                            <div class="sigma_portfolio-item-content-inner">
                                <h5><a href="ministry-details.html"> Mosque Renovation </a></h5>
                                <p>The Center is committed to preserving an Islamic identity, building.</p>
                            </div>
                            <a href="{{route('madrasa_detail')}}"><i class="fal fa-plus"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 relations coaching">
                    <div class="sigma_portfolio-item">
                        <img src="assets/img/ministries/16.jpg" alt="portfolio">
                        <div class="sigma_portfolio-item-content">
                            <div class="sigma_portfolio-item-content-inner">
                                <h5><a href="ministry-details.html"> Shahada </a></h5>
                                <p>The Center is committed to preserving an Islamic identity, building.</p>
                            </div>
                            <a href="ministry-details.html"><i class="fal fa-plus"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 stakeholder strategy">
                    <div class="sigma_portfolio-item">
                        <img src="assets/img/ministries/17.jpg" alt="portfolio">
                        <div class="sigma_portfolio-item-content">
                            <div class="sigma_portfolio-item-content-inner">
                                <h5><a href="ministry-details.html"> Marriage </a></h5>
                                <p>The Center is committed to preserving an Islamic identity, building.</p>
                            </div>
                            <a href="ministry-details.html"><i class="fal fa-plus"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 stakeholder">
                    <div class="sigma_portfolio-item">
                        <img src="assets/img/ministries/12.jpg" alt="portfolio">
                        <div class="sigma_portfolio-item-content">
                            <div class="sigma_portfolio-item-content-inner">
                                <h5><a href="ministry-details.html"> Help Poor </a></h5>
                                <p>The Center is committed to preserving an Islamic identity, building.</p>
                            </div>
                            <a href="ministry-details.html"><i class="fal fa-plus"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 coaching">
                    <div class="sigma_portfolio-item">
                        <img src="assets/img/ministries/7.jpg" alt="portfolio">
                        <div class="sigma_portfolio-item-content">
                            <div class="sigma_portfolio-item-content-inner">
                                <h5><a href="ministry-details.html"> Sunday Ministry </a></h5>
                                <p>The Center is committed to preserving an Islamic identity, building.</p>
                            </div>
                            <a href="ministry-details.html"><i class="fal fa-plus"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 relations">
                    <div class="sigma_portfolio-item">
                        <img src="assets/img/ministries/8.jpg" alt="portfolio">
                        <div class="sigma_portfolio-item-content">
                            <div class="sigma_portfolio-item-content-inner">
                                <h5><a href="ministry-details.html"> Sermon's Ministry </a></h5>
                                <p>The Center is committed to preserving an Islamic identity, building.</p>
                            </div>
                            <a href="ministry-details.html"><i class="fal fa-plus"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 relations coaching">
                    <div class="sigma_portfolio-item">
                        <img src="assets/img/ministries/9.jpg" alt="portfolio">
                        <div class="sigma_portfolio-item-content">
                            <div class="sigma_portfolio-item-content-inner">
                                <h5><a href="ministry-details.html"> Labour Ministry </a></h5>
                                <p>The Center is committed to preserving an Islamic identity, building.</p>
                            </div>
                            <a href="ministry-details.html"><i class="fal fa-plus"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 stakeholder strategy">
                    <div class="sigma_portfolio-item">
                        <img src="assets/img/ministries/10.jpg" alt="portfolio">
                        <div class="sigma_portfolio-item-content">
                            <div class="sigma_portfolio-item-content-inner">
                                <h5><a href="ministry-details.html"> Event Ministry </a></h5>
                                <p>The Center is committed to preserving an Islamic identity, building.</p>
                            </div>
                            <a href="ministry-details.html"><i class="fal fa-plus"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 stakeholder">
                    <div class="sigma_portfolio-item">
                        <img src="assets/img/ministries/11.jpg" alt="portfolio">
                        <div class="sigma_portfolio-item-content">
                            <div class="sigma_portfolio-item-content-inner">
                                <h5><a href="ministry-details.html"> Mosque Minsitry </a></h5>
                                <p>The Center is committed to preserving an Islamic identity, building.</p>
                            </div>
                            <a href="ministry-details.html"><i class="fal fa-plus"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 coaching">
                    <div class="sigma_portfolio-item">
                        <img src="assets/img/ministries/12.jpg" alt="portfolio">
                        <div class="sigma_portfolio-item-content">
                            <div class="sigma_portfolio-item-content-inner">
                                <h5><a href="ministry-details.html"> Men Ministry </a></h5>
                                <p>The Center is committed to preserving an Islamic identity, building.</p>
                            </div>
                            <a href="ministry-details.html"><i class="fal fa-plus"></i></a>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
    <!-- Categories End -->

    <!-- Form Start -->
    <div class="section dark-overlay dark-overlay-3 bg-cover bg-center bg-norepeat"
         style="background-image: url(assets/img/bg1.jpg)">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 mb-lg-30">
                    <form method="post">
                        <div class="form-row">
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <i class="far fa-user"></i>
                                    <input type="text" class="form-control transparent" placeholder="First Name"
                                           name="fname" value="">
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <i class="far fa-user"></i>
                                    <input type="text" class="form-control transparent" placeholder="Last Name"
                                           name="lname" value="">
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <i class="far fa-pencil"></i>
                                    <input type="text" class="form-control transparent" placeholder="Subject"
                                           name="subject" value="">
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <i class="far fa-envelope"></i>
                                    <input type="text" class="form-control transparent" placeholder="Email Address"
                                           name="email" value="">
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="form-group">
                                    <textarea name="message" class="form-control transparent"
                                              placeholder="Enter Message" rows="4"></textarea>
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <button type="submit" class="sigma_btn-custom d-block w-100" name="button"> Get a Quote
                                    <i class="far fa-arrow-right"></i></button>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="col-lg-6">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="sigma_client">
                                <img src="assets/img/clients/1.png" alt="client">
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="sigma_client">
                                <img src="assets/img/clients/2.png" alt="client">
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="sigma_client">
                                <img src="assets/img/clients/3.png" alt="client">
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="sigma_client">
                                <img src="assets/img/clients/4.png" alt="client">
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="sigma_client">
                                <img src="assets/img/clients/5.png" alt="client">
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="sigma_client">
                                <img src="assets/img/clients/6.png" alt="client">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Form End -->

    <!-- Blog Start -->
    <div class="section section-padding">
        <div class="container">

            <div class="section-title text-center">
                <p class="subtitle">Blog</p>
                <h4 class="title">News Feed</h4>
            </div>

            <div class="row">

                <!-- Article Start -->
                <div class="col-lg-4 col-md-6">
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
                                <a href="blog-details.html" class="sigma_post-date"> <i class="far fa-calendar"></i> May
                                    20, 2022</a>
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
                <div class="col-lg-4 col-md-6">
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
                                    <a href="blog-details.html" class="sigma_post-category">Mosque</a>,
                                    <a href="blog-details.html" class="sigma_post-category">Love</a>
                                </div>
                                <a href="blog-details.html" class="sigma_post-date"> <i class="far fa-calendar"></i> May
                                    20, 2022</a>
                            </div>
                            <h5><a href="blog-details.html">Learn Hajj Ritual, Munajaat</a></h5>
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
                <div class="col-lg-4 col-md-6">
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
                                <a href="blog-details.html" class="sigma_post-date"> <i class="far fa-calendar"></i> May
                                    20, 2022</a>
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

            </div>

        </div>
    </div>
    <!-- Blog End -->

@endsection
