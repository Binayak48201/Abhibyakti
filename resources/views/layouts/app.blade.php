<!doctype html>
<html lang="{{ app()->getLocale() }}">
   <head>

  <!-- SITE TITTLE -->
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Home</title>
  
  <link href="{{asset('css/fonts/fonts.css')}}" rel="stylesheet">
  <!-- Bootstrap -->
  <link href="{{ asset('css/app.css') }}" rel="stylesheet">
  <!-- Font Awesome -->
  {{-- <link rel="stylesheet" href="{{asset('css/fonts/font-awesome.min.css')}}">   --}}
  
  <!-- CUSTOM CSS -->
  <link href="{{asset('css/home.css')}}" rel="stylesheet">


</head>
   <body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light navbar-laravel collapsed">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                      <img src="images/logo.png" alt="" style="width: 127px; height:72px;" >
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">      
                        <li><a class="nav-link" href="#">Home</a></li>  
                        <li><a class="nav-link" href="#">Books</a></li>    
                        <li><a class="nav-link" href="#">News </a></li>    
                        <li><a class="nav-link" href="#">Musics</a></li>
                    </ul>


                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        @guest
                            <li><a class="nav-link" href="{{ route('login') }}">Login</a></li>
                            <li><a class="nav-link" >or</a></li>
                            <li><a class="nav-link btn btn-static-primary btn-shadow" href="{{ route('register') }}" style="margin-top: 3px; color: white;">Sign Up</a></li>
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        Logout
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>

@yield('content')

<script src="{{ asset('js/app.js') }}"></script>
</body>

</html>

