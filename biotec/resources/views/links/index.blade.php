@extends('plantillas.plantilla')
@section('content')

<div class="container-fluid">
<div class="container pt-5 mt-4" id="links">
    <header class="text-center my-5">
    <h1 class="display-5 font-weight-bold">LIBRARY</h1>
    </header>
</div>
  <div class="contained-fluid mx-4">
    <table class="table">
      <thead>
        <tr>
          <th scope="col" class="table-success text-center">Link</th>
          <th scope="col" class="table-success text-center">Type</th>
        </tr>
      </thead>
        
        @foreach($linkCont as $linkVist)
        <tbody>
          <tr>
              <td class="text-center"><a href="{{$linkVist->link}}">{{$linkVist->link}}</a></td>
              <td class="text-center">
                <img src="images/links/{{$linkVist->img}}" class="img-fluid mx-auto d-block me-5" width="30px" height="30px">
              </td>
          </tr>
          </tbody>
        @endforeach
    </table>    
  </div>
</div>
@endsection