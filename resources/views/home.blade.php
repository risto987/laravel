@extends('layouts.master')

@section('content')
    <div class="text-center">
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquam, aperiam, consequatur cumque, dolor eligendi est et hic ipsam iure iusto nihil odit pariatur perspiciatis reiciendis sequi suscipit vero voluptatem voluptates.</p>
    </div>

    <hr/>

  <ul>
        <li><a href="{{ route('niceaction',['action'=>'greet']) }}">Greet</a></li>
        <li><a href="{{ route('niceaction',['action'=>'hug']) }}">Hug</a></li>
        <li><a href="{{ route('niceaction',['action'=>'kiss']) }}">Kiss</a></li>

        <form action="{{route('benice')}}" method="post">
            <label for="select-field">I want to...</label>
            <select name="action" id="select-field">
                <option value="greet">Greet</option>
                <option value="hug">Hug</option>
                <option value="kiss">Kiss</option>
            </select>
            <input type="text" name="name"/>
            <button type="submit">Do a nice action</button>
            <input type="hidden" value="{{Session::token()}}" name="_token"/>
        </form>

  </ul>
@endsection