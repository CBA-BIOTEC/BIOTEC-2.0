<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Form Vocabulary</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <link rel="stylesheet" href="{!!asset('css/stylee.css')!!}">
  </head>
  <body>
    <br>
    <div class="container container-form mx-auto my-auto">
        <div class="row">
            <div class="col">
                <div class="heading">Form Fields</div>
                    <form action="/vocabularies" method="post" enctype="multipart/form-data">
                        <br>
                        @csrf
                    <input required="" class="input" type="text" style="width: 500px;" name="vocabulary" id="Vocabulary" placeholder="Vocabulary">
                    <br>
                    <br>
                    <input required="" class="input" style="height: 100px; width: 500px;" type="text" name="description" id="description" placeholder="Description">    
                    <div class="row mt-2">
                            <div class="col">
                                <!--<label for="file" class="custum-file-upload">
                                    <div class="icon">
                                     <svg viewBox="0 0 24 24" fill="" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <path fill-rule="evenodd" clip-rule="evenodd" d="M10 1C9.73478 1 9.48043 1.10536 9.29289 1.29289L3.29289 7.29289C3.10536 7.48043 3 7.73478 3 8V20C3 21.6569 4.34315 23 6 23H7C7.55228 23 8 22.5523 8 22C8 21.4477 7.55228 21 7 21H6C5.44772 21 5 20.5523 5 20V9H10C10.5523 9 11 8.55228 11 8V3H18C18.5523 3 19 3.44772 19 4V9C19 9.55228 19.4477 10 20 10C20.5523 10 21 9.55228 21 9V4C21 2.34315 19.6569 1 18 1H10ZM9 7H6.41421L9 4.41421V7ZM14 15.5C14 14.1193 15.1193 13 16.5 13C17.8807 13 19 14.1193 19 15.5V16V17H20C21.1046 17 22 17.8954 22 19C22 20.1046 21.1046 21 20 21H13C11.8954 21 11 20.1046 11 19C11 17.8954 11.8954 17 13 17H14V16V15.5ZM16.5 11C14.142 11 12.2076 12.8136 12.0156 15.122C10.2825 15.5606 9 17.1305 9 19C9 21.2091 10.7909 23 13 23H20C22.2091 23 24 21.2091 24 19C24 17.1305 22.7175 15.5606 20.9844 15.122C20.7924 12.8136 18.858 11 16.5 11Z" fill=""></path> </g></svg>
                                    </div>
                                    <div class="text">
                                        <span>Click to upload image</span>
                                    </div>
                                    <input id="file" type="file" name="image">
                                </label> -->
                                 <label for="img">Select Image Filen</label><br><br>
                                <input type="file" name="image" id="image" required><br><br>
                            </div>
                            <div class="col">
                                <!--<label for="file" class="audio-custum-file-upload">
                                    <div class="audio-icon">
                                        <svg width="24" height="24" xmlns="http://www.w3.org/2000/svg" fill-rule="evenodd" clip-rule="evenodd"><path d="M15 23l-9.309-6h-5.691v-10h5.691l9.309-6v22zm-9-15.009v8.018l8 5.157v-18.332l-8 5.157zm14.228-4.219c2.327 1.989 3.772 4.942 3.772 8.229 0 3.288-1.445 6.241-3.77 8.229l-.708-.708c2.136-1.791 3.478-4.501 3.478-7.522s-1.342-5.731-3.478-7.522l.706-.706zm-2.929 2.929c1.521 1.257 2.476 3.167 2.476 5.299 0 2.132-.955 4.042-2.476 5.299l-.706-.706c1.331-1.063 2.182-2.729 2.182-4.591 0-1.863-.851-3.529-2.184-4.593l.708-.708zm-12.299 1.299h-4v8h4v-8z"/></svg>
                                    </div>
                                    <div class="audio-text">
                                        <span>Click to upload Audio </span>
                                    </div>
                                </label>
                                
                                <input type="text" name="audio" id="audio" required accept=".mp3"><br><br> 
                                input id="file" type="file" name="sonido" accept=".mp3, .wav" required>-->
                                 <label for="nombre">Sound Archive</label><br><br>
                                <input type="text" name="audio" style="width: 500px;" id="audio" required><br><br> 
                            </div>
                        </div>
                    <br>
                    <input class="login-button" type="submit">
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>
</html>