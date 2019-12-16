<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('title')</title>
    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    {{-- css general --}}
    <link rel="stylesheet" href="css/master.css" />
    @yield('head')
   
  </head>

  <body>
    <nav class="navbar navbar-expand-md navbar-dark bg-dark">
      <button
        class="navbar-toggler nabvar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
        <div class="navbar-nav mr-auto" id="puntajenav">
          @guest
          <a class="nav-item nav-link" href="/home">Home </a>
          <a class="nav-item nav-link" href="/contact">Contact</a>
          <a class="nav-item nav-link" href="/faq">FAQ</a>
          @else
          {{-- @if((Auth::user()->email)!= "admin@hotmail.com") --}}
          @if ((Auth::user()->avatar)!=  null)
            <img src="{{Auth::user()->avatar}}" alt="" />        
            @else
              <img src="imgperfil/photo.jpg" alt="" />
          @endif
          <a class="nav-item nav-link" href="/home">Home </a>
          @if((Auth::user()->email)!= "admin@hotmail.com")
          <a class="nav-item nav-link" href="/contact">Contact</a>
          <a class="nav-item nav-link" href="/faq">FAQ</a>
          @endif
          <a class="nav-item nav-link" href="/profile">Profile</a>
          {{-- @endif --}}
          @if((Auth::user()->email)== "admin@hotmail.com")
          <a class="nav-item nav-link" href="/abm">ABM</a>
          @endif
          @endguest
        </div>
        <div class="navbar-nav ml-auto">
          @guest
         <a class="nav-item nav-link" href="/register">Register</a>
         <a class="nav-item nav-link" href="/login">Login</a>
         @else
        <a class="nav-item nav-link" href="{{ route('logout') }}"
         onclick="event.preventDefault();
                   document.getElementById('logout-form').submit();">
            {{ __('Logout') }}
        </a>
        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
            @csrf
        </form>
        @endguest
        </div>
      </div>
    </nav>
@yield('content')
  </body>
</html>
          
