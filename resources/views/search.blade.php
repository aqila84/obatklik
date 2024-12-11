@extends('welcome')
@section('content')
    <div class+"container">
        <div class="col d-flex">
            @foreach ($items as $item)
                <div class="card mx-2" style="width: 18rem;">
                    <div class="d-flex justify-content-center">
                        <img src="{{asset('images/'.$item->itemPhoto)}}" class="card-img-top" alt="..." style="width: 200px; height: 200px; object-fit: contain;">
                    </div>
                    <div class="card-body">
                    <h5 class="card-title">{{$item->itemName}}</h5>
                    <p class="card-text">{{$item->itemDescription}}.</p>
                    </div>
                    <ul class="list-group list-group-flush">
                    <li class="list-group-item">{{$item->itemPrice}}</li>
                    </ul>
                    <div class="card-body">
                        <form action="{{route('cart.add', $item->id)}}" method="POST">
                            @csrf
                            <button type="submit" class="btn btn-primary">Add to Cart</button>
                        </form>
                    </div>
                </div>
            @endforeach
        </div>
    <div>
@endsection