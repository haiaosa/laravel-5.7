@extends('master')

@section('title', 'Story')

@section('sidebar')
    @parent

    <p>This is appended to the master sidebar.</p>
@endsection

@section('content')
    <p>This is my body content.</p>

    {!! Form::open(['url' => 'test']) !!}
    {!! Form::label('email', 'E-Mail Address'); !!}
    {!! Form::text('email', 'example@gmail.com'); !!}
    {!! Form::password('password', ['class' => 'awesome']); !!}
    {!! Form::checkbox('name', 'value'); !!}
    {!! Form::radio('name', 'value');!!}
    {!! Form::date('name', \Carbon\Carbon::now()); !!}
    {!! Form::select('size', ['L' => 'Large', 'S' => 'Small']);!!}
    {!! Form::submit('Click Me!');!!}
	{!! Form::close() !!}
@endsection