@extends('app')

@section('content')
    <h1>{{ $registry[0]['event_name'] }} Registry</h1>
    <table id="viewEvents">
        <tr>
            <th>Attendee</th>
            <th>Email</th>
            <th>Send Email</th>
        </tr>
        @foreach ( $registry as $register )
            <tr>
                <td>{{ $register->attendee }}</td>
                <td>{{ $register->attendee_email }}</td>
                <td><a href="mailto:{{$register->attendee_email}}">{!! Html::image('img/email_30.png', 'Email') !!}</a></td>
            </tr>
        @endforeach
    </table>
    <div class="form-group">
        <br>
        <a href="{{ action('RegistryController@create') }}" class="btn btn-info btn-lg" role="button">Register</a>
    </div>
@stop