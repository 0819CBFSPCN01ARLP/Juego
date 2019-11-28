<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;

class rankingController extends Controller
{
  public function list(){
    $users= Auth::user()::all();
    $vac= compact("users");
    return view("ranking", $vac);
  }
}
