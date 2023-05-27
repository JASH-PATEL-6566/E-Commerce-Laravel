<?php 
    use App\Http\Controllers\ProductController;
    use Illuminate\Support\Facades\Session;
    $total = 0;
    if(Session::has("user")){
      $total = ProductController::cartItem();
    }
?>
<nav class="navbar navbar-expand-lg bg-dark" data-bs-theme="dark">
    <div class="container-fluid">
      <a class="navbar-brand" href="#">E-com</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarText">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item mx-3">
            <a class="nav-link" aria-current="page" href="#">Home</a>
          </li>
          <li class="nav-item mx-3">
            <a class="nav-link" href="#">Orders</a>
          </li>
          <form class="d-flex mx-3" action="../search" method="get"> 
            <input class="form-control me-2 search-box" name="query" type="search" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-success" type="submit">Search</button>
          </form>
        </ul>
  
            <ul class="nav navbar-nav navbar-right">
              @if (Session::has("user"))    
              <li class="nav-item dropdown mx-2">
                <a class="nav-link dropdown-toggle" style="text-transform: uppercase;" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  {{Session::get("user")->name}}
                </a>
                <ul class="dropdown-menu">
                  <li><a class="dropdown-item" href="#">Action</a></li>
                  <li><a class="dropdown-item" href="#">Another action</a></li>
                  <li><hr class="dropdown-divider"></li>
                  <li><a class="dropdown-item" style="color: red;" href="../logout">Logout</a></li> 
                </ul>
              </li>
              @else
              <li class="nav-item mx-2">
                <a class="nav-link" aria-current="page" href="../login">Login</a>
              </li>
              @endif
              <li class="nav-item mx-4">
                <a class="nav-link" aria-current="page" href="../cart">Cart({{$total}})</a>
              </li>
              </ul>
      </div>
    </div>
  </nav>