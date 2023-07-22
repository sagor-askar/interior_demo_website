<!doctype html>
<html lang="zxx">


<meta http-equiv="content-type" content="text/html;charset=utf-8" /><!-- /Added by HTTrack -->

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <!-- color of address bar in mobile browser -->
  <meta name="theme-color" content="#28292C">
  <!-- favicon  -->
  <link rel="shortcut icon" href="img/thumbnail.ico" type="image/x-icon">
  <!-- bootstrap css -->
  <link rel="stylesheet" href="{{ asset('/') }}css/plugins/bootstrap.min.css">
  <!-- font awesome css -->
  <link rel="stylesheet" href="{{ asset('/') }}css/plugins/font-awesome.min.css">
  <!-- swiper css -->
  <link rel="stylesheet" href="{{ asset('/') }}css/plugins/swiper.min.css">
  <!-- fancybox css -->
  <link rel="stylesheet" href="{{ asset('/') }}css/plugins/fancybox.min.css">
  <!-- mapbox css -->
  <link href="{{ asset('/') }}css/plugins/mapbox-style.css" rel='stylesheet'>
  <!-- main css -->
  <link rel="stylesheet" href="{{ asset('/') }}css/style.css">

  <title>Polock Interior Design</title>
</head>

<body>

  <div class="qrt-app">
    <div class="qrt-preloader">
      <div class="qrt-preloader-content">
        {{-- <div class="qrt-logo"> --}}
          <p style="color: white">Polock Interior Design</p>
          {{-- <img src="{{ asset('img/Logo_PID-02.png') }}" alt="Quarty"> --}}
        {{-- </div> --}}
        <div id="preloader" class="qrt-preloader-load"></div>
      </div>
    </div>
    <div id="cursor" class="qrt-cursor">
      <div>

      </div>
      {{-- <div class="qrt-follower"><i class="fas fa-circle-notch"></i></div> --}}
    </div>
    @include('frontend.include.header')
    
    @include('frontend.include.footer')
    <div class="qrt-curtain"></div>
    {{-- what's app icon start --}}
      <a href="https://api.whatsapp.com/send?phone=01713288611" class="float" target="_blank">
          <i class="fab fa-whatsapp my-float"></i>
      </a>
     {{-- what's app icon end --}}
    <div id="qrt-dynamic-content" class="qrt-dynamic-content">
      @yield('content')
    </div>
    
    <!-- jquery js -->
    <script src="{{ asset('/') }}js/plugins/jquery.min.js"></script>
    <!-- anime js -->
    <script src="{{ asset('/') }}js/plugins/anime.min.js"></script>
    <!-- swiper js -->
    <script src="{{ asset('/') }}js/plugins/swiper.min.js"></script>
    <!-- progressbar js -->
    <script src="{{ asset('/') }}js/plugins/progressbar.min.js"></script>
    <!-- smooth scrollbar js -->
    <script src="{{ asset('/') }}js/plugins/smooth-scrollbar.min.js"></script>
    <!-- overscroll js -->
    <script src="{{ asset('/') }}js/plugins/overscroll.min.js"></script>
    <!-- isotope js -->
    <script src="{{ asset('/') }}js/plugins/isotope.min.js"></script>
    <!-- fancybox js -->
    <script src="{{ asset('/') }}js/plugins/fancybox.min.js"></script>
    <!-- swup js -->
     <script src="{{ asset('/') }}js/plugins/swup.min.js"></script>
    <!-- mapbox js -->
    <script src="{{ asset('/') }}js/plugins/mapbox.min.js"></script>

    <!-- main js -->
    <script src="{{ asset('/') }}js/main.js"></script>
    {{-- <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.5/jquery.min.js"></script> --}}
    <script type="text/javascript">
              let count = document.querySelectorAll(".count")
        let arr = Array.from(count)



        arr.map(function(item){
          let startnumber = 0

          function counterup(){
          startnumber++
          item.innerHTML= startnumber
          
          if(startnumber == item.dataset.number){
              clearInterval(stop)
          }
        }

        let stop =setInterval(function(){
          counterup()
        },50)

        })
  </script>

</body>

</html>