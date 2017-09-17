<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{

    public function getIndex()
    {
        return view('Front.index');
    }

    //
    public function getAbout()
    {
       return view('Front.index');
    }

}
