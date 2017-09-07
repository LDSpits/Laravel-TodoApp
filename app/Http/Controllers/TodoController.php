<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades;

class TodoController extends Controller
{
    //path: /todo , method: POST
    function Insert(Request $request){
        
        $instantiatedModel = new \App\TodoItem();

        $instantiatedModel->name = $request->name;
        $instantiatedModel->description = $request->description;

        if(is_null($request->isDone)){
            $instantiatedModel->isDone = false;
        }else{
            $instantiatedModel->isDone = true;
        }

        $instantiatedModel->Save();

        return redirect('/');
    }

    //path: /todo , method: PUT
    function Update(Request $request){
        $requestedModel = \App\TodoItem::Find($request->id);

        echo ((bool)$request->isDone);

        $requestedModel->isDone = $request->isDone === 'true'? true: false;

        echo $requestedModel->isDone;

        $requestedModel->Save();

        return redirect('/');
    }
}