@extends('welcome')
@section('content')
<div class="container">
    <div class="col">
        <div class="row d-flex justify-content-center">
            <img src="{{asset('images/body-img.jpg')}}" alt="banner" class="border rounded-1 p-0" style="width:800px;">
        </div>
        <div class="row pt-2">
            <div class="col d-flex">
                @foreach ($items as $item)
                    <div class="card" style="width: 18rem;">
                        <div class="d-flex justify-content-center">
                            <img src="{{asset('images/'.$item->itemPhoto)}}" class="card-img-top" alt="..." style="width: 200px;">
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
                                {{-- <input type="number" name="qty" value="1" min="1"> --}}
                                <button type="submit" class="btn btn-primary">Tambah ke Keranjang</button>
                            </form>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
        <div class="row container">
            {{-- {{$items->links()}} --}}
        </div>
    </div>
</div>
@endsection