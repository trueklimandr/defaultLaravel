@extends('layouts.app')

@section('content')
    <div class="container">
        <h2>Editing a hero ...</h2>
        <hr>
        {!! Form::model($hero, ['method' => 'PATCH', 'action' => ["HeroController@update", $hero['id']]]) !!}
        <div class="form-group">
            {!! Form::label('Name:') !!}
            {!! Form::text('name', null, ['class' => 'form-control']) !!}
        </div>

        <div class="form-group">
            {{ Form::label('Status:') }}
            {{ Form::radio('active', 1, ($hero['active'] == 1) ? true : null) }} Active
            {{ Form::radio('active', 0, ($hero['active'] == 0) ? true : null) }} Not active
        </div>

        {!! Form::submit('Update', ['class' => 'btn btn-success']) !!}
        <a href="{{ Url('heroes') }}" class="btn btn-dark">Back</a>
        {!! Form::close() !!}

        @if ($errors->any())
            <hr>
            <ul class="alert alert-danger">
                @foreach($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        @endif
    </div>
@endsection
