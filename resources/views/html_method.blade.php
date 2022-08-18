<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
</head>
<body>
    <!-- The html() Method in jQuery is used to set or return the innerHTML content of the selected element. -->
   <h5 id="greetings">Hi Aiswarya</h5>
   <p id="set_value"></p>
   <button id="btn">Click</button>
   <ul id="list">
    <li>1</li>
    <li>2</li>
    <li>3</li>
    <li>4</li>
    <li>5</li>
   </ul>
   <script>
    $().ready(function(){
        $("#btn").click(function(){
        //    var gre = $("#greetings").html();//it will console the content
        //    console.log(gre)
        // var gre = $("#set_value").html("hiii");// it will appear the value in html to the p tag 
        // $("#greetings").html(function(n){
        //     return "Hi Aiswarya" + " this is html method()";//by using this we can append some text with the content
        // })
        $("#list").empty();//it will empty all the child elements
        
        });
    });
   </script>
</body>
</html>