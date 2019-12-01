@extends('layouts.base')

@section('title',"Play")

@section('head')
<link rel="stylesheet" href="/css/jugar.css">
<script>

	var inicio=0;

	var timeout=0;

 

	function empezarDetener(elemento)

	{

		if(timeout==0)

		{

			// empezar el cronometro

 

			elemento.value="Detener";

 

			// Obtenemos el valor actual

			inicio=vuelta=new Date().getTime();

 

			// iniciamos el proceso

			funcionando();

		}else{

			// detemer el cronometro

 

			elemento.value="Empezar";

			clearTimeout(timeout);

			timeout=0;

		}

	}

 

	function funcionando()

	{

		// obteneos la fecha actual

		var actual = new Date().getTime();

 

		// obtenemos la diferencia entre la fecha actual y la de inicio

		var diff=new Date(actual-inicio);

 

		// mostramos la diferencia entre la fecha actual y la inicial

		var result=LeadingZero(diff.getUTCHours())+":"+LeadingZero(diff.getUTCMinutes())+":"+LeadingZero(diff.getUTCSeconds());

		document.getElementById('crono').innerHTML = result;

 

		// Indicamos que se ejecute esta función nuevamente dentro de 1 segundo

		timeout=setTimeout("funcionando()",1000);

	}

 

	/* Funcion que pone un 0 delante de un valor si es necesario */

	function LeadingZero(Time) {

		return (Time < 10) ? "0" + Time : + Time;

	}

	</script>
@endsection

@section('content')

  <div class="container pt-5">
    <div class="row">
      <div class="col-6"><h2 class="float-left">Puntaje</h2></div>
      <div class="col-6"><h2 class="float-right">Tiempo</h2></div>      
      <div class="crono_wrapper col-12"><h2 id="crono" class="float-right">00:00:00</h2></div>
      <input type="button" value="Empezar" onclick=empezarDetener(this);>
    </div>
  </div>
  <!-- preguntas  -->
  <div class="m-auto preguntas">
    <h4 class="text-align-center">EL AGUA HIERVE A 95 GRADOS</h4>
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
