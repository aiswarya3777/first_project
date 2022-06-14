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
        //dowhile operation do work first then check while condition 
        // var i = 0;
        // do{
        //     console.log(i);
        //     i++;
        // }
        // while(i<10);

        for nested
        for(i=0;i<10;i++){
            for(j=0;j<10;j++){
                console.log(i,j)
            }
        }
        var i = 1000;
        for(let i= 0; i<10;i++){
            console.log(i)
        }
         console.log(i) //use let  for for loop


        //to find topscore

        //  var marks = [20,21,22,23,24,25,26,27,28,29];
        //  var top_score = 0 ;
        //  var array_length = marks.length;
        //  for(let i=0;i<array_length;i++){
        //     if(marks[i]>top_score){
        //        top_score = marks[i];
        //     }
        //  }
        //  console.log(top_score);


        // var array2 = [1,2,3,4,5,6]
        // var flag = 0;
        // var input = parseInt(prompt("enter number"));
        // var array_length = array2.length;
        // for(let i=0;i<array_length;i++){
        //     if(input == array2[i]){
        //         flag = 1;
        //         break
        //     }
        // }
        // if(flag==1){
        //     console.log("found")
        // }else{
        //     console.log("not found")
        // }

            // for(let i = 0;i<5;i++){
            //     if(i==3){
            //         break
            //     }
            //     console.log(i)
            // }

            // for(let i = 0;i<5;i++){
            //     if(i==3){
            //         continue  //output 0 1 2  4  here 3 will not appear bcause when conditon true it will go to loop 
            //     }
            //     console.log(i)
            // }
    </script>
</body>
</html>