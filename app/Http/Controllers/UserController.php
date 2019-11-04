<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function home(){
        return view( 'index');
    }
    public function view(){
        $name= "Tasmia Ahmed";
        return view( 'index',compact("name"));
    }
    public function views(){
        $name= "Tasmia Ahmed";
        $age="twentytree";
        return view( 'index',compact(['name','age']));
    }

    public function array(){
        $name= "<h2>Tasmia Ahmed</h2>";
        $age="twentytree";
        $color=array('White','Black','Red');
        return view( 'index',compact(['name','age','color']));
    }

    public function getData(){
        dd(\request()->all());

    }


    public function postData(){
        dd(\request()->all());

    }
}
