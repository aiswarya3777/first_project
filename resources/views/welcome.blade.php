<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/welcome.css">
    <style>
        /* grouping selector */
        h1,p,span{
            /* color: red; */
            /* background-color: green; */
            /* padding-top: 10px;
            padding-right: 10px;
            padding-bottom: 10px;
            padding-left: 10px; */
            /* padding: 20px 5px 30px 5px; */
            /* padding: 20px 5px 5px; */
            /* border: solid; */
            /* padding: 10px 30px; */
            border-width: 5px;
            border-style: dotted;
            border-color: blue purple red pink; 
            /* border-style: dashed double dotted none; */
            /* border:  6px dotted darkslategray; */
            /* border-width: 5px 20px 50px 10px; */
            border-top-style: groove;
            border-radius: 20px;
            /* margin-top: 60px;
            margin-bottom: 50px;
            margin-left: 50px;
            margin-right: 50px; */
            /* margin-block-end: 50px; */
            /* margin:60px 50px 50px 50px; */
            margin:auto;
        }
        /* .style1
        {
            color: pink;
            background-color: green;
        }
        #style2{

            color: aqua;
            background-color: black;
        }
        #style3{
            color: beige;
            background-color: blue;
        } */
        span.class123{
            color: rgb(165, 142, 42);
            background-color: aqua;
        }
    </style>
</head>
<body>
    <h1>Laravel Started !!!! Aiswarya</h1><br><br>
    <h1 class="style1">Aiswarya</h1>
    <h1 class="style1">Kallingal</h1>

    <h1>First Git experiment</h1><br><br>
    <img src="images/Art desgn.jpg" alt="image">
    @yield('content')
    <!-- href link method -->
    <a href="{{ Route ('index') }}">Index Page</a> &nbsp; &nbsp; &nbsp;
    <a href="{{ Route ('home') }}">Home Page</a>&nbsp; &nbsp; &nbsp;
    <a href="{{ Route ('welcome') }}">welcome Page</a>&nbsp; &nbsp; &nbsp; 
    <p class="style1">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Fugit similique asperiores natus soluta ipsum voluptatum ratione nihil maiores, eligendi tempore?</p>  
    <h2 id="style2">ID SELECTOR 1</h2>
    <h3 id="style3">ID SELECTOR 2</h3>
    <h1 class="class123">Lorem ipsum dolor sit amet consectetur.</h1>
    <span class="class123">Lorem <p>ipsum</p>ipsum dolor sit amet consectetur.</span><br>
    <span class="class123">Lorem ipsum dolor sit amet consectetur.</span>
   
    <p>dsjhwgwgwejbww</p>
    <div>
        <h1>DIV CONTENT</h1>
        <p>Lorem ipsum dolor, sit amet consectetur adipisicing.</p>
        <h1>DIV CONTENT</h1>
        <p>Lorem ipsum dolor sit amet. Lorem, ipsum dolor sit amet consectetur adipisicing elit. Deleniti, iure. Iure ducimus voluptates laboriosam officia explicabo veritatis similique in. Cumque vitae suscipit placeat esse alias, necessitatibus enim molestias consequatur a excepturi atque expedita earum quae eius accusamus. Minus esse sed cumque velit, earum maiores, amet necessitatibus officiis voluptas ab deleniti!</p>
    </div>
    <input type="text">
    <input type="search" name="" id="">
    
    <!-- <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Animi ea eaque omnis natus optio 
        perspiciatis voluptatem non excepturi recusandae nam, ex obcaecati soluta eligendi odit blanditiis 
        libero eos quos aperiam in adipisci, repellat voluptas atque, corporis eum. Ducimus, facilis debitis 
        sapiente at repellat enim, quod rerum deleniti perferendis excepturi nostrum voluptas dolorum, ipsa 
        necessitatibus. Magni amet dolorum ratione similique adipisci.</p> -->


</body>
</html>