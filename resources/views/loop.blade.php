<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Loop</title>
</head>
<body>
    <script>
        // for(var i=0;i<=10;i++){
        //     console.log(i);
        // }
        // for(var i=10;i>=0;i--){
        //     console.log(i);
        // }

        //even
        // for(i=1; i<=100; i++){
        //    if(i%2==0){
        //        console.log("even");
        //    }else{
        //        console.log(0);
        //    }
        // }

    //    var i = 0;
    //    while(i<=10){
    //        console.log(i);
    //        i++;
    //    }


    //for of loop
     var array1 = [1,2,3,4,5];
     for(var i of array1){
         console.log(i)
     }

     var person = {name:"Aiswarya", age:20,gender:"female"}
     for(var p in person){
         console.log(person[p]);
     }

     var input = parseInt(prompt("Enter a number"));
     var sum = 0;
    //  while(input>0){
    //     var Quotient = parseInt(input/10);
    //     var reminder = input%10;
    //     var sum = sum + reminder;
    //     var input = Quotient;
    //  }
    //  console.log(sum)
    for(var i=input; i>0; i=i/10){
        var reminder = i%10;
        var sum = parseInt(sum + reminder);
    }
    console.log(sum)



     
    </script>
</body>
</html>