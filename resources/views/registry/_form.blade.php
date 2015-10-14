<div class="form-group">
    {!! Form::label('event_id', 'Event:') !!}
    {!! Form::select('event_id', $events, null, ['class' => 'form-control']) !!}
</div>

<div class="form-group">
    {!! Form::label('attendee', 'Attendee Name:') !!}
    {!! Form::text('attendee', null, ['class' => 'form-control']) !!}
</div>

<div class="form-group">
    {!! Form::label('attendee_email', 'Attendee Email:') !!}
    {!! Form::text('attendee_email', null, ['class' => 'form-control']) !!}
</div>

<div class="form-group">
    {!! Form::submit($submitButtonText, ['class' => 'btn btn-primary form-control']) !!}
</div>