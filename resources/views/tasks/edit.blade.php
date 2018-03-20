@extends('layouts.master')

@section('content')

<h1>Editing "{{ $task->Name }}" </h1>
<p class="lead"><a href="{{ route('tasks.index') }}">Back</a></p>
<hr>

@include('partials.alerts.errors')


{!! Form::model($task, [
    'method' => 'PATCH',
    'route' => ['tasks.update', $task->id]
]) !!}

<div class="form-group">
    {!! Form::label('Name', 'Name of Restaurant:', ['class' => 'control-label']) !!}
    {!! Form::text('Name', null, ['class' => 'form-control']) !!}
</div>

<div class="form-group">
    {!! Form::label('Category', 'Category:', ['class' => 'control-label']) !!}
    {!! Form::text('Category', null, ['class' => 'form-control']) !!}
</div>

<div class="form-group">
    {!! Form::label('Latitude', 'Latitude:', ['class' => 'control-label']) !!}
    {!! Form::text('Latitude', null, ['class' => 'form-control']) !!}
</div>

<div class="form-group">
    {!! Form::label('Longitude', 'Longitude:', ['class' => 'control-label']) !!}
    {!! Form::text('Longitude', null, ['class' => 'form-control']) !!}
</div>

{!! Form::submit('Update', ['class' => 'btn btn-primary']) !!}

{!! Form::close() !!}
@stop
