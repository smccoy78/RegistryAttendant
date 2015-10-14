@extends('app')

@section('content')

    <h1>Add New Event</h1>

    <hr/>

    {!! Form::open(['url' => 'events']) !!}
        @include('events._form', ['submitButtonText' => 'Add Event'])
    {!! Form::close() !!}

    @include('errors.list')
@stop