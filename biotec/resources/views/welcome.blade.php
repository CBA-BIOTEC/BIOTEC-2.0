<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Learn Technical English with us Biotec</title>

    <!-- Incluye el archivo de estilo -->
    <link rel="stylesheet" href="{{ asset('css/welcome.css') }}">
    <!--<link rel="stylesheet" href="styles.welcome.css">-->

    <!-- jQuery -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
</head>
<body>
    <div class="main-content">
        <h1 class="titulo">Learn Technical English with us Biotec</h1>
        <div class="illustration">
            <div class="boy">
                <img src="https://meowlivia.s3.us-east-2.amazonaws.com/codepen/boy.svg" width="150px" />
            </div>
            <div class="person-type-wrapper">
                <div class="person-type active home-body">
                    <div class="scenery">
                        <img src="https://meowlivia.s3.us-east-2.amazonaws.com/codepen/indoor.svg" height="350" />
                    </div>
                    <div class="background-items">
                        <img src="https://meowlivia.s3.us-east-2.amazonaws.com/codepen/furniture.svg" width="350" />
                    </div>
                    <div class="foreground-items">
                        <img src="https://meowlivia.s3.us-east-2.amazonaws.com/codepen/playstation.svg" width="90" />
                    </div>
                </div>
                <div class="person-type outdoor-person">
                    <div class="scenery">
                        <img src="https://meowlivia.s3.us-east-2.amazonaws.com/codepen/outdoor.svg" height="350" />
                    </div>
                    <div class="background-items">
                        <img src="https://meowlivia.s3.us-east-2.amazonaws.com/codepen/sky.svg" width="320" />
                    </div>
                    <div class="foreground-items">
                        <img src="https://meowlivia.s3.us-east-2.amazonaws.com/codepen/dogtree.svg" width="300" />
                    </div>
                </div>
            </div>
        </div>
        <div class="option-wrapper">
            <div class="option active" data-option="home">Study from your home with the greatest comfort</div>
            <div class="option" data-option="outdoor">Even outside the home learn English</div>
        </div>

        <!-- Botones "Iniciar sesión" y "Registrarse" -->
        <div class="button-group">
            @if (Route::has('login'))
                @auth
                    <a href="{{ url('/biotec') }}">Home</a>
                @else
                    <a href="{{ route('login') }}">LOGIN</a>
                    @if (Route::has('register'))
                        <a href="{{ route('register') }}">REGISTER</a>
                    @endif
                @endauth
            @endif
        </div>
    </div>

    <!-- Incluye el archivo de script -->
    <script src="{{ asset('js/welcome.js') }}"></script>
    <!--<script src="scripts.welcome.js"></script>-->
</body>
</html>