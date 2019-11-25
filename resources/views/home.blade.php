@extends('layouts.base')

@section('title',"Index")

@section('head')
<link rel="stylesheet" href="/css/index.css">
@endsection

@section('content')
  <div class="text-center">
    <h4>@guest Welcome @else Welcome {{ Auth::user()->name }}@endguest!! click here to start your game! </h4>
  <br>
  </div>
  <a href="/play">
    <img src="img/Play_Button.png" class="play" alt="..."/>
  </a>
@endsection



  {{-- <div class="card-body">
      @if (session('status'))
          <div class="alert alert-success" role="alert">
              {{ session('status') }}
          </div>
      @endif

      You are logged in!
  </div> --}}
