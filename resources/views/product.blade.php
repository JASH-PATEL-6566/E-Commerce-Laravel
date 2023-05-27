@extends('master')
@section('content')     
<div class="custom-product">
    <div class="row">
        <div id="robotcarousel" class="carousel slide w-50 m-auto" data-bs-ride="carousel">
            <div class="carousel-inner">
                {{$i = 0}}
                @foreach ($products as $item)    
                    <div class="carousel-item {{$i==0 ? "active" : ""}}">
                        <a href="/detail/{{$item->id}}">
                            <img class="slider-img" src="{{$item->gallery}}" alt="{{$item->name}}">
                            <div class="carousel-caption">
                                <h3>{{$item->name}}</h3>
                                <p>{{$item->description}}</p>
                            </div>
                        </a>
                    </div>
                    {{$i++}}
                @endforeach
            </div>
            
            <button class="left carousel-control-prev btn-carousel" type="button" data-bs-target="#robotcarousel" data-bs-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Previous</span>
            </button>
            <button class=" right carousel-control-next btn-carousel" type="button" data-bs-target="#robotcarousel" data-bs-slide="next">
              <span class="carousel-control-next-icon glyphicon glyphicon-chevton-right" aria-hidden="true"></span>
              <span class="visually-hidden">Next</span>
            </button>
          </div>
    </div>
    <div class="tending_container">
        <h1>Tending Products</h1>
        <div class="trending-product-container">
            @foreach ($products as $item)
                <a href="/detail/{{$item->id}}">
                    <div class="product-component">
                        <img src="{{$item->gallery}}" alt="{{$item->name}}">
                        <h5>{{$item->name}}</h5>
                    </div>
                </a>
            @endforeach
        </div>
    </div>
</div>
@endsection