<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <link rel="stylesheet" href="temp/style.css">
        <link rel="author" href="humans.txt">
        <link rel="stylesheet" type="text/css" href="{{ URL::asset('index.css') }}"> 
        <!-- Styles -->
    </head>


  <body>

  <div class="wraper">
  <div class="container main">
    <div class="container--logo logo">
      <img src="http://localhost:8000/logo.jpeg" alt="logo">
    </div> <!-- End of the logo -->

    <form action="#" class="container--form form form1">
      <input class="container--form--search search1" placeholder="Search..." name="command" type="text">

      <div class="container--form--btn btn1">
        <button class="container--form--btn--submit result ion-ios-search"></button>
        <button class="container--form--btn--random  random1">I'm feeling lucky </button>
      </div>

    </form>
  </div> <!-- end of container -->

<div class="row">
    <div class="col-sm-8">
        <div id="content">
                <div class="content--info col-sm content-list">
                    <h3>ASD (album)</h3>
                    <p clas'information'="">ASD is the fifth album by American post-hardcore band A Skylit Drive, released on October 9, 2015, through Tragic Hero Records.It's the first studio a...</p>
                </div>
        </div>

        <div id="content">
                <div class="content--info col-sm content-list">
                    <h3>ASD (album)</h3>
                    <p clas'information'="">ASD is the fifth album by American post-hardcore band A Skylit Drive, released on October 9, 2015, through Tragic Hero Records.It's the first studio a...</p>
                </div>
        </div>

        <div id="content">
            <div class="content--info col-sm content-list">
                <h3>ASD (album)</h3>
                <p clas'information'="">ASD is the fifth album by American post-hardcore band A Skylit Drive, released on October 9, 2015, through Tragic Hero Records.It's the first studio a...</p>
            </div>
        </div>

    </div>
    <div class="col-sm-4">
        <div class="content--info col-sm">
            <h3>Asdrúbal Paniagua</h3>
            <p clas'information'="">Asdrúbal Paniagua Ramírez (born 29 July 1951, in San Rafael de Heredia) is a retired professional football player from Costa Rica....
        </p></div>
    </div>
</div>

<div class="random--search">
  
</div> <!-- End of random search -->
</div> <!-- end of wrapper -->


<footer class="footer">
  <!-- <p class="developed">2019</p> -->
</footer>
    
    
<script src="App/js.js"></script>
<script src="App/containerTop.js"></script>

</html>
