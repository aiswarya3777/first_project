<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .parent{
            /* height: 500px; */
            background-color: blue;
            border: solid 5px yellowgreen;
            /* to column the grid */
            display: grid;
            /* display: inline-grid; */
            /* grid-template-columns:auto auto auto; */
            /* here we will have 3 columns */
            grid-template-columns: auto auto auto;
            grid-template-rows: auto auto ;
            /* to give gap between cols */
            /* column-gap: 5px; */
            /* to give gap between rows */
            /* row-gap: 5px; */
            /* gap: 20px; */
            /* here first row then cols */
            /* gap: 10px 20px; */
            /* to justify content to center */
            /* justify-content: center; */
            /* justify-content: end; */
            /* justify-content: start; */
           /* justify-content: space-evenly; */
           /* justify-content: space-between; */

           /* to align content vertically */
           /* align-content: end; */
           /* align-content: start; */
           /* align-content: center; */
          /* align-content: space-around;   */
          /* align-content: space-between; */
          /* align-content: space-evenly; */
        }
        div{
            border: solid 5px black;
            /* margin: 20px; */
        }
        .child2{
            /* grid-row-start: 2;
            grid-row-end:2 ; */
            /* grid-row: 2/span 2; */

        }
        .child1{
            grid-area: 1/1/3/3;
            /* like colspan */
             /* grid-column-start: 1;
            grid-column-end: 2; */
            /* grid-column: 1/2; */
        }
        .child5{
            /* grid-column: 2/span 2; */
            /* grid-area: 2/2/4/4; */
            
        }
         
    </style>
</head>
<body>
    <div class="parent">
    <div class="child1"><p>CONTENT1</p></div>
    <div class="child2"><p>CONTENT2</p></div>
    <div class="child3"><p>CONTENT3</p></div>
    <div class="child4"><p>CONTENT4</p></div>
    <div class="child5"><p>CONTENT5</p></div>
    <div class="child6"><p>CONTENT6</p></div>
    <div class="child7"><p>CONTENT7</p></div>
    <div class="child8"><p>CONTENT8</p></div>
    <div class="child9"><p>CONTENT9</p></div>
    </div>
    
       
    
</body>
</html>