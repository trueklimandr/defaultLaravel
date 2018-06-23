@extends('layouts.app')

@section('content')
    <div class="position-ref full-height">
        @foreach($heroes as $hero)
            <h1>{{$hero->name}}</h1>
        @endforeach
        <a style="color: #1d2124" href="{{url('heroes/create')}}">Create a new one</a>
    </div>
@endsection
