<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{

    //public funcion for retuurning view of the landing page
    public function LandingPage()
    {

        return view('home');

    }


    //public funcion for retuurning view of the history page
    public function historyPage()
    {

        return view('about-history');

    }


}
