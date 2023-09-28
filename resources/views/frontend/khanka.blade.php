@extends('frontend.common_template')

@section('content')

    <!-- Services Start -->
    <div class="section section-padding">
        <div class="container">
            <div class="row">

                <div class="col-lg-4 col-md-6">
                    <a href="{{route('khanka_detail')}}" class="sigma_service style-1">
                        <div class="sigma_service-thumb">
                            <i class="flaticon-mosque"></i>
                        </div>
                        <div class="sigma_service-body">
                            <h5>Parent Education</h5>
                            <p>The Shaha is not just a mosque for prayers rather it is a community center for all. </p>
                        </div>
                        <span class="btn-link">Learn More <i class="far fa-arrow-right"></i> </span>
                    </a>
                </div>

                <div class="col-lg-4 col-md-6">
                    <a href="{{route('khanka_detail')}}" class="sigma_service style-1">
                        <div class="sigma_service-thumb">
                            <i class="flaticon-quran"></i>
                        </div>
                        <div class="sigma_service-body">
                            <h5>Hadith & Sunnah</h5>
                            <p>The Shaha is not just a mosque for prayers rather it is a community center for all. </p>
                        </div>
                        <span class="btn-link">Learn More <i class="far fa-arrow-right"></i> </span>
                    </a>
                </div>

                <div class="col-lg-4 col-md-6">
                    <a href="{{route('khanka_detail')}}" class="sigma_service style-1">
                        <div class="sigma_service-thumb">
                            <i class="flaticon-islamic-new-year"></i>
                        </div>
                        <div class="sigma_service-body">
                            <h5>Video Sermons</h5>
                            <p>The Shaha is not just a mosque for prayers rather it is a community center for all. </p>
                        </div>
                        <span class="btn-link">Learn More <i class="far fa-arrow-right"></i> </span>
                    </a>
                </div>

                <div class="col-lg-4 col-md-6">
                    <a href="sermon-details.html" class="sigma_service style-1">
                        <div class="sigma_service-thumb">
                            <i class="flaticon-islam"></i>
                        </div>
                        <div class="sigma_service-body">
                            <h5>Charity & Donation</h5>
                            <p>The Shaha is not just a mosque for prayers rather it is a community center for all. </p>
                        </div>
                        <span class="btn-link">Learn More <i class="far fa-arrow-right"></i> </span>
                    </a>
                </div>

                <div class="col-lg-4 col-md-6">
                    <a href="sermon-details.html" class="sigma_service style-1">
                        <div class="sigma_service-thumb">
                            <i class="flaticon-islamic-3"></i>
                        </div>
                        <div class="sigma_service-body">
                            <h5>News & Events</h5>
                            <p>The Shaha is not just a mosque for prayers rather it is a community center for all. </p>
                        </div>
                        <span class="btn-link">Learn More <i class="far fa-arrow-right"></i> </span>
                    </a>
                </div>

                <div class="col-lg-4 col-md-6">
                    <a href="sermon-details.html" class="sigma_service style-1">
                        <div class="sigma_service-thumb">
                            <i class="flaticon-islamic-5"></i>
                        </div>
                        <div class="sigma_service-body">
                            <h5>Find A Mosque</h5>
                            <p>The Shaha is not just a mosque for prayers rather it is a community center for all. </p>
                        </div>
                        <span class="btn-link">Learn More <i class="far fa-arrow-right"></i> </span>
                    </a>
                </div>

            </div>
        </div>
    </div>
    <!-- Services End -->

    <!-- Clients Start -->
    <div class="section section-padding primary-bg pattern-map">
        <div class="container-fluid">
            <div class="row">

                <div class="col-lg-7">
                    <div class="row">
                        <div class="col-lg-4">
                            <div class="sigma_client">
                                <img src="assets/img/clients/1.png" alt="client">
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="sigma_client">
                                <img src="assets/img/clients/2.png" alt="client">
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="sigma_client">
                                <img src="assets/img/clients/3.png" alt="client">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-5">
                    <div class="row">
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
                    </div>
                </div>

            </div>
        </div>
    </div>
    <!-- Clients End -->

    <!-- CTA Start -->
    <div class="section section-padding">
        <div class="container">
            <div class="section-title text-center">
                <p class="subtitle">WAYS WE CAN HELP</p>
                <h4 class="title">Angels Ready To Help</h4>
            </div>

            <div class="row position-relative">
                <div class="col-md-6">
                    <div class="sigma_cta secondary-bg">
                        <img class="d-none d-lg-block" src="assets/img/cta/1.png" alt="cta">
                        <div class="sigma_cta-content">
                            <span class="fw-600 custom-primary">Need Help, Call Our HOTLINE!</span>
                            <h4 class="text-white">+1 212-683-9756</h4>
                        </div>
                    </div>
                </div>
                <span class="sigma_cta-sperator d-none d-lg-flex">or</span>
                <div class="col-md-6">
                    <div class="sigma_cta primary-bg">
                        <div class="sigma_cta-content">
                            <form method="post">
                                <label class="mb-0 text-white">Mosque Newsletter</label>
                                <div class="sigma_search-adv-input">
                                    <input type="text" class="form-control" placeholder="Enter email address"
                                           name="search" value="">
                                    <button type="submit" name="button"><i class="fa fa-search"></i></button>
                                </div>
                            </form>
                        </div>
                        <img class="d-none d-lg-block" src="assets/img/cta/2.png" alt="cta">
                    </div>
                </div>
            </div>

        </div>
    </div>
    <!-- CTA End -->

@endsection
