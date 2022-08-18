<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        div {
            margin-top: 50px;
        }
    </style>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css"
        integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
</head>

<body>
    <form action="/login" method="get" name="form1" onsubmit="return validate_form()">
        <div class="container">
            <div class="row">
                <input type="text" name="name1" id="name1" placeholder="Name">
                &nbsp;&nbsp;&nbsp; <label for="" id="labelname"></label>
            </div>
            <div class="row">
                <input type="text" name="place" id="place" placeholder="Place">
                &nbsp;&nbsp;&nbsp; <label for="" id="labelplace"></label>
            </div>
            <div class="row">
                <input type="text" name="email" id="email" placeholder="Email">
                &nbsp;&nbsp;&nbsp; <label for="" id="labelemail"></label>
            </div>
            <div class="row">
                <button type="submit">SUBMIT</button>
            </div>
        </div>
    </form>

    <script>
        function validate_form() {
            //    name = document.getElementById('name1').value;
            //    place = document.getElementById('place').value;
            //    email = document.getElementById('email').value;
            name = document.forms["form1"]["name1"].value;
            place = document.forms["form1"]["place"].value;
            email = document.forms["form1"]["email"].value;
            document.forms["form1"]["name1"].focus()
            // document.forms["form1"]["place"].focus()
            // document.forms["form1"]["email"].focus()
            return_var = true;
            if (name == "") {
                document.getElementById('labelname').innerHTML = "Enter name here !!!"
                return_var = false;
            }
            if (place == "") {
                document.getElementById('labelplace').innerHTML = "Enter place here !!!"
                return_var = false;
            }
            if (email == "") {
                document.getElementById('labelemail').innerHTML = "Enter email here !!!"
                return_var = false;
            }
            //email validation
            validRegex = /^[a-zA-Z0-9.!#$%&'*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$/;
            // input value is email so whicch is not equal to regular charaectors we use match function
            if (!email.match(validRegex)) {
                document.getElementById('labelemail').innerHTML = "Enter valid email"
                return_var = false;
            }
            return return_var;


        }
    </script>
</body>

</html>