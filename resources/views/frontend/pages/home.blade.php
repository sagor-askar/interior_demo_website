
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
          <div class="row" style="padding: 100px 300px 65px 178px;">
            <div class="col-lg-6 col-md-12">

              <div class="qrt-about-me-cover">
                <img src="img/projects/thumbnails/v-1.jpg" alt="team member">
              </div>

            </div>
            <div class="col-lg-6 col-md-12 align-self-center">

              <div class="qrt-member-about">
                <h3 class="qrt-mb-5" style="font-size: 25px;text-transform: uppercase;color: #000;font-weight: 100;padding: 0px 0px 15px 0px;">WE ARE Polock Interior design</h3>
                <div class="qrt-mb-20">Polock Interior Design Limited is one of the design intensive architecture, interior design, engineering, and urban planning architecture firms in Bangladesh. We have completed more than 300 projects in Dhaka city and around. We are a growing bunch of young professionals committedly working in an effort to make our mark on Bangladesh map through iconic building footprints, targeting excellence, innovation, and sustainability in our designs.Our portfolio contains some of the diverse range of architectural practices from vibrant interior design with customized furniture, luxurious vacation house, inspiring learning centers, devotional mosques to cutting-edge factory buildings. Our design values are modern: universally rational with thriving spatial relationships, honest expression of materials, clean lines, planes & volumes while also being reflective of the characters of our clients</div>                
              </div>

            </div>
          </div>
  
              <div class="row">
                <div class="col-lg-12">
  
                  <blockquote>
                    Change is an opportunity! We want to lead people towards durable solutions and designs that enhance feelings of closeness, wellbeing and hopefully, happiness.
                  </blockquote>
  
                </div>
              </div>

            <div class="qrt-divider"></div>

            <div class="row">
                  <div id="counter">

                    <div class="item">
                      <h1 class="count" data-number="220" >220</h1>
                      <h3 class="text">Reward</h3>
                    </div>
                    <div class="item">
                      <h1 class="count" data-number="190" >190</h1>
                      <h3 class="text">year+ Eexperience</h3>
                    </div>
                    <div class="item">
                      <h1 class="count" data-number="560" >560</h1>
                      <h3 class="text">project completed</h3>
                    </div>
                    <div class="item">
                      <h1 class="count" data-number="300" >300</h1>
                      <h3 class="text">happy clients</h3>
                    </div>
                  
                  </div>
               
            </div>
            <div class="qrt-divider"></div>

            <div class="row">
              <div class="col-lg-6">

                <h3 class="qrt-mb-40 qrt-text">Our Service</h3>

                <div class="qrt-timeline qrt-mb-40">

                  <div class="qrt-timeline-item">
                    <div class="qrt-timeline-mark"></div>
                    <div class="qrt-a qrt-timeline-content">
                      <div class="qrt-card-header">
                        <div class="qrt-date qrt-mb-20">Interior Architecture</div>
                        <h4 class="qrt-mb-5">University of toronto</h4>
                        
                      </div>
                      
                     
                    </div>
                  </div>

                  <div class="qrt-timeline-item">
                    <div class="qrt-timeline-mark"></div>
                    <div class="qrt-a qrt-timeline-content">
                      <div class="qrt-card-header">
                        <div class="qrt-date qrt-mb-20">Industry Buildings</div>
                        <h4 class="qrt-mb-5">3D visualization courses</h4>
                       
                      </div>
                      
                      
                    </div>
                  </div>

                </div>

              </div>
              <div class="col-lg-6">

                <h3 class="qrt-mb-40" style="padding: 8px"></h3>

                <div class="qrt-timeline qrt-mb-40">

                  <div class="qrt-timeline-item">
                    <div class="qrt-timeline-mark"></div>
                    <div class="qrt-a qrt-timeline-content">
                      <div class="qrt-card-header">
                        <div class="qrt-date qrt-mb-20">Landscape Design</div>
                        <h4 class="qrt-mb-5">Envato market</h4>
                        
                      </div>                    
                     

                    </div>
                  </div>
                  <div class="qrt-timeline-item">
                    <div class="qrt-timeline-mark"></div>
                    <div class="qrt-a qrt-timeline-content">
                      <div class="qrt-card-header">
                        <div class="qrt-date qrt-mb-20">Commercial Buildings</div>
                        <h4 class="qrt-mb-5">Themeforest</h4>
                        
                      </div>
                      
                      

                    </div>
                  </div>                

                </div>

              </div>
            </div>
            <div class="qrt-divider qrt-space-fix"></div>
            <div class="row">
                <div class="col-lg-12">
  
                  <h3 class="qrt-mb-40 qrt-text">Latest works</h3>
  
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
                            <h4 class="qrt-cursor-color qrt-white" style="font-size: 17px;font-weight: normal;"><a href="{{ route('frontend.single.work') }}">Project title</a></h4>
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
                            <h4 class="qrt-cursor-color qrt-white" style="font-size: 17px;font-weight: normal;"><a href="{{ route('frontend.single.work') }}">Project title</a></h4>
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
                            <h4 class="qrt-cursor-color qrt-white" style="font-size: 17px;font-weight: normal;"><a href="{{ route('frontend.single.work') }}">Project title</a></h4>
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
                <div class="qrt-buttons" style="padding: 20px 0px 20px 0px">
                  <a href="{{ route('frontend.portfolio') }}"
                    class="qrt-btn qrt-btn-md qrt-btn-color qrt-send-request qrt-anima-link qrt-mr-20" style="font-size: 15px;font-weight:normal"><span>View Projects</span>
                  </a>
              </div>
              </div>
            <div class="qrt-divider qrt-space-fix"></div>

            @include('frontend.include.testimonials')
            

            <div class="qrt-divider"></div>
            @include('frontend.include.banner')
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
    
  