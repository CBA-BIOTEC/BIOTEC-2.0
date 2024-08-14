<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link rel="stylesheet" href="{!!asset('css/stylebiotec.css')!!}">
    <link rel="stylesheet" href="{!!asset('css/stylecard.css')!!}">
    <link rel="stylesheet" href="{!!asset('css/stylecardenglish.css')!!}">
    <link rel="stylesheet" href="{!!asset('css/modal.css')!!}">
    <link rel="stylesheet" href="{!!asset('css/footer.css')!!}">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css" />
    <link href="https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700" rel="stylesheet" type="text/css" />
    <link rel="shortcut icon" type="image/png" href="images/bio/Botella.png"/>
    <!-- Core theme CSS (includes Bootstrap)-->
    <link href="css/styles.css" rel="stylesheet"/>
    
    <title>BIOTEC</title>
    </head>

<body class="bg-white">
    <div class="d-flex" id="wrapper">
    <div class="bg-white" id="sidebar-wrapper">
    <div class="sidebar-heading text-center py-3 primary-text fs-4 fw-bold text-uppercase ">    
        <br>
    </div>
    <div class="list-group list-group-flush my-4 ">
    <div class="b-example-divider"></div>
    <div class="list-group list-group-flush my-1 mb-n-1">
    <a href="/biotec" class="list-group-item list-group-item-action bg-transparent second-text active">
    <i  class="fas fa-house me-1"></i>
        <button class="btn btn btn-transparent fw-bold" data-bs-toggle="collapse" data-bs-target="#home" aria-expanded="false">
            HOME</button>

            <a href="#" class="list-group-item list-group-item-action bg-transparent second-text active">
                <i  class="fas fa-leaf me-1"></i>
                    <button class="btn btn btn-transparent dropdown-toggle fw-bold" data-bs-toggle="collapse" data-bs-target="#home-collapse" aria-expanded="false">
                        Introduction
                    </button>
            </a>
            <div class="collapse mx-4 pt-1" id="home-collapse">
                <ul class="btn-toggle-nav list fw-normal">
                <li><a href="/biotec#WTIS" class="link-dark rounded">What is Biotechnology?</a></li>
                <li><a href="/biotec#AREAS" class="link-dark rounded">Biotechnology areas</a></li>
                <li><a href="/vocabularies" class="link-dark rounded">Biotechnology Vocabulary</a></li>
                <li><a href="/concepts" class="link-dark rounded">Biotechnology Concepts</a></li>
                </ul>
            </div>

            <a href="#" class="list-group-item list-group-item-action bg-transparent second-text active">            
                <i  class="fas fa-flask-vial me-1"></i>
                    <button class="btn btn-transparent dropdown-toggle fw-bold" data-bs-toggle="collapse" id=botoncito data-bs-target="#elements-collapse" aria-expanded="false">
                        Laboratory
                    </button>
            </a>
            <div class="collapse mx-4" id="elements-collapse">
                <ul class="btn-toggle-nav list fw-normal pb-1 small">
                <li><a href="/elements" class="link-dark rounded">Laboratory Elements</a></li>
                <li><a href="/processes" class="link-dark rounded">Chemical Processes and Methods</a></li>
                </ul>
            </div>

            <a href="#" class="list-group-item list-group-item-action bg-transparent second-text active">            
                <i  class="fas fa-book me-1"></i>
                    <button class="btn btn-transparent dropdown-toggle fw-bold" data-bs-toggle="collapse" id=botoncito data-bs-target="#materials-collapse" aria-expanded="false">
                        Material
                    </button>
            </a>
            <div class="collapse mx-4" id="materials-collapse">
                <ul class="btn-toggle-nav list fw-normal pb-1 small">
                    <li><a href="/games" class="link-dark rounded">Activities</a></li>
                    <li><a href="/interactions" class="link-dark rounded">Interactions</a></li>
                    <li><a href="/links" class="link-dark rounded">Library</a></li>
                </ul>
            </div>
        </div>
    </div>
</div>

    <!-- Page Content -->

    <div id="page-content-wrapper">
        <nav class="navbar navbar-expand-lg navbar-expand-sm navbar-expand-m navbar-light py-4 px-4 pe-5 fixed-top">
            <div class="bd-navbar-toggle d-flex align-items-center">
            <i class="fas fa-align-left primary-text fs-4 me-3" id="menu-toggle"></i>
            <a href="/biotec">
                <img src="images/bio/Logo.png" alt="Logo" style="width:140px" class="imglogo">
            </a>
            </div>
            <img src="images/bio/senalogo.png" alt="Sena" style="width:50px" class="imgn">
        </nav>
    </div>
<br> 


@yield('content')


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js"></script>
  <script>
      var el = document.getElementById("wrapper");
      var toggleButton = document.getElementById("menu-toggle");

      toggleButton.onclick = function () {
          el.classList.toggle("toggled");
      };
  </script>
<script src="https://kit.fontawesome.com/323f7e30f3.js" crossorigin="anonymous"></script>

</body>
</html>