<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\Question;
use App\Levels;

class playController extends Controller
{
    // public function showQuestions(){
    //
    //   $questions= Question::all();
    //   $vac= compact("questions");
    //   return view("play", $vac);
    // }

    public function showQuestions(){

      $count=count(Question::all());
      $id=rand(1, $count);
      $question= Question::find($id)->text;
      $vac= compact("question");
      return view("play", $vac);
    }

    public function answerQuestion(Request $req){
      // crear juego nuevo
      // identifica usuario
      // reconoce nivel

      $count=count(Question::all());
      $id=rand(1, $count);
      $question= Question::find($id)->text;
      // $scoreNuevo = ???;

      return compact("question","scoreNuevo");
    }

    public function showLevels(){
      $levels= Levels::all();
      $vac= compact("levels");
      return view("play", $vac);
    }

}
