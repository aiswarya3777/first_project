<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <p id="demo"></p>
    <p id="result"></p>
    <script>
        //shift() removes the first item of an array
        //The shift() method returns the shifted element
        // var fruit = ["Mango","Apple","Banana","Guva"];
        // var shift = fruit.shift();
        // document.getElementById("demo").innerHTML = shift;//Mango
        // document.getElementById("result").innerHTML = fruit;//Apple,Banana,Guva

        //unshift()
        // The unshift() method adds new elements to the beginning of an array.

        // The unshift() method overwrites the original array.
        // var fruit = ["Mango","Apple","Banana","Guva"];
        // fruit.unshift("Pineapple","Lemon");
        // document.getElementById("demo").innerHTML = fruit;

        //push()
        // var fruit = ["Mango","Apple","Banana","Guva"];
        // fruit.push("Grape","Lemon")
        // document.getElementById("demo").innerHTML = fruit;

        //pop()
        // var fruit = ["Mango","Apple","Banana","Guva"];
        // var result = fruit.pop()
        // document.getElementById("demo").innerHTML = result;
        //it will remive last element of an array


        //toString()
        // var numbers = ["one","two","three","four"];
        // numbers.toString();
        // document.getElementById("demo").innerHTML = numbers;
        // var numbers = ["one","two","three","four"];
        
        // document.getElementById("demo").innerHTML = numbers.join("-");

        //concat()
        var numbers = ["one","two","three","four"];
        var fruit = ["Mango","Apple","Banana","Guva"];
        // document.getElementById("demo").innerHTML = numbers.concat(fruit);

        // document.getElementById("demo").innerHTML = numbers.concat(fruit,"adnnition");

        //splice method
        //The splice() method adds and/or removes array elements.
        //The splice() method overwrites the original array.
        // numbers.splice(1,0,"lemon","kiwi")
        // numbers.splice(2,1,"lemon","kiwi")
        document.getElementById("demo").innerHTML = numbers
        // document.getElementById("result").innerHTML = numbers

    </script>
</body>

</html>