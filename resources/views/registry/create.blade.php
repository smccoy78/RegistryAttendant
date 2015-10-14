@extends('app')

@section('content')

    <h1>Register For Event</h1>

    <hr/>

    {!! Form::open(['url' => 'registry']) !!}
    @include('registry._form', ['submitButtonText' => 'Sign In'])
    {!! Form::close() !!}

    @include('errors.list')
@stop