@extends('layouts.app')
@section('content')
    <h2>lesson1 page</h2>
    <a href="{{route('lesson2')}}">go lesson 2</a>
@endsection
@section('title')
    lesson1
@endsection
@section('aside')
    @parent
    <p>havelyar ban</p>
@endsection
