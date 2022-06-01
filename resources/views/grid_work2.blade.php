<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        div{
            border:solid 2px fuchsia;
        }
        .parent{
            display:grid;
            grid-template-columns: auto auto auto;
        }
        .f{
            grid-column: 1/span 2;
        }
        .g{
            grid-area:1/3/3/4;
        }
        
    </style>
</head>
<body>
<div class="parent">
        <div class="f">
            <p>content 1</p>
        </div>
        <div class="g">
            <p>content 2</p>
        </div>
        <div class="h">
            <p>content 3</p>
        </div>
        <div class="i">
            <p>content 4</p>
        </div>
    </div>
</body>
</html>