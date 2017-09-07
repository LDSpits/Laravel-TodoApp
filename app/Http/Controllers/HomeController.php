<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App;

class HomeController extends Controller
{
    function Index(){

        $todos = App\TodoItem::get();
        return view('welcome',['todos' => $todos]);
    }
}
