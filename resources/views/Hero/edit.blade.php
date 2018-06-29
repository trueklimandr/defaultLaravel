@extends('layouts.app')

@section('content')
    <div class="container">
        <h2>Editing a hero ...</h2>
        <hr>
        {!! Form::model($hero, ['method' => 'PATCH', 'action' => ["HeroController@update", $hero['id']]]) !!}
            @include('partials.hero.form')
        {!! Form::close() !!}
        @include('partials.errors.list')
    </div>
@endsection
