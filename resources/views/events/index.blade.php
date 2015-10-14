@extends('app')

@section('content')
    <h1>Events</h1>
    <table id="viewEvents">
        <tr>
            <th>Event Name</th>
            <th>Event Description</th>
            <th>Event Date</th>
            <th colspan="2">Action</th>
        </tr>
        @foreach ( $events as $event )
            <tr>
                <td>{{ $event->event_name }}</td>
                <td>{{ $event->event_description }}</td>
                <td>{{ $event->event_date }}</td>
                <td name="noBorderRight"><a href="{{ action('EventsController@edit', [$event->id]) }}" class="btn btn-info btn-sm" role="button">Edit</a></td><td name="noBorderLeft"><a href="{{ action('RegistryController@show', [$event->id]) }}" class="btn btn-info btn-sm" role="button">View</a></td>
            </tr>
        @endforeach
    </table>
@stop