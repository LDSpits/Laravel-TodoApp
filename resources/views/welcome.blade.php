<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="css/app.css">
    </head>

    <body>
        <title>Todo-App</title>

        <h1 class="header">Laravel TodoApp</h1>

        <section class="dashboard">

            <ul class="dashboard__list">
                <h2 class="dashboard__header">Todo</h2>

                @foreach($todos as $todo)
                    @if($todo->isDone == false)
                        <li class="todoitem">
                            <h4>{{$todo->title}}</h4>
                            <p>{{$todo->description}}</p>

                            <form action="/todo" method="post">
                                {{ method_field('PUT') }}
                                {{ csrf_field() }}
                                <input type="hidden" name="id" value="{{ $todo->id }}">
                                <input type="hidden" name="isDone" value="true">
                                <input type="submit" value="mark as done">
                            </form>

                        </li>
                    @endif
                @endforeach

            </ul>

            <ul class="dashboard__list">
                <h2 class="dashboard__header">Done</h2>
                @foreach($todos as $todo)
                    @if($todo->isDone == true)
                        <li class="todoitem">
                            <h4>{{$todo->title}}</h4>
                            <p>{{$todo->description}}</p>

                            <form action="/todo" method="post">
                                {{ method_field('PUT') }}
                                {{ csrf_field() }}
                                <input type="hidden" name="id" value="{{ $todo->id }}">
                                <input type="hidden" name="isDone" value="false"> 
                                <input type="submit" value="mark as todo">
                            </form>

                        </li>
                    @endif
                @endforeach
            </ul>

            <ul class="dashboard__list">
                <h2 class="dashboard__header">Create</h2>
                <form action="/todo" method="post">
                    {{ csrf_field() }}
                    <input type="text" name="name" />
                    <textarea name="description" cols="30" rows="10"></textarea>
                    <input type="checkbox" name="isDone" id="0" value="true">
                    <input type="submit" value="voeg toe">
                </form>
            </ul>

        </section>
    </body>
</html>
