@extends('layouts.master')

@section('content')


<div style="float:right;"><a href="/tasks/create" class="btn btn-primary"> Create New</a></div>
<h1>List of Restaurants</h1>

<br>
<div class="table-responsive">
  <table class="table">
      <thead>
        <tr>
          <th>Name</th>
          <th>Category</th>
          <th>Latitude</th>
          <th>Longitude</th>
          <th></th>
          <th></th>
        </tr>
      </thead>
      @foreach($tasks as $task)
        <tbody>
          <tr>
            <td>{{ $task->Name }}</td>
            <td>{{ $task->Category}}</td>
            <td>{{ $task->Latitude}}</td>
            <td>{{ $task->Longitude}}</td>
            <td><a href="{{ route('tasks.edit', $task->id) }}" class="btn btn-warning btn-block">Edit</a></td>
            <td><a href="{{ route('tasks.show', $task->id) }}" class="btn btn-info btn-block">View</a></td>
          </tr>
        </tbody>
      @endforeach
  </table>
</div>

    <hr>


@stop
