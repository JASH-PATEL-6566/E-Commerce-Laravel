@extends('master')
@section('content')     
<div class="container custom-login">
    <div class="row">
        <div class="col-4 align-self-center">
            <form action="/registerUser" method="post">
              @csrf
                <div class="mb-3">
                  <label for="username" class="form-label">User Name</label>
                  <input type="text" name="username" class="form-control" id="username" aria-describedby="emailHelp">
                </div>
                <div class="mb-3">
                  <label for="exampleInputEmail1" class="form-label">Email address</label>
                  <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                </div>
                <div class="mb-3">
                  <label for="exampleInputPassword1" class="form-label">Password</label>
                  <input type="password" name="password" class="form-control" id="exampleInputPassword1">
                </div>
                <button type="submit" class="btn btn-primary">Register</button>
                <div id="emailHelp" class="form-text">You already have an account? <a href="/login">Login</a></div>
              </form>
        </div>
    </div>
</div>
@endsection