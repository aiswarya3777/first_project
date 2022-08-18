<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <style>
        p {
            background-color: blue;
            color: bisque;
            height: 100px;
            width: 400px;
            position: relative;

        }
    </style>
</head>

<body>
    <button id="btn">Submit</button>
    <p id="content">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Voluptatum voluptates quia adipisci fugit.
        Quos,
    </p>

    <script>
        //call back - function within function
        $().ready(function () {
            $("#btn").click(function () {
                // $("#content").hide(()=>{//arrow function
                //     alert("hii");
                // });
                // $("#content").slideUp(1000);
                // $("#content").slideDown(1000);
                // $("#content").slideToggle(1000);

                //chaining
                // $("#content")
                // .slideDown(2000)
                // .slideUp(3000);

                //delay
                // $("#content")
                // .slideDown(2000)
                // .delay(3000)
                // .slideUp(3000);


                
                //animation

                 // height: "200px",
                    // width: "500px"
                    // left:"400px",
                    // top:"200px"
                $("#content")
                .animate({
                    left:"500px"
                })
                .delay(2000)
                .animate({
                    top:"200px"
                })
                .delay(2000)
                .animate({
                    left:"0px"
                })
                .delay(2000)
                .animate({
                    top:"0px"
                })
                


            });
        });
    </script>
</body>

</html>