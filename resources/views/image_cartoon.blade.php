<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
    <style>
        #cartoon{
            position: relative;
            width: 100px;
            height: 200px;     
        }
        
    </style>
</head>
<body><div id="cartoon"><img src="{{'images/mario.png'}}" alt=""  class="img-fluid"></div>
    
   
   <script>
    $(document).keydown(function(e){
        if(e.keyCode == 39){
            $("#cartoon")
            .animate({
                left:"+=50px"
            })
        }
        if(e.keyCode == 37){
            $("#cartoon")
            .animate({
                left:"-=50px"
            })
        }
        if(e.keyCode == 38){
            $("#cartoon")
            .animate({
                top:"-=10px"
            })
        }
        if(e.keyCode == 40){
            $("#cartoon")
            .animate({
                top:"+=50px"
            })
        }
    });
    
   </script>
</body>
</html>