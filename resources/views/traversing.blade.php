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
    <!-- traversing -->
    <!-- <div>
        <h1>hiii</h1>
        <p>
            hai
        </p>
    </div> -->

    <ul>
        <li>java</li>
        <li>php</li>
    </ul>

    <div>
        <h1>div1</h1>Lorem ipsum dolor sit amet consectetur adipisicing elit. Fuga odio pariatur vero, cupiditate,
        accusantium
        labore perferendis consequuntur eos eaque sint minus eius est consectetur animi ducimus iusto! Quas, provident
        officia.
    </div>

    <div>
        <h1>div2</h1>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Soluta doloribus veniam nemo ipsam, autem
        ipsum, amet
        ut earum officiis aliquam nisi accusamus nihil eligendi aperiam minus labore aliquid, libero fugiat.
        <div>this is inner</div>
    </div>
    <script>
        //parent method - to find the parent of li here it is ul, chaining is used for find grand child/parent
        $(document).ready(function () {
            console.log($("li").parent())
            //siblings method
            //   $("div").eq(2).html()
            //   $("div").last().html()
            //   $("div").first().html()
            //   $("p").siblings()
            //   $("body").children("ul").children()
            //   $("body").children().children()
            //   $("li").parent().parent()
        })



    </script>
</body>

</html>