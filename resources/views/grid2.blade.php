<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        div{
            border: solid 2px chocolate;
        }
        .parent{
            text-align: center;
            display: grid;
        }
        .child1{
            grid-column-start: 1;
            grid-column-end: span 3;
        }
        .child2{
            grid-row-start: 2;
            grid-row-end: span 3;
        }
        .child3{
            grid-area: 2/2/4/2;
        }
        .child6{
            
        }
        .child4{
            grid-column-start: 2;
            grid-column-end: 4;
            grid-row-start: 2;
            grid-row-end: 6;
        }
    </style>
</head>
<body>
    <div class="parent">
        <div class="child1">content1</div>
        <div class="child2">content2</div>
        <div class="child3">content3</div>
        <div class="child4">content4</div>
        <div>content5</div>
        <div class="child6">content6</div>
        <div>content7</div>
        <div>content8</div>
        <div>content9</div>
    </div>
</body>
</html>