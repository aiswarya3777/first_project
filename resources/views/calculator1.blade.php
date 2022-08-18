<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
    <style>
        tr{
           text-align: center;
        }
        table{
            margin-top: 90px;
            background-color: brown;
            border-collapse: collapse;
        }
        button{
            width: 100%;
        }
        input{
            border-style: none;
            text-align: right;
        }
    </style>
</head>
<body>
    <table  width="200px" align="center" >
        <tr>
            <td colspan="4"><input type="text" name="" id="display" readonly style="height: 60px;"></td>
        </tr>
        <tr>
            <td><button type="button" class="btn btn-dark" onclick="operation('+')">+</button></td>
            <td><button type="button" class="btn btn-dark" onclick="operation('-')">-</button></td>
            <td><button type="button" class="btn btn-dark" onclick="operation('*')">*</button></td>
            <td><button type="button" class="btn btn-dark" onclick="operation('/')">/</button></td>
        </tr>
        <tr>
            <td><button type="button" class="btn btn-dark" onclick="set_numbers('7')">7</button></td>
            <td><button type="button" class="btn btn-dark" onclick="set_numbers('8')">8</button></td>
            <td><button type="button" class="btn btn-dark" onclick="set_numbers('9')">9</button></td>
            <td rowspan="4"><button type="button" class="btn btn-dark" onclick="calculation()">=</button></td>
        </tr>
        <tr>
            <td><button type="button" class="btn btn-dark" onclick="set_numbers('4')">4</button></td>
            <td><button type="button" class="btn btn-dark" onclick="set_numbers('5')">5</button></td>
            <td><button type="button" class="btn btn-dark" onclick="set_numbers('6')">6</button></td>
        </tr>
        <tr>
            <td><button type="button" class="btn btn-dark" onclick="set_numbers('1')">1</button></td>
            <td><button type="button" class="btn btn-dark" onclick="set_numbers('2')">2</button></td>
            <td><button type="button" class="btn btn-dark" onclick="set_numbers('3')">3</button></td>
        </tr>
        <tr>
            <td><button type="button" class="btn btn-dark" onclick="set_numbers('0')">0</button></td>
            <td><button type="button" id="btn" class="btn btn-dark" onclick="dot('.')"> .</button></td>
            <td><button type="button" class="btn btn-dark" onclick="clearFunction()">C</button></td>
        </tr>
    </table>
    <script>
        flag = 0;
        function set_numbers(num){
            document.getElementById("display").value += num;
            
        }
        count = 0;
        function dot(num){
            document.getElementById("display").value;
          count= count+1;
          if(count>1){
            document.getElementById("btn").disabled =true;
          }else{
            document.getElementById("display").value += num;
          }

        }

        function clearFunction(){
            document.getElementById("display").value = "";
        }

        function operation(op){
            count = 0;
            document.getElementById("btn").disabled =false;
            curop = op;
            temp_val = Number(document.getElementById('display').value);
            document.getElementById("display").value = "";
        }

      function calculation(){
        // calculation using if condition
        cur_value = Number(document.getElementById('display').value);
        if(curop == '+'){
            result = temp_val + cur_value;
        }else if(curop == '-'){
            rresult = temp_val - cur_value;
        }else if(curop == '*'){
            result = temp_val * cur_value;
        }else if(curop == '/'){
            result = temp_val / cur_value;
        }
        // document.getElementById('display').value = result;
        document.getElementById('display').value = temp_val+curop+cur_value+"="+result;
            
            // console.log(cur_value)
            // console.log(temp_val)

            //calculation using switch
        // var result;
        // switch (curop) {
        //         case "+": result = temp_val + cur_value;
        //             break;
        //         case "-": result = temp_val - cur_value;
        //             break;
        //         case "/": result=temp_val / cur_value;
        //             break;
        //         case "*": result = temp_val * cur_value;
        //             break;
        //     }
        //     document.getElementById('display').value = result ; //if condition is preferably using in calculation
        }
    </script>
</body>
</html>
