@extends('plantillas.plantilla')
@section('content')
<div class="container-fluid">
<div class="container pt-5 mt-4" id="elements">
    <header class="text-center my-5">
    <h1 class="display-5 font-weight-bold">LABORATORY ELEMENTS</h1>
    </header>
</div>
<div class="contained-fluid">
<div class="row">
@foreach($elementCont as $elementVist)
    <div class="col-lg-4 col-md-6 col-sm-12 mb-4 py-2 d-flex justify-content-center"> 
        <div class="cards" style="width: 18rem;">
            <img src="images/elements/{{$elementVist->img}}" class="img" width="100%" height="100%">
            <div class="textBox">
            <p class="text head">{{$elementVist->element}}</p>
            <span class="mb-4">{{$elementVist->description}}</span>
            <div class="col">
            <audio id="audioPlayer" class="pt-3" controls>
            <source src="audios/elements/{{$elementVist->audio}}" width="200" type="audio/mp3">
            </audio>
            <br>
            <!-- <button onclick="playPause()" class="btn"><img src="images/icons/play.svg" width="25px" alt="play"></button>
            <button onclick="reload()" class="btn"><img src="images/icons/arrow-repeat.svg" width="25px" alt="reload"></button>
            <button onclick="minvolumJs()" class="btn"><img src="images/icons/volumedown.svg" width="25px" alt="min"></button>
            <button onclick="maxvolumJs()" class="btn"><img src="images/icons/volume-up.svg" width="25px" alt="min"></button> -->
            </div>
            </div>
        </div>
    </div>
    <script src="funcionesaudio.js"></script>
@endforeach
</div>
</div>
</div>
@endsection