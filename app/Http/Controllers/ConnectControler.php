<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ConnectControler extends Controller
{
    //
    public function publicView()
    {
        return view('connect', []);
    }

    public function privateView()
    {
        return view('notConnect', []);
    }
}
