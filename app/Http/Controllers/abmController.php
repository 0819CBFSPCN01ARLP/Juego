<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class abmController extends Controller
{
    public function insert(Request $form){
        $abmController = new abmController();
        $abmController ->text = $form["new"];
        $abmController ->value = $form["vof"];
        $abmControllerbm ->category = $form["category"];

        $abmController-> save();

        return redirect ("/abm");
    }
    
    public function modify(){

    }
    public function delete(){

    }
}
