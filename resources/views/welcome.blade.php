<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
        <style>
            body{
                background-color:rgba(60,60,60);
            }
        </style>
        <style>
            .btn{
                font-size:200px;
                margin-left:37%;
                margin-top:9%;
                color:black;
            }
            .btn:hover{
                color:white;
            }
        </style>
        <style>
            h1{
                margin-left:37%;
                margin-top:5%;
                color:red;
                padding:10px;
                box-sizing: border-box;
                color:white;
            }
        </style>
        <title>activity2</title>
      </head>
    <body>
      <div>
      <h1>click start to continue..</h1>
      <a href="home" type="button" class="btn btn.danger">Start</a>
      </div>
    
    </body>
</html>