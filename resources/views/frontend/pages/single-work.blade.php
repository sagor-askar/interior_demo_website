@extends('frontend.layouts.master')
@section('content')
<div class="qrt-content" id="qrt-scroll-content">
    <div class="qrt-half-content-frame">
      <div class="qrt-left">

        <div class="row">
          <div class="col-lg-12">

            <h2 class="qrt-mb-40">MinimalListic interior</h2>

            <div class="qrt-page-cover qrt-cover-center">
              <img src="{{ asset('img/projects/thumbnails/01.jpg') }}" alt="sunset house">
              <div class="qrt-about-info qrt-right-position">
                <div class="qrt-cover-info">
                  <ul class="qrt-table">
                    <li>
                      <h5 class="qrt-white">Order Date:</h5><span>Bangladesh</span>
                    </li>
                    <li>
                      <h5 class="qrt-white">Final Date:</h5><span>Dhaka</span>
                    </li>
                    <li>
                      <h5 class="qrt-white">Client:</h5><span>Gulshan</span>
                    </li>
                  </ul>
                </div>
              </div>
            </div>

            <div class="qrt-just-text">
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Officiis expedita, modi quibusdam vitae. Accusamus nisi dolorum laborum, exercitationem fugiat obcaecati repudiandae, doloremque enim magnam officia iusto cupiditate
                voluptatem quidem ipsum ex maxime quae non facilis inventore dignissimos ut ea expedita velit, corrupti dicta! Quae fugit reprehenderit illum tenetur saepe magni perspiciatis, similique ea eligendi sit quis fugiat, possimus
                voluptatibus eius! Odio quas at, nihil nobis blanditiis voluptas libero maiores rerum!</p>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Perferendis culpa illo optio libero nam, error amet modi explicabo quaerat ratione!</p>
            </div>

            <div class="qrt-masonry-grid">
              <div class="qrt-grid-sizer"></div>
              <div class="qrt-masonry-grid-item qrt-masonry-grid-item-50 interior architecture">
                <div class="qrt-work-item"><a data-fancybox="works" href="{{ asset('img/projects/original-size/01.jpg') }}" class="qrt-cursor-scale qrt-work-cover-frame"><img src="{{ asset('img/projects/original-size/01.jpg') }}" alt="work cover">
                    <div class="qrt-item-zoom qrt-cursor-color"><i class="fas fa-expand"></i></div>
                  </a>
                </div>
              </div>
              <div class="qrt-masonry-grid-item qrt-masonry-grid-item-50 repair">
                <div class="qrt-work-item"><a data-fancybox="works" href="{{ asset('img/projects/original-size/01.jpg') }}" class="qrt-cursor-scale qrt-work-cover-frame"><img src="{{ asset('img/projects/original-size/01.jpg') }}" alt="work cover">
                    <div class="qrt-item-zoom qrt-cursor-color"><i class="fas fa-expand"></i></div>
                  </a>
                </div>
              </div>
             
            </div>

            <div class="qrt-just-text">
              <p>Facilis inventore dignissimos ut ea expedita velit, corrupti dicta! Quae fugit reprehenderit illum tenetur saepe magni perspiciatis, similique ea eligendi sit quis fugiat, possimus
                voluptatibus eius! Odio quas at, nihil nobis blanditiis voluptas libero maiores rerum!</p>
              <p>Eerror amet modi explicabo quaerat ratione!</p>
            </div>

          </div>
        </div>

        <div class="qrt-divider qrt-space-fix"></div>

       
        <div class="row">
          <div class="col-lg-12">
            <div class="qrt-call-to-action">
              <h4>Do you have a project?</h4><a class="qrt-btn qrt-btn-sm qrt-btn-color qrt-cursor-scale qrt-anima-link" href="contact.html"><span>Let's discuss</span></a>
            </div>
          </div>
        </div>
      </div>
      <div id="fixed" class="qrt-right">
        <div class="qrt-half-banner qrt-left-align qrt-animated-zoom">
          <div class="qrt-image-frame">
            <img src="img/banners/banner3.jpg" alt="banner">
          </div>
          <div class="qrt-overlay">
            <div class="qrt-scroll-hint"><span></span></div>
            <div class="qrt-banner-title">
              <h2 class="qrt-white qrt-mb-10">Our Works</h2>
              <div class="qrt-divider-2"></div>
              <div class="qrt-text qrt-white qrt-mb-20">Dolor sit amet, consectetur adipisicing elit. <br>Vel excepturi, earum inventore.</div><a href="contact.html" class="qrt-btn qrt-btn-md qrt-btn-color qrt-anima-link"><span>Get in
                  touch</span></a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
    
@endsection