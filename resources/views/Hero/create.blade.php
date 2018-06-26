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

            <div class="form-group">
                {{ Form::label('Status:') }}
                {{ Form::radio('active',1,true) }} Active
                {{ Form::radio('active',0) }} Not active
            </div>

            {!! Form::submit('Store', ['class' => 'btn btn-success']) !!}
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
