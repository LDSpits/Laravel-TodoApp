<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TodoItem extends Model
{
    protected $fillable = [
        'name','description','isDone'
    ];

    protected $hidden = [
        'id'
    ];
}
