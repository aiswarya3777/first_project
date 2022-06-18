<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <input type="text" name="" id="todo_adding">
    <button type="submit" id="add" onclick="add_list()">ADD</button>
    <button type="submit" id="reset" onclick="reset_list()">CLEAR</button>
    <ul id="todo"> </ul>
    <script>
        function add_list() {
            var todo_list = document.getElementById("todo_adding").value;
            var ul = document.getElementById("todo");
            var li = document.createElement("li");
            li.appendChild(document.createTextNode(todo_list));
            ul.appendChild(li);
        }
        function reset_list() {
            document.getElementById("todo_adding").value = '';
        }
    </script>
</body>

</html>