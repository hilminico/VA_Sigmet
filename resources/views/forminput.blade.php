<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-weight: 50;
                font-size:14px;
                margin: 0;
            }

        </style>
    </head>
    <body>
        <form action="/actioninput" method="GET">
            <input type="text" name="command">
            <input type="submit" placeholder="OK">
        </form>
    </body>
</html>