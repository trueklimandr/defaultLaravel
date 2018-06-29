@extends('layouts.app')

@section('content')
    <div class="container">
        <h2>Creating a hero ...</h2>
        <hr>
        {!! Form::open(['url' => 'heroes']) !!}
        @include('partials/hero.form')
        {!! Form::close() !!}
        @include('partials/errors.list')
    </div>
@endsection
