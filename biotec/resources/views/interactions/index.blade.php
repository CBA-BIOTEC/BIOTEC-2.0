@extends('plantillas.plantilla')
@section('content')
<div class="container-fluid">
<div class="container pt-5 mt-4" id="elements">
    <header class="text-center my-5">
    <h1 class="display-5 font-weight-bold">INTERACTIONS</h1>
    </header>
</div>
<div class="contained-fluid mx-4">
<table class="table">
  <thead>
    <tr>
      <div class="container">
        <div class="row">
          <div class="col col-sm-8 col-xs-8">
          <th scope="" class="table-success text-center">Conversation</th>
          </div> 
          <div class="col col-sm-4 col-xs-4">
          <th scope="" class="table-success text-center">Audio</th>  
          </div> 
        </div>
      </div>
      
    </tr>
  </thead>
    <tbody>
        @foreach($interactionCont as $interactionVist)
            <tr>
                <td class="table mx-4 ps-3 ">{!! $interactionVist->interaction !!}</td>
                <td class="table p-3">
                <audio id="audioPlayer" class="pt-3 me-2" controls>
                    <source src="audios/interactions/{{$interactionVist->audio}}" type="audio/mp3">
                </audio>
                </td>
            </tr>
        @endforeach
    </tbody>
</table>
</div>
</div>
@endsection