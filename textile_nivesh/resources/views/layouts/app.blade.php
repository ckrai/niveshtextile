<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Nivesh | Textile - Dashboard</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
     @yield('script')
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">Nivesh | Textile - Dashboard</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto"></ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        @guest
                            @if (Route::has('login'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                                </li>
                            @endif
                            
                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }}
                                </a>

                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="{{ route('logout') }}"
                                   onclick="event.preventDefault();
                                                 document.getElementById('logout-form').submit();">
                                    {{ __('Logout') }}
                                </a>
                                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                    @csrf
                                </form>
                            </div>
                            </li>
                        @endguest
                    </ul>
                </div>

            </div>
        </nav>
        <main class="py-4">
             <!-- <img src="{{url('/assets/nivesh.jpg')}}" height="200" width="1340" alt="Image"/> -->
            <div id="carouselExampleControls" class="container carousel slide" style="width:100%; max-width:100%;" data-ride="carousel">
              <div class="carousel-inner">
                <div class="carousel-item active">
                  <img class="d-block w-100" src="{{url('/assets/nivesh.jpg')}}" height="200" width="1340" alt="First slide">
                </div>
                <div class="carousel-item">
                  <img class="d-block w-100" src="{{url('/assets/Nivesh 1.jpg')}}" height="200" width="1340" alt="Second slide">
                </div>
                <div class="carousel-item">
                  <img class="d-block w-100" src="{{url('/assets/Nivesh 2.jpg')}}" height="200" width="1340" alt="Third slide">
                </div>
              </div>
              <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
              </a>
              <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
              </a>
            </div>
            @yield('content')
        </main>
    </div>
    <!-- Footer -->
<footer class="text-center text-lg-start bg-light text-muted">
  <!-- Copyright -->
  <div class="text-center p-4" style="background-color: rgba(235, 210, 210, 0.35);">
    <a class="title_text" style="color: rgba(199, 113, 25, 1.0);">© 2022 Copyright: U. P. Industrial Consultants Ltd.</a>
    <a class="text fw-bold" style="font-size: larger; text-decoration-color: blue; color: #48af27;" href="https://upicon.in/"><b>UPICON.IN</b></a>
  </div>
  <!-- Copyright -->
</footer>

<!-- Footer -->
<!-- <footer class="text-center text-white" style="background-color: #f1f1f1;">
  <div class="text-center text-dark p-3" style="background-color: rgba(0, 0, 0, 0.2);">
    © 2022 Copyright:
    <a class="text-dark" href="https://upicon.in/">UPICON.IN</a>
  </div>
</footer> -->
</body>
</html>
