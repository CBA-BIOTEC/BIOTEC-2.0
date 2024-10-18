@extends('plantillas.plantilla')
@section('content')
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="{{ asset('css/interactions.css') }}">
  <title>Document</title>
  <!-- Incluir CSS de Bootstrap -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
  <div class="container-fluid">
    <div class="container pt-5 mt-4" id="elements">
      <header class="text-center my-5">
        <h1 class="display-5 font-weight-bold">INTERACTIONS</h1>
      </header>
    </div>
    <div class="container">
      <div id="interactionsCarousel" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
          @foreach($interactionCont as $index => $interactionVist)
            <div class="carousel-item @if($index == 0) active @endif">
              <div class="d-flex justify-content-center">
                <div class="card interaction-card shadow-sm" style="width: 60%;">
                  <div class="card-body text-center">
                    <p class="card-text">{!! $interactionVist->interaction !!}</p>
                    <audio id="audioPlayer" class="pt-3" controls>
                      <source src="audios/interactions/{{$interactionVist->audio}}" type="audio/mp3">
                    </audio>
                  </div>
                </div>
              </div>
            </div>
          @endforeach
        </div>
        <!-- Indicadores personalizados -->
        <ol class="carousel-indicators">
          @foreach($interactionCont as $index => $interactionVist)
            <li data-target="#interactionsCarousel" data-slide-to="{{ $index }}" class="@if($index == 0) active @endif"></li>
          @endforeach
        </ol>
        <!-- Controles del carrusel -->
        <a class="carousel-control-prev" href="#interactionsCarousel" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#interactionsCarousel" role="button" data-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>
      </div>
      <!-- Contador de interacciones -->
      <div class="text-center mt-4">
        <span id="interactionCounter" data-total-items="{{ count($interactionCont) }}">1 / {{ count($interactionCont) }}</span>
      </div>
    </div>
  </div>
  <!-- Espacio para el footer -->
  <div class="footer-space"></div>

  <!-- Incluir JavaScript de Bootstrap y jQuery -->
  <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/2.11.6/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <script src="{{ asset('js/interactions.js') }}"></script>
</body>
</html>
@endsection
