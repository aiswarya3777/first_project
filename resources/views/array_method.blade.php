<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <p id="fruit"></p>
    <p id="pop"></p>
    <script>
        var fruit = ['mango', 'apple', 'grape'];
        // document.getElementById("fruit").innerHTML = fruit.toString();//convert array to 
        // document.getElementById("fruit").innerHTML = fruit.join("*");// convert array to string same as above mango-apple-grape
        // The join() method also joins all array elements into a string.
        // It behaves just like toString(), but in addition you can specify the separator

//         When you work with arrays, it is easy to remove elements and add new elements.

// This is what popping and pushing is:

// Popping items out of an array, or pushing items into an array.

        // document.getElementById("pop").innerHTML = fruit;
        // fruit.pop();
        // document.getElementById("fruit").innerHTML = fruit;

        // The pop() method returns the value that was "popped out"
        // The pop() method removes the last element from an 
        
        // document.getElementById("pop").innerHTML = fruit.push("kiwi","pineapple");
        // The push() method adds a new element to an array (at the end)
        // The push() method returns the new array length
        // console.log(fruit)

        // document.getElementById("pop").innerHTML = fruit.shift();
        // console.log(fruit)
        // Shifting is equivalent to popping, but working on the first element instead of the last.
        // The shift() method removes the first array element and "shifts" all other elements to a lower index.
        // The shift() method returns the value that was "shifted out"

        // document.getElementById("pop").innerHTML = fruit.unshift("kiwi","pineapple");
        // console.log(fruit)
        // The unshift() method adds a new element to an array (at the beginning), and "unshifts" older elements
        // The unshift() method returns the new array length.


        // document.getElementById("pop").innerHTML = fruit;
        // fruit[0] = "kiwi";
        // console.log(fruit)
        // Array elements are accessed using their index number:

        // document.getElementById("pop").innerHTML = fruit;
        // fruit[fruit.length] = "kiwi";
        // console.log(fruit)

        // delete fruit[0];
        // console.log(fruit) // [empty, 'apple', 'grape']
        // fruit.splice(2, 0, "Lemon", "Kiwi");
        // fruit.splice(0, 2, "Lemon", "Kiwi");
        // var fruit = ['mango','apple', 'grape'];
        // fruit.splice(2, 1);
        // console.log(fruit)
        // The first parameter (0) defines the position where new elements should be added (spliced in).
        // The second parameter (1) defines how many elements should be removed.





        // The splice() method can be used to add new items to an array
        // The first parameter (2) defines the position where new elements should be added (spliced in).

// The second parameter (0) defines how many elements should be removed.

// The rest of the parameters ("Lemon" , "Kiwi") define the new elements to be added.

// The splice() method returns an array with the deleted items:




    </script>
</body>

</html>