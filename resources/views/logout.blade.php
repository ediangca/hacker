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
                margin-left:37%;
                margin-top:5%;
                color:white;
                padding:10px;
                box-sizing: border-box;

            }
        </style>
          <style>
            h2{
                margin-left:34%;
                margin-top:2%;
                color:white;
                padding:10px;
                box-sizing: border-box;
            }
        </style>
         <style>
            .btn{
                font-size:200px;
                margin-left:40%;
                margin-top:2%;
                color:black;
            }
            .btn:hover{
                color:white;
            }
            </style>
        <title>Log Out</title>
      </head>
    <body>
      <div>
      <h1>Log out Successfully...</h1>
      <h2>if you want yo visit again.. click yes!</h2>
      <a href="/" type="button" class="btn btn.danger">Yes</a>
    </div>
    </body>
</html>