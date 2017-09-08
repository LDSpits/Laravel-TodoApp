<li class="todoitem">
    <h4 class="todoitem__text">{{$todo->name}}</h4>
    <p class="todoitem__text">{{$todo->description}}</p>

    <form action="/todo" method="post">
        {{ method_field('PUT') }}
        {{ csrf_field() }}
        <input type="hidden" name="id" value="{{ $todo->id }}">

        @if($todo->isDone)
            <input type="hidden" name="isDone" value="false">
            <input type="submit" value="mark as todo">
        @else
            <input type="hidden" name="isDone" value="true">
            <input type="submit" value="mark as done">
        @endif
    </form>

</li>