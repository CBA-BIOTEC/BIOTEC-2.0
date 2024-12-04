<!DOCTYPE html>
<html>
     <head>
          <!-- Required meta tags -->
          <meta charset="utf-8">
          <meta http-equiv="X-UA-Compatible" content="IE=edge">
          <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

          <!-- Title tag -->
          <title>Welcome</title>

          <!-- Font awesome -->
          <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">

          <!-- Animate.css -->
          <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css">

          <!-- Normalize -->
          <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/7.0.0/normalize.css">

          <!-- Custom CSS -->
          <link rel="stylesheet" href="{{ asset('css/welcome.css') }}">


     </head>
     <body>
          <!-- Main Navigation -->
          <nav class="main-nav" id="main-nav">
               <div class="content-wrapper-sm">
                    <a href="#" class="navbar-brand"></a>
                    <div id="menu-button">
                         <div class="bar1"></div>
                         <div class="bar2"></div>
                         <div class="bar3"></div>
                    </div>
                <ul class="nav-links">
                    @if (Route::has('login'))
                         @auth
                         @else
                         <li><a href="{{ route('login') }}">LOGIN</a></li>
                         @if (Route::has('register'))
                         <li><a href="{{ route('register') }}">REGISTER</a></li>
                         
                         @endif
                @endauth
            @endif
                    </ul>
               </div>
          </nav>

          <!-- Main header -->
          <header>
               <!-- First replaceble image -->
               <img class="img-absolute" src="images/bio/bio14.svg" alt="City 1">
               <div class="wrapper astonish animated fadeInDown">
                    <h1><strong>BIO</strong>Tec</h1>
                    <h2>learn technical English <br>
                         on our page</h2>
               </div>
          </header>


         
     </body>
</html>
