@extends('layouts.app')

@section('content')
    <h1>Create Recipe</h1>

    {!! Form::open(['action' => 'RecipesController@store', 'method' => 'POST']) !!}
        <div class = "form-group">
            {{Form::label('title', 'Name')}}
            {{Form::text('title', '', ['class' => 'form-control', 'placeholder' => 'e.g. Grannys pancakes'])}}
        </div>
        <div class = "form-group">
            {{Form::label('body', 'Recipe')}}
            {{Form::textarea('body', '', ['class' => 'form-control', 'placeholder' => 'e.g. Start by mixing flour with baking powder.'])}}
        </div>
        {{Form::submit('Publish', ['class' => 'btn btn-primary'])}}
    {!! Form::close() !!}
@endsection