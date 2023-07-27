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

        <div class="row" style="padding: 50px 0px 40px 0px;">
          <div class="col-lg-4">

            <h3 class="qrt-mb-40 qrt-text">What we do</h3>

          </div>
          <div class="col-lg-8 qrt-mb-25">

            <p>We have intentionally never developed a stylistic formula for our work, which is why our projects never quite look or feel the same. Each of our spaces is the result of our ability to listen, which has turned our designs and
              buildings into personal reflections of our clients’ personalities and values, which we co-construct through research, workshops and surveys.</p>

            <p>In our studio, every project is an open ended enquiry, helping people to challenge their existing state and work towards an alternative, desired one. We provide guidance, expertise and experience across all phases in the
              architectural process, ranging from thinking, to designing, building, and ultimately finding the right way to communicate the results.</p>

          </div>
        </div>

        <div class="qrt-divider"></div>

        <div class="row">
          <div class="col-lg-12">

            <h3 class="qrt-mb-40 qrt-text">achievement</h3>

          </div>
          <div class="col-lg-6">

            <div class="qrt-post-frame">
              <a href="#" class="qrt-post-thumb qrt-cursor-scale qrt-anima-link">
                <img src="{{ asset('img/blog/1.jpg') }}" alt="thumbnail">
                
              </a>
              
            </div>

          </div>
          <div class="col-lg-6">

            <div class="qrt-post-frame">
              <a href="#" class="qrt-post-thumb qrt-cursor-scale qrt-anima-link">
                <img src="{{ asset('img/blog/2.jpg') }}" alt="thumbnail">
                
              </a>
            
            </div>

          </div>
          <div class="col-lg-6">

            <div class="qrt-post-frame">
              <a href="#" class="qrt-post-thumb qrt-cursor-scale qrt-anima-link">
                <img src="{{ asset('img/blog/4.jpg') }}" alt="thumbnail">
                
              </a>
            
            </div>

          </div>
          <div class="col-lg-6">

            <div class="qrt-post-frame">
              <a href="#" class="qrt-post-thumb qrt-cursor-scale qrt-anima-link">
                <img src="{{ asset('img/blog/3.jpg') }}" alt="thumbnail">
                
              </a>
             
            </div>

          </div>
          <div class="col-lg-6">

            <div class="qrt-post-frame">
              <a href="#" class="qrt-post-thumb qrt-cursor-scale qrt-anima-link">
                <img src="{{ asset('img/blog/5.jpg') }}" alt="thumbnail">
                
              </a>
             
            </div>

          </div>
          <div class="col-lg-6">

            <div class="qrt-post-frame">
              <a href="#" class="qrt-post-thumb qrt-cursor-scale qrt-anima-link">
                <img src="{{ asset('img/blog/6.jpg') }}" alt="thumbnail">
                
              </a>              
            </div>

          </div>

        </div>

        <div class="qrt-divider qrt-space-fix"></div>

        <div class="row">
          <div class="col-lg-12">

            <h3 class="qrt-mb-40 qrt-text">Our team</h3>

          </div>
          <div class="col-lg-3">

            <div class="qrt-team-member">
              <a href="#" class="qrt-cursor-scale qrt-team-item qrt-anima-link">
                <img src="img/team/tm1.jpg" alt="team member">
              </a>
              <div class="qrt-team-member-description">
                <div class="qrt-member-name">
                  <h4 class="qrt-white qrt-qrt-mb-5" style="font-size: 17px;font-weight:normal">Latiful Kabir Sujon</h4>
                  <span style="color: white">Head of Department</span>
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
                  <h4 class="qrt-white qrt-qrt-mb-5" style="font-size: 17px;font-weight:normal">Sarker Aliad Polok</h4>
                  <span style="color: white">Designer & Developer</span>
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
                  <h4 class="qrt-white qrt-qrt-mb-5" style="font-size: 17px;font-weight:normal">Md.Abul Bashar</h4>
                  <span style="color: white">Head-Construction</span>
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
                  <h4 class="qrt-white qrt-qrt-mb-5" style="font-size: 17px;font-weight:normal">Rony Roy</h4>
                  <span style="color: white">Head-Logistics</span>
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
                  <h4 class="qrt-white qrt-qrt-mb-5" style="font-size: 17px;font-weight:normal">Jasim Uddin</h4>
                  <span style="color: white">Sr.Graphics Designer</span>
                </div>
                <a href="#" class="qrt-cursor-scale qrt-member-more qrt-anima-link"><i class="fas fa-arrow-right arrowClass"></i></a>
              </div>
            </div>

          </div>
          <div class="col-lg-3">

            <div class="qrt-team-member">
              <a href="#" class="qrt-cursor-scale qrt-team-item qrt-anima-link">
                <img src="img/team/tm8.jpg" alt="team member">
              </a>
              <div class="qrt-team-member-description">
                <div class="qrt-member-name">
                  <h4 class="qrt-white qrt-qrt-mb-5" style="font-size: 17px;font-weight:normal">Kazi Minhajul Islam Najib</h4>
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
                  <h4 class="qrt-white qrt-qrt-mb-5" style="font-size: 17px;font-weight:normal">Rifat Imtiaz</h4>
                  <span style="color: white">Head-HR & Admin</span>
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
                  <h4 class="qrt-white qrt-qrt-mb-5" style="font-size: 17px;font-weight:normal">Faishal Ahammad</h4>
                  <span style="color: white">Head-Accounts</span>
                </div>
                <a href="#" class="qrt-cursor-scale qrt-member-more qrt-anima-link"><i class="fas fa-arrow-right arrowClass"></i></a>
              </div>
            </div>

          </div>
        </div>

        <div class="qrt-divider qrt-space-fix"></div>
       

        @include('frontend.include.banner')
        @include('frontend.include.footer2')

      </div>
      <div id="fixed" class="qrt-right">
      </div>
    </div>
  </div>

@endsection
