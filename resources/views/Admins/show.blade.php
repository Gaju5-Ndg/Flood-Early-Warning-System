
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Warning System</title>
        <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">

<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>

        <!-- Fonts -->
        <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
 <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet">
  
        <!-- Styles -->
    

        <style>
            body {
                font-family: 'Nunito', sans-serif;
            }
        </style>
         <style>
.dropbtn {
  background-color: dark;
  color: white;
  padding: 16px;
  font-size: 16px;
  border: none;
  cursor: pointer;
}

.dropdown {
  position: relative;
  display: inline-block;
}

.dropdown-content {
  display: none;
  position: absolute;
  background-color: #f9f9f9;
  min-width: 160px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
}

.dropdown-content a {
  color: white;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
}
.card-img-top{
    height:150px  !important;
}

#Ourcontainer{
    padding:10px !important;
    margin:10px !important;
}

#Ourcard{
    padding:10px !important;
    margin:10px !important;
}

.dropdown-content a:hover {background-color: black}

.dropdown:hover .dropdown-content {
  display: block;
}

.dropdown:hover .dropbtn {
  background-color: black;
}
/* dashboard */
<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.104.2">
    <title>Dashboard Template · Bootstrap v5.2</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/5.2/examples/dashboard/">

    

    

<link href="/docs/5.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">

    <!-- Favicons -->
<link rel="apple-touch-icon" href="/docs/5.2/assets/img/favicons/apple-touch-icon.png" sizes="180x180">
<link rel="icon" href="/docs/5.2/assets/img/favicons/favicon-32x32.png" sizes="32x32" type="image/png">
<link rel="icon" href="/docs/5.2/assets/img/favicons/favicon-16x16.png" sizes="16x16" type="image/png">
<link rel="manifest" href="/docs/5.2/assets/img/favicons/manifest.json">
<link rel="mask-icon" href="/docs/5.2/assets/img/favicons/safari-pinned-tab.svg" color="#712cf9">
<link rel="icon" href="/docs/5.2/assets/img/favicons/favicon.ico">
<meta name="theme-color" content="#712cf9">


    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }

      .b-example-divider {
        height: 3rem;
        background-color: rgba(0, 0, 0, .1);
        border: solid rgba(0, 0, 0, .15);
        border-width: 1px 0;
        box-shadow: inset 0 .5em 1.5em rgba(0, 0, 0, .1), inset 0 .125em .5em rgba(0, 0, 0, .15);
      }

      .b-example-vr {
        flex-shrink: 0;
        width: 1.5rem;
        height: 100vh;
      }

      .bi {
        vertical-align: -.125em;
        fill: currentColor;
      }

      .nav-scroller {
        position: relative;
        z-index: 2;
        height: 2.75rem;
        overflow-y: hidden;
      }

      .nav-scroller .nav {
        display: flex;
        flex-wrap: nowrap;
        padding-bottom: 1rem;
        margin-top: -1px;
        overflow-x: auto;
        text-align: center;
        white-space: nowrap;
        -webkit-overflow-scrolling: touch;
      }
    </style>

    
    <!-- Custom styles for this template -->
    <link href="dashboard.css" rel="stylesheet">
    </head>
    <body class="antialiased">
        <nav class="navbar navbar-expand-lg bg-dark px-3"style="color:white;">
            <div class="container-fluid  d-flex  align-items-center">
              <a class="navbar-brand"style="color:white;" href="#">Warning system</a>
              
              <div class="collapse navbar-collapse bg-dark d-flex align-items-center" id="navbarSupportedContent" >
                <ul class="navbar-nav me-auto mb-2 mb-lg-0 d-flex align-items-center">
                  <li class="nav-item">
                    <a class="nav-link active" aria-current="page" style="color:white;" href="{{ url('/dashboard') }}">Home</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link"style="color:white;" href="#">About</a>
                  </li>
                  <div class="dropdown">
                  <div class="dropdown2">
            <button class="dropbtn"style="color:dark;">departiment</button>
            <div class="dropdown-content">
            <a href="{{ url('/Admins') }}">Administration</a>
            <a href="{{ url('/Stations') }}">Stations</a>
            <a href="{{ url('/Users') }}">famers and other users</a>
            </div>
          </div>
                  </div>
                  <li class="nav-item">
                    <a class="nav-link disabled"style="color:white;">suggestions</a>
                  </li>
                  <form class="d-flex px-5" role="search">
                  <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                  <button class="btn btn-outline-success" type="submit">Search</button>
                </form>
                </ul>
                
                      <div class="pt-4 pb-1 border-t border-gray-200">
                      <div class="px-4">
                          <div class="font-medium text-base text-gray-800">{{ Auth::user()->name }}</div>
                          
                      </div>
          
                      <div class="mt-3 space-y-1">
                          <!-- Authentication -->
                          <form method="POST" action="{{ route('logout') }}">
                              @csrf
          
                              <x-responsive-nav-link :href="route('logout')"
                                      onclick="event.preventDefault();
                                                  this.closest('form').submit();">
                                  {{ __('Log Out') }}
                              </x-responsive-nav-link>
                          </form>
                      </div>
                  </div>
                
              </div>
            </div>
          </nav>
            <div class="container" id="Ourcontainer">
              @yield('content')
          
          <div class="container-fluid">
            <div class="row">
              <nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block  bg-dark px-3">
                <div class="position-sticky pt-3 sidebar-sticky">
                  <ul class="nav flex-column">
                    <li class="nav-item">
                      <a class="nav-link active" aria-current="page" href="#">
                        <span data-feather="home" class="align-text-bottom"></span>
                        Dashboard
                      </a>
                    </li>
                    <li class="nav-item"style="color:white;">
                      <a class="nav-link" href="{{ url('/Admins') }}">
                        <span data-feather="file" class="align-text-bottom"></span>
                        Admins
                      </a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="{{ url('/Stations') }}">
                        <span data-feather="shopping-cart" class="align-text-bottom"></span>
                        Stations
                      </a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="{{ url('/Users') }}">
                        <span data-feather="users" class="align-text-bottom"></span>
                        Farmers
                      </a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="#">
                        <span data-feather="bar-chart-2" class="align-text-bottom"></span>
                        Reports
                      </a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="#">
                        <span data-feather="layers" class="align-text-bottom"></span>
                        Integrations
                      </a>
                    </li>
                  </ul>
          
                  
                </div>
              </nav>
          

    <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
      <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h2>{{ $admin->first_name }}  details</h2>
        <div class="btn-toolbar mb-2 mb-md-0">
          <div class="btn-group me-2">
            <button type="button" class="btn btn-sm btn-outline-secondary">Share</button>
            <button type="button" class="btn btn-sm btn-outline-secondary">Export</button>
          </div>
          <button type="button" class="btn btn-sm btn-outline-secondary dropdown-toggle">
            <span data-feather="calendar" class="align-text-bottom"></span>
            This week
          </button>
        </div>
      </div>


      <!-- <canvas class="my-4 w-100" id="myChart" width="900" height="380"></canvas> -->
      <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('Admins.index') }}"> Back</a>
            </div>
        </div>
    </div>
   
    <div class="row">
      <table>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
              <tr>
                <th>
                <strong>Names:</strong>
    </th>
    <th>
      adress
    </th>
    <th>
      gender
    </th>
    <th>
      mobile
    </th>
    </tr>
    <tr>
      <td>
      {{ $admin->first_name }} 
                {{ $admin->last_name }}
    </td>
    <td>
    {{ $admin->address }}
    </td>
    <td>
    {{ $admin->gender }}
    </td>
    <td>
    {{ $admin->mobile }}
    </td>
    </tr>
    </table> </br></br> 


    <table>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
              <tr>
                <th>
             level:
    </th>
    <th>
      Role
    </th>
    <th>
      password
    </th>
    <th>
      mobile
    </th>
    </tr>
    <tr>
      <td>
      {{ $admin->level }} 
                
    </td>
    <td>
    {{ $admin->role }}
    </td>
    <td>
    {{ $admin->password }}
    </td>
    <td>
    {{ $admin->mobile }}
    </td>
    </tr>
    </table> 
        </div>
    </div>
    </div>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"></script>
    </body>
</html>

                                                                           


