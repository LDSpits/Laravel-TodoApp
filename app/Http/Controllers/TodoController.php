<?php

namespace App\Http\Controllers;

use \Route;
use App\Http\Requests\CreateTodoItem;
use Illuminate\Http\Request;
use Illuminate\Support\Facades;

class TodoController extends Controller
{
    //path: /todo ,method: POST
    function insert(CreateTodoItem $request){
        
        $instantiatedModel = new \App\TodoItem();

        $instantiatedModel->name = $request->name;
        $instantiatedModel->description = $request->description;
        $instantiatedModel->isDone = false;

        $instantiatedModel->Save();

        return redirect('/');
    }

    //path: /todo ,method: PUT
    function Update(Request $request){
        $requestedModel = \App\TodoItem::Find($request->id);

        $requestedModel->isDone = $request->isDone === 'true'? true: false;
        $requestedModel->Save();

        return redirect('/');
    }

    //path: /todo/{id} ,method DELETE
    function Delete($id){

        $requestedModel = \App\TodoItem::Find($id);
        $requestedModel->Delete();

        return redirect('/');
    }
}
