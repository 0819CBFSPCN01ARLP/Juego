@extends('layouts.base')

@section('title',"Index")

@section('head')
<link rel="stylesheet" href="/css/index.css">
@endsection

@section('content')
  <div class="text-center">    
    <h4>@guest Welcome @else Welcome {{ucwords(Auth::user()->name) }}@endguest!! Click Play to start your game or<button type="button" class="btn btn-link" data-toggle="modal" data-target="#exampleModal">see the rules!!!
    </button></h4>
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Reglas del juego</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body text-align-center">
            Tendras que contestar la mayor cantidad de preguntas en el lapso de 1 minuto, donde cada pregunta correcta suma 10 puntos.
            Atento porque hay preguntas de todas las categorias!
            Ahora si, dale Play y a jugar!
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          </div>
        </div>
      </div>
    </div>
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
