<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class haoController extends Controller
{
    function getController($name){
        echo 'Wellcome '.$name.' to LAVAREL 5.5';
    }

    public function getView(){
      
        return view('haoView');
    }

  
}
