@extends('frontend.common_template')

@section('content')

    <!-- Post Content Start -->
    <div class="section">
        <div class="container">

            <div class="entry-content">

                <div class="sigma_post-single-thumb">
                    <img src="assets/img/service/details/1.jpg" alt="post">
                    <div class="sigma_sermon-box">
                        <div class="sigma_box">
                            <span class="subtitle">Latest Sermons</span>
                            <h4 class="title mb-0">
                                <a href="#">Amble through Surahs of Quran.</a>
                            </h4>
                            <ul class="sigma_sermon-info mb-0">
                                <li>
                                    <i class="far fa-user"></i>
                                    Message From
                                    <a href="#" class="ms-2"><u>Hameed Bin Malik</u></a>
                                </li>
                                <li class="mt-0 ms-4">
                                    <i class="far fa-calendar-check"></i>
                                    Aug 12, 2022
                                </li>
                            </ul>
                            <ul class="sigma_sm square">
                                <li>
                                    <a href="#">
                                        <i class="fab fa-youtube"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <i class="far fa-file-pdf"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <i class="fas fa-share-alt"></i>
                                    </a>
                                </li>
                            </ul>
                            <div class="sigma_audio-player">
                                <div id="play-btn">
                                    <i class="fa fa-play"> </i>
                                    <i class="fa fa-pause"></i>
                                </div>
                                <div class="audio-wrapper" id="player-container">
                                    <audio id="player" ontimeupdate="initProgressBar()">
                                        <source src="http://www.lukeduncan.me/oslo.mp3" type="audio/mp3">
                                    </audio>
                                </div>
                                <div class="player-controls scrubber">
                                    <small class="end-time">5:44</small>
                                    <span id="seekObjContainer"> <progress id="seekObj" value="0"
                                                                           max="1"></progress> </span>
                                    <i class="fa fa-volume-up"></i>
                                </div>
                                <div class="next_prev">
                                    <i class="fa fa-angle-left"></i>
                                    <i class="fa fa-angle-right"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <p>
                    May Allah bless you! Thank you. Those who (in charity) spend of their goods by night and by day, in
                    secret and in public, have their reward with their Lord The Weekend School of the Islamic Center of
                    Allah is committed to providing quality
                    Islamic Education.
                    It has survived not only five centuries, but also the leap into electronic typesetting, remaining
                    essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets
                    containing Lorem Ipsum passages, and more
                    recently with
                    desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum
                </p>

                <p>
                    May Allah bless you! Thank you. Those who (in charity) spend of their goods by night and by day, in
                    secret and in public, have their reward with their Lord The Weekend School of the Islamic Center of
                    Allah is committed to providing quality
                    Islamic Education.
                    It has survived <a href="#">not only five centuries</a> , but also the leap into electronic
                    typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of
                    Letraset sheets containing Lorem Ipsum passages,
                    and more
                    recently with
                    desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum
                </p>

                <div class="sigma_box pb-0 m-0">
                    <div class="row">

                        <div class="col-md-4">
                            <div class="sigma_icon-block icon-block-3">
                                <div class="icon-wrapper">
                                    <i class="flaticon-mosque"></i>
                                </div>
                                <div class="sigma_icon-block-content">
                                    <h5> Mosque </h5>
                                    <p>Grand islamic gathering with chicago vehicula elementum sed sit amet dui. Nulla
                                        porttitor accumsan tincidunt.</p>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-4">
                            <div class="sigma_icon-block icon-block-3">
                                <div class="icon-wrapper">
                                    <i class="flaticon-quran"></i>
                                </div>
                                <div class="sigma_icon-block-content">
                                    <h5> Sermons </h5>
                                    <p>Grand islamic gathering with chicago vehicula elementum sed sit amet dui. Nulla
                                        porttitor accumsan tincidunt.</p>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-4">
                            <div class="sigma_icon-block icon-block-3">
                                <div class="icon-wrapper">
                                    <i class="flaticon-islamic-new-year"></i>
                                </div>
                                <div class="sigma_icon-block-content">
                                    <h5> Events </h5>
                                    <p>Grand islamic gathering with chicago vehicula elementum sed sit amet dui. Nulla
                                        porttitor accumsan tincidunt.</p>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>

                <div class="section">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="sigma_img-box">
                                <div class="row">
                                    <div class="col-lg-6">
                                        <img src="assets/img/service/details/2.jpg" alt="service">
                                    </div>
                                    <div class="col-lg-6 mt-5">
                                        <img src="assets/img/service/details/3.jpg" alt="service">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="me-lg-30">
                                <div class="section-title text-start">
                                    <p class="subtitle">Features</p>
                                    <h4 class="title">Check it Out Our Privacy Policy</h4>
                                </div>
                                <ul class="sigma_list list-2">
                                    <li>Peace of Mind</li>
                                    <li>Set For Pastor</li>
                                    <li>100% Satisfaction</li>
                                    <li>Trusted Company</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="section section-padding pt-0">
                    <div class="row">
                        <div class="col-lg-6">

                            <ul class="nav nav-tabs" id="myTab" role="tablist">
                                <li class="nav-item">
                                    <a class="nav-link active" id="home-tab" data-bs-toggle="tab" href="#home"
                                       role="tab" aria-controls="home" aria-selected="true"> <i
                                            class="fas fa-star-and-crescent"></i> Ministry </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="profile-tab" data-bs-toggle="tab" href="#profile" role="tab"
                                       aria-controls="profile" aria-selected="false"> <i class="far fa-mosque"></i>
                                        Mosque</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="contact-tab" data-bs-toggle="tab" href="#contact" role="tab"
                                       aria-controls="contact" aria-selected="false"> <i class="far fa-user"></i>
                                        Imam</a>
                                </li>
                            </ul>

                            <div class="tab-content" id="myTabContent">
                                <div class="tab-pane fade show active" id="home" role="tabpanel"
                                     aria-labelledby="home-tab">
                                    <div class="custom-form">
                                        <form method="post">
                                            <div class="form-group">
                                                <input type="text" placeholder="Enter Full Name" class="form-control"
                                                       name="name" value="">
                                                <i class="far fa-user"></i>
                                            </div>
                                            <div class="form-group">
                                                <input type="text" placeholder="Enter Email Address"
                                                       class="form-control" name="name" value="">
                                                <i class="far fa-envelope"></i>
                                            </div>
                                            <div class="form-group">
                                                <input type="text" placeholder="Enter Full Name" class="form-control"
                                                       name="name" value="">
                                                <i class="far fa-user"></i>
                                            </div>
                                            <div class="form-group">
                                                <button type="submit" class="sigma_btn-custom d-block w-100"
                                                        name="button">Start Saving Today
                                                </button>
                                            </div>
                                            <div class="row">

                                                <div class="col-lg-6">
                                                    <div class="sigma_icon-block icon-block-8">
                                                        <div class="icon-wrapper">
                                                            <i class="fas fa-lock"></i>
                                                        </div>
                                                        <div class="sigma_icon-block-content">
                                                            <h6>Already a Member?</h6>
                                                            <a href="#">Sign In</a>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="col-lg-6">
                                                    <div class="sigma_icon-block icon-block-8">
                                                        <div class="icon-wrapper">
                                                            <i class="fas fa-star"></i>
                                                        </div>
                                                        <div class="sigma_icon-block-content">
                                                            <div class="sigma_rating">
                                                                <i class="far fa-star active"></i>
                                                                <i class="far fa-star active"></i>
                                                                <i class="far fa-star active"></i>
                                                                <i class="far fa-star active"></i>
                                                                <i class="far fa-star active"></i>
                                                            </div>
                                                            <span class="custom-primary">100k+ Reviews</span>
                                                        </div>
                                                    </div>
                                                </div>

                                            </div>
                                        </form>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                                    <div class="custom-form">
                                        <form method="post">
                                            <div class="form-group">
                                                <input type="text" placeholder="Enter Full Name" class="form-control"
                                                       name="name" value="">
                                                <i class="far fa-user"></i>
                                            </div>
                                            <div class="form-group">
                                                <input type="text" placeholder="Enter Email Address"
                                                       class="form-control" name="name" value="">
                                                <i class="far fa-envelope"></i>
                                            </div>
                                            <div class="form-group">
                                                <input type="text" placeholder="Enter Full Name" class="form-control"
                                                       name="name" value="">
                                                <i class="far fa-user"></i>
                                            </div>
                                            <div class="form-group">
                                                <button type="submit" class="sigma_btn-custom d-block w-100"
                                                        name="button">Start Saving Today
                                                </button>
                                            </div>
                                            <div class="row">

                                                <div class="col-lg-6">
                                                    <div class="sigma_icon-block icon-block-8">
                                                        <div class="icon-wrapper">
                                                            <i class="fas fa-lock"></i>
                                                        </div>
                                                        <div class="sigma_icon-block-content">
                                                            <h6>Already a Member?</h6>
                                                            <a href="#">Sign In</a>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="col-lg-6">
                                                    <div class="sigma_icon-block icon-block-8">
                                                        <div class="icon-wrapper">
                                                            <i class="fas fa-star"></i>
                                                        </div>
                                                        <div class="sigma_icon-block-content">
                                                            <div class="sigma_rating">
                                                                <i class="far fa-star active"></i>
                                                                <i class="far fa-star active"></i>
                                                                <i class="far fa-star active"></i>
                                                                <i class="far fa-star active"></i>
                                                                <i class="far fa-star active"></i>
                                                            </div>
                                                            <span class="custom-primary">100k+ Reviews</span>
                                                        </div>
                                                    </div>
                                                </div>

                                            </div>
                                        </form>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">
                                    <div class="custom-form">
                                        <form method="post">
                                            <div class="form-group">
                                                <input type="text" placeholder="Enter Full Name" class="form-control"
                                                       name="name" value="">
                                                <i class="far fa-user"></i>
                                            </div>
                                            <div class="form-group">
                                                <input type="text" placeholder="Enter Email Address"
                                                       class="form-control" name="name" value="">
                                                <i class="far fa-envelope"></i>
                                            </div>
                                            <div class="form-group">
                                                <input type="text" placeholder="Enter Full Name" class="form-control"
                                                       name="name" value="">
                                                <i class="far fa-user"></i>
                                            </div>
                                            <div class="form-group">
                                                <button type="submit" class="sigma_btn-custom d-block w-100"
                                                        name="button">Start Saving Today
                                                </button>
                                            </div>
                                            <div class="row">

                                                <div class="col-lg-6">
                                                    <div class="sigma_icon-block icon-block-8">
                                                        <div class="icon-wrapper">
                                                            <i class="fas fa-lock"></i>
                                                        </div>
                                                        <div class="sigma_icon-block-content">
                                                            <h6>Already a Member?</h6>
                                                            <a href="#">Sign In</a>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="col-lg-6">
                                                    <div class="sigma_icon-block icon-block-8">
                                                        <div class="icon-wrapper">
                                                            <i class="fas fa-star"></i>
                                                        </div>
                                                        <div class="sigma_icon-block-content">
                                                            <div class="sigma_rating">
                                                                <i class="far fa-star active"></i>
                                                                <i class="far fa-star active"></i>
                                                                <i class="far fa-star active"></i>
                                                                <i class="far fa-star active"></i>
                                                                <i class="far fa-star active"></i>
                                                            </div>
                                                            <span class="custom-primary">100k+ Reviews</span>
                                                        </div>
                                                    </div>
                                                </div>

                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>

                        </div>
                        <div class="col-lg-6">
                            <img src="assets/img/service/details/4.jpg" alt="service">
                        </div>
                    </div>
                </div>

                <p>
                    May Allah bless you! Thank you. Those who (in charity) spend of their goods by night and by day, in
                    secret and in public, have their reward with their Lord The Weekend School of the Islamic Center of
                    Allah is committed to providing quality
                    Islamic Education.
                    It has survived <a href="#">not only five centuries</a> , but also the leap into electronic
                    typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of
                    Letraset sheets containing Lorem Ipsum passages,
                    and more
                    recently with
                    desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum
                </p>
                <p>
                    May Allah bless you! Thank you. Those who (in charity) spend of their goods by night and by day, in
                    secret and in public, have their reward with their Lord The Weekend School of the Islamic Center of
                    Allah is committed to providing quality
                    Islamic Education.
                    It has survived <a href="#">not only five centuries</a> , but also the leap into electronic
                    typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of
                    Letraset sheets containing Lorem Ipsum passages,
                    and more
                    recently with
                    desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum
                </p>


            </div>

        </div>
    </div>
    <!-- Post Content End -->

@endsection
