<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        div{
            border-radius: 15px;
            /* border: 3px solid blue; */
        }
        .parent{
           
            gap: 10px 20px;
            text-align: center;
            display: grid; 
        }
        .child5{
            /* grid-column: 2/4;
            grid-row: 2/4; */
            grid-area: 2/2/4/4;
            background-color: brown;
        }
        .child1{
            background-color: aqua;
        }
        .child2{
            background-color:blueviolet ;
        }
        .child3{
            background-color:burlywood ;
        }
        .child4{
            background-color:chartreuse ;
        }
        .child6{
            background-color:coral ;
        }
    </style>
</head>
<body>
    <div class="parent">
        <div class="child1"><p>A</p></div>
        <div class="child2"><p>B</p></div>
        <div class="child3"><p>C</p></div>
        <div class="child4"><p>D</p></div>
        <div class="child5"><p>E</p></div>
        <div class="child6"><p>F</p></div>
    </div>
</body>
</html>