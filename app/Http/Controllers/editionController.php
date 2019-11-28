<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use Illuminate\Support\Facades\Hash;

class editionController extends Controller
{

    public function editUser(Request $req){
      $id=Auth::user()->id;
      $user=Auth::user();
      if(($req->newName)== null){
        $user->name=Auth::user()->name;
      } else{
        $user->name=$req->newName;
      }
      if(($req->newPass)== null){
        // $pass= Hash::make(Auth::user()->password);
          $user->password=Auth::user()->password;
      } else{
      $user->password=$req->newPass;
    }
    $user->email= Auth::user()->email;

      $user-> save();
      return redirect("/profile")->with('mensaje', 'Su perfil ha sido editado');

      }

}
