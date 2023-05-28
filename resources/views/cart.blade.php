@extends('master')
@section('content')     
<div class="custom-product">
    <div class="tending_container">
        <h1 class="mb-4">Cart Products</h1>
        <a class="btn btn-success float-end" href="orders">Order Now</a>
        <div class="search-product-container mt-4">
            @foreach ($cartProducts as $item)
                <a href="/detail/{{$item->id}}">
                    <div class="product-component-search">
                        <img src="{{$item->gallery}}" alt="{{$item->name}}">
                        <h5>{{$item->name}}</h5>
                        <h6>{{$item->description}}</h6>
                        <h6>{{$item->price}} Rs</h6>
                    </a>
                    <a href="../remove_from_cart/{{$item->id}}">
                        <button class="btn btn-warning">Remove</button>
                    </a>
                    </div>
            @endforeach
        </div>
    </div>
</div>
@endsection