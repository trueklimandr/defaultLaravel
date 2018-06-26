@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="align-content-center">
                <h1>Heroes list:</h1>
                <hr>
                @foreach($heroes as $hero)
                    <li>
                        {{$hero['name']}}
                        <a class="btn-sm btn-danger" href="{{url("heroes/{$hero['id']}/delete")}}">X</a>
                    </li>
                @endforeach
                @if (!$heroes)
                    <li>No heroes at all :(</li>
                @endif
                <hr>
            </div>
        </div>
        <div class="row">
            <a class="btn btn-success" href="{{url('heroes/create')}}">Create a new one</a>
        </div>
    </div>
@endsection
