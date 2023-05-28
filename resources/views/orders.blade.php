@extends('master')
@section('content') 
<div class="container mt-3">
<table class="table">
    <tbody>
      <tr>
        <th scope="row">Amount</th>
        <td>$ 1000</td>
      </tr>
      <tr>
        <th scope="row">Tax</th>
        <td>$ 0</td>
      </tr>
      <tr>
        <th scope="row">Delivery</th>
        <td>$ 10</td>
      </tr>
      <tr>
        <th scope="row">Total Amout</th>
        <td>$ 1000</td>
      </tr>
    </tbody>
  </table>
  <hr>
  <div>
    <form class="w-50" action="orderplace" method="post">
      @csrf
      <div class="mb-3">
        <label for="address" class="form-label fw-bold">Enter you address</label>
        <textarea class="form-control" name="address" id="address" aria-describedby="emailHelp"></textarea>
      </div>
      <div class="mb-3">
        <label for="pm" class="form-label fw-bold">Payment Method</label><br>
        <input type="radio" value="online" name="payment"> <span>online payment</span><br>
        <input type="radio" value="emi" name="payment"> <span>EMI payment</span><br>
        <input type="radio" value="cash" name="payment"> <span>Cash On delivery</span>
      </div>
      <button type="submit" class="btn btn-primary">Order</button>
    </form>
  </div>
</div>
  @endsection