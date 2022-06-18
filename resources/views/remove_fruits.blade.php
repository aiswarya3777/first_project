<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Remove Fruits</title>
</head>

<body>
    <span id="fruits_list"></span><br><br>
    <label for="">Enter Fruit</label>
    <input type="text" name="" id="to_be_removed">
    <button type="submit" onclick="fruit_listing()">REMOVE</button>
    <ul>
        <li id="fruits"></li>
    </ul>
    <script>
        var fruits = ["Orange", "Grape", "Mango", "Banana"];
        document.getElementById("fruits_list").innerHTML = fruits;
        function fruit_listing() {
            var fruits = ["Orange", "Grape", "Mango", "Banana"];
            var length = fruits.length;
            var get_fruit = document.getElementById("to_be_removed").value;
            var fruits = ["Orange", "Grape", "Mango", "Banana"];
            var length = fruits.length;
            var after_remove = [];
            for (let i = 0; i < length; i++) {
                if (fruits[i] == get_fruit) {
                    fruits.splice(i, 1);//explanation needed
                }
            }
            after_remove = fruits;
            array_length = after_remove.length;
            for (j = 0; j < array_length; j++) {
                var list = document.getElementById("fruits");
                var fruit_list = document.createElement("li");
                fruit_list.innerHTML = after_remove[j];
                list.appendChild(fruit_list);
            }
        }
    </script>
</body>

</html>