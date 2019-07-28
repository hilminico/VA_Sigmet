<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
        <link rel="stylesheet" href="temp/style.css">
        <link rel="author" href="humans.txt">
        <link rel="stylesheet" type="text/css" href="{{ URL::asset('index.css') }}"> 
        <!-- Styles -->
    </head>


  <body>

  <div class="wraper">
  <div class="container">
    <div class="container--logo">
      <img src="{{URL::asset('logo.jpeg') }}" alt="logo">
    </div> <!-- End of the logo -->

    <form action="/actioninput" class="container--form form">
      <input type="text" class="container--form--search" placeholder="ex : tampilkan seluruh data va sigmet" name="command">

      <div class="container--form--btn button-home">
        <button class="container--form--btn--submit">Sigmet Search</button>
        <button class="container--form--btn--random ">I'm feeling lucky </button>
      </div>

    </form>
  </div> <!-- end of container -->

<div id="content" class="content">
</div><!--  End of content -->


<div class="random--search">
  
</div> <!-- End of random search -->
</div> <!-- end of wrapper -->


<footer class="footer">
  <!-- <p class="developed">2019</p> -->
</footer>
    
    
<script src="App/js.js"></script>
<script src="App/containerTop.js"></script>
</html>
