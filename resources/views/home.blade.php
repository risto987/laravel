@extends('layouts.master')

@section('content')
    <div class="text-center">
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquam, aperiam, consequatur cumque, dolor eligendi est et hic ipsam iure iusto nihil odit pariatur perspiciatis reiciendis sequi suscipit vero voluptatem voluptates.</p>
    </div>

    <hr/>

    @if(count($errors)>0)
        <ul>
            @foreach($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    @endif

    @foreach($actions as $action)
        <a href="{{ route('niceaction', ['action'=>lcfirst($action->name)]) }}">{{$action->name}}</a>
    @endforeach

    {{--<ul>--}}
        {{--<li><a href="{{ route('niceaction',['action'=>'greet']) }}">Greet</a></li>--}}
        {{--<li><a href="{{ route('niceaction',['action'=>'hug']) }}">Hug</a></li>--}}
        {{--<li><a href="{{ route('niceaction',['action'=>'kiss']) }}">Kiss</a></li>--}}

        <form action="{{route('do_action')}}" method="post">
            {{--<label for="select-field">I want to...</label>--}}
            {{--<select name="action" id="select-field">--}}
                {{--<option value="greet">Greet</option>--}}
                {{--<option value="hug">Hug</option>--}}
                {{--<option value="kiss">Kiss</option>--}}
            {{--</select>--}}
            <label for="name">Name of action</label>
            <input type="text" name="name" id="name"/>
            <label for="niceness">Niceness</label>
            <input type="text" name="niceness" id="name"/>
            <button type="submit">Do a nice action</button>
            <input type="hidden" value="{{Session::token()}}" name="_token"/>
        </form>

    {{--</ul>--}}

@endsection