<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function viewPage()
    {
        return view('welcome');
    }

    public function showPage()
    {
        return 'I am from controller showPage';
    }

    public function presentPage($name)
    {
        return 'I am '.$name;
    }

    public function presentrsPage($name)
    {
        return 'I am : '.$name;
    }

    public function presentrssPage($name,$surname)
    {
        return 'I am : '.$name.' '.$surname;
    }

    public function reg($name,$nick='Alam')
    {
        return 'I am '.$name.' '.$nick;
    }
}
