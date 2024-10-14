@extends('plantillas.plantilla')
@section('content')
<div class="container-fluid">
<div class="container pt-5 mt-4 expand-lg" id="process">
    <header class="text-center my-5">
    <h1 class="display-5 font-weight-bold">PROCESSES AND METHODS</h1>
    </header>
</div>
<div class="contained-fluid">
<div class="row">
@foreach($processCont as $processVist)
    <div class="col-lg-4 col-md-6 col-sm-12 mb-4 py-2 d-flex justify-content-center"> 
        <div class="cards" style="width: 18rem;">
            <img src="images/process/{{$processVist->img}}" class="img" width="100%" height="100%">
            <div class="textBox">
            <p class="text head">{{$processVist->process}}</p>
            <span>{{$processVist->description}}</span>
            <div class="col">
            <audio id="audioPlayer" class="pt-3" controls>
            <source src="audios/process/{{$processVist->audio}}" width="200" type="audio/mp3">
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