@extends('master')
@section('content')     
<div class="container py-4">
    @foreach ($orders as $item)
    <div class="row m-2">
        <div class="col-sm-6">
            <img class="detail-img" src="{{$item->gallery}}" alt="{{$item->name}}">
        </div>
        <div class="col-sm-6">
            <h3>Name : {{$item->name}}</h3>
            <h4>Delivery status : {{$item->status}}</h4>
            <h5>Address : {{$item->address}}</h5>
            <h6>Payment Status : {{$item->payment_status}}</h6>
            <h6>Payment Method : {{$item->payment_method}}</h6>
        </div>
    </div>    
    <hr>    
    @endforeach
</div>
@endsection