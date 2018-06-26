@extends('layouts.app')

@section('content')
    <div class="container">
        {!! Form::open(['method' => 'DELETE', 'url' => "heroes/{$hero['id']}"]) !!}
        <div class="form-group">
            {!! Form::label('Name:') !!}
            {!! Form::text('name', $hero['name'], ['class' => 'form-control']) !!}
            {!! Form::submit('Delete', ['class' => 'btn btn-success']) !!}
        </div>
        {!! Form::close() !!}
    </div>
@endsection
