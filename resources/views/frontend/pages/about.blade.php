@extends('frontend.layouts.master')
@section('content')
<div class="qrt-content" id="qrt-scroll-content">
  <div class="row">
    <div class="col-lg-12">

      <div class="qrt-page-cover">
        <img src="img/banners/cover1.jpg" alt="our office">
        <div class="qrt-hint-frame">
          <div class="qrt-scroll-hint">
            <span></span>
          </div>
        </div>
       
      </div>

    </div>
  </div>
    <div class="qrt-content-frame">
      <div class="qrt-left">      

        <div class="row">
          <div class="col-lg-4">

            <h3 class="qrt-mb-40 qrt-text">What we do</h3>

          </div>
          <div class="col-lg-8 qrt-mb-25">

            <p>We have intentionally never developed a stylistic formula for our work, which is why our projects never quite look or feel the same. Each of our spaces is the result of our ability to listen, which has turned our designs and
              buildings into personal reflections of our clients’ personalities and values, which we co-construct through research, workshops and surveys.</p>

            <p>In our studio, every project is an open ended enquiry, helping people to challenge their existing state and work towards an alternative, desired one. We provide guidance, expertise and experience across all phases in the
              architectural process, ranging from thinking, to designing, building, and ultimately finding the right way to communicate the results.</p>

          </div>
          <div class="col-lg-12">

            <blockquote>
              Change is an opportunity! We want to lead people towards durable solutions and designs that enhance feelings of closeness, wellbeing and hopefully, happiness.
            </blockquote>

          </div>
        </div>

        <div class="qrt-divider"></div>

        <div class="row">
          <div class="col-lg-6">

            <h3 class="qrt-mb-40 qrt-text">Achievement</h3>

            <div class="qrt-timeline qrt-mb-40">

              <div class="qrt-timeline-item">
                <div class="qrt-timeline-mark"></div>
                <div class="qrt-a qrt-timeline-content">
                  <div class="qrt-card-header">
                    <div class="qrt-date qrt-mb-20">jan 2018 - may 2020</div>
                    <h4 class="qrt-mb-5">University of toronto</h4>
                    {{-- <div class="qrt-el-suptitle">Student</div> --}}
                  </div>
                  <div class=" qrt-mb-20">Dolor sit amet, consectetur adipisicing elit. Iusto, optio, dolorum provident rerum aut hic quasi placeat iure tempora laudantium ipsa ad debitis unde? Iste voluptatibus minus veritatis qui ut.</div>
                  <a data-fancybox="diploma" href="img/files/diploma.jpg" class="qrt-link qrt-w-chevron">View</a>
                </div>
              </div>

              <div class="qrt-timeline-item">
                <div class="qrt-timeline-mark"></div>
                <div class="qrt-a qrt-timeline-content">
                  <div class="qrt-card-header">
                    <div class="qrt-date qrt-mb-20">jan 2018 - may 2020</div>
                    <h4 class="qrt-mb-5">3D visualization courses</h4>
                    {{-- <div class="qrt-el-suptitle">Student</div> --}}
                  </div>
                  <div class=" qrt-mb-20">Dolor sit amet, consectetur adipisicing elit. Iusto, optio, dolorum provident rerum aut hic quasi placeat iure tempora laudantium ipsa ad debitis unde? Iste voluptatibus minus veritatis qui ut.</div>
                  <a data-fancybox="diploma" href="img/files/certificate.jpg" class="qrt-link qrt-w-chevron">View</a>
                </div>
              </div>

            </div>

          </div>
          <div class="col-lg-6">

            <h3 class="qrt-mb-40"></h3>

            <div class="qrt-timeline qrt-mb-40">

              <div class="qrt-timeline-item">
                <div class="qrt-timeline-mark"></div>
                <div class="qrt-a qrt-timeline-content">
                  <div class="qrt-card-header">
                    <div class="qrt-date qrt-mb-20">jan 2018 - may 2020</div>
                    <h4 class="qrt-mb-5">Envato market</h4>
                    {{-- <div class="qrt-el-suptitle">Template author</div> --}}
                  </div>
                  <div class="qrt-mb-20">Dolor sit amet, consectetur adipisicing elit. Iusto, optio, dolorum provident rerum aut hic quasi placeat iure tempora laudantium ipsa ad debitis unde? Iste voluptatibus minus veritatis qui ut.</div>
                  <a data-fancybox="recommendation" href="#rec-1" class="qrt-link qrt-w-chevron">View</a>

                </div>
              </div>

              <div class="qrt-rec-popup" style="display: none;" id="rec-1">

                <div class="qrt-testimonial">
                  <div class="qrt-testimonial-header">
                    <img src="img/testimonials/t1.jpg" alt="customer">
                    <div class="qrt-testimonial-name">
                      <h4 class="qrt-mb-5">Emma Newman</h4>
                      <div class="qrt-el-suptitle">Chief Architect</div>
                    </div>
                  </div>
                  <div class="qrt-testimonial-text">
                    We engaged Paul Trueman of quarty Studio to manage the planning process and to design and manage a full renovation and remodelling of our 1930s house. We really enjoyed working with Paul. We would not hesitate to
                    recommend Paul and Quarty.
                  </div>
                  <ul class="qrt-stars">
                    <li><i class="fas fa-star"></i></li>
                    <li><i class="fas fa-star"></i></li>
                    <li><i class="fas fa-star"></i></li>
                    <li><i class="fas fa-star"></i></li>
                    <li><i class="fas fa-star"></i></li>
                  </ul>
                </div>

              </div>

              <div class="qrt-timeline-item">
                <div class="qrt-timeline-mark"></div>
                <div class="qrt-a qrt-timeline-content">
                  <div class="qrt-card-header">
                    <div class="qrt-date qrt-mb-20">jan 2018 - may 2020</div>
                    <h4 class="qrt-mb-5">Themeforest</h4>
                    {{-- <div class="qrt-el-suptitle">Art Director</div> --}}
                  </div>
                  <div class="qrt-mb-20">Dolor sit amet, consectetur adipisicing elit. Iusto, optio, dolorum provident rerum aut hic quasi placeat iure tempora laudantium ipsa ad debitis unde? Iste voluptatibus minus veritatis qui ut.</div>
                  <a data-fancybox="recommendation" href="#rec-2" class="qrt-link qrt-w-chevron">View</a>

                </div>
              </div>

              <div class="qrt-rec-popup" style="display: none;" id="rec-2">

                <div class="qrt-testimonial">
                  <div class="qrt-testimonial-header">
                    <img src="img/testimonials/t2.jpg" alt="customer">
                    <div class="qrt-testimonial-name">
                      <h4 class="qrt-mb-5">Paul Trueman</h4>
                      <div class="qrt-el-suptitle">Chief Architect</div>
                    </div>
                  </div>
                  <div class="qrt-testimonial-text">
                    We worked with Quarty Studio for approximately 2 years on the complete overhaul of our house. This included the design of the project, and the execution of the work. Quarty provided excellent design ideas but
                    were also
                    indispensable in managing the practical side of the build.
                  </div>
                  <ul class="qrt-stars">
                    <li><i class="fas fa-star"></i></li>
                    <li><i class="fas fa-star"></i></li>
                    <li><i class="fas fa-star"></i></li>
                    <li><i class="fas fa-star"></i></li>
                    <li><i class="fas fa-star"></i></li>
                  </ul>
                </div>

              </div>

            </div>

          </div>
        </div>

        <div class="qrt-divider qrt-space-fix"></div>

        <div class="row">
          <div class="col-lg-12">

            <h3 class="qrt-mb-40">Our team</h3>

          </div>
          <div class="col-lg-3">

            <div class="qrt-team-member">
              <a href="#" class="qrt-cursor-scale qrt-team-item qrt-anima-link">
                <img src="img/team/tm1.jpg" alt="team member">
              </a>
              <div class="qrt-team-member-description">
                <div class="qrt-member-name">
                  <h4 class="qrt-white qrt-qrt-mb-5">Latiful Kabir Sujon</h4>
                  <span style="color: white">Senior Architect</span>
                </div>
                <a href="#" class="qrt-cursor-scale qrt-member-more qrt-anima-link"><i class="fas fa-arrow-right arrowClass"></i></a>
              </div>
            </div>

          </div>
          <div class="col-lg-3">

            <div class="qrt-team-member">
              <a href="#" class="qrt-cursor-scale qrt-team-item qrt-anima-link">
                <img src="img/team/tm2.jpg" alt="team member">
              </a>
              <div class="qrt-team-member-description">
                <div class="qrt-member-name">
                  <h4 class="qrt-white qrt-qrt-mb-5">Sarker Aliad Polok</h4>
                  <span style="color: white">Associate Architect</span>
                </div>
                <a href="#" class="qrt-cursor-scale qrt-member-more qrt-anima-link"><i class="fas fa-arrow-right arrowClass"></i></a>
              </div>
            </div>

          </div>
          <div class="col-lg-3">

            <div class="qrt-team-member">
              <a href="#" class="qrt-cursor-scale qrt-team-item qrt-anima-link">
                <img src="img/team/tm3.jpg" alt="team member">
              </a>
              <div class="qrt-team-member-description">
                <div class="qrt-member-name">
                  <h4 class="qrt-white qrt-qrt-mb-5">Md.Abul Bashar</h4>
                  <span style="color: white">Civil Engineer</span>
                </div>
                <a href="#" class="qrt-cursor-scale qrt-member-more qrt-anima-link"><i class="fas fa-arrow-right arrowClass"></i></a>
              </div>
            </div>

          </div>
          <div class="col-lg-3">

            <div class="qrt-team-member">
              <a href="#" class="qrt-cursor-scale qrt-team-item qrt-anima-link">
                <img src="img/team/tm4.jpg" alt="team member">
              </a>
              <div class="qrt-team-member-description">
                <div class="qrt-member-name">
                  <h4 class="qrt-white qrt-qrt-mb-5">Rony Roy</h4>
                  <span style="color: white">Executive-Logistics</span>
                </div>
                <a href="#" class="qrt-cursor-scale qrt-member-more qrt-anima-link"><i class="fas fa-arrow-right arrowClass"></i></a>
              </div>
            </div>

          </div>
          <div class="col-lg-3">

            <div class="qrt-team-member">
              <a href="#" class="qrt-cursor-scale qrt-team-item qrt-anima-link">
                <img src="img/team/tm5.jpg" alt="team member">
              </a>
              <div class="qrt-team-member-description">
                <div class="qrt-member-name">
                  <h4 class="qrt-white qrt-qrt-mb-5">Kazi Minhajul Islam Najib</h4>
                  <span style="color: white">Project Coordinator</span>
                </div>
                <a href="#" class="qrt-cursor-scale qrt-member-more qrt-anima-link"><i class="fas fa-arrow-right arrowClass"></i></a>
              </div>
            </div>

          </div>
          <div class="col-lg-3">

            <div class="qrt-team-member">
              <a href="#" class="qrt-cursor-scale qrt-team-item qrt-anima-link">
                <img src="img/team/tm6.jpg" alt="team member">
              </a>
              <div class="qrt-team-member-description">
                <div class="qrt-member-name">
                  <h4 class="qrt-white qrt-qrt-mb-5">Rifat Imtiaz</h4>
                  <span style="color: white">Senior Manager(HR & Admin)</span>
                </div>
                <a href="#" class="qrt-cursor-scale qrt-member-more qrt-anima-link"><i class="fas fa-arrow-right arrowClass"></i></a>
              </div>
            </div>

          </div>
          <div class="col-lg-3">

            <div class="qrt-team-member">
              <a href="#" class="qrt-cursor-scale qrt-team-item qrt-anima-link">
                <img src="img/team/tm7.jpg" alt="team member">
              </a>
              <div class="qrt-team-member-description">
                <div class="qrt-member-name">
                  <h4 class="qrt-white qrt-qrt-mb-5">Faishal Ahammad</h4>
                  <span style="color: white">Executive(Accounts & HR)</span>
                </div>
                <a href="#" class="qrt-cursor-scale qrt-member-more qrt-anima-link"><i class="fas fa-arrow-right arrowClass"></i></a>
              </div>
            </div>

          </div>
        </div>

        <div class="qrt-divider qrt-space-fix"></div>
       

        <div class="row">
          <div class="col-lg-12">

            <div class="swiper-container qrt-brands-slider" style="overflow: visible">
              <div class="swiper-wrapper">
                <div class="swiper-slide">
                  <img src="img/brands/b1.svg" alt="brand">
                </div>
                <div class="swiper-slide">
                  <img src="img/brands/b2.svg" alt="brand">
                </div>
                <div class="swiper-slide">
                  <img src="img/brands/b3.svg" alt="brand">
                </div>
                <div class="swiper-slide">
                  <img src="img/brands/b4.svg" alt="brand">
                </div>
                <div class="swiper-slide">
                  <img src="img/brands/b5.svg" alt="brand">
                </div>
                <div class="swiper-slide">
                  <img src="img/brands/b6.svg" alt="brand">
                </div>
                <div class="swiper-slide">
                  <img src="img/brands/b7.svg" alt="brand">
                </div>
              </div>
            </div>

          </div>
        </div>
        @include('frontend.include.footer2')

      </div>
      <div id="fixed" class="qrt-right">
      </div>
    </div>
  </div>

@endsection
