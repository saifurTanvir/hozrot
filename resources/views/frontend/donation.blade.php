@extends('frontend.common_template')

@section('content')
  <!-- Form Start -->
  <div class="section">
    <div class="container">
      <div class="section-title text-center">
        <p class="subtitle">DONATE TO HELP</p>
        <h4 class="title">Make a donation to help us</h4>
      </div>
      <form method="post">
        <div class="form-row sigma_donation-form">
          <div class="col-12">
            <div class="form-group mb-5">
              <h5>Donation Amount</h5>
              <div class="input-group">
                <div class="input-group-prepend">
                  <button class="sigma_btn-custom shadow-none btn-sm" type="button">$</button>
                </div>
                <input type="text" class="form-control ms-0" placeholder="$100">
              </div>
              <ul class="sigma_select-amount">
                <li>$15.00</li>
                <li>$25.00</li>
                <li>$45.00</li>
                <li class="active">$100.00</li>
                <li>$500.00</li>
              </ul>
            </div>
          </div>
          <div class="col-12">
            <div class="form-group mb-5">
              <h5>Payment Method</h5>
              <div class="d-flex align-items-center">
                <div class="d-flex align-items-center">
                 <input type="radio" id="radio" name="radio" value="Online Payment">
                 <label for="radio" class="mb-0">Online Payment</label>
               </div>
               <div class="d-flex align-items-center ms-4">
                 <input type="radio" id="radio2" name="radio" value="Offline Payment">
                 <label for="radio2" class="mb-0">Offline Payment</label>
               </div>
              </div>
            </div>
          </div>
          <div class="col-12">
            <div class="form-group">
              <h5>Campaigns</h5>
              <select class="form-control">
                <option value="1" selected>Education for Every Child - (Target: 10000.00)</option>
                <option value="2">Education for Every Child - (Target: 10000.00)</option>
                <option value="3">Education for Every Child - (Target: 15000.00)</option>
                <option value="4">Education for Every Child - (Target: 25000.00)</option>
              </select>
            </div>
          </div>
          <div class="col-12">
            <div class="form-group">
              <h5>Message</h5>
              <textarea name="message" class="form-control" placeholder="Enter Message" rows="6"></textarea>
            </div>
          </div>
          <div class="col-12">
            <div class="form-group">
              <h5>Donator Details</h5>
              <div class="row">
                <div class="col-lg-6">
                  <input type="text" class="form-control" placeholder="Full Name" name="name">
                </div>
                <div class="col-lg-6 mt-3 mt-lg-0">
                  <input type="email" placeholder="Email Address" name="email" class="form-control">
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-12 text-center">
            <button type="submit" class="sigma_btn-custom" name="button"> Donate Now </button>
          </div>
        </div>
      </form>
    </div>
  </div>
  <!-- Form End -->

  <!-- sermon Start -->
  <div class="section section-padding light-bg">
    <div class="container">

      <div class="row align-items-center">
        <div class="col-md-5">
          <div class="section-title text-end">
            <p class="subtitle">WAYS WE CAN HELP</p>
            <h4 class="title">Angels Ready To Help</h4>
          </div>
        </div>
        <div class="col-md-2 d-none d-md-block"> <span class="vertical-seperator"></span> </div>
        <div class="col-md-5 d-none d-md-block">
          <p class="fw-600 mb-0 custom-secondary">We offer a variety of customizable products and sermon for individuals, families, and businesses</p>
        </div>
      </div>

       <div class="row">

        <div class="col-lg-6 col-md-6">
          <a href="services.html" class="sigma_service style-3">
            <div class="sigma_service-thumb">
              <img src="assets/img/service/1.jpg" alt="img">
              <i class="flaticon-kaaba"></i>
            </div>
            <div class="sigma_service-body">
              <h5>About Mosque</h5>
              <p>A new house. College education. Retirement. Whatever your goals. we'll help you choose the path to go there </p>
            </div>
          </a>
        </div>

        <div class="col-lg-6 col-md-6">
          <a href="donation.html" class="sigma_service style-3">
            <div class="sigma_service-thumb">
              <img src="assets/img/service/2.jpg" alt="img">
              <i class="flaticon-islamic-new-year"></i>
            </div>
            <div class="sigma_service-body">
              <h5>Why Mircco Mosque</h5>
              <p>A new house. College education. Retirement. Whatever your goals. we'll help you choose the path to go there </p>
            </div>
          </a>
        </div>

      </div>
    </div>
  </div>
  <!-- sermon End -->

@endsection
