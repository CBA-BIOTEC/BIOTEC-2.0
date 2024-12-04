<!doctype html>
<html lang="en">
  <head>
    <!-- Configuración de codificación de caracteres a UTF-8 -->
    <meta charset="utf-8">
    
    <!-- Viewport para asegurar que la página sea responsiva en diferentes tamaños de pantalla -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <!-- Enlace a la CDN de Bootstrap para el estilo y diseño de la página -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    
    <!-- Enlaces a archivos CSS personalizados del proyecto -->
    <link rel="stylesheet" href="{!!asset('css/stylebiotec.css')!!}">
    <link rel="stylesheet" href="{!!asset('css/stylecard.css')!!}">
    <link rel="stylesheet" href="{!!asset('css/stylecardenglish.css')!!}">
    <link rel="stylesheet" href="{!!asset('css/modal.css')!!}">
    <link rel="stylesheet" href="{!!asset('css/footer.css')!!}">
    <link rel="stylesheet" href="{!!asset('css/login.css')!!}">
    <link rel="stylesheet" href="{!!asset('css/register.css')!!}">
    <link rel="stylesheet" href="{{ asset('public/css/profile.css') }}">
    
    
    <!-- Enlace a Google Fonts para agregar las fuentes personalizadas Montserrat y Roboto Slab -->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css" />
    <link href="https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700" rel="stylesheet" type="text/css" />
    
    <!-- Favicon de la página (icono de la pestaña) -->
    <link rel="shortcut icon" type="image/png" href="images/bio/Botella.png"/>
    
    <!-- Enlace a otro archivo CSS general para la página -->
    <link href="css/styles.css" rel="stylesheet"/>

    <!-- Título de la página que se muestra en la pestaña del navegador -->
    <title>BIOTEC</title>
  </head>

  <body class="animated-background" style="font-family: 'Father Bold', sans-serif;">
    <!-- La clase "animated-background" se aplica al cuerpo para lograr el fondo animado -->
    
    <!-- Barra de navegación superior fija -->
    <nav class="navbar navbar-expand-lg navbar-light bg-succes fixed-top p-4 rounded py-4">
      <div class="container-fluid">
        
        <!-- Enlace al logo que redirige a la página principal -->
        <a class="navbar-brand" href="/">
          <!-- Imagen del logotipo con tamaño fijo -->
          <img src="images/bio/Logo.png" alt="Logo" style="width:290px ; margin-right: 80px;" class="imglogo">
        </a>
        
        <!-- Botón para expandir/colapsar la navegación en pantallas pequeñas (menú hamburguesa) -->
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <!-- Contenedor de los elementos del menú de navegación -->
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav ms-5"> <!-- ms-auto alinea los elementos a la derecha -->

            <!-- Enlace a la sección Home -->
            <li class="nav-item">
              <a class="nav-link" href="/biotec" style="font-family: 'Father Bold', sans-serif;font-size: 20px;">Home</a>
            </li>

            <!-- Menú desplegable para la sección Introduction -->
            <li class="nav-item dropdown ms-0 ms-lg-5 ps-lg-5">
              <a class="nav-link dropdown-toggle" href="#" id="introductionDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false" style="font-family: 'Father Bold', sans-serif; font-size: 20px;">
                Introduction
              </a>
              <ul class="dropdown-menu" aria-labelledby="introductionDropdown">
                <li><a class="dropdown-item" href="/biotec#WTIS">What is Biotechnology?</a></li>
                <li><a class="dropdown-item" href="/biotec#AREAS">Biotechnology areas</a></li>
                <li><a class="dropdown-item" href="/vocabularies">Biotechnology Vocabulary</a></li>
                <li><a class="dropdown-item" href="/concepts">Biotechnology Concepts</a></li>
              </ul>
            </li>

            <!-- Menú desplegable para la sección Laboratory -->
            <li class="nav-item dropdown ms-0 ms-lg-5 ps-lg-5">
              <a class="nav-link dropdown-toggle" href="#" id="laboratoryDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false" style="font-family: 'Father Bold', sans-serif;font-size: 20px;">
                Laboratory
              </a>
              <ul class="dropdown-menu" aria-labelledby="laboratoryDropdown">
                <li><a class="dropdown-item" href="/elements" >Laboratory Elements</a></li>
                <li><a class="dropdown-item" href="/processes">Chemical Processes and Methods</a></li>
              </ul>
            </li>

            <!-- Menú desplegable para la sección Material -->
            <li class="nav-item dropdown ms-0 ms-lg-5 ps-lg-5">
              <a class="nav-link dropdown-toggle" href="#" id="materialDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false" style="font-family: 'Father Bold', sans-serif;font-size: 20px;">
                  Material
              </a>
              <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="materialDropdown">
                  <li><a class="dropdown-item" href="/games">Activities</a></li>
                  <li><a class="dropdown-item" href="/interactions">Interactions</a></li>
                  <li><a class="dropdown-item" href="/links">Library</a></li>
              </ul>
            </li>
          </ul>
            <!-- Mostrar nombre del usuario autenticado -->
            <div class="d-flex ms-auto">
              @if (Auth::check())
              <a href="{{ route('profile') }}" class="btn btn-success nav-item ms-3" style="font-family: 'Father Bold', sans-serif; display: flex; align-items: center; font-size: 20px;">
                <!-- Ícono del SENA en formato SVG -->
                <svg version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 1000 1000" style="enable-background:new 0 0 1000 1000;" xml:space="preserve" height="2.4em" style="margin-right: 20px;"> <!-- Aumentado a 2.4em y margen derecho de 10px -->
                  <style type="text/css">
                    .st0 { fill: #FFFFFF; } <!-- Color blanco -->
                  </style>
                  <path id="path47-5" class="st0" d="M504.2,20.5c-58.3,0.1-105.6,47.4-105.5,105.8c0.1,58.3,47.4,105.6,105.7,105.6
                    c58.3,0,105.6-47.3,105.6-105.7V126C609.9,67.6,562.6,20.4,504.2,20.5z M155.6,264.6c-18.6,0.1-37.5,1.1-55.2,5.6
                    c-11.7,3-23,7.8-30.3,15.4c-9.2,9.5-10.4,22.3-5.9,33.3c4,9.7,14.8,16.9,26.8,21.1c25.9,8.9,54.6,10.7,81.8,16.3
                    c5,1.2,10.6,2.6,13.7,6c3.2,4.1,1.3,9.7-4,12.2c-8.8,4.5-20.1,4.5-30.4,4.4c-9.4-0.4-19.7-1.2-27.2-5.9c-5.5-3.4-6.5-9.1-5.2-14.1
                    l-60.6,0c-0.2,9.2,1.6,18.9,8.4,26.8c5.6,6.8,14.8,11.5,24.6,14.4c15.7,4.6,32.7,6,49.4,6.4c22.7,0.4,45.8-0.3,67.6-5.4
                    c13-3.2,25.8-8.3,34.1-16.6c14.8-14.8,11.3-38.3-8.3-49.8c-9.8-5.7-21.5-9.2-33.4-11.5c-17.5-3.6-35.3-6.3-52.9-9.2
                    c-6.2-1.2-12.8-2.3-18-5.2c-5.5-2.9-5.9-9.8-0.3-12.9c7.2-4.1,16.8-4,25.4-4c9.1,0.2,19,0.7,26.5,5c4.2,2.3,5.9,6.3,5.9,10.1
                    l57.6-0.1c-0.2-7.3-1.6-14.9-6.9-21.2c-6.2-7.8-17.1-12.7-28.3-15.5C192.8,265.6,174.1,264.7,155.6,264.6L155.6,264.6z M280.6,268.9
                    l0,137.7l168.1,0l0-30H342.3v-26.7h94.9v-29.3h-94.9l0-21.9l102.6,0l-0.1-29.7L280.6,268.9z M557.5,269c0,0-51.9,0-77.9,0l0,137.7
                    l59,0l0-92.7l80.8,92.6l81,0.1l0-137.7l-59.1,0l0.1,92L557.5,269z M805.6,269.2c0,0-63.6,91.9-95.6,137.7l61.9,0l14.9-24.8h95.7
                    l13.9,24.9l68.8,0L874,269.2L805.6,269.2z M836.6,302.1l29.4,49.9l-60.7,0.1L836.6,302.1z M10.6,445.6l0.5,75l280.1-1
                    c14.3,3.1,22.6,12.4,19.7,33.5L138.6,854.7l56.1,52.5l266.9-461.6L10.6,445.6z M545.2,446.2l262.4,459.6l58-52.1L691.3,552.9
                    c-2.9-21.2,5.4-30.6,19.7-33.7l280.2,1l-0.1-73.7L545.2,446.2z M500.9,522.3L254.8,944.7l65.4,31.9L484.4,699
                    c5.7-4.6,11.4-7.1,17.1-7.3c6-0.2,12.2,2,18.3,6.8l163.8,278.4l67.4-35.2L500.9,522.3z">
                  </path>
                </svg>
                <span style="margin-left: 50px;">{{ Auth::user()->name }}</span> <!-- Nombre del usuario autenticado con margen izquierdo -->
              </a>
              @else
                  <!-- Si no está autenticado, mostrar enlaces para iniciar sesión o registrarse -->
                <a class="btn btn-primary nav-item me-3 header-login" href="{{ route('login') }}">{{ __('Login') }}</a>
                <a class="btn btn-danger nav-item header-register header-login" href="{{ route('register') }}">{{ __('Register') }}</a>
                 
              @endif
            </div>            
          
        </div>
      </div>
    </nav>

    

    <!-- Contenedor principal del contenido de la página -->
    <div class="container-fluid mt-5 pt-5 ">
      <!-- Aquí se cargará el contenido dinámico mediante Blade (Laravel) -->
      @yield('content')
    </div>

    <!-- /#page-content-wrapper -->
    <section id="Information">
      <footer class="site-footer">
        <div class="container-fluid">
          <div class="row">
            <div class="col-sm-12 col-md-6">
              <h6>About</h6>
              <p class="text-justify fw-semibold">
                <i>BIOTEC</i> is a project created by trainees to satisfy the deficiencies in the English language presented by some of the SENA programs; in this case, Biotechnology and its branches. We hope you can enjoy and use <i>biotec</i> as a support tool.
              </p>
              <p align="justify" class="d-none d-lg-block">
                Developed by: <br>
                Program: Software analysis and development.<br>
                Sena-CBA
              </p>
            </div>
    
            <div class="col-sm-6 col-md-3">
              <h6>Categories</h6>
              <ul class="footer-links">
                <li><a href="#VEGETAL_BIOTECHNOLOGY" class="selected">Vegetal Biotechnology</a></li>
                <li><a href="#ANIMAL_BIOTECHNOLOGY" >Animal Biotechnology</a></li>
                <li><a href="#ACTIVITIES">Activities</a></li>
                <li><a href="http://scanfcode.com/category/java-programming-language/">Games</a></li>
              </ul>
            </div>
    
            <div class="col-sm-6 col-md-3">
              <h6>Quick Links</h6>
              <ul class="footer-links">
                <li><a href="/about_us">About Us</a></li>
                <li><a href="">Information</a></li>
                <li><a href="">Privacy Policy</a></li>
                <li><a href="">Concerns, Petitions, Complaints and Grievances</a></li>
              </ul>
            </div>
          </div>
    
          <!-- Nueva sección para redes sociales y contacto -->
          <div class="social-media-contact">
            <div class="social-media-contact">
              <div class="social-login-icons">
                <div class="socialcontainer">
                  <a href="https://twitter.com/@cbabiotecsena" target="_blank">
                    <div class="icon social-icon-1-1">
                      <svg
                        viewBox="0 0 512 512"
                        height="1.7em"
                        xmlns="http://www.w3.org/2000/svg"
                        class="svgIcontwit"
                        fill="white"
                      >
                        <path
                          d="M389.2 48h70.6L305.6 224.2 487 464H345L233.7 318.6 106.5 464H35.8L200.7 275.5 26.8 48H172.4L272.9 180.9 389.2 48zM364.4 421.8h39.1L151.1 88h-42L364.4 421.8z"
                        ></path>
                      </svg>
                    </div>
                  </a>
                  
  
                  <div class="social-icon-1">
                    <a href="https://twitter.com/@cbabiotecsena" target="_blank">  
                      <svg
                        viewBox="0 0 512 512"
                        height="1.7em"
                        xmlns="http://www.w3.org/2000/svg"
                        class="svgIcontwit"
                        fill="white"
                      >
                        <path
                          d="M389.2 48h70.6L305.6 224.2 487 464H345L233.7 318.6 106.5 464H35.8L200.7 275.5 26.8 48H172.4L272.9 180.9 389.2 48zM364.4 421.8h39.1L151.1 88h-42L364.4 421.8z"
                        ></path>
                      </svg>
                    </a>
                  </div>
                </div>
                <div class="socialcontainer">
                  <div class="icon social-icon-2-2">
                    <a href="https://www.instagram.com/biotecsena/" target="_blank">  
                      <svg
                        fill="white"
                        class="svgIcon"
                        viewBox="0 0 448 512"
                        height="1.5em"
                        xmlns="http://www.w3.org/2000/svg"
                      >
                        <path
                          d="M224.1 141c-63.6 0-114.9 51.3-114.9 114.9s51.3 114.9 114.9 114.9S339 319.5 339 255.9 287.7 141 224.1 141zm0 189.6c-41.1 0-74.7-33.5-74.7-74.7s33.5-74.7 74.7-74.7 74.7 33.5 74.7 74.7-33.6 74.7-74.7 74.7zm146.4-194.3c0 14.9-12 26.8-26.8 26.8-14.9 0-26.8-12-26.8-26.8s12-26.8 26.8-26.8 26.8 12 26.8 26.8zm76.1 27.2c-1.7-35.9-9.9-67.7-36.2-93.9-26.2-26.2-58-34.4-93.9-36.2-37-2.1-147.9-2.1-184.9 0-35.8 1.7-67.6 9.9-93.9 36.1s-34.4 58-36.2 93.9c-2.1 37-2.1 147.9 0 184.9 1.7 35.9 9.9 67.7 36.2 93.9s58 34.4 93.9 36.2c37 2.1 147.9 2.1 184.9 0 35.9-1.7 67.7-9.9 93.9-36.2 26.2-26.2 34.4-58 36.2-93.9 2.1-37 2.1-147.8 0-184.8zM398.8 388c-7.8 19.6-22.9 34.7-42.6 42.6-29.5 11.7-99.5 9-132.1 9s-102.7 2.6-132.1-9c-19.6-7.8-34.7-22.9-42.6-42.6-11.7-29.5-9-99.5-9-132.1s-2.6-102.7 9-132.1c7.8-19.6 22.9-34.7 42.6-42.6 29.5-11.7 99.5-9 132.1-9s102.7-2.6 132.1 9c19.6 7.8 34.7 22.9 42.6 42.6 11.7 29.5 9 99.5 9 132.1s2.7 102.7-9 132.1z"
                        ></path>
                      </svg>
                    </a>
                  </div>
                  <div class="social-icon-2">
                    <a href="https://www.instagram.com/biotecsena/" target="_blank">
                      <svg
                        fill="white"
                        class="svgIcon"
                        viewBox="0 0 448 512"
                        height="1.5em"
                        xmlns="http://www.w3.org/2000/svg"
                      >
                        <path
                          d="M224.1 141c-63.6 0-114.9 51.3-114.9 114.9s51.3 114.9 114.9 114.9S339 319.5 339 255.9 287.7 141 224.1 141zm0 189.6c-41.1 0-74.7-33.5-74.7-74.7s33.5-74.7 74.7-74.7 74.7 33.5 74.7 74.7-33.6 74.7-74.7 74.7zm146.4-194.3c0 14.9-12 26.8-26.8 26.8-14.9 0-26.8-12-26.8-26.8s12-26.8 26.8-26.8 26.8 12 26.8 26.8zm76.1 27.2c-1.7-35.9-9.9-67.7-36.2-93.9-26.2-26.2-58-34.4-93.9-36.2-37-2.1-147.9-2.1-184.9 0-35.8 1.7-67.6 9.9-93.9 36.1s-34.4 58-36.2 93.9c-2.1 37-2.1 147.9 0 184.9 1.7 35.9 9.9 67.7 36.2 93.9s58 34.4 93.9 36.2c37 2.1 147.9 2.1 184.9 0 35.9-1.7 67.7-9.9 93.9-36.2 26.2-26.2 34.4-58 36.2-93.9 2.1-37 2.1-147.8 0-184.8zM398.8 388c-7.8 19.6-22.9 34.7-42.6 42.6-29.5 11.7-99.5 9-132.1 9s-102.7 2.6-132.1-9c-19.6-7.8-34.7-22.9-42.6-42.6-11.7-29.5-9-99.5-9-132.1s-2.6-102.7 9-132.1c7.8-19.6 22.9-34.7 42.6-42.6 29.5-11.7 99.5-9 132.1-9s102.7-2.6 132.1 9c19.6 7.8 34.7 22.9 42.6 42.6 11.7 29.5 9 99.5 9 132.1s2.7 102.7-9 132.1z"
                        ></path>
                      </svg>
                    </a>
                  </div>
                </div>
                <div class="socialcontainer">
                  <div class="icon social-icon-3-3">
                    <a href="https://www.facebook.com/profile.php?id=61565922017389" target="_blank">
                      <svg
                        viewBox="0 0 384 512"
                        fill="white"
                        height="1.6em"
                        xmlns="http://www.w3.org/2000/svg"
                      >
                        <path
                          d="M80 299.3V512H196V299.3h86.5l18-97.8H196V166.9c0-51.7 20.3-71.5 72.7-71.5c16.3 0 29.4 .4 37 1.2V7.9C291.4 4 256.4 0 236.2 0C129.3 0 80 50.5 80 159.4v42.1H14v97.8H80z"
                        ></path>
                      </svg>
                    </a>
                  </div>
                  <div class="social-icon-3">
                    <a href="https://www.facebook.com/profile.php?id=61565922017389" target="_blank">
                      <svg
                        viewBox="0 0 384 512"
                        fill="white"
                        height="1.6em"
                        xmlns="http://www.w3.org/2000/svg"
                      >
                        <path
                          d="M80 299.3V512H196V299.3h86.5l18-97.8H196V166.9c0-51.7 20.3-71.5 72.7-71.5c16.3 0 29.4 .4 37 1.2V7.9C291.4 4 256.4 0 236.2 0C129.3 0 80 50.5 80 159.4v42.1H14v97.8H80z"
                        ></path>
                      </svg>
                    </a>
                  </div>
                </div>
                <div class="socialcontainer">
                  <div class="icon social-icon-4-4">
                    <a href="https://github.com/CBA-BIOTEC" target="_blank">
                      <svg fill="white" viewBox="0 0 496 512" height="1.6em">
                        <path
                          d="M165.9 397.4c0 2-2.3 3.6-5.2 3.6-3.3.3-5.6-1.3-5.6-3.6 0-2 2.3-3.6 5.2-3.6 3-.3 5.6 1.3 5.6 3.6zm-31.1-4.5c-.7 2 1.3 4.3 4.3 4.9 2.6 1 5.6 0 6.2-2s-1.3-4.3-4.3-5.2c-2.6-.7-5.5.3-6.2 2.3zm44.2-1.7c-2.9.7-4.9 2.6-4.6 4.9.3 2 2.9 3.3 5.9 2.6 2.9-.7 4.9-2.6 4.6-4.6-.3-1.9-3-3.2-5.9-2.9zM244.8 8C106.1 8 0 113.3 0 252c0 110.9 69.8 205.8 169.5 239.2 12.8 2.3 17.3-5.6 17.3-12.1 0-6.2-.3-40.4-.3-61.4 0 0-70 15-84.7-29.8 0 0-11.4-29.1-27.8-36.6 0 0-22.9-15.7 1.6-15.4 0 0 24.9 2 38.6 25.8 21.9 38.6 58.6 27.5 72.9 20.9 2.3-16 8.8-27.1 16-33.7-55.9-6.2-112.3-14.3-112.3-110.5 0-27.5 7.6-41.3 23.6-58.9-2.6-6.5-11.1-33.3 2.6-67.9 20.9-6.5 69 27 69 27 20-5.6 41.5-8.5 62.8-8.5s42.8 2.9 62.8 8.5c0 0 48.1-33.6 69-27 13.7 34.7 5.2 61.4 2.6 67.9 16 17.7 25.8 31.5 25.8 58.9 0 96.5-58.9 104.2-114.8 110.5 9.2 7.9 17 22.9 17 46.4 0 33.7-.3 75.4-.3 83.6 0 6.5 4.6 14.4 17.3 12.1C428.2 457.8 496 362.9 496 252 496 113.3 383.5 8 244.8 8zM97.2 352.9c-1.3 1-1 3.3.7 5.2 1.6 1.6 3.9 2.3 5.2 1 1.3-1 1-3.3-.7-5.2-1.6-1.6-3.9-2.3-5.2-1zm-10.8-8.1c-.7 1.3.3 2.9 2.3 3.9 1.6 1 3.6.7 4.3-.7.7-1.3-.3-2.9-2.3-3.9-2-.6-3.6-.3-4.3.7zm32.4 35.6c-1.6 1.3-1 4.3 1.3 6.2 2.3 2.3 5.2 2.6 6.5 1 1.3-1.3.7-4.3-1.3-6.2-2.2-2.3-5.2-2.6-6.5-1zm-11.4-14.7c-1.6 1-1.6 3.6 0 5.9 1.6 2.3 4.3 3.3 5.6 2.3 1.6-1.3 1.6-3.9 0-6.2-1.4-2.3-4-3.3-5.6-2z"
                        ></path>
                      </svg>
                    </a>
                  </div>
                  <div class="social-icon-4">
                    <a href="https://github.com/CBA-BIOTEC" target="_blank">
                      <svg fill="white" viewBox="0 0 496 512" height="1.6em">
                        <path
                          d="M165.9 397.4c0 2-2.3 3.6-5.2 3.6-3.3.3-5.6-1.3-5.6-3.6 0-2 2.3-3.6 5.2-3.6 3-.3 5.6 1.3 5.6 3.6zm-31.1-4.5c-.7 2 1.3 4.3 4.3 4.9 2.6 1 5.6 0 6.2-2s-1.3-4.3-4.3-5.2c-2.6-.7-5.5.3-6.2 2.3zm44.2-1.7c-2.9.7-4.9 2.6-4.6 4.9.3 2 2.9 3.3 5.9 2.6 2.9-.7 4.9-2.6 4.6-4.6-.3-1.9-3-3.2-5.9-2.9zM244.8 8C106.1 8 0 113.3 0 252c0 110.9 69.8 205.8 169.5 239.2 12.8 2.3 17.3-5.6 17.3-12.1 0-6.2-.3-40.4-.3-61.4 0 0-70 15-84.7-29.8 0 0-11.4-29.1-27.8-36.6 0 0-22.9-15.7 1.6-15.4 0 0 24.9 2 38.6 25.8 21.9 38.6 58.6 27.5 72.9 20.9 2.3-16 8.8-27.1 16-33.7-55.9-6.2-112.3-14.3-112.3-110.5 0-27.5 7.6-41.3 23.6-58.9-2.6-6.5-11.1-33.3 2.6-67.9 20.9-6.5 69 27 69 27 20-5.6 41.5-8.5 62.8-8.5s42.8 2.9 62.8 8.5c0 0 48.1-33.6 69-27 13.7 34.7 5.2 61.4 2.6 67.9 16 17.7 25.8 31.5 25.8 58.9 0 96.5-58.9 104.2-114.8 110.5 9.2 7.9 17 22.9 17 46.4 0 33.7-.3 75.4-.3 83.6 0 6.5 4.6 14.4 17.3 12.1C428.2 457.8 496 362.9 496 252 496 113.3 383.5 8 244.8 8zM97.2 352.9c-1.3 1-1 3.3.7 5.2 1.6 1.6 3.9 2.3 5.2 1 1.3-1 1-3.3-.7-5.2-1.6-1.6-3.9-2.3-5.2-1zm-10.8-8.1c-.7 1.3.3 2.9 2.3 3.9 1.6 1 3.6.7 4.3-.7.7-1.3-.3-2.9-2.3-3.9-2-.6-3.6-.3-4.3.7zm32.4 35.6c-1.6 1.3-1 4.3 1.3 6.2 2.3 2.3 5.2 2.6 6.5 1 1.3-1.3.7-4.3-1.3-6.2-2.2-2.3-5.2-2.6-6.5-1zm-11.4-14.7c-1.6 1-1.6 3.6 0 5.9 1.6 2.3 4.3 3.3 5.6 2.3 1.6-1.3 1.6-3.9 0-6.2-1.4-2.3-4-3.3-5.6-2z"
                        ></path>
                      </svg>
                    </a>
                  </div>
                </div>
                
              </div>
    
            <div class="contact">
              <h6>Contact Us</h6>
              <p>Email: <a href="mailto:cbabiotecsena@gmail.com">cbabiotecsena@gmail.com</a></p>
            </div>
          </div>
        </div>
      </footer>
    </section>

    

    <!-- Script de Bootstrap para los componentes interactivos como el menú desplegable -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>
  </body>
</html>


