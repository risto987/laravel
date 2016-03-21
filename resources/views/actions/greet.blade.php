@extends('layouts.master')

@section('content')
    <div class="text-center">

        <h1>I greet {{$name === null ? 'you' : $name}}</h1>

    <hr/>
    </div>
@endsection