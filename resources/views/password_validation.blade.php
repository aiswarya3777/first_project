<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    Enter password : <input type="text" name="" id="password">
    <button type="submit" id="check_password" onclick="check()">CHECK</button>
    <p id="password_validation"></p>

    <script>
        function check() {
            password = document.getElementById("password").value
            password_length = password.length;
            var special_chara = ['@', '!', '#'];
            var spcl_lenght = special_chara.length;
            
            if (password_length < 5) {
                document.getElementById("password_validation").innerHTML = "password length is minimum 5"
            }
            for (i = 0; i < spcl_lenght; i++) {
                for (j = 0; j <password_length ; j++) {
                    
                    if (special_chara[i] == password[j] ) {
                        // var strong_result = document.getElementById("password_validation");
                        // strong_result.style.color = "green";
                        // strong_result.innerHTML += "Strong";
                      
                    } else {
                        var strong_result = document.getElementById("password_validation");
                        strong_result.style.color = "red";
                        strong_result.innerHTML += "weak";
                      

                    }
                }

            }

        }

    </script>
</body>

</html>