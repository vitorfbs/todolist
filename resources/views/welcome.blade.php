@extends('layouts.app')

@section('content')
<div class="container">

<div class="card">
  <div class="card-header">
      <h2 style="margin:5px">{{ Auth::user()->name }}'s' To Do List</h2>
  </div>
  <div class="card-body">

  <form method="post" action="{{route('create')}}">
    <div class="row">
      <div class="col-md-12">
        <input type="text" name="title" class="form-control" value="{{$task->title}}" placeholder="Name of the new task">
      </div>
    </div>
    <br>
    <div class="row">
      <div class="col-md-12">
        <textarea name="content" class="form-control" value="{{$task->content}}" placeholder="Description"></textarea>
      </div>
    </div>
    <br>
    <div class="row">
      <div class="col-md-12">
        <button class="btn btn-primary btn-block" type="submit">Create <br> Task </button>
      </div>
    </div>
    {{csrf_field()}}
    </form>
    </div>
</div>
<br>
<div class="list-group">
@foreach($tasks as $task)
  <a href="#" class="list-group-item list-group-item-action flex-column align-items-start">
    <div class="d-flex w-100 justify-content-between">
      <h5 class="mb-1">#{{$task->id}}: {{$task->title}}</h5>
      <small> <button onclick="location.href='{{route('delete', ['id'=>$task->id])}}'" class="close">X</button></small>
    </div>
    <p class="mb-1">{{$task->content}}</p>
  </a>
  <br>
@endforeach
</div>
</div>
@endsection
