@extends('frontend.layouts.master')
@section('content')
<div class="qrt-content" id="qrt-scroll-content">
  <div class="row">
    <div class="col-lg-12">

      <div class="qrt-page-cover">
        <img src="img/banners/cover2.jpg" alt="our office">
        {{-- <div class="qrt-about-info">
          <div class="qrt-cover-info">
            <ul class="qrt-table">
              <li>
                <h5 class="qrt-white">Main office</h5><span>Banani OLD DOHS</span></a>
              </li>
              <li>
                <h5 class="qrt-white">Adress:</h5><a href="https://goo.gl/maps/MAa6Au5d9ZMgSfBV7" target="_blank" data-no-swup><span>1B,House#68/A,Road#05.</span></a>
              </li>
            </ul>
          </div>
        </div> --}}
      </div>

    </div>
  </div>

    <div class="qrt-content-frame">
      <div class="qrt-left">

        <div class="row">
          <div class="col-lg-12">

            <h3 class="qrt-mb-40 qrt-text">Contact info</h3>

          </div>
          <div class="col-lg-4">

            <div class="qrt-icon-box">
              <!-- icon -->
              <img class="mb-20" src="img/icons/icon-4.svg" alt="icon">
              <!-- title -->
              <h4 class="mb-20">Phone number</h4>
              <!-- description -->
              <a href="#." data-no-swup><span>+(880) 171-3288600</span></a><br>
              <a href="tel:+9 3(046) 482 88 34" data-no-swup><span>+(880) 171-3288611</span></a>
            </div>

          </div>
          <div class="col-lg-4">

            <div class="qrt-icon-box">
              <!-- icon -->
              <img class="mb-20" src="img/icons/icon-5.svg" alt="icon">
              <!-- title -->
              <h4 class="mb-20">Email</h4>
              <a href="mailto:info@polockgroup.com" data-no-swup><span>info@polockgroup.com</span></a><br>              
            </div>

          </div>
          <div class="col-lg-4">

            <div class="qrt-icon-box">
              <!-- icon -->
              <img class="mb-20" src="img/icons/icon-6.svg" alt="icon">
              <!-- title -->
              <h4 class="mb-20">Location</h4>
              <a href="https://goo.gl/maps/hLL4TR3W1a1HXwnq8" target="_blank" data-no-swup><span>NAMRONEEL, FLAT#1B HOUSE#68/A, ROAD#05, BANANI OLD DOHS, DHAKA-1206, BANGLADESH.</span></a>
            </div>

          </div>
        </div>

        <div class="qrt-divider qrt-space-fix"></div>

        <div class="row">
          <div class="col-lg-12">

            <h3 class="qrt-mb-40 qrt-text">Get in touch</h3>

          </div>
          <div class="col-lg-12">

            <form id="form" class="qrt-contact-form">
              <div class="row">
                <div class="col-lg-6">
                  <div class="qrt-form-field">
                    <input id="name" name="name" class="qrt-input" type="text" placeholder="Name" required>
                    <label for="name"><i class="fas fa-user"></i></label>
                  </div>
                </div>
                <div class="col-lg-6">
                  <div class="qrt-form-field">
                    <input id="email" name="email" class="qrt-input" type="email" placeholder="Email" required>
                    <label for="email"><i class="fas fa-at"></i></label>
                  </div>
                </div>
                <div class="col-lg-12">
                  <div class="qrt-form-field">
                    <textarea id="message" name="text" class="qrt-input" placeholder="Message" required></textarea>
                    <label for="message"><i class="far fa-envelope"></i></label>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="qrt-mb-20">We promise not to disclose your personal information to third parties.</div>
                </div>
                <div class="col-md-6">
                  <div class="qrt-submit-frame qrt-text-right qrt-sm-text-left qrt-mb-40 qrt-text">
                    <button class="qrt-btn qrt-btn-md qrt-btn-color qrt-cursor-scale qrt-submit-button" type="submit"><span>Send message</span></button>
                  </div>
                </div>

              </div>
            </form>

          </div>
        </div>

        <div class="qrt-divider qrt-space-fix"></div>

        <div class="row">
          <div class="col-lg-12">

            <h3 class="qrt-mb-40 qrt-text qrt-text">Welcome to visit</h3>

          </div>
          <div class="col-lg-12">
            <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d3650.663566969391!2d90.3968891!3d23.7949918!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3755c71124700001%3A0x221630bc401dbacd!2sPolock%20Group!5e0!3m2!1sen!2sbd!4v1688808389614!5m2!1sen!2sbd" width="800" height="600" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            {{-- <div class="qrt-map-frame qrt-map-frame-2">
              <div class="qrt-lock"><i class="fas fa-lock"></i></div>
              <div id="mapt" class="qrt-mapt">
                
              </div>
            </div> --}}

          </div>
        </div>

        <div class="qrt-divider"></div>

        
        {{-- <div class="row">
          <div class="col-lg-12">

            <div class="qrt-call-to-action">
              <h4>Learn more about us!</h4>
              <a class="qrt-btn qrt-btn-sm qrt-btn-color qrt-cursor-scale qrt-anima-link" href="{{ route('frontend.about') }}"><span>About us</span></a>
            </div>

          </div>
        </div> --}}
        @include('frontend.include.footer2')

      </div>
    </div>
      <div id="fixed" class="qrt-right">
      </div>
    </div>
  </div>
@endsection