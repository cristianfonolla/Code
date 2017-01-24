<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="css/app.css">
    <meta name="csrf-token" content="{{ csrf_token() }}" />
</head>
<body>
<div id="app">
    <div class="container">
        <div class="row">
            <div class="col-md-5 col-md-offset-3">
                <button id="getuser" class="btn btn-primary">Get User!</button>

                Usuari:<input type="text" name="user" id="user">
            </div>
            <div class="col-md-4"></div>
            <div class="col-md-7 col-md-offset-3">
                <button id="postuser" class="btn btn-primary">Post User!</button>

                Usuari:<input type="text" name="userpost" id="userpost">
                Resultat:<input type="text" name="resultpost" id="resultpost">
            </div>
        </div>

    </div>
</div>



<script src="js/app.js"></script>
</body>
</html>