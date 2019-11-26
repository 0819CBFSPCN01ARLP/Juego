<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\question;
use App\category;

class abmController extends Controller
{
  public function list(){
    $mail= auth()->user()->email;
    if($mail != 'admin@hotmail.com'){
      return redirect('home');
    }
    $category= category::all();
    $questions= question::all();
    $vac= compact("category", "questions");
    return view("abm", $vac);
  }



    public function insert(Request $form){
      $form->validate([
        "text"=>'required',
        "category"=>'required',
        'vof'=>'required'
      ]);
        $newQues = new question();
        $newQues->text=$form->text;
        $newQues->category_id=$form->category;
        $newQues->value=$form->vof;
// return $form;
        $newQues-> save();

        return back()->with('mensaje', 'pregunta agregada');
    }

    public function modify(){

    }
    public function delete(){

    }
}
