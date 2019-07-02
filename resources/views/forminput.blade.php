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

    <form action="#" class="container--form form">
      <input type="text" class="container--form--search" placeholder="Search..." name="command">

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

<!-- <script>
var title, information, userInput;

var init = function(){
   wikiSearchData();
   $('.container--form--btn--submit').on('click', wikiSearchData);
    $('.container--form--btn--random').on('click', randomSearch);
  
};

 var wikiSearchData = function(){
   userInput = $('.container--form--search').val();

     //The Ajax call to the server
   $.ajax({
       url:'https://en.wikipedia.org/w/api.php',
       data:{
         'action':'opensearch',
         'search':userInput,
         // '$wgEnableOpenSearchSuggest':'true',
         'limit':'16',
         'format':'json'
       },
       dataType:'jsonp',

       //If the call to the server success, then do this
       success:function(data, test){
           // console.log(data);
           errr = data.error;
           title = data[1];
           information = data[2];
           console.log(information);
           link = data[3];

   // if input is empty, output this 
   if(userInput === ''){
       $('.content').html( "<p class='para'>" + 'Sorry parameter needs to be set before searching ...' + "</p>");

     $('.container--form--btn--random').on('click', function(){
       $('.content').html( "<p class='para'>" + 'Your random search for today is ...' + "</p>");
     });
   }

   // If input is not empty, then do this
   else{
     $('.para').remove();

     for(var x = 0; x < title.length; x++){
       $("#content").prepend("<div class='content--info'>" +  "<h3>" + title[x] + "</h3>" + "<p clas'information'>" + information[x].slice(0, 150) + '...' + "</>" + "<a class='link' href=" + link[x] + " target='_blank'>" + "</a>" + "</div>");

     }
   } //end of else statement

           appending();

       }, //success function

       //Error function, in case an error pops 
       error:function(err){
         // document.write('Server error');
         // $('#content').text('No Result found');
         } //error function
   }); //Ajax function

 }; // end of wikiSearchData


 var appending = function(){

   // Add icons, and read more external links
   $('.link').html("<i class='ion-link'>" + "</i>" + "<p class='read-more'>" + "Read more..." + "</p>");

   outPutSearch();

 };

 //Outputting the content to the DOM
 var outPutSearch = function(){
   $('.random--search h3, .random--search p').remove();

   $('.bord').remove();

        // addingClass();
     };

// Random Search API Call
var randomSearch = function(){
  //getting the Random API Call
   urlLink = 'http://en.wikipedia.org/w/api.php?action=query&generator=random&grnnamespace=0&prop=extracts&explaintext&exsentences=3&format=json&callback=?';

     //Grabbing the Random Data from the API
   $.getJSON(urlLink, function(data){
    result = data.query.pages;

     //Mapping to get the right data from the api
     $.map(result, function(content){
       description = content.extract;
       header = content.title;
       id = content.pageid;

       outPutRandom();

     }); // end of map method
   }); // end of getJSON

};

// Outputing elements to the DOM after the API call. 
var outPutRandom = function(){
 $('.random--search').html( "<h3 class='random--information'>" + header + "</h3>" + "<p class='random--information'>" + description +"</p>" + "<a class='link' href='http://en.wikipedia.org/?curid=" + id + " target='_blank'>" + "<p>" + " read more" +"</p>" + "</a>");

};

init();

var container = '.container',
   logo = '.container--logo',
   form = '.container--form',
   search = '.container--form--search',
   btn = '.container--form--btn',
   submit = '.container--form--btn--submit',
   random = '.container--form--btn--random',
   content = '.content',
   randomSearch = '.random--search';

// putting the container and the logo on the top and style it.
var putTop = function(element, action) {
       $(element).on(action, function(){
     $(random).addClass('random1');
     $(container).addClass('main');
     $(logo).addClass('logo');
     $(form).addClass('form1');
     $(search).addClass('search1');
     $(btn).addClass('btn1');
     $(submit).text('');
     $(submit).addClass('result');
     $(submit).addClass('ion-ios-search');
     $('.para').css('display', 'none');

})
};

//firing the functions on different events

putTop(submit, 'click');
putTop(random, 'click');
putTop(search, 'keypress');

 $('.container--form--btn--random').on('click', function(){
   $('.random--search').addClass('bord');
 });

</script> -->

</html>
