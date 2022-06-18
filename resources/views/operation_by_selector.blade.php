<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <table>
        <tr>
            <td><label for="">Enter first number :</label></td>
            <td> <input type="text" name="" id="first"></td>
        </tr>
        <tr>
            <td><label for="">Select operatin :</label></td>
            <td>
                <select name="" id="operation">
                    <option value="">select</option>
                    <option value="+">+</option>
                    <option value="-">-</option>
                    <option value="*">*</option>
                    <option value="/">/</option>
                </select>
            </td>
        </tr>
        <tr>
            <td> <label for="">Enter Second number :</label>
            </td>
            <td>
                <input type="text" name="" id="second">
            </td>
        </tr>
        <tr>
            <td>
                <button type="submit" onclick="operation()">SUBMIT</button>
            </td>
            <td>
                <p id="result">the sum is </p>
            </td>
        </tr>

    </table>

    <script>
        function operation() {
            var first_number = document.getElementById("first").value;
            var second_number = document.getElementById("second").value;
            var selected_operator = document.getElementById("operation").value;
            var result_tag = document.getElementById("result");
            var result;
            switch (selected_operator) {
                case "+": result = parseInt(first_number) + parseInt(second_number);
                    break;
                case "-": result = parseInt(first_number) - parseInt(second_number);
                    break;
                case "/": result = parseInt(first_number) / parseInt(second_number);
                    break;
                case "*": result = parseInt(first_number) * parseInt(second_number);
                    break;
            }
            result_tag.innerHTML += result;
            
            if (result > 50) {
                result_tag.style.color = "green";
            }
            if (result < 0) {
                result_tag.style.color = "red";
            }
        }
    </script>
</body>
</html>