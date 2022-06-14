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
        //function definition
        
        // function addition(){
        //     var i = 10;
        //     var j = 20;
        //     var sum = i+j;
        //     console.log(sum);
        // }
        //function call
        // addition()


            //function with parameters

        // function addition(n1,n2){ //here n1 and n2 are parameters
        //     var sum = n1+n2;
        //     console.log(sum);
        // }
        //function call
        // addition(4,6)//here 4 and 6 are arguments
        // addition(4,8)
        // addition(4,10)


        function addition(n1,n2){ //here n1 and n2 are parameters
            var sum = n1+n2;
            // console.log("hi") here it will work ,after return nothing will console
            return sum;
            // console.log("hi") it will not work
        }
        var function_output = addition(1,2);
        console.log(function_output);
        //here value will console outside the function
        
        
    </script>
</body>
</html>