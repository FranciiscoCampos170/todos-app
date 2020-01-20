@extends('layouts.app')
@section('content')

<h1 class="text-center my-5">TODOS PAGE</h1>
<div class="row justify-content-center">
    <div class="col-md-8">
        <div class="card card-default">
            <div class="card-header">
               <h4 class="card-title"> Todos <a class="btn btn-dark float-right btn-sm" href="/todos" role="button">Back</a></h4>
            </div>
            <div class="card-body">
                @include('layouts.flash-message')
            <form action="{{ route('todos.update', $todo->id)}}" method="POST">
                @csrf
                @method('PUT')
            <div class="form-group">
                <label for="exampleInputTask">Task name</label>
            <input type="text" class="form-control" id="exampleInputTask" name="name" value="{{$todo->name}}" required>
                </div>
           <div class="form-group">
                <label for="exampleFormControlDesc">Task description</label>
                <textarea class="form-control" id="exampleFormControlDesc" rows="3" name="description">
                    {{$todo->description}}
                </textarea>
            </div>
            </div>
            <div class="card-footer">
                <button type="submit" class="btn btn-primary float-right">Submit</button>
            </form>
        </div>
    </div>
    </div>
</div>
@endsection


