<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.0/jquery.validate.min.js"> </script>
    <style>
        div {
            margin-left: 500px;
        }
    </style>
</head>

<body>
    <div class="container">
        <form action="" id="form_validation">
            <label for="">First name</label>&nbsp;&nbsp;&nbsp;&nbsp;
            <input type="text" name="first_name" id="">
            <br><br>
            <label for="">Last name</label>&nbsp;&nbsp;&nbsp;&nbsp;
            <input type="text" name="last_name" id="">
            <br><br>
            <label for="">Mobile</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            <input type="text" name="mobile" id="">
            <br><br>
            <label for="">Email</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            <input type="text" name="email" id="">
            <br><br>
            <label for="">Password</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            <input type="text" name="password" id="password">
            <br><br>
            <label for="">Confirm</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            <input type="text" name="confirm_password" id="">
            <br><br>
            <button type="">Submit</button>
        </form>
    </div>

    <script>
        // var input = $('#password').css('textTransform', 'capitalize');
        // console.log(input)
        jQuery.validator.addMethod("alphanumeric", function (value, element) {
            return this.optional(element) || /^\w+$/i.test(value);
        }, "Letters, numbers, and underscores only please");

        $.validator.addMethod('mypassword', function (value, element) {
            return this.optional(element) || (value.match(/[a-zA-Z]/) && value.match(/[0-9]/));
        },
            'Password must contain at least one numeric and one alphabetic character.');

            $.validator.addMethod('firstLetter', function (value, element) {
            return this.optional(element) || (value.match(/[a-zA-Z]/) && value.match(/[0-9]/));
        },
            'Password must contain at least one numeric and one alphabetic character.');

            jQuery.validator.addMethod("passwordCheck",
        function(value, element, param) {
            if (this.optional(element)) {
                return true;
            } else if (!/[A-Z]/.test(value)) {
                return false;
            }
            return true;
        },
        "error msg here");

        $().ready(function () {
            $("#form_validation").validate({
                rules: {
                    first_name: {
                        required: true,
                        minlength: 8,
                        alphanumeric: true
                    },
                    last_name: {
                        required: true
                    },
                    mobile: {
                        required: true,
                        number: true
                    },
                    email: {
                        required: true,
                        email: true,

                    },
                    password: {
                        required: true,
                        mypassword: true,
                        passwordCheck :true
                        
                    },
                    confirm_password:{
                        equalTo :"#password"
                    }
                },
                messages: {
                    first_name: {
                        required: "Enter First name",
                        minlength: "Minimum 8 letters"
                    },
                    last_name: {
                        required: "Enter Last name"
                    },
                    mobile: {
                        required: "Enter mobile number"
                    },
                    email: {
                        required: "Enter email id",
                        email: "Enter Valid Email Id"
                    },
                    password: {
                        required: "Enter password",
                        

                    },
                    confirm_password:{
                        equalTo:"Password didnt match"
                    }
                }
            });
        });
    </script>
</body>

</html>