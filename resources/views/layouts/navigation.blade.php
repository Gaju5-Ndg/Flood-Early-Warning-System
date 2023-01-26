<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>warning system</title>

        <!-- Fonts -->
        <link rel="canonical" href="https://getbootstrap.com/docs/4.0/examples/carousel/">
        <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
       
        <!-- Styles -->
       
    </head>
    <body class="antialiased">
<nav class="navbar navbar-expand-lg bg-dark px-3"style="color:white">
  <div class="container-fluid  d-flex  align-items-center">
  <img class="rounded-circle" src="image/icon.jpg" alt=" Sebeya station" width="80" height="70">
    <a class="navbar-brand"style="color:LightGreen ;" href="#">Warning system</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" style="color:white;"aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse bg-second d-flex align-items-center" id="navbarSupportedContent" >
      <ul class="navbar-nav me-auto mb-2 mb-lg-0 d-flex align-items-center">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" style="color:white;" href="{{ url('/dashboard') }}">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link"style="color:white;" href="{{url('/about')}}">About</a>
        </li>
        <li class="nav-item">
          <a class="nav-link"style="color:white;" href="{{url('/about')}}">Notifications</a>
        </li>
        
        <li class="nav-item">
          <a class="nav-link disabled"style="color:white;">contact</a>
        </li>
        <form class="d-flex px-5" role="search">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success px-3" type="submit">Search</button>
      </form>
      </ul>
      @if (Route::has('login'))
                <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block ">
                    @auth
                        <a href="{{ url('/dashboard') }}" class="text-sm text-black-700 dark:text-black-500 underline">Dashboard</a>
                    @else
                        <a href="{{ route('login') }}" class=" bg-dark px-3">Log in</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" class=" bg-dark px-3 underline">Register</a>
                        @endif
                    @endauth
                </div>
            @endif
    </div>
  </div>
</nav>



    @yield('content')
  </div>
</div>


    <script src="/docs/5.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>

      <script src="https://cdn.jsdelivr.net/npm/feather-icons@4.28.0/dist/feather.min.js" integrity="sha384-uO3SXW5IuS1ZpFPKugNNWqTZRRglnUJK6UAZ/gxOX80nxEkN9NcGZTftn6RzhGWE" crossorigin="anonymous"></script><script src="https://cdn.jsdelivr.net/npm/chart.js@2.9.4/dist/Chart.min.js" integrity="sha384-zNy6FEbO50N+Cg5wap8IKA4M/ZnLJgzc6w2NqACZaK0u0FXfOWRRJOnQtpZun8ha" crossorigin="anonymous"></script><script src="dashboard.js"></script>
 
</div>
</div>

</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"></script>
    </body>
</html>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>