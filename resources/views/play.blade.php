@extends('layouts.base')

@section('title',"Play")

@section('head')
<link rel="stylesheet" href="/css/jugar.css">
<script>
//ARRANCA EL TIMER
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

async function pruebaV(){
  fetch("/answerQuestion/{{$newGame->id}}/1")
  .then(function(response){
    return response.json();
  })
  .then(function(data){
    // ACA SE TRAE LA NUEVA PREGUNTA Y EL SCORE ACTUALIZADO POR AJAX
    document.querySelector("h4").innerHTML = data.question
    document.querySelector("#score").innerHTML = data.newGame.points
        document.querySelector("#answer").innerHTML ='ID Ultima pregunta: '+ data.newGame.last_question_id //esto es para ver abajo, despues se borra
    console.log(data)

    // ACA IRIA EL IF ANSWER=TRUE REPRODUCIR SONIDO BIEN Y SI ES FALSE, SONIDO MAL...
    // var audioError = document.getElementById("verdadero");

  })

  .catch(function(error){
    // console.log(error);
  })
};

async function pruebaF(){
  fetch("/answerQuestion/{{$newGame->id}}/0")
  .then(function(response){
    return response.json();
  })
  .then(function(data){
    // ACA SE TRAE LA NUEVA PREGUNTA Y EL SCORE ACTUALIZADO POR AJAX
    document.querySelector("h4").innerHTML = data.question
    document.querySelector("#score").innerHTML = data.newGame.points
        document.querySelector("#answer").innerHTML ='ID Ultima pregunta: '+ data.newGame.last_question_id //esto es para ver abajo, despues se borra
    console.log(data)

    // ACA IRIA EL IF ANSWER=TRUE REPRODUCIR SONIDO BIEN Y SI ES FALSE, SONIDO MAL...
    // var audioError = document.getElementById("error");

    // audio.play();
  })

  .catch(function(error){
    // console.log(error);
  })
};

</script>

@endsection

@section('content')
  <div class="container pt-5">
    <div class="row">
	  <div class="col-6"><h2 class="float-left">Score</h2></div>
	  <div class="col-6"><h2 class="float-right">Timer</h2></div>
	  <div class="puntos col-6"><h2  id="score" class="float-left">{{$newGame->points}}</h2></div>
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
      {{-- <audio id="audio" controls autoplay loop>
        <source type="audio/wav" src="audio/error.wav">
      </audio> --}}

      <button onclick="pruebaV()" class="btn btn-success btn-lg true m-auto">VERDADERO</button>
      <button onclick="pruebaF()" class="btn btn-danger btn-lg btn false pl-5 pr-5">FALSO</button>
    </div><br><br><br>

    <h2>Id partida: {{$newGame->id}}</h2>
    <h2 id="answer"></h2> <br>
  </div>
@endsection
