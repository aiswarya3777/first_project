<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>dom_by_class</title>
</head>

<body>
    <!-- <p class="students">Aiswarya</p>
    <p  class="students">Sheena</p>
    <h1  class="students">Swetha</h1>
    <h1  class="students">Najila</h1> -->
    <label for="">Enter First No :</label> <input type="text" name="" id="first"><br>
    <label for="">Enter Second No :</label> <input type="text" name="" id="second">
    <button type="submit" onclick="add()">ADD</button>
    <p id="result">The result is </p>

    <script>
        // var student = document.getElementsByClassName("students")
        // console.log(student[2]) // first h1 tag will get
        function add() {
            var first = document.getElementById("first").value;
            var second = document.getElementById("second").value;
            var sum = parseInt(first) + parseInt(second);
            document.getElementById("result").innerHTML += sum;
            console.log(sum);
        }
    </script>
</body>
</html>