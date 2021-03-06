<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- <title>{{ config('app.name', 'Laravel') }}</title> -->
    <title>Digital Bazar</title>

  

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">


    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/custom.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.0.0/animate.min.css"/>
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    @livewireStyles

  <!-- Scripts -->
  @livewireScripts
  <script src="{{ asset('js/app.js') }}" defer></script>
  <script src="https://kit.fontawesome.com/a8a1b7735d.js" crossorigin="anonymous"></script>


</head>
<body>




  <div id="app">
        <nav class="navbar navbar-expand-md navbar-light  shadow-sm">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                    <!-- {{ config('app.name', 'Laravel') }} -->
                    <img src=" storage/thispics/logo.png" alt=""  class="border border-dark img-responsive rounded-circle" width="50" height="50">
 
                    <span class="h3 lodotext">Digital Bazar</span>
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        <li class="nav-item ">
                                <a class="nav-link line " href="/">Shop</a>
                            </li>
                           
                           <li class="nav-item ">
                                <a class="nav-link line " href="/about">About</a>
                            </li>
                    
                        @guest
                       
                            <li class="nav-item">
                                <a class="nav-link line" href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li>
                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link line" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                  

                        <li class="nav-item">
                                    <a class="nav-link line" href="/home">Dashbord</a>
                                </li>


                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle text-capitalize" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                   <span class="line"> {{ Auth::user()->name }}</span> <span class="caret text-warning"></span>
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                            <img src=" storage/{{Auth::user()->profile}}" alt="" height="40" width="40" 
                              class="img-responsive rounded-circle ">
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>
       
        

        <main class="py-4">
            @yield('content')
        </main>
        <hr>
        <div class="d-flex justify-content-around w-100 footer p-1 align-items-center">
            <a href="/about"><small class="pt-2 ">All 	&#169;  2020 Reserved to Digital Bazar</small>
      </a>
          <small>Developed By <a href="https://www.facebook.com/razesh.chand.1" target="_blank">Rajesh chand</a></small>
        
        </div>
        <br><br>
         </div>

 
    </body>
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
  <script>
    AOS.init({
        offset: 70,
        delay:0,
        duration:600,
        easing: 'ease-in-out',
    });
  </script>

    </html>
