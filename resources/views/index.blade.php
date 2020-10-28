@extends('layouts.app')

@section('content')
    <h1>MY TODO LIST</h1>
        @if(count($todos) >0 )
            @foreach($todos as $todo)
                <div class = "card m-2" >
                <h2><a href ="{{route('todo.show',$todo->id)}}" >{{$todo->title}}</a></h2>
                    <span class = "badge badge-danger">{{$todo->due}}</span>
                </div>
            @endforeach
        @endif
@endsection