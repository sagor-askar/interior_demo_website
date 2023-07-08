@extends('frontend.layouts.master')

@section('content')
<div class="qrt-content" id="qrt-scroll-content">
  <div class="qrt-content-frame">
    <div class="qrt-left">

      <div class="qrt-filter qrt-mb-40">
        <a href="#" data-filter="*"
          class="qrt-work-category qrt-current qrt-filter-icon qrt-cursor-color qrt-cursor-scale"><i
            class="fas fa-filter"></i>All Categories</a>
        <a href="#" data-filter=".architecture"
          class="qrt-work-category qrt-cursor-color qrt-cursor-scale">Architecture</a>
        <a href="#" data-filter=".interior" class="qrt-work-category qrt-cursor-color qrt-cursor-scale">Interior
          Design</a>
        <a href="#" data-filter=".repair" class="qrt-work-category qrt-cursor-color qrt-cursor-scale">Repair</a>
      </div>

      <div class="qrt-masonry-grid qrt-mb-40">
        <div class="qrt-grid-sizer"></div>
        <div class="qrt-masonry-grid-item qrt-masonry-grid-item-50 architecture">
          <div class="qrt-work-item"><a data-fancybox="works" href="{{ asset('img/projects/original-size/01.jpg') }}"
              class="qrt-cursor-scale qrt-work-cover-frame"><img src="{{ asset('img/projects/thumbnails/01.jpg') }}" alt="work cover">
              <div class="qrt-item-zoom qrt-cursor-color"><i class="fas fa-expand"></i></div>
              <div class="qrt-work-category"><span>architecture</span></div>
            </a>
            <div class="qrt-work-descr">
              <h4 class="qrt-cursor-color qrt-white"><a href="{{ route('frontend.single.work') }}">Sunset House</a></h4><a
                href="{{ route('frontend.single.work') }}" class="qrt-cursor-scale qrt-work-more"><i class="fas fa-arrow-right" style="color: white"></i></a>
            </div>
          </div>
        </div>
        <div class="qrt-masonry-grid-item qrt-masonry-grid-item-50 interior">
          <div class="qrt-work-item"><a data-fancybox="works" href="{{ asset('img/projects/original-size/02.jpg') }}"
              class="qrt-cursor-scale qrt-work-cover-frame"><img src="{{ asset('img/projects/thumbnails/02.jpg') }}" alt="work cover">
              <div class="qrt-item-zoom qrt-cursor-color"><i class="fas fa-expand"></i></div>
              <div class="qrt-work-category"><span>interior</span></div>
            </a>
            <div class="qrt-work-descr">
              <h4 class="qrt-cursor-color qrt-white"><a href="{{ route('frontend.single.work') }}">Sunset House</a></h4><a
                href="{{ route('frontend.single.work') }}" class="qrt-cursor-scale qrt-work-more"><i class="fas fa-arrow-right" style="color: white"></i></a>
            </div>
          </div>
        </div>
        <div class="qrt-masonry-grid-item qrt-masonry-grid-item-50 repair">
          <div class="qrt-work-item"><a data-fancybox="works" href="{{ asset('img/projects/original-size/03.jpg') }}"
              class="qrt-cursor-scale qrt-work-cover-frame"><img src="{{ asset('img/projects/thumbnails/03.jpg') }}" alt="work cover">
              <div class="qrt-item-zoom qrt-cursor-color"><i class="fas fa-expand"></i></div>
              <div class="qrt-work-category"><span>repair</span></div>
            </a>
            <div class="qrt-work-descr">
              <h4 class="qrt-cursor-color qrt-white"><a href="{{ route('frontend.single.work') }}">Sunset House</a></h4><a
                href="{{ route('frontend.single.work') }}" class="qrt-cursor-scale qrt-work-more"><i class="fas fa-arrow-right" style="color: white"></i></a>
            </div>
          </div>
        </div>
        <div class="qrt-masonry-grid-item qrt-masonry-grid-item-50 architecture interior repair">
          <div class="qrt-work-item"><a data-fancybox="works" href="{{ asset('img/projects/original-size/04.jpg') }}"
              class="qrt-cursor-scale qrt-work-cover-frame"><img src="{{ asset('img/projects/thumbnails/04.jpg') }}" alt="work cover">
              <div class="qrt-item-zoom qrt-cursor-color"><i class="fas fa-expand"></i></div>
              <div class="qrt-work-category"><span>architecture interior repair</span></div>
            </a>
            <div class="qrt-work-descr">
              <h4 class="qrt-cursor-color qrt-white"><a href="{{ route('frontend.single.work') }}">Sunset House</a></h4><a
                href="{{ route('frontend.single.work') }}" class="qrt-cursor-scale qrt-work-more"><i class="fas fa-arrow-right" style="color: white"></i></a>
            </div>
          </div>
        </div>
       
         
                                 
      </div>
      <div class="row">
        <div class="col-lg-12">
          <div class="qrt-call-to-action">
            <h4>Do you have a project?</h4><a class="qrt-btn qrt-btn-sm qrt-btn-color qrt-cursor-scale qrt-anima-link"
              href="contact.html"><span>Let's discuss</span></a>
          </div>
        </div>
      </div>
    </div>
    <div id="fixed" class="qrt-right">
    </div>
  </div>
</div>
@endsection