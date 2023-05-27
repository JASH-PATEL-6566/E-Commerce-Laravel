@extends('master')
@section('content')     
<div class="container py-4">
    <div class="row">
        <div class="col-sm-6">
            <img class="detail-img" src="{{$productData->gallery}}" alt="{{$productData->name}}">
        </div>
        <div class="col-sm-6">
            <a href="/">Go Back</a>
            <h3>Name : {{$productData->name}}</h3>
            <h4>Price : {{$productData->price}}</h4>
            <h5>Category : {{$productData->category}}</h5>
            <h6>Category : {{$productData->description}}</h6>
            <br>

            <div class="btn-container">
                <button class="btn btn-success">Buy Now</button>
                <form action="../add_to_cart" method="post">
                    @csrf
                    <input type="hidden" name="product_id" value="{{$productData->id}}">
                    <button type="submit" class="btn btn-warning">Add To Cart</button>
                </form>
            </div>
        </div>
    </div>       
</div>
@endsection