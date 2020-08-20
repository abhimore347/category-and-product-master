<!DOCTYPE html>
<html>
    <head>
        <title>Category and Product Master</title>
        <link href="{{asset('assets/css/bootstrap.min.css')}}" rel="stylesheet"/>
    </head>
    <body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-info">
  <a class="navbar-brand" href="#">Navbar</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav ml-auto">
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Categories
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="{{url('Category/create')}}">create </a>
          <a class="dropdown-item" href="{{url('Category')}}">view</a>
        </div>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Products
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="{{url('product/create')}}">create </a>
          <a class="dropdown-item" href="{{url('product')}}">view</a>
        </div>
      </li>
      
    </ul>
    
  </div>
</nav>
        <div class="container">
            @yield('div1')
        </div>
        <!-- <h1 class='text-primary'>hello</h1sss> -->

        <script src="{{asset('assets/js/jquery.min.js')}}"></script>
        <script src="{{asset('assets/js/popper.min.js')}}"></script>
        <script src="{{asset('assets/js/bootstrap.min.js')}}"></script>
    </body>
</html>