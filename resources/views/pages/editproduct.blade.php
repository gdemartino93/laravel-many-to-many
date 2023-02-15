@extends('layouts.main-layout')

@section('title')
    <title>Edit Product</title>
@endsection

@section('contents')
<div class="container">
    <h2>Create new Product:</h2>
    @if ($errors ->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors -> all() as $error)
                    <li> {{$error}} </li>
                @endforeach
            </ul>
        </div>
    @endif
    <form action="{{route('product.store')}}" method="POST" class="d-flex flex-column col-4 mx-auto">
        @csrf
        <div class="input-group input-group-sm mb-3">
            <span class="input-group-text" id="inputGroup-sizing-default">Name:</span>
            <input value="{{$product -> name}}" name="name" type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
        </div>
        <div class="input-group input-group-sm mb-3">
            <span class="input-group-text" id="inputGroup-sizing-default">Description:</span>
            <input value="{{$product -> description}}" name="description" type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
        </div>
        <div class="input-group input-group-sm mb-3">
            <span class="input-group-text" id="inputGroup-sizing-default">Price:</span>
            <input value="{{$product -> price}}" name="price" type="number" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
        </div>
        <div class="input-group input-group-sm mb-3">
            <span class="input-group-text" id="inputGroup-sizing-default">Weight:</span>
            <input value="{{$product -> weight}}" name="weight" type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
        </div>
        <select name="typology" class="form-select" id="floatingSelect" aria-label="Floating label select example">
            <option selected>Open this select menu</option>

            @foreach ($typologies as $typology)
                <option name="typology" value="{{$typology -> id}}"
                    @if ($product -> typology -> id == $typology -> id)
                        selected
                    @endif
                    >{{$typology -> name}}</option>     
            @endforeach

          </select>
        <h3>Chose Categories:</h3>
        @foreach ($categories as $category)
        <div class="form-check form-switch">
            <input name="categories[]" value="{{$category -> id}}" class="form-check-input" type="checkbox" role="switch" id="category_{{$category->id}}"
            @foreach ($product -> categories as $productCategory)
                @if ($productCategory -> id == $category -> id)
                   checked
                @endif
            @endforeach
            >
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