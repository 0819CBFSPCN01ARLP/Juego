<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\Question;
use App\Levels;

class playController extends Controller
{
    public function showQuestions(){

      $questions= Question::all();
      $vac= compact("questions");
      return view("play", $vac);
    }

    public function showLevels(){

      $levels= Levels::all();
      $vac= compact("levels");
      return view("play", $vac);
    }

}
