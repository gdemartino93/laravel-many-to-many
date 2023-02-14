@extends('layouts.main-layout')
@section('title')
    <title>Home Page</title>
@endsection

@section('contents')
    <div class="container d-flex flex-wrap">
        @foreach ($products as $product)
        <div class="myItem">
            <h3>{{$product -> name}}</h3>
        </div>
           
        @endforeach
        asd
    </div>
@endsection