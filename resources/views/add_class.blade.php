<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <title>Document</title>
    <style>
        .name {
            color: brown;
           
        }

        .name2 {
            /* color: blue; */
            /* font-size: large; */
            color: aqua;
            font-family: 'Times New Roman', Times, serif;
            font-size: 50px;
        }
        /* div{
            height: 300px;
            width: 200px;
            border: 2px solid black;
            background-color: aquamarine;
            padding: 5px;
        } */
    </style>
</head>

<body>
    <ul class="name" id="list">
        <li>Name</li>
        <li>Place</li>
        <li>House</li>
    </ul>
    <button type="submit" id="btn">Click</button>
<br><br>
    <!-- <div>
        Lorem ipsum dolor sit amet consectetur adipisicing elit. Cum aspernatur consequatur est voluptates eveniet
        minima ex aliquid pariatur dolore, quia praesentium dolorem asperiores illum magni quasi eligendi eos quis iure.
    </div> -->

  <!-- traversing -->

    <script>
    $().ready(function(){
        $("#btn").click(function(){
            // $("ul").addClass("name");//here the style of ul will change without giving class name directly
            $("ul").attr("class","name2");
            $("#list").remove();//it will remove the content
        })
    })

    // $().ready(function(){
    //  console.log("width="+$("div").width()) ;
    //  console.log("height="+$("div").height()) ;
    //  console.log("innerWidth="+$("div").innerWidth());
    //  console.log("innerHeight="+$("div").innerHeight());
    //  console.log("outerWidth="+$("div").outerWidth());
    //  console.log("outerHeight="+$("div").outerHeight());
    // })
    </script>
</body>

</html>