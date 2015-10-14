<div class="form-group">
    {!! Form::label('event_name', 'Event Name:') !!}
    {!! Form::text('event_name', null, ['class' => 'form-control']) !!}
</div>

<div class="form-group">
    {!! Form::label('event_description', 'Event Description:') !!}
    {!! Form::textarea('event_description', null, ['class' => 'form-control']) !!}
</div>

<div class="form-group">
    {!! Form::label('event_date', 'Event On:') !!}
    {!! Form::input('date', 'event_date', date('Y-m-d'),  ['class' => 'form-control']) !!}
</div>

<div class="form-group">
    {!! Form::submit($submitButtonText, ['class' => 'btn btn-primary form-control']) !!}
</div>