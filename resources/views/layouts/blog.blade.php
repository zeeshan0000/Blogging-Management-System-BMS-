<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="keywords" content="">
    

<script src="https://kit.fontawesome.com/57991cf767.js" crossorigin="anonymous"></script>


    <title>@yield('title')</title>

    <!-- Styles -->
    <link href="{{asset('css/page.min.css')}}" rel="stylesheet">
    <link href="{{asset('css/style.css')}}" rel="stylesheet">

    <!-- Favicons -->
    <link rel="apple-touch-icon" href="{{asset('img/apple-touch-icon.png')}}">
    <link rel="icon" href="{{asset('img/favicon.png')}}>
  </head>

  <body>

   
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-light navbar-stick-dark" data-navbar="sticky">
      <a class="btn btn-primary login" href="{{route('login')}}">Login</a>
      <a class="btn btn-success register" href="{{route('register')}}">Register</a>
      <div class="container">

  

        <section class="navbar-mobile">
          <span class="navbar-divider d-mobile-none"></span>

       
        </section>

     

      </div>
    </nav><!-- /.navbar -->


    <!-- Header -->
   @yield('header')


    <!-- Main Content -->
@yield('content')


    <!-- Footer -->
   

    <!-- Scripts -->
    <script src="{{asset('js/page.min.js')}}"></script>
    <script src="{{asset('js/script.js')}}"></script>

  </body>
</html>
