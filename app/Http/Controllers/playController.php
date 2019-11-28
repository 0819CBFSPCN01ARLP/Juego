<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Question;

class playController extends Controller
{
    public function showQuestions(){

      $questions= Question::all();
      $vac= compact("questions");
      return view("play", $vac);
    }
}
