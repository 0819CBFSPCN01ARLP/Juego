<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\User;

class rankingController extends Controller
{
  public function list(){
    $users= User::orderBy("score", "desc")->get();
    $vac= compact("users");
    return view("ranking", $vac);
  }
}
// $users = DB::table(DB::raw('('.
//     DB::table('users')->orderBy('bar', 'desc')->take(10)->toSql()
// .') foo'))->orderBy('bar', 'asc')->get();


// function traerScore(PDO $db) {
// $consulta= $db ->prepare('SELECT * FROM users');
//  $consulta-> execute();
//   $result= $consulta-> fetchAll(PDO::FETCH_ASSOC);
//   return $result;
// }
// SELECT * from users
// ORDER BY score ASC;
// LIMIT 5;
