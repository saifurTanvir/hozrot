@extends('frontend.common_template')

@section('content')
  <!-- Basic Info -->
  <section class="section">
    <div class="container">
        <div class="section-title text-center">
            <p class="subtitle">আমাদের হযরত</p>
        </div>

      <div class="row align-items-center">
        <div class="col-lg-6 d-none d-lg-block">
          <div class="sigma_img-box">
            <div class="row">
              <div class="col-lg-6">
                <img src="{{asset('uploads/'.$basicInfo->photo_1)}}" alt="service">
                <img class="ms-0" src="{{asset('uploads/'.$basicInfo->photo_2)}}" alt="service">
              </div>
              <div class="col-lg-6 mt-0 mt-lg-5">
                <img src="{{asset('uploads/'.$basicInfo->photo_3)}}" alt="service">
                <img class="ms-0" src="{{asset('uploads/'.$basicInfo->photo_4)}}" alt="service">
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-6">
          <div class="me-lg-30">
            <div class="section-title mb-0 text-start">
              <p class="subtitle">{{$basicInfo->salutation}}</p>
              <h4 class="title">{{$basicInfo->name}}</h4>
            </div>
            <br>
            <p class=" bg-transparent"> {!! $basicInfo->detail !!} </p>
            <br>
            <div class="sigma_icon-block icon-block-3">
              <div class="icon-wrapper">
                <img src="assets/img/textures/icons/1.png" alt="">
              </div>
              <div class="sigma_icon-block-content">
                <h5> পেশা </h5>
                <p>{!! $basicInfo->occupation !!}</p>
              </div>
            </div>
            <div class="sigma_icon-block icon-block-3">
              <div class="icon-wrapper">
                <img src="assets/img/textures/icons/2.png" alt="">
              </div>
              <div class="sigma_icon-block-content">
                <h5> খেদমত </h5>
                <p>{!! $basicInfo->khedmot !!}</p>
              </div>
            </div>
          </div>
        </div>
      </div>

    </div>
  </section>
  <!-- Basic Info End -->

  <!-- Shaekh's Period Info -->
  <div class="section light-bg" id="shaekhs">
    <div class="container">
        <div class="section-title mb-0 text-start">
            <p class="subtitle">শায়েখদের সোহবত</p>
        </div>
      <div class="sigma_timeline">

        @foreach($shayekhs AS $shayekh)
            <div class="row g-0 justify-content-end justify-content-md-around align-items-start sigma_timeline-nodes">
              <div class="col-12 col-md-5 order-3 order-md-1 sigma_timeline-content">
                <h4>{{$shayekh->name}}</h4>
                <p>{!! $shayekh->story !!} </p>
              </div>
              <div class="col-2 col-sm-1 px-md-3 order-2 sigma_timeline-image text-md-center">
                <i class="far fa-circle"></i>
              </div>
              <div class="col-12 col-md-5 order-1 order-md-3 pb-3 sigma_timeline-date">
                <span>{{date('Y', strtotime($shayekh->period_start))}}</span><br><span class="sigma_timeline-month">{{date('M d', strtotime($shayekh->period_start))}}</span>
              </div>
            </div>
         @endforeach

      </div>

    </div>
  </div>
  <!-- Shaekh's Period End -->


  <!-- Shaekh's Info -->
  <div class="section section-padding" id="intro">
      <div class="container">
          <div class="section-title mb-0 text-start">
              <p class="subtitle">শায়েখদগন</p>
          </div>
          <div class="row">

              @foreach($shayekhs AS $shayekh)
                  <div class="col-lg-4 col-md-6">
                      <a href="{{route('shaekh_detail', [$shayekh->id])}}" class="sigma_service style-2">
                          <div class="sigma_service-thumb">
                              <img src="assets/img/service/5.jpg" alt="img">
                              <i class="flaticon-mosque"></i>
                          </div>
                          <div class="sigma_service-body">
                              <h5>{{$shayekh->name}}</h5>
                              <p>{!! mb_substr($shayekh->detail, 0, 150); !!} </p>
                          </div>
                      </a>
                  </div>
              @endforeach


{{--              <div class="col-lg-4 col-md-6">--}}
{{--                  <a href="sermon-details.html" class="sigma_service style-2">--}}
{{--                      <div class="sigma_service-thumb">--}}
{{--                          <img src="assets/img/service/10.jpg" alt="img">--}}
{{--                          <i class="flaticon-islamic-5"></i>--}}
{{--                      </div>--}}
{{--                      <div class="sigma_service-body">--}}
{{--                          <h5>News & Events</h5>--}}
{{--                          <p>The Shaha is not just a mosque for prayers rather it is a community center for all. </p>--}}
{{--                      </div>--}}
{{--                  </a>--}}
{{--              </div>--}}

          </div>
      </div>
  </div>
  <!-- Shaekh's Period End -->

  <!-- Characteristic Start -->
  <section class="section" id="character">
    <div class="container">

      <div class="row align-items-center">

        <div class="col-lg-6">
          <div class="me-lg-30">
            <div class="section-title mb-0 text-start">
              <p class="subtitle">হযরতের ব্যাপারে কিছু কথা</p>
              <h4 class="title">Know the real Tafseer of Qur’an</h4>
            </div>
            <p class="blockquote bg-transparent"> Promoting a comprehensive Islamic way of life based on the Holy Quran and the Sunnah of Prophet Muhammad. </p>

            <ul class="nav nav-tabs" id="myTab" role="tablist">
              <li class="nav-item">
                <a class="nav-link active" id="home-tab" data-bs-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true"> <i class="fas fa-star-and-crescent"></i> Ministry </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" id="profile-tab" data-bs-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false"> <i class="far fa-mosque"></i> Mosque</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" id="contact-tab" data-bs-toggle="tab" href="#contact" role="tab" aria-controls="contact" aria-selected="false"> <i class="far fa-user"></i> Imam</a>
              </li>
            </ul>

            <div class="tab-content" id="myTabContent">
              <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                <p>
                  The Shaha is not just a mosque for prayers rather it is a community center for all. The Center is committed to preserving an Islamic identity, building and supporting a viable Muslim community, Promoting a comprehensive Islamic way of life.
                </p>
              </div>
              <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                <p>
                  The Shaha is not just a mosque for prayers rather it is a community center for all. The Center is committed to preserving an Islamic identity, building and supporting a viable Muslim community, Promoting a comprehensive Islamic way of life.
                </p>
              </div>
              <div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">
                <p>
                  The Shaha is not just a mosque for prayers rather it is a community center for all. The Center is committed to preserving an Islamic identity, building and supporting a viable Muslim community, Promoting a comprehensive Islamic way of life.
                </p>
              </div>
            </div>

          </div>
        </div>

        <div class="col-lg-6">
          <img src="assets/img/about.jpg" alt="about">
        </div>

      </div>

    </div>
  </section>
  <!-- Characteristic End -->

  <!-- Education Info -->
  <div class="section light-bg" id="education">
      <div class="container">
          <div class="section-title mb-0 text-start">
              <p class="subtitle">লেখাপড়া</p>
          </div>
          <div class="sigma_timeline">

              <div class="row g-0 justify-content-end justify-content-md-around align-items-start sigma_timeline-nodes">
                  <div class="col-12 col-md-5 order-3 order-md-1 sigma_timeline-content">
                      <h4>Islam is the correct way to live</h4>
                      <p>May Allah bless you! Thank you. Those who (in charity) spend of their goods by night and by day, in secret and in public, have their reward with their Lord The Weekend School of the Islamic Center of Allah is committed to providing quality
                          Islamic Education. </p>
                  </div>
                  <div class="col-2 col-sm-1 px-md-3 order-2 sigma_timeline-image text-md-center">
                      <i class="far fa-circle"></i>
                  </div>
                  <div class="col-12 col-md-5 order-1 order-md-3 pb-3 sigma_timeline-date">
                      <span>2022</span><br><span class="sigma_timeline-month">JUN 1</span>
                  </div>
              </div>
              <div class="row g-0 justify-content-end justify-content-md-around align-items-start sigma_timeline-nodes">
                  <div class="col-12 col-md-5 order-3 order-md-1 sigma_timeline-content">
                      <h4>We chose to try to live that way</h4>
                      <p>The Weekend School of the Islamic Center of Allah is committed to providing quality Islamic Education according to the Quran and the Sunnah of the Prophet Mohammed (Peace Be upon Him) to a diverse student population</p>
                  </div>
                  <div class="col-2 col-sm-1 px-md-3 order-2 sigma_timeline-image text-md-center">
                      <i class="far fa-circle"></i>
                  </div>
                  <div class="col-12 col-md-5 order-1 order-md-3 pb-3 sigma_timeline-date">
                      <span>2022</span><br><span class="sigma_timeline-month">JUN 1</span>
                  </div>
              </div>
              <div class="row g-0 justify-content-end justify-content-md-around align-items-start sigma_timeline-nodes">
                  <div class="col-12 col-md-5 order-3 order-md-1 sigma_timeline-content">
                      <h4>Islam is the correct way to live</h4>
                      <p>May Allah bless you! Thank you. Those who (in charity) spend of their goods by night and by day, in secret and in public, have their reward with their Lord The Weekend School of the Islamic Center of Allah is committed to providing quality
                          Islamic Education. </p>
                  </div>
                  <div class="col-2 col-sm-1 px-md-3 order-2 sigma_timeline-image text-md-center">
                      <i class="far fa-circle"></i>
                  </div>
                  <div class="col-12 col-md-5 order-1 order-md-3 pb-3 sigma_timeline-date">
                      <span>2022</span><br><span class="sigma_timeline-month">JUN 1</span>
                  </div>
              </div>
              <div class="row g-0 justify-content-end justify-content-md-around align-items-start sigma_timeline-nodes">
                  <div class="col-12 col-md-5 order-3 order-md-1 sigma_timeline-content">
                      <h4>We chose to try to live that way</h4>
                      <p>The Weekend School of the Islamic Center of Allah is committed to providing quality Islamic Education according to the Quran and the Sunnah of the Prophet Mohammed (Peace Be upon Him) to a diverse student population</p>
                  </div>
                  <div class="col-2 col-sm-1 px-md-3 order-2 sigma_timeline-image text-md-center">
                      <i class="far fa-circle"></i>
                  </div>
                  <div class="col-12 col-md-5 order-1 order-md-3 pb-3 sigma_timeline-date">
                      <span>2022</span><br><span class="sigma_timeline-month">JUN 1</span>
                  </div>
              </div>

          </div>

      </div>
  </div>
  <!-- Education End -->


  <!-- Khulafa Start -->
  <div class="section section-padding" id="family">
      <div class="container">
          <div class="section-title mb-0 text-start">
              <p class="subtitle">হযরতের ইজাজত প্রাপ্ত খোলাফাগন</p>
          </div>
          <div class="row">

              <div class="col-lg-3 col-md-6">
                  <div class="sigma_volunteers volunteers-4">
                      <div class="sigma_volunteers-thumb">
                          <img src="assets/img/volunteers/1.jpg" alt="volunteers">
                          <ul class="sigma_sm">
                              <li> <a href="#" class="trigger-volunteers-socials"> <i class="fal fa-plus"></i> </a> </li>
                              <li> <a href="#"> <i class="fab fa-facebook-f"></i> </a> </li>
                              <li> <a href="#"> <i class="fab fa-twitter"></i> </a> </li>
                              <li> <a href="#"> <i class="fab fa-instagram"></i> </a> </li>
                          </ul>
                      </div>
                      <div class="sigma_volunteers-body">
                          <div class="sigma_volunteers-info">
                              <p>MOSQUE EVENTS MANAGER</p>
                              <h5>
                                  <a href="volunteer-detail.html">Zubair Raheem</a>
                              </h5>
                          </div>
                      </div>
                  </div>
              </div>

              <div class="col-lg-3 col-md-6">
                  <div class="sigma_volunteers volunteers-4">
                      <div class="sigma_volunteers-thumb">
                          <img src="assets/img/volunteers/8.jpg" alt="volunteers">
                          <ul class="sigma_sm">
                              <li> <a href="#" class="trigger-volunteers-socials"> <i class="fal fa-plus"></i> </a> </li>
                              <li> <a href="#"> <i class="fab fa-facebook-f"></i> </a> </li>
                              <li> <a href="#"> <i class="fab fa-twitter"></i> </a> </li>
                              <li> <a href="#"> <i class="fab fa-instagram"></i> </a> </li>
                          </ul>
                      </div>
                      <div class="sigma_volunteers-body">
                          <div class="sigma_volunteers-info">
                              <p>IMAM OF MOSQUE</p>
                              <h5>
                                  <a href="volunteer-detail.html">Omar Rasool</a>
                              </h5>
                          </div>
                      </div>
                  </div>
              </div>

              <div class="col-lg-3 col-md-6">
                  <div class="sigma_volunteers volunteers-4">
                      <div class="sigma_volunteers-thumb">
                          <img src="assets/img/volunteers/2.jpg" alt="volunteers">
                          <ul class="sigma_sm">
                              <li> <a href="#" class="trigger-volunteers-socials"> <i class="fal fa-plus"></i> </a> </li>
                              <li> <a href="#"> <i class="fab fa-facebook-f"></i> </a> </li>
                              <li> <a href="#"> <i class="fab fa-twitter"></i> </a> </li>
                              <li> <a href="#"> <i class="fab fa-instagram"></i> </a> </li>
                          </ul>
                      </div>
                      <div class="sigma_volunteers-body">
                          <div class="sigma_volunteers-info">
                              <p>MOZIN OF MOSQUE</p>
                              <h5>
                                  <a href="volunteer-detail.html">Yaseen Asad</a></h5>
                          </div>
                      </div>
                  </div>
              </div>

              <div class="col-lg-3 col-md-6">
                  <div class="sigma_volunteers volunteers-4">
                      <div class="sigma_volunteers-thumb">
                          <img src="assets/img/volunteers/3.jpg" alt="volunteers">
                          <ul class="sigma_sm">
                              <li> <a href="#" class="trigger-volunteers-socials"> <i class="fal fa-plus"></i> </a> </li>
                              <li> <a href="#"> <i class="fab fa-facebook-f"></i> </a> </li>
                              <li> <a href="#"> <i class="fab fa-twitter"></i> </a> </li>
                              <li> <a href="#"> <i class="fab fa-instagram"></i> </a> </li>
                          </ul>
                      </div>
                      <div class="sigma_volunteers-body">
                          <div class="sigma_volunteers-info">
                              <p>TEACHER OF DIFFERENT CLASS</p>
                              <h5>
                                  <a href="volunteer-detail.html">Abdul Qader</a>
                              </h5>
                          </div>
                      </div>
                  </div>
              </div>

              <div class="col-lg-3 col-md-6">
                  <div class="sigma_volunteers volunteers-4">
                      <div class="sigma_volunteers-thumb">
                          <img src="assets/img/volunteers/4.jpg" alt="volunteers">
                          <ul class="sigma_sm">
                              <li> <a href="#" class="trigger-volunteers-socials"> <i class="fal fa-plus"></i> </a> </li>
                              <li> <a href="#"> <i class="fab fa-facebook-f"></i> </a> </li>
                              <li> <a href="#"> <i class="fab fa-twitter"></i> </a> </li>
                              <li> <a href="#"> <i class="fab fa-instagram"></i> </a> </li>
                          </ul>
                      </div>
                      <div class="sigma_volunteers-body">
                          <div class="sigma_volunteers-info">
                              <p>MOSQUE EVENTS MANAGER</p>
                              <h5>
                                  <a href="volunteer-detail.html">Zubair Raheem</a>
                              </h5>
                          </div>
                      </div>
                  </div>
              </div>

              <div class="col-lg-3 col-md-6">
                  <div class="sigma_volunteers volunteers-4">
                      <div class="sigma_volunteers-thumb">
                          <img src="assets/img/volunteers/5.jpg" alt="volunteers">
                          <ul class="sigma_sm">
                              <li> <a href="#" class="trigger-volunteers-socials"> <i class="fal fa-plus"></i> </a> </li>
                              <li> <a href="#"> <i class="fab fa-facebook-f"></i> </a> </li>
                              <li> <a href="#"> <i class="fab fa-twitter"></i> </a> </li>
                              <li> <a href="#"> <i class="fab fa-instagram"></i> </a> </li>
                          </ul>
                      </div>
                      <div class="sigma_volunteers-body">
                          <div class="sigma_volunteers-info">
                              <p>IMAM OF MOSQUE</p>
                              <h5>
                                  <a href="volunteer-detail.html">Omar Rasool</a>
                              </h5>
                          </div>
                      </div>
                  </div>
              </div>

              <div class="col-lg-3 col-md-6">
                  <div class="sigma_volunteers volunteers-4">
                      <div class="sigma_volunteers-thumb">
                          <img src="assets/img/volunteers/6.jpg" alt="volunteers">
                          <ul class="sigma_sm">
                              <li> <a href="#" class="trigger-volunteers-socials"> <i class="fal fa-plus"></i> </a> </li>
                              <li> <a href="#"> <i class="fab fa-facebook-f"></i> </a> </li>
                              <li> <a href="#"> <i class="fab fa-twitter"></i> </a> </li>
                              <li> <a href="#"> <i class="fab fa-instagram"></i> </a> </li>
                          </ul>
                      </div>
                      <div class="sigma_volunteers-body">
                          <div class="sigma_volunteers-info">
                              <p>MOZIN OF MOSQUE</p>
                              <h5>
                                  <a href="volunteer-detail.html">Abdul Qader</a>
                              </h5>
                          </div>
                      </div>
                  </div>
              </div>

              <div class="col-lg-3 col-md-6">
                  <div class="sigma_volunteers volunteers-4">
                      <div class="sigma_volunteers-thumb">
                          <img src="assets/img/volunteers/7.jpg" alt="volunteers">
                          <ul class="sigma_sm">
                              <li> <a href="#" class="trigger-volunteers-socials"> <i class="fal fa-plus"></i> </a> </li>
                              <li> <a href="#"> <i class="fab fa-facebook-f"></i> </a> </li>
                              <li> <a href="#"> <i class="fab fa-twitter"></i> </a> </li>
                              <li> <a href="#"> <i class="fab fa-instagram"></i> </a> </li>
                          </ul>
                      </div>
                      <div class="sigma_volunteers-body">
                          <div class="sigma_volunteers-info">
                              <p>TEACHER OF DIFFERENT CLASS</p>
                              <h5>
                                  <a href="volunteer-detail.html">Yaseen Asad</a>
                              </h5>
                          </div>
                      </div>
                  </div>
              </div>

          </div>

      </div>
  </div>
  <!-- Khulafa End -->

  <!-- Shaekh's Family -->
  <div class="section light-bg" id="khulafa">
      <div class="container">
          <div class="section-title mb-0 text-start">
              <p class="subtitle">শায়েখের পূর্বপুরুষগন</p>
          </div>
          <div class="sigma_timeline">

              <div class="row g-0 justify-content-end justify-content-md-around align-items-start sigma_timeline-nodes">
                  <div class="col-12 col-md-5 order-3 order-md-1 sigma_timeline-content">
                      <h4>Islam is the correct way to live</h4>
                      <p>May Allah bless you! Thank you. Those who (in charity) spend of their goods by night and by day, in secret and in public, have their reward with their Lord The Weekend School of the Islamic Center of Allah is committed to providing quality
                          Islamic Education. </p>
                  </div>
                  <div class="col-2 col-sm-1 px-md-3 order-2 sigma_timeline-image text-md-center">
                      <i class="far fa-circle"></i>
                  </div>
                  <div class="col-12 col-md-5 order-1 order-md-3 pb-3 sigma_timeline-date">
                      <span>2022</span><br><span class="sigma_timeline-month">JUN 1</span>
                  </div>
              </div>
              <div class="row g-0 justify-content-end justify-content-md-around align-items-start sigma_timeline-nodes">
                  <div class="col-12 col-md-5 order-3 order-md-1 sigma_timeline-content">
                      <h4>We chose to try to live that way</h4>
                      <p>The Weekend School of the Islamic Center of Allah is committed to providing quality Islamic Education according to the Quran and the Sunnah of the Prophet Mohammed (Peace Be upon Him) to a diverse student population</p>
                  </div>
                  <div class="col-2 col-sm-1 px-md-3 order-2 sigma_timeline-image text-md-center">
                      <i class="far fa-circle"></i>
                  </div>
                  <div class="col-12 col-md-5 order-1 order-md-3 pb-3 sigma_timeline-date">
                      <span>2022</span><br><span class="sigma_timeline-month">JUN 1</span>
                  </div>
              </div>
              <div class="row g-0 justify-content-end justify-content-md-around align-items-start sigma_timeline-nodes">
                  <div class="col-12 col-md-5 order-3 order-md-1 sigma_timeline-content">
                      <h4>Islam is the correct way to live</h4>
                      <p>May Allah bless you! Thank you. Those who (in charity) spend of their goods by night and by day, in secret and in public, have their reward with their Lord The Weekend School of the Islamic Center of Allah is committed to providing quality
                          Islamic Education. </p>
                  </div>
                  <div class="col-2 col-sm-1 px-md-3 order-2 sigma_timeline-image text-md-center">
                      <i class="far fa-circle"></i>
                  </div>
                  <div class="col-12 col-md-5 order-1 order-md-3 pb-3 sigma_timeline-date">
                      <span>2022</span><br><span class="sigma_timeline-month">JUN 1</span>
                  </div>
              </div>
              <div class="row g-0 justify-content-end justify-content-md-around align-items-start sigma_timeline-nodes">
                  <div class="col-12 col-md-5 order-3 order-md-1 sigma_timeline-content">
                      <h4>We chose to try to live that way</h4>
                      <p>The Weekend School of the Islamic Center of Allah is committed to providing quality Islamic Education according to the Quran and the Sunnah of the Prophet Mohammed (Peace Be upon Him) to a diverse student population</p>
                  </div>
                  <div class="col-2 col-sm-1 px-md-3 order-2 sigma_timeline-image text-md-center">
                      <i class="far fa-circle"></i>
                  </div>
                  <div class="col-12 col-md-5 order-1 order-md-3 pb-3 sigma_timeline-date">
                      <span>2022</span><br><span class="sigma_timeline-month">JUN 1</span>
                  </div>
              </div>

          </div>

      </div>
  </div>
  <!-- Shaekh's Family End -->

@endsection
