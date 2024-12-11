<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>ObatKlik</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet">
    
</head>
<body>
    {{-- navbar --}}
    <nav class="navbar" style="background-color: #BFE4F9">

        <div class="container justify-content-start">
          <a class="" href="{{route('home')}}">
            <img src="{{asset('images/logo.svg')}}" alt="obatklik-logo" width="20%" height="20%">
          </a>
          <div class="col g-2">
            <a href="{{route('home')}}" class="pe-3" style="color: black;text-decoration:none;">Home</a>
            <a href="{{route('profile.edit')}}" class="pe-3" style="color: black;text-decoration:none;">Profile</a>
            @guest
              <a href="{{route('register')}}" class="pe-3" style="color: black;text-decoration:none;">Register</a>
              <a href="{{route('login')}}" class="pe-3" style="color: black;text-decoration:none;">Login</a>
            @endguest
            @auth
              <p>Hi {{Auth::user()->name}}</p>
              <a class="nav-link" href="{{route('logout')}}">Logout</a>
            @endauth
          </div>
          <form action="{{route('search')}}" method="GET" class="d-flex ms-auto">
            <input type="text" class="form-control me-2" name="query" placeholder="search.." value="{{request('query')}}" style="width: 250px;">
            <button type="submit" class="btn btn-primary">Search</button>
          </form>
          <a href="{{route('cart.view')}}">
            <img src="{{asset('images/icon/cart.svg')}}" alt="cart-icn">

      <div class="container justify-content-start">
        <div class="col-2 d-flex align-items-center">
          <a href="{{route('home')}}" class="me-3">
            <img src="{{asset('images/logo.svg')}}" alt="obatklik-logo" width="40px" height="auto">

          </a>

          @auth
            <p class="mb-0">Hi {{Auth::user()->name}}</p>
          @endauth
        </div>

        <div class="col-6 d-flex align-items-center">
          <a href="{{route('home')}}" class="pe-3" style="color: black;text-decoration:none;">Home</a>
          <a href="" class="pe-3" style="color: black;text-decoration:none;">Profile</a>
          @guest
            <a href="{{route('register')}}" class="pe-3" style="color: black;text-decoration:none;">Register</a>
            <a href="{{route('login')}}" class="pe-3" style="color: black;text-decoration:none;">Login</a>
          @endguest

          @auth
            <a class="nav-link" href="{{route('logout')}}">Logout</a>
          @endauth
        </div>

        <div class="col-4 d-flex align-items-center justify-content-end">
          <a href="{{route('cart.view')}}">
            <img src="{{asset('images/icon/cart.svg')}}" alt="cart-icn" style="width: 30px; height: auto;">
          </a>
          
          {{-- search --}}
          <div class="container mt-0">
            <form method="GET" action="{{ route('items.search') }}">
                <div class="input-group mb-0">
                    <input type="text" name="query" class="form-control" placeholder="Search..." value="{{ request('query') }}">
                    <div class="input-group-append">
                        <button class="btn btn-primary" type="submit">Search</button>
                    </div>
                </div>
            </form>
          </div>
        </div>
      </div>
    </nav>

    {{-- content --}}
    <div style="padding-top: 30px" id="body-content">
        @yield('content')
    </div>

    {{-- footer --}}
    <footer>

    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>