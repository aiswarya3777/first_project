<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <script>
         var marks = [27,28,29,50,95,75,56];
         var top_score = 0 ;
         var   second_great =0;
         var array_length = marks.length;
         for(let i=0;i<array_length;i++){
            if(marks[i]>top_score){
               top_score = marks[i];
               
            }
         }
         //29
         for(let i=0;i<array_length;i++){
            if(marks[i] != top_score){
            if(marks[i]>second_great){
               second_great = marks[i];
            }
        }
         }
         console.log(second_great)
    </script>
</body>
</html>