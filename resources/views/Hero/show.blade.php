@extends('layouts.app')

@section('content')
    <div class="container">
        <h2>Hero info...</h2>
        <hr>
        <h2>{{ $hero['name'] }}</h2>
        <ul>
            <li>Status:         {{ ($hero['active'] == 0) ? 'Not active' : 'Active' }}</li>
        </ul>
        <a href="{{ Url('heroes') }}" class="btn btn-dark">Back</a>
    </div>
@endsection
