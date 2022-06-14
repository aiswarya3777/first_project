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
        // by using prompt we can create a alert box with input .
        // var prompt_box = parseInt(prompt("Please Enter Your Name"));
        // var prompt_box1 = parseInt(prompt("Please Enter Your Name"));//parseInt is used for converting string to integer
        // console.log(typeof(prompt_box))
        // var sum = prompt_box + prompt_box1;
        // console.log(sum);
        //we can use parseFloat to convert to float


        // Confirm box
    //    var conform_box = confirm("Are you sure you want to delete ?");
    //    console.log(conform_box)//here if we click ok it will give true as output other wise false
       
       //incrementfunction
       var increment = 10;
       increment++;
       console.log(increment,"value increse to 11")

       //decrement

       var decrement = 55;
       decrement--;
       console.log(decrement,"value decrese to 54")

       //exponent

       var exponent1 = 2;
       var exponent2 = 3;
       var result = exponent2 ** exponent1; //here we get 9 as output
       console.log(result)

       //X+=10 ---> x=x+10

       var x = 10;
       var z =30;
       x+=z;
       console.log(x)

       //X-=10 ---> x=x-10
        var y = 10;
        y-=5
        console.log(y)

        //x%=10 ---> x=x%10
        var mod = 20
        mod%=2
        console.log(mod)

        //x**10 --> x=x**10
        var square = 10
        square**=2;
        console.log(square)

        //++a and a++ pre increment and post increment
        // var a = 10;
        // var b = a++;
        // console.log(a)
        // console.log(b)

        // var a = 10;
        // var b = ++a;
        // console.log(a)
        // console.log(b)

        // comparison operations
        // var b = 20;
        // var a =20;
        // console.log(a==b)
        var a = 10
        var b = 10
        console.log(a===b)//here all digits are under number type so we can use float and integer at sametime

        //greater tha or equal

        console.log(a>b)
        console.log(a<b)
        console.log(a>=b)
        console.log(a<=b)
        console.log(a!=b)
        console.log(a!==b)
        console.log(20<30 && 10<5)// here we get false because one condition is wrong
        console.log(20<30 || 10<5)//here we get false because one condition is right
        console.log(!(20<30))// here output is false because here condition is right
        
    </script>
</body>
</html>