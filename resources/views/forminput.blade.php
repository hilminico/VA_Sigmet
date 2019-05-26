<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">
 
        <!-- Styles -->
        <style>
            html, body {
                color: #636b6f;
                font-weight: 50;
                font-size:14px;
                margin: 0;
            }
            body{
                background: #343d46;
            }
            
            .box{
                margin: 100px auto;
                width: 300px;
                height: 50px;
            }

            .container-4{
                overflow: hidden;
                width: 300px;
                vertical-align: middle;
                white-space: nowrap;
            }

            .container-4 input#search{
                width: 300px;
                height: 50px;
                background: #2b303b;
                border: none;
                font-size: 10pt;
                float: left;
                color: #fff;
                padding-left: 15px;
                -webkit-border-radius: 5px;
                -moz-border-radius: 5px;
                border-radius: 5px;
            }

            .container-4 input#search::-webkit-input-placeholder {
                color: #65737e;
            }
            
            .container-4 input#search:-moz-placeholder { /* Firefox 18- */
                color: #65737e;  
            }
            
            .container-4 input#search::-moz-placeholder {  /* Firefox 19+ */
                color: #65737e;  
            }
            
            .container-4 input#search:-ms-input-placeholder {  
                color: #65737e;  
            }

            .container-4 button.icon{
                -webkit-border-top-right-radius: 5px;
                -webkit-border-bottom-right-radius: 5px;
                -moz-border-radius-topright: 5px;
                -moz-border-radius-bottomright: 5px;
                border-top-right-radius: 5px;
                border-bottom-right-radius: 5px;
                
                border: none;
                background: #232833;
                height: 50px;
                width: 50px;
                color: #4f5b66;
                opacity: 0;
                font-size: 10pt;
                
                -webkit-transition: all .55s ease;
                -moz-transition: all .55s ease;
                -ms-transition: all .55s ease;
                -o-transition: all .55s ease;
                transition: all .55s ease;
            }

            .container-4:hover button.icon, .container-4:active button.icon, .container-4:focus button.icon{
                outline: none;
                opacity: 1;
                margin-left: -50px;
            }
            
            .container-4:hover button.icon:hover{
                background: white;
            }
        </style>

    </head>
    <body>
    <div class="box">
        <div class="container-4">
            <form action="/actioninput" method="GET">
                <input type="search" id="search" placeholder="search ? . . ." name="command">
                <button type="submit" class="icon"><i class="fa fa-search"></i></button>
            </form>
        </div>
    </div>
    </body>
</html>
