<div class="qrt-top-bar">
      <a href="{{ url('/') }}" class="qrt-symbol qrt-cursor-scale qrt-anima-link content" style="color: white;font-size: 17px;line-height: normal;">
       <span> Since<br>1999</span>
       <span> Since<br>1999</span>
      </a>
      <a href="{{ url('/') }}" class="qrt-logo qrt-cursor-color qrt-cursor-scale qrt-anima-link">
        <img src="{{ asset('img/Logo_PID-02.png') }}" alt="Quarty">
      </a>
      <div class="qrt-menu">
        <div id="qrt-dynamic-menu" class="qrt-dynamic-menu">
          <nav>
            <ul>
              <li class="{{ request()->is("/") || request()->is("/*") ? "current-menu-item" : "" }}">
                <a class="qrt-mobile-fix" style="font-size: 15px;font-weight:normal" href="{{ url('/') }}">Home</a>
               
              </li>
              <li class="{{ request()->is("about") || request()->is("about/*") ? "current-menu-item" : "" }}">
                <a class="qrt-mobile-fix" style="font-size: 15px;font-weight:normal" href="{{ route('frontend.about') }}">About</a>
              </li>
              <li class="{{ request()->is("portfolio") || request()->is("portfolio/*") ? "current-menu-item" : "" }}">
                <a class="qrt-mobile-fix" style="font-size: 15px;font-weight:normal" href="{{ route('frontend.portfolio') }}">Portfolio</a>
               
              </li>
              <li class="{{ request()->is("contact-us") || request()->is("contact-us/*") ? "current-menu-item" : "" }}">
                <a class="qrt-mobile-fix" style="font-size: 15px;font-weight:normal" href="{{ route('frontend.contact') }}">Contact</a>
               
              </li>              
            </ul>
          </nav>
        </div>
      </div>
      <div class="qrt-buttons">
        <a href="#"
          class="qrt-info-btn  qrt-btn qrt-btn-md qrt-btn-color qrt-send-request qrt-anima-link qrt-mr-20 qrt-cursor-scale" style="font-size: 15px;font-weight:normal;width: 250px;height: 40px;">Home Automation </a>
        <div class="qrt-menu-btn qrt-cursor-color qrt-cursor-scale"><span></span></div>
        {{-- <div class="qrt-search-btn qrt-cursor-color qrt-cursor-scale"><i class="fas fa-search"></i></div> --}}
        {{-- <div class="qrt-info-btn qrt-cursor-color qrt-cursor-scale">Send
          request</div> --}}
      </div>
      {{-- <div class="qrt-search">
        <form>
          <input type="text" placeholder="Enter search query">
        </form>
      </div> --}}
      <div class="qrt-info" id="qrt-scroll-info">
        <div class="qrt-info-frame">
          <div class="qrt-testimonial-text">
            1 Touch is a company specialized in home & commercial automation, AI based products, advanced surveillance system & advanced technical solutions. It is a concern of Polock Group, established in 1999.
        </div>
          <div class="qrt-divider"></div>
          <div class="qrt-social-links">
            <div class="qrt-social-links">
              <img src="{{ asset('img/1touch/logo.png') }}" alt="1touchpost">
              <a href="https://1touchbd.com" class="qrt-btn qrt-btn-sm qrt-btn-color" target="_blank" style="background-color: #1F93D1; color:#F5D0A2"
            ><span>Visit 1touch</span></a>
            </div>
          </div>
          <div class="qrt-divider"></div>
          <div class="qrt-instagram">
            <h5 class="qrt-mb-40">Service</h5>
            <div class="qrt-instagram-frame">
              <a href="#." class="qrt-instagram-item qrt-cursor-scale">
                <div class="qrt-instagram-image-frame">
                  <img src="{{ asset('img/1touch/edu_thumb.png') }}" alt="1touchpost">
                </div>
              </a>
              <a href="#." class="qrt-instagram-item qrt-cursor-scale">
                <div class="qrt-instagram-image-frame">
                  <img src="{{ asset('img/1touch/tab-video-bg.jpg') }}" alt="1touchpost">
                </div>
              </a>
              <a href="#." class="qrt-instagram-item qrt-cursor-scale">
                <div class="qrt-instagram-image-frame">
                  <img src="{{ asset('img/1touch/intelligent_equipments.jpg') }}" alt="1touchpost">
                </div>
              </a>
              <a href="#." class="qrt-instagram-item qrt-cursor-scale">
                <div class="qrt-instagram-image-frame">                  
                  <img src="{{ asset('img/1touch/industrial_automation.jpg') }}" alt="1touchpost">
                </div>
              </a>
              <a href="#." class="qrt-instagram-item qrt-cursor-scale">
                <div class="qrt-instagram-image-frame">
                  <img src="{{ asset('img/1touch/bsm.jpg') }}" alt="1touchpost">
                </div>
              </a>
            </div>
          </div>                  
          <div class="qrt-divider"></div>
          <div class="qrt-copy">
            <!-- author ( Please! Do not delete it. You are awesome! :) -->
            <div> 
              <p>Copyright &copy; 2023, All Right Reserved
                 <a href="{{ url('/') }}">Polock Interior Design</a>
              </p>
          </div>
          </div>
        </div>
      </div>
    </div>