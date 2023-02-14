@extends('layouts.main-layout')
@section('title')
    <title>Home Page</title>
@endsection

@section('contents')
    <div class="container">
        <div class="col-6 m-auto d-flex flex-wrap">
            @foreach ($products as $product)
                <article class="myItem d-flex flex-column">
                    <h3 class="fw-bold">{{$product -> name}}</h3>  
                    <div>
                        <span class="fw-bold text-info">Description:</span>
                        <span>{{$product -> description}}</span>
                    </div>
                    <div>
                        <span class="fw-bold text-info">Price:</span>
                        <span>{{$product -> price}} &euro;</span>
                    </div>
                    <div>
                        <span class="fw-bold text-info">Weight:</span>
                        <span>{{$product -> weight}} &euro;</span>
                    </div>
                    <div>
                        <span class="fw-bold text-info">Product Code</span>
                        <span>[{{$product -> code}}]</span>
                    </div>
                    <div class="d-flex ">
                        <span class="mx-3 text-warning">Typology: </span>
                        <span> {{$product -> typology -> name}}</span>
                    </div>
                    <div class="d-flex">
                        <span class="mx-3 text-warning">Is Digital? </span>
                        <span> {{$product -> typology -> digital ? "Yes" : "No"}}</span>
                    </div>
                    
          
                                   
                </article> 
            @endforeach
        </div>

        asd
    </div>
@endsection