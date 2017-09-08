<li class="todoitem">
    <h4 class="todoitem__text">{{$todo->name}}</h4>
    <p class="todoitem__text">{{$todo->description}}</p>

    <form action="/todo" method="post">
        {{ method_field('PATCH') }}
        {{ csrf_field() }}
        <input type="hidden" name="id" value="{{ $todo->id }}">

        @if($todo->isDone)
            <input type="hidden" name="isDone" value="false">
            <input type="submit" value="mark as todo" class="todoitem__button--move">
        @else
            <input type="hidden" name="isDone" value="true">
            <input type="submit" value="mark as done" class="todoitem__button--move">
        @endif
    </form>

    <form action="/todo/{{$todo->id}}" method="post">
        {{ method_field('DELETE') }}
        {{ csrf_field() }}
        <input type="submit" value="delete item" class="todoitem__button--delete">
    </form>

</li>