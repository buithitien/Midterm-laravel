@extends('layouts.mainLayouts')

@section('title', 'Food Store')

@section('content')
 <button class="btn btn-dark"><a href="/foods/create"><i class="fa-solid fa-circle-plus"></i></a></button>
    <div class="row justify-content-center gap-3" >
        @foreach ($listFood as $food)
            <div class="card col-4" style="width: 18rem;">
                <img src="/images/{{$food->img}}" style="width: 100%; height: 10rem" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">{{$food->name}}</h5>
                    <p class="card-text text-truncate" >{{$food->title}}</p>
                    <div class="row">
                        <p class="card-text col-6">{{$food->category}}</p>
                        <p class="card-text col-6 text-decoration-line-through">{{$food->price}}</p>
                    </div>
                    <a href="/foods/{{$food->id}}" class="btn btn-primary">Detail</a>
                </div>
            </div>
        @endforeach
    </div>
@endsection()
