<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>
<header>
    <nav class="navbar navbar-expand-sm bg-light">
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link" href="{{ route('product') }}">Log In</a>
              </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ route('product') }}">Product</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="{{ route('supplier') }}">Supplier</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="{{ route('category') }}">Category</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="{{ route('order') }}">Order</a>
              </li>
          <li class="nav-item">
            <a class="nav-link" href="{{ route('customer') }}">Customer</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{ route('orderdetail') }}">Order Detail</a>
          </li>
          
        </ul>
      </nav>
      <br>
    
</div>
        <h3><center>INVENTORY SYSTEM</center></h3>
    </div>
 
    
@yield ('content')
</header>
</html>
