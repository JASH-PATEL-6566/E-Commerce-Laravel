@extends('master')
@section('content')     
<div class="custom-product">
    <div class="tending_container">
        <h1>Searched Products</h1>
        <div class="search-product-container">
            @foreach ($productsData as $item)
                <a href="/detail/{{$item->id}}">
                    <div class="product-component-search">
                        <img src="{{$item->gallery}}" alt="{{$item->name}}">
                        <h5>{{$item->name}}</h5>
                        <h6>{{$item->description}}</h6>
                    </div>
                </a>
            @endforeach
        </div>
    </div>
</div>
@endsection