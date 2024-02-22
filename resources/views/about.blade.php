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
            h1{
                margin-left:41%;
                margin-top:20%;
                color:white;
            }
            .nav-link:hover{
                color:white;
            }
            .nav-link{
            font-size:bold;
            margin-left:50px;
            }
            .nav-item1{
                margin-left:1250px;
            }
        </style>
        <title>activity2</title>

      </head>
    <body>
    <div class="navbar navbar-expand-lg navbar-white bg-danger">
        <ul class="navbar-nav ml-auto">
            <li class="nav-item"><a href="home" class="nav-link">Home</a></li>
            <li class="nav-item"><a href="about" class="nav-link">About</a></li>
            <li class="nav-item"><a href="contact" class="nav-link">Contact</a></li>
            <li class="nav-item"><a href="service" class="nav-link">Service</a></li>
            <li class="nav-item1"><a href="logout" class="nav-link">Log Out</a></li>
        </ul>
    </div>
    <h1>Welcome to the About</h1>
    </body>
</html>