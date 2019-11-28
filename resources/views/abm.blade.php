<<<<<<< HEAD
@extends('layouts.base')

@section('title',"ABM")

@section('head')
<link rel="stylesheet" href="/css/perfil.css">
@endsection

@section('content')
  <div
  class="container text-center col-lg-8 col-md-8 col-sm-10 col-xs-12 mt-5"
  id="puntaje"
>
  <div class="card text-center">
    <div class="card-header" style="font-weight:bold">

      Question manager:
    </div>
    <div class="row mb-1">
      <div class="col-6">Category: </div>
    </div>
    <div class="row mb-1">
      <div class="col-6">Pregunta</div><div class="col-6 float-right">Boolean</div>
    </div>
    <div class="row mb-1">
      <div class="col-6">Pregunta</div><div class="col-6 float-right">Boolean</div>
    </div>
    <div class="row mb-1">
      <div class="col-6">Pregunta</div><div class="col-6 float-right">Boolean</div>
    </div>
    <div class="row mb-1">
      <div class="col-6">Pregunta</div><div class="col-6 float-right">Boolean</div>
    </div>
    <div class="row mb-1">
      <div class="col-6">Pregunta</div><div class="col-6 float-right">Boolean</div>
    </div>
    <input type="text" name="new" class="Question" value=""><br>
    <div class="">

    <select class="drop-down menu col-sm-4 " placeholder="Boolean" value="" name="category">
      <option value="1">Verdadero</option>
      <option value="2">Falso</option>
    </select>
    <select class="drop-down menu col-sm-4 " placeholder="Select category" value="" name="category">
      <option value="1">Ciencia</option>
      <option value="2">Arte</option>
      <option value="3">Geografía</option>
      <option value="4">Espectaculos</option>
      <option value="5">Historia</option>

    </select> <br><br>
  </div>

    <div>
      <input type="submit" class="button-login" value="Modify" />

      <input type="submit" class="button-login" value="Remove" />

      <input type="submit" class="button-login" value="Insert" />
    </div>
  </div>
</div>
@endsection
=======
@extends('layouts.base')

@section('title',"ABM")

@section('head')
<link rel="stylesheet" href="/css/perfil.css">
@endsection

@section('content')
  <div
  class="container text-center col-lg-8 col-md-8 col-sm-10 col-xs-12 mt-5"
  id="puntaje"
>
  <div class="card text-center">
    <div class="card-header" style="font-size:25px">
      Question manager
    </div>
    @if(session('mensaje')){
      <div class="alert alert-success">
        {{ session('mensaje')}}
      </div>
    }
  @endif
    <div class="row mb-3 mt-3">
    <div class="col-6 float-right" style="font-size:20px">Questions </div><div class="col-3" style="font-size:20px">Category </div><div class="col-3 float-left" style="font-size:20px">Value </div>
    </div>
    @forelse ($questions as $question)

      <div class="row mb-2">
        <div class="col-6">{{$question['text']}}</div><div class="col-3 float-right">{{$question['category_id']}}</div><div class="col-3 float-left">{{$question['value']}}</div>
      </div>
    @empty
      <p>No hay preguntas</p>
    @endforelse

    <div class="">
        <form method="post" action="/abm">
          {{ csrf_field() }}
          <input type="text" name="text" class="Question mb-3 col-10" value=""><br>

    <select class="drop-down menu col-sm-4 " placeholder="Select category" value="" name="category">
  @forelse ($category as $category)
      <option value="{{$category['id']}}">{{$category['id']}}:{{$category['name']}}</option>
  @empty
      <option value="">No hay categorías</option>
  @endforelse

    </select>
    <select class="drop-down menu col-sm-4 " placeholder="Boolean" value="" name="vof">
      <option value="1">Verdadero (1)</option>
      <option value="0">Falso (0)</option>
    </select><br><br>
  </div>

    <div class="mb-3">
      <button type="submit" class="btn" >Insert</button>
      <button type="submit" class="btn" >Modify</button>
      <button type="submit" class="btn" >Remove</button>
    </div>
  </div>
</div>
</form>
@endsection
>>>>>>> 187f4cd78c03d9442db7228b810542960c5589ac
