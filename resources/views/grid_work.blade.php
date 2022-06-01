<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        div{
            border: solid 2px yellowgreen;
        }
        .parent{
            display: grid;
            text-align: center;
        }
        .a{
            grid-column:1/span 3;
        }
        .b{
            grid-row: 2/span 2;
        }
        .e{
            grid-column: 2/span 2;
        }

    </style>
</head>
<body>
    <div class="parent">
        <div class="a">
            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Exercitationem non dolorum eum illo iusto eligendi est tempore voluptate hic quod.</p>
        </div>
        <div class="b">
            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Exercitationem non dolorum eum illo iusto eligendi est tempore voluptate hic quod.</p>
        </div>
        <div class="c">
            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Exercitationem non dolorum eum illo iusto eligendi est tempore voluptate hic quod.</p>
        </div>
        <div class="d">
            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Exercitationem non dolorum eum illo iusto eligendi est tempore voluptate hic quod.</p>
        </div>
        <div class="e">
            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Exercitationem non dolorum eum illo iusto eligendi est tempore voluptate hic quod.</p>
        </div>

    </div>
    <br><br><br><br><br><br>
    
</body>
</html>