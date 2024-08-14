<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Form</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="{!!asset('css/stylee.css')!!}">
  </head>
  <body>
    <div class="container d-flex justify-content-center align-items-center">
            <div class="card">
                <span class="title">Form Elements</span>
                <form action="/elements" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="row ms-3">
                        <div class="col mt-5">
                            <div class="group">
                                <label for="">Name Element</label>
                                <input placeholder="" type="text" name="element" required="" class="form-control w-100 mb-3">
                            </div>
                            <div class="group">
                                <label for="comment">Description</label>
                                <textarea placeholder="" id="comment" name="description" rows="5" required="" class="form-control w-100 mb-3"></textarea>
                            </div>
                        </div>
                        <div class="col-1 my-0 py-0 mx-0 px-0 d-flex justify-content-center align-items-center">
                            <span style="display: inline-block;">
                                <hr align="left" class="lineaVertical" width="2px" noshade="noshade">
                            </span>
                        </div>
                        <div class="col-7 images-audio mt-3">
                            <div>
                                <img src="..\images/form/image.png" alt="" width="32" height="32" class="me-3">
                                <label for="image" class="">Seleccionar Archivo de Imagen</label><hr>
                            </div>
                            <input placeholder="" type="file" name="image" id="image" required=""><br><br>

                            <div>
                                <img src="..\images\form\audio.png" alt="" width="32" height="32" class="me-3">
                                <label for="img" class="mt-5">Seleccionar Archivo de Audio</label><hr>
                            </div>
                            <input placeholder="" type="file" name="audio" id="image" required="">
                        </div>
                    </div>
                    <br><br>
                    <div class="col d-flex justify-content-center align-items-center">
                        <button type="submit" class="btn btn-sucess" style="background-color: #6dac48;">Submit</button>
                    </div>
                </form>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  </body>
</html>