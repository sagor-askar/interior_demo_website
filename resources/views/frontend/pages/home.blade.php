@extends('frontend.layouts.master')
@section('content')
<div class="qrt-content" id="qrt-scroll-content">
    <div class="swiper-container qrt-main-slider-onepage">
        <div class="qrt-slider-pagination">
            <div class="swiper-pagination swiper-main-pagination"></div>
        </div>
        {{-- <div class="qrt-slider-navigation qrt-absolute">
            <div class="qrt-slider-nav-btn qrt-main-prev qrt-cursor-scale qrt-cursor-color"><i
                    class="fas fa-arrow-left"></i><span>prev</span></div>
            <div class="qrt-slider-nav-btn qrt-main-next qrt-cursor-scale qrt-cursor-color"><span>next</span><i
                    class="fas fa-arrow-right"></i></div>
        </div> --}}
        <div class="swiper-wrapper">
            <div class="swiper-slide">
                <div class="qrt-project-cover">
                    <div class="qrt-image-frame">
                        <img class="" src="{{ asset('img/projects/slider/01.jpg') }}" alt="project cover"
                            data-swiper-parallax="400" data-swiper-parallax-scale="1.4">
                    </div>
                    <div class="qrt-overlay">
                        <div class="qrt-parallax-fix" data-swiper-parallax-x="-400"
                            data-swiper-parallax-duration="1000">
                            
                        </div>
                    </div>
                </div>
            </div>
            <div class="swiper-slide">
                <div class="qrt-project-cover">
                    <div class="qrt-image-frame">
                        <img class="" src="{{ asset('img/projects/slider/02.jpg') }}" alt="project cover"
                            data-swiper-parallax="400" data-swiper-parallax-scale="1.4">
                    </div>
                    <div class="qrt-overlay">
                        <div class="qrt-parallax-fix" data-swiper-parallax-x="-400"
                            data-swiper-parallax-duration="1000">
                            
                        </div>
                    </div>
                </div>
            </div>
            <div class="swiper-slide">
                <div class="qrt-project-cover">
                    <div class="qrt-image-frame">
                        <img class="" src="{{ asset('img/projects/slider/03.jpg') }}" alt="project cover"
                            data-swiper-parallax="400" data-swiper-parallax-scale="1.4">
                    </div>
                    <div class="qrt-overlay">
                        <div class="qrt-parallax-fix" data-swiper-parallax-x="-400"
                            data-swiper-parallax-duration="1000">
                            
                        </div>
                    </div>
                </div>
            </div>
            <div class="swiper-slide">
                <div class="qrt-project-cover">
                    <div class="qrt-image-frame">
                        <img class="" src="{{ asset('img/projects/slider/04.jpg') }}" alt="project cover"
                            data-swiper-parallax="400" data-swiper-parallax-scale="1.4">
                    </div>
                    <div class="qrt-overlay">
                        <div class="qrt-parallax-fix" data-swiper-parallax-x="-400"
                            data-swiper-parallax-duration="1000">
                            
                        </div>
                    </div>
                </div>
            </div>
            <div class="swiper-slide">
                <div class="qrt-project-cover">
                    <div class="qrt-image-frame">
                        <img class="" src="{{ asset('img/projects/slider/05.jpg') }}" alt="project cover"
                            data-swiper-parallax="400" data-swiper-parallax-scale="1.4">
                    </div>
                    <div class="qrt-overlay">
                        <div class="qrt-parallax-fix" data-swiper-parallax-x="-400"
                            data-swiper-parallax-duration="1000">
                            
                        </div>
                    </div>
                </div>
            </div>
            <div class="swiper-slide">
                <div class="qrt-project-cover">
                    <div class="qrt-image-frame">
                        <img class="" src="{{ asset('img/projects/slider/06.jpg') }}" alt="project cover"
                            data-swiper-parallax="400" data-swiper-parallax-scale="1.4">
                    </div>
                    <div class="qrt-overlay">
                        <div class="qrt-parallax-fix" data-swiper-parallax-x="-400"
                            data-swiper-parallax-duration="1000">
                            
                        </div>
                    </div>
                </div>
            </div>
            <div class="swiper-slide">
                <div class="qrt-project-cover">
                    <div class="qrt-image-frame">
                        <img class="" src="{{ asset('img/projects/slider/07.jpg') }}" alt="project cover"
                            data-swiper-parallax="400" data-swiper-parallax-scale="1.4">
                    </div>
                    <div class="qrt-overlay">
                        <div class="qrt-parallax-fix" data-swiper-parallax-x="-400"
                            data-swiper-parallax-duration="1000">
                            
                        </div>
                    </div>
                </div>
            </div>
            <div class="swiper-slide">
                <div class="qrt-project-cover">
                    <div class="qrt-image-frame">
                        <img class="" src="{{ asset('img/projects/slider/08.jpg') }}" alt="project cover"
                            data-swiper-parallax="400" data-swiper-parallax-scale="1.4">
                    </div>
                    <div class="qrt-overlay">
                        <div class="qrt-parallax-fix" data-swiper-parallax-x="-400"
                            data-swiper-parallax-duration="1000">
                            
                        </div>
                    </div>
                </div>
            </div>
           
        </div>
    </div>

    <div class="qrt-content-frame">

        <div class="qrt-left">
            <div class="row">
                <div class="col-lg-6 col-md-12">
  
                  <div class="qrt-team-member qrt-member-about">
                    <div class="qrt-about-me-cover">
                      <img src="{{ asset('img/projects/original-size/05.jpg') }}" alt="team member">
                      <div class="qrt-hint-frame qrt-left">
                        <div class="qrt-scroll-hint">
                          <span></span>
                        </div>
                      </div>
                    </div>
                  </div>
  
                </div>
                <div class="col-lg-6 col-md-12 align-self-center">
  
                  <div class="qrt-member-about">
                    <h3 class="qrt-mb-5">Polock Interior Design</h3>
                    <div class="qrt-el-suptitle">Architect Assistant</div>
  
                    <div class="qrt-divider"></div>
  
                    <ul class="qrt-table">
                      <li>
                        <h5>Joined Quarty:</h5><span>May 2017</span>
                      </li>
                      <li>
                        <h5>Country:</h5><span>Canada</span>
                      </li>
                      <li>
                        <h5>City:</h5><span>Toronto</span>
                      </li>
                      <li>
                        <h5>Education:</h5><span>BNG National University</span>
                      </li>
                      <li>
                        <h5>Email:</h5><span><a class="qrt-cursor-color" href="mailto:quarty.inbox@mail.com">quarty.inbox@mail.com</a></span>
                      </li>
                    </ul>
  
                    <div class="qrt-divider"></div>
  
                    <ul class="qrt-social-list">
                      <li><a href="#." class="qrt-cursor-scale qrt-cursor-color"><i class="fab fa-behance"></i></a></li>
                      <li><a href="#." class="qrt-cursor-scale qrt-cursor-color"><i class="fab fa-dribbble"></i></a></li>
                      <li><a href="#." class="qrt-cursor-scale qrt-cursor-color"><i class="fab fa-instagram"></i></a></li>
                      <li><a href="#." class="qrt-cursor-scale qrt-cursor-color"><i class="fab fa-linkedin-in"></i></a></li>
                    </ul>
                  </div>
  
                </div>
              </div>
  
              <div class="row">
                <div class="col-lg-12">
  
                  <h3 class="qrt-mb-20">About Viktoria</h3>
  
                </div>
                <div class="col-lg-12 qrt-mb-25">
  
                  <p>Organised and reliable, Viktoria is driven to integrate aesthetics with highly functional and exciting interior spaces. Her experience covers a broad range of project types and she works tirelessly to ensure that projects run
                    smoothly from concept to completion. Viktoria is currently undertaking her Masters in Urban Design.</p>
  
                  <p class="mb-20">A global traveler, Viktoria has enjoyed vacations far and wide. When it comes to design, Viktoria cites Interior designer India Mahdavi as one of her biggest inspirations. Her clever use of colour, texture, and
                    artworks combine
                    to provide an endless source of inspiration.</p>
  
                </div>
                <div class="col-lg-12">
  
                  <blockquote>
                    Change is an opportunity! We want to lead people towards durable solutions and designs that enhance feelings of closeness, wellbeing and hopefully, happiness.
                  </blockquote>
  
                </div>
              </div>

            <div class="qrt-divider"></div>

            <div class="row">
                <div class="col-lg-3 col-sm-6">

                    <div class="qrt-counter-frame">
                        <div class="qrt-counter-box">
                            <span class="qrt-counter">10</span>
                        </div>
                        <h5>Years Experience</h5>
                    </div>

                </div>
                <div class="col-lg-3 col-sm-6">

                    <div class="qrt-counter-frame">
                        <div class="qrt-counter-box">
                            <span class="qrt-counter">143</span>
                        </div>
                        <h5>Completed Projects</h5>
                    </div>

                </div>
                <div class="col-lg-3 col-sm-6">

                    <div class="qrt-counter-frame">
                        <div class="qrt-counter-box">
                            <span class="qrt-counter">114</span>
                        </div>
                        <h5>Happy Customers</h5>
                    </div>

                </div>
                <div class="col-lg-3 col-sm-6">

                    <div class="qrt-counter-frame">
                        <div class="qrt-counter-box">
                            <span class="qrt-counter">20</span>
                        </div>
                        <h5>Honors and Awards</h5>
                    </div>

                </div>
            </div>
            <div class="qrt-divider"></div>

            <div class="row">

              <div class="col-lg-12">

                <h3 class="qrt-mb-40">My Services</h3>

              </div>

              <div class="col-lg-4">

                <div class="qrt-icon-box">
                  <img class="mb-20" src="img/icons/icon-1.svg" alt="icon">
                  <h4 class="mb-20">Architecture</h4>
                  <div>Vero explicabo dolorem quod voluptatem consequatur, sint eius voluptates, amet. Animi perspiciatis amet.</div>
                </div>

              </div>
              <div class="col-lg-4">

                <div class="qrt-icon-box">
                  <img class="mb-20" src="img/icons/icon-2.svg" alt="icon">
                  <h4 class="mb-20">Interior design</h4>
                  <div>Eum sapiente odit nisi ad et, amet. Animi perspiciatis amet, quo? Ea similique, ex quas tempore excepturi eos eaque.</div>
                </div>

              </div>
              <div class="col-lg-4">

                <div class="qrt-icon-box">
                  <img class="mb-20" src="img/icons/icon-3.svg" alt="icon">
                  <h4 class="mb-20">Repair</h4>
                  <div>Animi perspiciatis amet, quo? Ea similique, ex quas tempore excepturi eos eaque esse itaque alias eveniet, vero explicabo.</div>
                </div>

              </div>
            </div>
            <div class="qrt-divider qrt-space-fix"></div>
            <div class="row">
                <div class="col-lg-12">
  
                  <h3 class="qrt-mb-40">Latest Viktoria's works</h3>
  
                </div>
                <div class="col-lg-12">
  
                  <div class="swiper-container qrt-latest-works-slider qrt-mb-20" style="overflow: visible">
                    <div class="swiper-wrapper">
                      <div class="swiper-slide">
  
                        <div class="qrt-work-item qrt-work-open">
                          <a data-fancybox="works" href="{{ asset('img/projects/original-size/01.jpg') }}" class="qrt-cursor-scale qrt-work-cover-frame">
                            <img src="{{ asset('img/projects/thumbnails/01.jpg') }}" alt="work cover">
                            <div class="qrt-item-zoom qrt-cursor-color"><i class="fas fa-expand"></i></div>
                          </a>
                          <div class="qrt-work-descr">
                            <h4 class="qrt-cursor-color qrt-white"><a href="{{ route('frontend.single.work') }}">Project title</a></h4>
                            <a href="{{ route('frontend.single.work') }}" class="qrt-cursor-scale qrt-work-more"><i class="fas fa-arrow-right"></i></a>
                          </div>
                        </div>
  
                      </div>
                      <div class="swiper-slide">
  
                        <div class="qrt-work-item qrt-work-open">
                          <a data-fancybox="works" href="{{ asset('img/projects/original-size/02.jpg') }}" class="qrt-cursor-scale qrt-work-cover-frame">
                            <img src="{{ asset('img/projects/thumbnails/02.jpg') }}" alt="work cover">
                            <div class="qrt-item-zoom qrt-cursor-color"><i class="fas fa-expand"></i></div>
                          </a>
                          <div class="qrt-work-descr">
                            <h4 class="qrt-cursor-color qrt-white"><a href="{{ route('frontend.single.work') }}">Project title</a></h4>
                            <a href="{{ route('frontend.single.work') }}" class="qrt-cursor-scale qrt-work-more"><i class="fas fa-arrow-right"></i></a>
                          </div>
                        </div>
  
                      </div>
                      <div class="swiper-slide">
  
                        <div class="qrt-work-item qrt-work-open">
                          <a data-fancybox="works" href="{{ asset('img/projects/original-size/03.jpg') }}" class="qrt-cursor-scale qrt-work-cover-frame">
                            <img src="{{ asset('img/projects/thumbnails/02.jpg') }}" alt="work cover">
                            <div class="qrt-item-zoom qrt-cursor-color"><i class="fas fa-expand"></i></div>
                          </a>
                          <div class="qrt-work-descr">
                            <h4 class="qrt-cursor-color qrt-white"><a href="{{ route('frontend.single.work') }}">Project title</a></h4>
                            <a href="{{ route('frontend.single.work') }}" class="qrt-cursor-scale qrt-work-more"><i class="fas fa-arrow-right"></i></a>
                          </div>
                        </div>
  
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-6">
  
                  <div class="swiper-latest-works-pagination"></div>
  
                </div>
                <div class="col-6">
  
                  <div class="qrt-slider-nav">
                    <!-- prev -->
                    <div class="qrt-slider-prev qrt-latest-works-prev"><i class="fas fa-arrow-left"></i></div>
                    <!-- next -->
                    <div class="qrt-slider-next qrt-latest-works-next"><i class="fas fa-arrow-right"></i></div>
                  </div>
  
                </div>
              </div>
            <div class="qrt-divider qrt-space-fix"></div>

            @include('frontend.include.testimonials')
            

            <div class="qrt-divider"></div>
            @include('frontend.include.footer2')
            {{-- <div class="row">
                <div class="col-lg-12">

                    <div class="qrt-call-to-action">
                        <h4>Do you have a project?</h4>
                        <a class="qrt-btn qrt-btn-sm qrt-btn-color qrt-cursor-scale qrt-anima-link"
                            href="{{ route('frontend.contact') }}"><span>Let's discuss</span></a>
                    </div>

                </div>
            </div> --}}

        </div>
        <div id="fixed" class="qrt-right">

        </div>
    </div>
    @endsection
  