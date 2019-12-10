@extends('layouts.base')

@section('title',"Play")

@section('head')
<link rel="stylesheet" href="/css/jugar.css">
<script>

function startTimer(duration, display) {
    var timer = duration, minutes, seconds;
    setInterval(function () {
        minutes = parseInt(timer / 60, 10)
        seconds = parseInt(timer % 60, 10);

        minutes = minutes < 10 ? "0" + minutes : minutes;
        seconds = seconds < 10 ? "0" + seconds : seconds;

        display.textContent = minutes + ":" + seconds;

        if (--timer < 0) {
            timer = duration;
        }
    }, 1000);
}

window.onload = function () {
    var oneMinute = 60 * 1,
        display = document.querySelector('#time');
    startTimer(oneMinute, display);
};



</script>
@endsection

@section('content')


  <div class="container pt-5">
    <div class="row">
	  <div class="col-6"><h2 class="float-left">Puntaje</h2></div>
	  <div class="col-6"><h2 class="float-right">Tiempo</h2></div>
	  <div class="puntos col-6"><h2 class="float-left">00000</h2></div>
      <div class="col-6"><h2 id="time" class="float-right"></h2></div>
    </div>
  </div>
  <!-- preguntas  -->
  <div class="m-auto preguntas">
    <h4 class="text-align-right">
      @forelse ($questions as $q)
        {{$q['text']}}
      @empty

      @endforelse
    </h4>
  </div>
    <!-- botones -->
    <div class=" text-center m-auto">
      <button type="submit" name="1" class="btn btn-success btn-lg true m-auto" style="">VERDADERO</button>
      <br><br>
      <button type="submit" name="0" class="btn btn-danger btn-lg btn false m-auto">FALSO</button>
    </div>
  </div>
@endsection

{{-- @forelse ($questions as $q)
  <div class="m-auto preguntas">
    <h4 class="text-align-center">{{$q['text']}}</h4>
  </div>
@empty
  <p>No hay usuarios</p>
@endforelse --}}

{{-- COMO JUGAR: Elegí tu primer categoría para comenzar a jugar el Nivel 1, donde tendrás
10 preguntas de 10ptos cada una y que deberás responder antes de 1'. Al pasar de Nivel,
elegirás la siguiente categoría, el puntaje por acierto será mayor pero ojo! que el
tiempo se reduce. Las categorías pueden elegirse una sola vez! --}}
