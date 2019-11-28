<<<<<<< HEAD
@extends('layouts.base')

@section('title',"Play")

@section('head')
<link rel="stylesheet" href="/css/jugar.css">
@endsection

@section('content')
  <div class="container pt-5">
    <div class="row">
      <div class="col-6"><h2 class="float-left">Puntaje</h2></div>
      <div class="col-6"><h2 class="float-right">Tiempo</h2></div>
    </div>
  </div>
  <!-- preguntas  -->
    <div class="m-auto preguntas">
      <h4 class="text-align-center">EL AGUA HIERVE A 95 GRADOS</h4>
    </div>
    <!-- botones -->
    <div class="m-auto">
      <button class="btn btn-success btn-lg btn-block true m-auto" style="">VERDADERO</button>
      <br>
      <button class="btn btn-danger btn-lg btn btn-block false m-auto">FALSO</button>
    </div>
  </div>
@endsection
=======
@extends('layouts.base')

@section('title',"Play")

@section('head')
<link rel="stylesheet" href="/css/jugar.css">
@endsection

@section('content')
  <div class="container pt-5">
    <div class="row">
      <div class="col-6"><h2 class="float-left">Puntaje</h2></div>
      <div class="col-6"><h2 class="float-right">Tiempo</h2></div>
    </div>
  </div>
  <!-- preguntas  -->
    <div class="m-auto preguntas">
      <h4 class="text-align-center">EL AGUA HIERVE A 95 GRADOS</h4>
    </div>
    <!-- botones -->
    <div class=" text-center m-auto">
      <button class="btn btn-success btn-lg true m-auto" style="">VERDADERO</button>
      <br><br>
      <button class="btn btn-danger btn-lg btn false m-auto">FALSO</button>
    </div>
  </div>
@endsection
>>>>>>> 187f4cd78c03d9442db7228b810542960c5589ac
