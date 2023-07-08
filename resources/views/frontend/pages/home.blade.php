@extends('frontend.layouts.master')
@section('content')
<div class="qrt-content" id="qrt-scroll-content">
    <div class="swiper-container qrt-main-slider">
      <div class="qrt-slider-pagination">
        <div class="swiper-pagination swiper-main-pagination"></div>
      </div>
      <div class="qrt-slider-navigation qrt-absolute">
        <div class="qrt-slider-nav-btn qrt-main-prev qrt-cursor-scale qrt-cursor-color"><i
            class="fas fa-arrow-left"></i><span>prev</span></div>
        <div class="qrt-slider-nav-btn qrt-main-next qrt-cursor-scale qrt-cursor-color"><span>next</span><i
            class="fas fa-arrow-right"></i></div>
      </div>
      <div class="swiper-wrapper">
        <div class="swiper-slide">
          <div class="qrt-project-cover">
            <div class="qrt-image-frame">
              <img class="" src="{{ asset('img/projects/slider/01.jpg') }}" alt="project cover" data-swiper-parallax="400"
                data-swiper-parallax-scale="1.4">
            </div>
            <div class="qrt-overlay">
              <div class="qrt-parallax-fix" data-swiper-parallax-x="-400" data-swiper-parallax-duration="1000">
                <div class="qrt-banner-title">
                  {{-- <h1 class="qrt-white qrt-mb-30">Architecture - <br> petrified music</h1> --}}
                  {{-- <div class="qrt-divider-2"></div> --}}
                  {{-- <div class="qrt-text qrt-white qrt-mb-20">Change is an opportunity! We want to lead people towards
                    durable solutions and designs that enhance feelings of closeness, and hopefully, happiness.
                  </div> --}}
                  {{-- <a href="about-us.html"
                    class="qrt-btn qrt-btn-md qrt-btn-color qrt-cursor-scale qrt-anima-link qrt-mb-20"><span>Explore
                      now</span><i class="fas fa-arrow-right"></i></a>
                  <a href="contact.html"
                    class="qrt-btn qrt-btn-md qrt-btn-border qrt-cursor-scale qrt-anima-link qrt-mb-20"><span>Contact</span><i
                      class="fas fa-arrow-right"></i></a> --}}
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="swiper-slide">
          <div class="qrt-project-cover">
            <div class="qrt-image-frame">
              <img class="" src="{{ asset('img/projects/slider/02.jpg') }}" alt="project cover" data-swiper-parallax="400"
                data-swiper-parallax-scale="1.4">
            </div>
            <div class="qrt-overlay">
              <div class="qrt-parallax-fix" data-swiper-parallax-x="-400" data-swiper-parallax-duration="1000">
                <div class="qrt-banner-title">
                  {{-- <h1 class="qrt-white qrt-mb-30">Architecture is <br>about creating order</h1> --}}
                  {{-- <div class="qrt-divider-2"></div> --}}
                  {{-- <div class="qrt-text qrt-white qrt-mb-20">Change is an opportunity! We want to lead people towards
                    durable solutions and designs that enhance feelings of closeness, and hopefully, happiness.
                  </div> --}}
                  {{-- <a href="about-us.html"
                    class="qrt-btn qrt-btn-md qrt-btn-color qrt-cursor-scale qrt-anima-link qrt-mb-20"><span>Explore
                      now</span><i class="fas fa-arrow-right"></i></a>
                  <a href="contact.html"
                    class="qrt-btn qrt-btn-md qrt-btn-border qrt-cursor-scale qrt-anima-link qrt-mb-20"><span>Contact</span><i
                      class="fas fa-arrow-right"></i></a> --}}
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="swiper-slide">
          <div class="qrt-project-cover">
            <div class="qrt-image-frame">
              <img class="" src="{{ asset('img/projects/slider/03.jpg') }}" alt="project cover" data-swiper-parallax="400"
                data-swiper-parallax-scale="1.4">
            </div>
            <div class="qrt-overlay">
              <div class="qrt-parallax-fix" data-swiper-parallax-x="-400" data-swiper-parallax-duration="1000">
                <div class="qrt-banner-title">
                  {{-- <h1 class="qrt-white qrt-mb-30">Our knowledge <br>is your property</h1> --}}
                  {{-- <div class="qrt-divider-2"></div> --}}
                  {{-- <div class="qrt-text qrt-white qrt-mb-20">Change is an opportunity! We want to lead people towards
                    durable solutions and designs that enhance feelings of closeness, and hopefully, happiness.
                  </div> --}}
                  {{-- <a href="about-us.html"
                    class="qrt-btn qrt-btn-md qrt-btn-color qrt-cursor-scale qrt-anima-link qrt-mb-20"><span>Explore
                      now</span><i class="fas fa-arrow-right"></i></a>
                  <a href="contact.html"
                    class="qrt-btn qrt-btn-md qrt-btn-border qrt-cursor-scale qrt-anima-link qrt-mb-20"><span>Contact</span><i
                      class="fas fa-arrow-right"></i></a> --}}
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="swiper-slide">
            <div class="qrt-project-cover">
              <div class="qrt-image-frame">
                <img class="" src="{{ asset('img/projects/slider/04.jpg') }}" alt="project cover" data-swiper-parallax="400"
                  data-swiper-parallax-scale="1.4">
              </div>
              <div class="qrt-overlay">
                <div class="qrt-parallax-fix" data-swiper-parallax-x="-400" data-swiper-parallax-duration="1000">
                
                </div>
              </div>
            </div>
        </div>
        <div class="swiper-slide">
            <div class="qrt-project-cover">
              <div class="qrt-image-frame">
                <img class="" src="{{ asset('img/projects/slider/05.jpg') }}" alt="project cover" data-swiper-parallax="400"
                  data-swiper-parallax-scale="1.4">
              </div>
              <div class="qrt-overlay">
                <div class="qrt-parallax-fix" data-swiper-parallax-x="-400" data-swiper-parallax-duration="1000">
                
                </div>
              </div>
            </div>
        </div>
        <div class="swiper-slide">
            <div class="qrt-project-cover">
              <div class="qrt-image-frame">
                <img class="" src="{{ asset('img/projects/slider/06.jpg') }}" alt="project cover" data-swiper-parallax="400"
                  data-swiper-parallax-scale="1.4">
              </div>
              <div class="qrt-overlay">
                <div class="qrt-parallax-fix" data-swiper-parallax-x="-400" data-swiper-parallax-duration="1000">
                
                </div>
              </div>
            </div>
        </div>
        <div class="swiper-slide">
            <div class="qrt-project-cover">
              <div class="qrt-image-frame">
                <img class="" src="{{ asset('img/projects/slider/07.jpg') }}" alt="project cover" data-swiper-parallax="400"
                  data-swiper-parallax-scale="1.4">
              </div>
              <div class="qrt-overlay">
                <div class="qrt-parallax-fix" data-swiper-parallax-x="-400" data-swiper-parallax-duration="1000">
                
                </div>
              </div>
            </div>
        </div>
        <div class="swiper-slide">
            <div class="qrt-project-cover">
              <div class="qrt-image-frame">
                <img class="" src="{{ asset('img/projects/slider/08.jpg') }}" alt="project cover" data-swiper-parallax="400"
                  data-swiper-parallax-scale="1.4">
              </div>
              <div class="qrt-overlay">
                <div class="qrt-parallax-fix" data-swiper-parallax-x="-400" data-swiper-parallax-duration="1000">
                
                </div>
              </div>
            </div>
        </div>
      </div>
    </div>
  </div>
@endsection
