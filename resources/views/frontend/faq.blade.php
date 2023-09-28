@extends('frontend.common_template')

@section('content')
    <!-- Categories Start -->
    <div class="section">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="accordion with-gap" id="generalFAQExample">
                        <div class="card">
                            <div class="card-header" data-bs-toggle="collapse" role="button"
                                 data-bs-target="#generalOne" aria-expanded="true" aria-controls="generalOne">
                                What is a Mosque?
                            </div>

                            <div id="generalOne" class="collapse show" data-bs-parent="#generalFAQExample">
                                <div class="card-body">
                                    A Mosque is the house of Allah where People pray to Allah. As long as there are
                                    people coming to the mosque, Islam will keep on spreading the word of peace and
                                    which will increase the love of Allah
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" data-bs-toggle="collapse" role="button"
                                 data-bs-target="#generalTwo" aria-expanded="false" aria-controls="generalTwo">
                                Getting Started with an Mosque
                            </div>

                            <div id="generalTwo" class="collapse" data-bs-parent="#generalFAQExample">
                                <div class="card-body">
                                    A Mosque is the house of Allah where People pray to Allah. As long as there are
                                    people coming to the mosque, Islam will keep on spreading the word of peace and
                                    which will increase the love of Allah
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" data-bs-toggle="collapse" role="button"
                                 data-bs-target="#generalThree" aria-expanded="false" aria-controls="generalThree">
                                Do i have the latest version?
                            </div>

                            <div id="generalThree" class="collapse" data-bs-parent="#generalFAQExample">
                                <div class="card-body">
                                    A Mosque is the house of Allah where People pray to Allah. As long as there are
                                    people coming to the mosque, Islam will keep on spreading the word of peace and
                                    which will increase the love of Allah
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" data-bs-toggle="collapse" role="button"
                                 data-bs-target="#generalSeven" aria-expanded="false" aria-controls="generalSeven">
                                How can I change header
                            </div>

                            <div id="generalSeven" class="collapse" data-bs-parent="#generalFAQExample">
                                <div class="card-body">
                                    A Mosque is the house of Allah where People pray to Allah. As long as there are
                                    people coming to the mosque, Islam will keep on spreading the word of peace and
                                    which will increase the love of Allah
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="accordion with-gap" id="generalFAQExample2">
                        <div class="card">
                            <div class="card-header" data-bs-toggle="collapse" role="button"
                                 data-bs-target="#generalFour" aria-expanded="true" aria-controls="generalFour">
                                How many times can I use a Mosque?
                            </div>

                            <div id="generalFour" class="collapse show" data-bs-parent="#generalFAQExample2">
                                <div class="card-body">
                                    A Mosque is the house of Allah where People pray to Allah. As long as there are
                                    people coming to the mosque, Islam will keep on spreading the word of peace and
                                    which will increase the love of Allah
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" data-bs-toggle="collapse" role="button"
                                 data-bs-target="#generalFive" aria-expanded="false" aria-controls="generalFive">
                                How to migrate my website?
                            </div>

                            <div id="generalFive" class="collapse" data-bs-parent="#generalFAQExample2">
                                <div class="card-body">
                                    A Mosque is the house of Allah where People pray to Allah. As long as there are
                                    people coming to the mosque, Islam will keep on spreading the word of peace and
                                    which will increase the love of Allah
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" data-bs-toggle="collapse" role="button"
                                 data-bs-target="#generalSix" aria-expanded="false" aria-controls="generalSix">
                                How to migrate my website?
                            </div>

                            <div id="generalSix" class="collapse" data-bs-parent="#generalFAQExample2">
                                <div class="card-body">
                                    A Mosque is the house of Allah where People pray to Allah. As long as there are
                                    people coming to the mosque, Islam will keep on spreading the word of peace and
                                    which will increase the love of Allah
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" data-bs-toggle="collapse" role="button"
                                 data-bs-target="#generalEight" aria-expanded="false" aria-controls="generalEight">
                                Changing the site footer
                            </div>

                            <div id="generalEight" class="collapse" data-bs-parent="#generalFAQExample2">
                                <div class="card-body">
                                    A Mosque is the house of Allah where People pray to Allah. As long as there are
                                    people coming to the mosque, Islam will keep on spreading the word of peace and
                                    which will increase the love of Allah
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Categories End -->

    <!-- Form Start -->
    <div class="section dark-overlay dark-overlay-3 bg-cover bg-center bg-norepeat"
         style="background-image: url(assets/img/bg4.jpg)">
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

@endsection
