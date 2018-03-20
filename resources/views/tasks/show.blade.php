@extends('layouts.master')

@section('content')

<h1>{{ $task->Name }}</h1>  <p class="lead"><a href="{{ route('tasks.index') }}">Back</a></p>
<br>
<p class="lead">{{ $task->Category }}</p>
<p class="lead">{{ $task->Latitude }}</p>
<p class="lead">{{ $task->Longitude }}</p>
<hr>

<div class="row">
    <div class="col-md-6">
        <a href="{{ route('tasks.edit', $task->id) }}" class="btn btn-primary">Edit</a>
    </div>
    <div class="col-md-6 text-right">
        {!! Form::open([
            'method' => 'DELETE',
            'route' => ['tasks.destroy', $task->id], 'onsubmit' => 'return confirmDelete()'
        ]) !!}
            {!! Form::submit('Delete', ['class' => 'btn btn-danger']) !!}
        {!! Form::close() !!}
    </div>
</div>

@stop

<script>
function confirmDelete() {
var result = confirm('Are you sure you want to delete?');

if (result) {
        return true;
    } else {
        return false;
    }
}
</script>
