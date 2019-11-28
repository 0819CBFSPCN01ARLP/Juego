<<<<<<< HEAD
@extends('layouts.base')

@section('title',"Index")

@section('head')
<link rel="stylesheet" href="/css/perfil.css">
@endsection

@section('content')
  <div class="container text-center col-lg-4 col-md-6 col-sm-10 col-xs-10 mt-3" id="puntaje">
  <div class="card text-center">
    <h3>Edition</h3>
    <div class="card-body">
      <div>
        <label for="username">New Username</label>
        <input type="text" name="newName" class="username" value=""/>
      </div>
      <form action="" method="post">
      <div>
        <label for="password">New Password</label>
        <input type="password" name="newPass" class="password" />
      </div>
      <div>
        <label>New picture</label>
          <input type="file" name="newAvatar" /> <br><br>
      </div>
      </form>
    </div>
    <input type="submit" class="button-login" value="Save changes" />
  </div>
</div>

@endsection
=======
@extends('layouts.base')

@section('title',"Index")

@section('head')
<link rel="stylesheet" href="/css/perfil.css">
@endsection

@section('content')
  <div class="container text-center col-lg-4 col-md-6 col-sm-10 col-xs-10 mt-3" id="puntaje">
  <div class="card text-center">
    <h3>Edition</h3>
    <div class="card-body">
      <div>
        <label for="username">New Username</label>
        <input type="text" name="newName" class="username" value=""/>
      </div>
      <form action="" method="post">
      <div>
        <label for="password">New Password</label>
        <input type="password" name="newPass" class="password" />
      </div>
      <div>
        <label>New picture</label>
          <input type="file" name="newAvatar" /> <br><br>
      </div>
      </form>
    </div>
    <input type="submit" class="button-login" value="Save changes" />
  </div>
</div>

@endsection
>>>>>>> 187f4cd78c03d9442db7228b810542960c5589ac
