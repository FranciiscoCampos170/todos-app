@extends('layouts.app')
@section('content')
<div class="row justify-content-center my-5">
    <div class="col-md-8">
        <div class="card card-default">
            <div class="card-header">
            <h4 class="card-title"> {{ $todo->name }} <a class="btn btn-dark float-right btn-sm" href="/todos" role="button">Back</a></h4>
            </div>
            <div class="card-body">
                <p>
                    {{ $todo->description}}
                </p>
            </div>
            <div class="card-footer">
                <a class="btn btn-success float-left btn-sm" href="#" role="button" data-toggle="modal" data-target="#doneModal">Done</a>
                <a class="btn btn-primary float-right btn-sm" href="{{url('todos', [$todo->id])}}/edit" role="button">Edit</a>
            </div>
        </div>
    </div>
</div>
@endsection
@include('layouts.modal-delete')
