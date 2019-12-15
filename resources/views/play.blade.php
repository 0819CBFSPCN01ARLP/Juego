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

function pruebaV(){
  fetch("/answerQuestion/{{$newGame->id}}/1")
  .then(function(response){
    return response.json();
  })
  .then(function(data){
    var audioError = document.getElementById("verdadero");
    // si la respuesta coincide con el value de la pregunta
    // hacer un inner del puntaje + el inner ya existente
    //

  })
  .catch(function(error){
    console.log(error);
  })
};

function pruebaF(){
  
var audioError = document.getElementById("error");

audio.play();
}



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
    <h4 class="text-align-right ">
        {{$question}}
    </h4>
  </div>
    <!-- botones -->
    <div class=" text-center m-auto">

        <audio id="audio" controls autoplay loop>
            <source type="audio/wav" src="audio/error.wav">
          </audio>

      <button onclick="pruebaV()" type="submit" name="1" class="btn btn-success btn-lg true m-auto" style="">VERDADERO</button>


        <button onclick="pruebaF()" type="submit" name="0" class="btn btn-danger btn-lg btn false pl-5 pr-5">FALSO</button>
         
    </div>
    <h2>
      Game: {{$newGame}} <br>
      Puntaje: {{$newGame->points}}<br>
      Id Partida: {{$newGame->id}}<br>
      Inicio partida: {{$newGame->started_at}}<br>
      Level: {{$level}}<br>
      Tiempo maximo: {{$level->time}}

    </h2>
  </div>
@endsection
