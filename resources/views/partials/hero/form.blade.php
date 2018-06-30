<div class="form-group">
    {!! Form::label('Name:') !!}
    {!! Form::text('name', null, ['class' => 'form-control']) !!}
</div>

<div class="form-group">
    {{ Form::label('Status:') }}
    {{ Form::radio('active', 1, $heroActive) }} Active
    {{ Form::radio('active', 0, !$heroActive) }} Not active
</div>

{!! Form::submit($action, ['class' => 'btn btn-success']) !!}
<a href="{{ Url('heroes') }}" class="btn btn-dark">Back</a>
