@extends('app')

@section('content')
    <h1>Registered Attendees</h1>
    <table id="viewEvents">
        <tr>
            <th>Attendee</th>
            <th>Email</th>
            <th>Event</th>
        </tr>
        @foreach ( $registry as $register )
            <tr>
                <td>{{ $register->attendee }}</td>
                <td>{{ $register->attendee_email }}</td>
                <td>{{ $register->event['event_name'] }}</td>
            </tr>
        @endforeach
    </table>
    <div>
        <br>
        <a href="{{ action('RegistryController@create') }}" class="btn btn-info btn-lg" role="button">Register</a>
    </div>
@stop