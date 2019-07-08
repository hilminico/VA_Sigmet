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
    <div class="wraper-header">
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
    </div>
    <div class="row">
        <div class="col-sm-8">
        <table>
            @foreach($data[6] as $dt)
                <div id="content-main">
                    <div class="content--info col-sm content-list">
                        @foreach($dt[5] as $key => $dta)
                        <tr><p clas'information'="">{{ $key }} : {{ $dta }}</p></tr>
                        @endforeach
                    </div>
                </div>
            @endforeach
        </table>
    </div>
    

    <div class="col-sm-4 left-border">
        <div class="row">

            <div class="col-sm-12">
                <div class="content--info col-sm side-bar">
                    <h3 style="text-align:center;">Scanner</h3>
                    @foreach($data[1] as $dta)
                        {{ $dta }} </br>
                    @endforeach
                </p></div>
            </div>

            <div class="col-sm-12">
                <div class="content--info col-sm side-bar">
                    <h3 style="text-align:center;">Token</h3>
                     <?php $i=0; ?>
                    @foreach($data[1] as $dt)
                        {{ $dt }} -> {{ $data[0][$i] }}</br> 
                        <?php $i++;?>
                    @endforeach


                </p></div>
            </div>

            <div class="col-sm-12">
                <div class="content--info col-sm side-bar">
                    <h3 style="text-align:center;">Translator</h3>
                        Rule {{ $data[5] }} </br>
                </p></div>
            </div>

        </div>
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
