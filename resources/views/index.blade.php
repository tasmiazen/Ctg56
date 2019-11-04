@extends('layouts.master')
@push('css')
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
@endpush

@section('content')
    <form action="{{route('show.From')}}" method="GET">
        <input type="text" name="name"><br>
        <input type="submit" value="Add" name="Submit">
    </form>

    <form action="{{route('show.From')}}" method="POST">
        {{csrf_field()}}
        <input type="text" name="name"><br>
        <input type="submit" value="Add" name="Submit">
    </form>


    <p>vaaa</p>
    <p>eeee</p>
    <p>fuuu</P>

    <h2>My name is {!! $name !!} And i am {{$age}} years old </h2>
    <h3>{{$api}}</h3>
    @foreach( $color as $name)
        {{$name}}

    @endforeach

@endsection
@section('title','Laravel')
