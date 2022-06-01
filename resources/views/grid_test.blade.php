<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        div{
            border: solid 5px black;
        }
        .parent{
            /* border: 5px solid black; */
            text-align: center;
            display: grid;
            grid-template-columns: auto auto auto;
            grid-template-rows: auto auto auto;
        }
        .child1{
            grid-column-start: 1;
            grid-column-end:span 3;
        }
        .child2{
            grid-row-start: 2;
            grid-row-end: span 2;
        }
        .child5{
            grid-column-start: 2;
            grid-column-end: span 2;
        }
        
    </style>
</head>
<body>
    <div class="parent">
        <div class="child1">HEADER</div>
        <div class="child2">SIDEBAR</div>
        <div class="child3">CONTENT 1</div>
        <div class="child4">CONTENT 2</div>
        <div class="child5">FOOTER</div>
        
    </div>
    <img src="{{ asset ('images/Art desgn.jpg') }}" alt="image">
</body>
</html>