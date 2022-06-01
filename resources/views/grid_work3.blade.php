<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
   <style>
       div{
           /* border: solid 3px grey; */
           border-radius: 15px;
       }
       .parent{
           
           text-align: center;
           display: grid;
           grid-template-columns: auto auto auto;
           gap: 50px 30px;
       }
       .a{
           grid-column: 1/span 3;
           background-color: chartreuse;
       }
       .c{
           grid-area: 2/2/3/4;
           background-color: cyan;
       }
       .d{
           grid-column: 1/span 3;
           background-color: crimson;
       }
       .b{
           background-color: darkgoldenrod;
       }
   </style>
</head>
<body>
    <div class="parent">
        <div class="a"><p>content 1</p></div>
        <div class="b"><p>content 2</p></div>
        <div class="c"><p>content 3</p></div>
        <div class="d"><p>content 4</p></div>
    </div>
</body>
</html>