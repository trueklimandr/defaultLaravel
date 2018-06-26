@extends('layouts.app')

@section('content')
    <div class="container">
        <h2>Deleting the hero ...</h2>
        <hr>
        {!! Form::open(['method' => 'DELETE', 'url' => "heroes/{$hero['id']}"]) !!}
        <div class="form-group">
            {!! Form::label('Name:') !!}
            {!! Form::text('name', $hero['name'], ['class' => 'form-control', 'disabled']) !!}
        </div>
        {!! Form::submit('Delete', ['class' => 'btn btn-danger']) !!}
        <a href="{!! URL::previous() !!}" class="btn btn-dark">Back</a>
        {!! Form::close() !!}
    </div>
@endsection
