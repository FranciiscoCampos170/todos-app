@extends('layouts.app')
@section('content')


<div class="row justify-content-center my-5" >
    <div class="col-md-8">
        <div class="card card-default">
            <div class="card-header">
               <h4 class="card-title"> Todos <a class="btn btn-dark float-right btn-sm" href="/todos" role="button" data-toggle="modal" data-target="#createModal">Create</a></h4>
            </div>
            <div class="card-body">
                @include('layouts.flash-message')
                <ul class="list-group">
                    @foreach ($todos as $todo)
                    <li class="list-group-item">
                        {{ $todo->name }}
                        <a href="/todos/{{$todo->id}}" class="btn btn-primary btn-sm float-right" role="button">
                            View
                        </a>
                        <br>
                    <span class="float-left">Created at: {{$todo->created_at->diffForHumans()}}</span>
                    </li>
                    @endforeach
                </ul>
            </div>
        </div>
    </div>
</div>
@endsection

@include('todos.create')
