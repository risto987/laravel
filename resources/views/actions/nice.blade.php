@extends('layouts.master')

@section('content')
    <div class="text-center">
        <a href="{{route('home')}}">Back</a>
        <h1>I {{$action}} {{$name}}</h1>

    <hr/>
    </div>
@endsection