@extends('layouts.main-layout')

@section('title')
    <title>Create new product</title>
@endsection

@section('contents')
<div class="container">
    <h2>Create new Product:</h2>
    <form action="" class="d-flex flex-column col-4 mx-auto">
        <div class="input-group input-group-sm mb-3">
            <span class="input-group-text" id="inputGroup-sizing-default">Name:</span>
            <input name="name" type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
        </div>
        <div class="input-group input-group-sm mb-3">
            <span class="input-group-text" id="inputGroup-sizing-default">Description:</span>
            <input name="description" type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
        </div>
        <div class="input-group input-group-sm mb-3">
            <span class="input-group-text" id="inputGroup-sizing-default">Price:</span>
            <input name="price" type="number" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
        </div>
        <div class="input-group input-group-sm mb-3">
            <span class="input-group-text" id="inputGroup-sizing-default">Weight:</span>
            <input name="weight" type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
        </div>
        <select class="form-select" id="floatingSelect" aria-label="Floating label select example">
            <option selected>Open this select menu</option>
            @foreach ($typologies as $typology)
                <option value="{{$typology -> id}}">{{$typology -> name}}</option>     
            @endforeach
          </select>
        <h3>Chose Categories:</h3>
        @foreach ($categories as $category)
        <div class="form-check form-switch">
            <input value="{{$category -> id}}" class="form-check-input" type="checkbox" role="switch" id="flexSwitchCheckDefault">
            <label class="form-check-label" for="flexSwitchCheckDefault">{{$category -> name}}</label>
          </div>
        @endforeach
        <div class="cmd-btn my-3 ">
            <a href="">
                <button class="btn btn-success">Add</button>
            </a>
        </div>

    </form>
</div>

@endsection