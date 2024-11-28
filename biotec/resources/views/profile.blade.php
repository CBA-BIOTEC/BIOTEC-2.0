@extends('plantillas.plantilla')
@section('content')

<!doctype html>
<html lang="en">
    <head>
        <title>Title</title>
        <!-- Required meta tags -->
        <meta charset="utf-8" />
        <meta
            name="viewport"
            content="width=device-width, initial-scale=1, shrink-to-fit=no"
        />

        <!-- Bootstrap CSS v5.2.1 -->
        <link
            href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css"
            rel="stylesheet"
            integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN"
            crossorigin="anonymous"
        />

        <!-- Custom CSS -->
        <link rel="stylesheet" href="{{ asset('public/css/profile.css') }}">


        <link rel="stylesheet" href="{{ asset('bootstrap-5.3.2-dist/css/bootstrap.min.css') }}">
        <link rel="stylesheet" href="{{ asset('bootstrap-5.3.2-dist/js/bootstrap.min.js') }}">
        <link rel="stylesheet" href="{{ asset('pu') }}"
        
    </head>

    <body>
        
            <div class="epa-body">
                <div class="d-flex flex-column min-vh-100" style="margin-top: -50px;">
                    <div class="container mt-5 flex-grow-1 d-flex justify-content-center align-items-center">
                        <main  style="width: 400px; box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1); background-color: rgba(252, 250, 207, 0.904) ;">
                            <div class="profile-card p-4">
                                <div class="text-center mb-4">
                                    <!-- Ícono SVG reemplazando la imagen -->
                                    <style>
                                    
                                        .icon-green .st0 { fill: #007D78; }
                                    </style>
                                    <svg class= "icon-green" version="1.1" id="Capa_2" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 1000 1000" style="enable-background:new 0 0 1000 1000;fill: #007D78;" xml:space="preserve" height="5em" style="margin-right: 20px;">
                                        
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
                                            c5.7-4.6,11.4-7.1,17.1-7.3c6-0.2,12.2,2,18.3,6.8l163.8,278.4l67.4-35.2L500.9,522.3z"></path>
                                    </svg>
                                </div>
                                <div class="info-section">
                                    <div class="user-info">
                                        <label for="username" class="label">USER NAME</label>
                                        <p class="username">{{ Auth::user()->name }}</p>
                                    </div>
                                    <div class="user-info">
                                        <label for="email" class="label">E-MAIL</label>
                                        <p class="email">{{ Auth::user()->email }}</p>
                                    </div>
                                    <div class="user-info">
                                        <label for="password" class="label">PASSWORD</label>
                                        <p class="password">**********</p>
                                    </div>
                                </div>
                                <div class="text-center submit-log">
                                    @if (Auth::check())
                                        <button class="btn btn-danger button-out submit-log" style="font-family: 'Father Bold', sans-serif;">
                                            <!-- Formulario para cerrar sesión -->
                                            <a class="dropdown-item" href="{{ route('logout') }}"
                                               onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                                {{ __('LOG OUT') }}
                                            </a>
                                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none  ">
                                                @csrf
                                            </form>
                                        </button>
                                    @endif
                                </div>
                            </div>
                        </main>
                    </div>
                </div>  
            </div>
        
         
    </body>
</html>

@endsection

