@extends('app')

    @section('content')
        <h1>Edit {{ $event->event_name }}</h1>

        <hr/>

        {!! Form::model($event, ['method' => 'PATCH', 'action' => ['EventsController@update', $event->id]]) !!}
            @include('events._form', ['submitButtonText' => 'Update Event'])
        {!! Form::close() !!}

        @include('errors.list')
@stop