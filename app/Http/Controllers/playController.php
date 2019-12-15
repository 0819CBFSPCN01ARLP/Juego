<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\Question;
use App\Game;
use App\Level;

class playController extends Controller
{
    public function showQuestions(){
      $user= Auth::user(); // identifica usuario
      $newGame= new Game; // creo nueva partida
      $newGame->user_id = $user->id;
      $newGame->points= 0;
      $newGame->id = count(Game::all())+1;
      $newGame->started_at= time();
      $id=1;
      $level= Level::find($id);

      $count=count(Question::all());
      $id=rand(1, $count);
      $question = Question::find($id)->text;
      $vac= compact("question","level","newGame");
      return view("play", $vac);
    }

    public function answerQuestion(Request $req){
      $count=count(Question::all());
      $id=rand(1, $count);
      $question = Question::find($id)->text;
      // if (value== Question($id)->value){
      //   Game->points= Level->score;
      // }
      // if(session){}
      //reconocer partida, usuario y Nivel
      // obtener boton value y comparar con la base de datos
      // en caso de acierto sumar puntaje
      $count=count(Question::all());
      $id=rand(1, $count);
      $question= Question::find($id)->text;
      // $scoreNuevo = ???;

      return compact("question","scoreNuevo");

    }





}
