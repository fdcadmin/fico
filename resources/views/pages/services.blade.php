@extends('layouts.app')

@section('content')
    <h1>{{$title}}</h1>
    <ul>
    @if(count($Services) > 0)

        @foreach($Services as $Service)
            <li> {{$Service}} </li>
        @endforeach

    </ul>
    @endif
@endsection