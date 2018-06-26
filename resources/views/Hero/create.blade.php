@extends('layouts.app')

@section('content')
    <div class="container">
        <h2>Creating a hero ...</h2>
        <hr>
        {!! Form::open(['url' => 'heroes']) !!}
            <div class="form-group">
                {!! Form::label('Name:') !!}
                {!! Form::text('name', null, ['class' => 'form-control']) !!}
            </div>
            {!! Form::submit('Store', ['class' => 'btn btn-success']) !!}
            <a href="{!! URL::previous() !!}" class="btn btn-dark">Back</a>
        {!! Form::close() !!}
    </div>
@endsection
