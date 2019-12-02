@extends('layouts.base')

@section('title',"Index")

@section('head')
<link rel="stylesheet" href="/css/index.css">
@endsection

@section('content')
  <div class="text-center">    
    <h4>@guest Welcome @else Welcome {{ucwords(Auth::user()->name) }}@endguest!! click here to start your game! </h4>
  <br>
  </div>  
  <a href="/play">
    <img src="img/Play_Button.png" class="play" alt="..."/>
  </a>
      <!-- Button trigger modal -->
  <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
      Launch demo modal
    </button>
  
    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            ...
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            <button type="button" class="btn btn-primary">Save changes</button>
          </div>
        </div>
      </div>
    </div>
@endsection



  {{-- <div class="card-body">
      @if (session('status'))
          <div class="alert alert-success" role="alert">
              {{ session('status') }}
          </div>
      @endif

      You are logged in!
  </div> --}}
