@extends('layouts.app')

@section('content')
    <div class="container">
    {!! Form::open(['url' => 'heroes']) !!}
        <div class="form-group">
            {!! Form::label('Name:') !!}
            {!! Form::text('name', null, ['class' => 'form-control']) !!}
            {!! Form::submit('Store', ['class' => 'btn btn-success']) !!}
        </div>
    {!! Form::close() !!}
    </div>
@endsection
