<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <style>
        div{
            width: 100%;
            background-color: blue;
            color: white;
        }
    </style>
</head>
<body>
    <p id="demo">Hello</p>
    <button type="submit" id="btn">hide</button>
    <div id="content">Lorem ipsum dolor sit amet consectetur adipisicing elit. Cum ex accusamus doloremque necessitatibus unde veniam tempore quam at doloribus quia! Velit tempora sapiente quis vero quisquam maxime eaque veritatis. Expedita nemo soluta pariatur consequatur. Facere est aliquid cumque quo odit, quas quaerat, corrupti dolores ipsam, maiores fuga temporibus fugiat! Animi?</div>
    <script>
        $(document).ready(function(){
            $("#demo").html = "Hii it jquery";
            var a = $("#demo").html()
            $("#demo").html("hiii")
            console.log(a)
            // $("#demo").click(function(){
            //     var alert_info = $("#demo").html();
            //     alert(alert_info);});
            // $("#demo").click(function(){
            //     var alert_info = $(this).html();
            //     alert(alert_info);
            // })
            // $("#demo").click(function(){
            //    $(this).hide();//it will hide the element style:display:none
            // })
            // $("#btn").click(function(){
                // $("#content").hide();
                // $("#demo").show();
                // $("#demo").toggle();

            // })
            $("#btn").click(function(){
                $("#content").fadeToggle(4000);
                // $("#content").fadeTo(4000,0.2);
            })
        });
    </script>
</body>
</html>