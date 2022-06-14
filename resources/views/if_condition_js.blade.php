<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>IF</title>
</head>
<body>
   <script>
    //    var prompt_box = parseInt(prompt("Please Enter Your Number"));
    //    console.log(prompt_box)
    //     // var state = prompt("Tamil Nadu")
    //    if(prompt_box > 5){
    //        console.log("Result is True")
    //    }else{
    //        console.log("Result is False")
    //    }
    //    console.log("Error")


    //    var prompt_box = parseInt(prompt("Please Enter Your Number"));
    //    console.log(prompt_box)
    //     var state = prompt("Enter your state")
    //    if(prompt_box > 5 && state=="Tamil Nadu"){
    //        console.log("Result is True")
    //    }else{
    //        console.log("Result is False")
    //    }


       //else if lader
    //    var day = parseInt(prompt("Enter Day"));
    //    if(day == 0){
    //        console.log("Sunday");
    //    }
    //    else if(day == 1){
    //     console.log("Monday"); 
    //    }
    //    else if(day == 2){
    //     console.log("Tuesday");   
    //    }
    //    else if(day == 3){
    //     console.log("Wednesday");   
    //    }
    //    else if(day == 4){
    //     console.log("Thursday");   
    //    }
    //    else if(day == 5){
    //     console.log("Friday");   
    //    }
    //    else if(day == 6){
    //     console.log("Saturday");   
    //    }
    //    else{
    //     console.log("Invalid Number");   
    //    }

    //    var eve_or_od = parseInt(prompt("Enter a number "))
    //    if(eve_or_od%2==0){
    //     console.log("even")
    //    }else{
    //        console.log("odd")
    //    }


    //switch conition

    // var day =prompt("Enter Day");
    // switch(day){
    //     case "sunday": console.log("Sunday");
    //                      break;
    //     case "monday": console.log("Monday");
    //                     break;
    //     case "tuesday": console.log("Tuesday");
    //                     break;
    //     case "wednesday": console.log("Wednesday");
    //                     break;
    //     case "thursday": console.log("Thursday");
    //                     break;
    //     case "friday": console.log("Friday");
    //                     break;
    //     case "saturday": console.log("Saturday");
    //                     break;
    //     default:  console.log("Invalid ");
    // }

    var num1 = parseInt(prompt("Enter first number"));
    console.log(num1)
    var num2 = parseInt(prompt("Enter second number"));
    console.log(num2)
    var op = prompt("Enter the operation");
    console.log(op)
    

    // if(op == "+"){
    //     console.log(num1+num2);
    // }else if(op == "-"){
    //     console.log(num1-num2);
    // }else if(op == "*"){
    //     console.log(num1*num2);
    // }
    // else if(op == "/"){
    //     console.log(num1*num2);
    // }else{
    //     console.log("Not a valid operation");
    // }
    
    switch(op){
        case "+":console.log(num1+num2);
        break;
        case "-":console.log(num1-num2);
        break;
        case "*":console.log(num1*num2);
        break;
        case "/":console.log(num1/num2);
        break;
        default:console.log("not a valid operation");
    }
   </script>
</body>
</html>