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
      if(Auth::user()==null){
        return redirect("/login");
      }
      //LLAMAR MUSICA DE FONDO
      $user= Auth::user(); // identifica usuario
      $newGame= new Game; // creo nueva partida
      $newGame->user_id = $user->id;
      $newGame->points= 0;
      $newGame->started_at= time();
      // $newGame->id= count(Game::all())+1;
      $id=1;
      $level= Level::find($id);
      $count=count(Question::all());
      $id=rand(1, $count);
      $question= Question::find($id)->text;
      $qid=Question::find($id)->id;
      $newGame->level_id= $level->id;
      $newGame->last_question_id= $qid;
      $newGame->save(); //guardo nueva partida
      $vac= compact("question","newGame","level");
      return view("play", $vac);
    }

    public function answerQuestion($gameId, $button){

      $count=count(Question::all());  //cuento cantidad de preguntas
      $num=rand(1, $count);  //Hago un random entre 1 y esa cantidad y guardo en $num
      $question= Question::find($num)->text; //busco el texto de la pregunta a mandar
      $newId=Question::find($num)->id; //tambien busco su id para luego guardar como proxima last_question_id

      $newGame= Game::find($gameId);  //traigo el objeto partida actual, mediante el parametro $gameId
      $lastQuestion= $newGame->last_question_id;  //traigo el id de la pregunta que fue contestada
      $value=Question::find($lastQuestion)->value;  //recupero el $value de la misma (true o false)

      //HAGO LA COMPARACION LUEGO DE CORROBORAR QUE SIGO DENTRO DEL MINUTO
      $now=time();    //traigo segundo actual
      $started=$newGame->started_at;  //traigo segundo en el que comenzo la partida actual
      $level=$newGame->level_id;    //traigo nivel en el que me encuentro
      $points= Level::find($level)->score;    //traigo el score equivalente a ese nivel

      if($now< ($started+60)){
        //hago la comparacion
        if($value == $button){
          $newGame->points += $points;
          $answer=true; //La respuesta fue bien contestada
        } else{
          $answer=false; //La respuesta fue mal contestada
      }

      } else {
        $user= Auth::user();     //traigo el usuario
        $oldScore= $user->score;     //traigo el score viejo
          if($oldScore< $newGame->points){    //comparo el viejo score con el logrado en la partida
            $user->score= $newGame->points;
            $user->save();          //si es mayor al viejo, lo guardo
          //     // return redirect ("/ranking");
          }
        }

      $newGame->last_question_id= $newId;
      $newGame->save();   //guardo el nuevo id de la pregunta a mostrar, para la proxima comparacion
      return compact("question","newGame","answer");
    }


}
