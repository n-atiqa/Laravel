@extends('layouts.master')

@section('content')

<h1>Add New Restaurant</h1>
<p class="lead"><a href="{{ route('tasks.index') }}">Back</a></p>
<hr>

@include('partials.alerts.errors')



{!! Form::open([
    'route' => 'tasks.store'
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

{!! Form::submit('Create', ['class' => 'btn btn-primary btn-md']) !!}

{!! Form::close() !!}

@stop
