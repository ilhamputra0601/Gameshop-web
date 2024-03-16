<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">

        <title>{{ config('app.name', 'Laravel') }}</title>
        <!-- Bootstrap core CSS -->
        <link href="{{ asset('vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">


        <!-- Additional CSS Files -->
        <link rel="stylesheet" href="{{ asset('assets/css/fontawesome.css')}}">
        <link rel="stylesheet" href="{{ asset('assets/css/templatemo-lugx-gaming.css')}}">
        <link rel="stylesheet" href="{{ asset('assets/css/owl.css')}}">
        <link rel="stylesheet" href="{{ asset('assets/css/animate.css')}}">
        <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css"/>
        <!--
        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body>

          <!-- ***** Preloader Start ***** -->
  {{-- <div id="js-preloader" class="js-preloader">
    <div class="preloader-inner">
      <span class="dot"></span>
      <div class="dots">
        <span></span>
        <span></span>
        <span></span>
      </div>
    </div>
  </div> --}}
  <!-- ***** Preloader End ***** -->

  <!-- ***** Header Area Start ***** -->
  <livewire:layout.navbar />
  <!-- ***** Header Area End ***** -->


  <main>
      {{ $slot }}
  </main>


  <footer>
    <div class="container">
      <div class="col-lg-12">
        <p>Copyright © 2048 LUGX Gaming Company. All rights reserved. &nbsp;&nbsp; <a rel="nofollow" href="https://templatemo.com" target="_blank">Design: TemplateMo</a></p>
      </div>
    </div>
  </footer>

            <!-- Scripts -->
    <!-- Bootstrap core JavaScript -->
    <script src="{{ asset('vendor/jquery/jquery.min.js')}}"></script>
    <script src="{{ asset('vendor/bootstrap/js/bootstrap.min.js')}}"></script>
    <script src="{{ asset('assets/js/isotope.min.js')}}"></script>
    <script src="{{ asset('assets/js/owl-carousel.js')}}"></script>
    <script src="{{ asset('assets/js/counter.js')}}"></script>
    <script src="{{ asset('assets/js/custom.js')}}"></script>

    </body>
</html>
