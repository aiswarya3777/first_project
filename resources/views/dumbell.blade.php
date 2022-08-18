<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <button onclick="similar()">check no.of pair</button>
    <script>
        function similar(){
            flag = 0;
            var dumbell = [2,6,8,9,2,6,8,2,2];
            console.log(dumbell.length);
            var input = parseInt(prompt("Enter weight"))
            for(i=0;i<=dumbell.length;i++){
                if(dumbell[i] == input){
                    flag++;
                }
               
            }
            console.log(flag)
        }
    </script>
</body>
</html>