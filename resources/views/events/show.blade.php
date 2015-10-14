@extends('app');

@section('content');
<h1>{{ $event->event_name }}</h1>

<form id="event_form">
    Scheduled Event Date: <input type="date" name="event_date" value="{{ $event->event_date }}">
    <br>
    Event Description: <br>
    <textarea name="event_description" rows="10" cols="50">
        {{ $event->event_description }}
    </textarea>
</form>

@stop