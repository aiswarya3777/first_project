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
        .error{
            color: red;
            
        }
    </style>
</head>

<body>
    <form action="" id="form_validation">
        <label for="">First Name</label>
        <input type="text" name="fname" id="" placeholder="First Name"><br><br>
        <label for="">Email</label>
        <input type="text" name="email" id="" placeholder="email"><br><br>
        <label for="">Password</label>
        <input type="text" name="password" id="" placeholder="password"><br><br>
        <button type="submit" id="form_submit">Submit</button>
    </form>
    <script>
        // $().ready(function () {
        //     $('#form_submit').click(function () {
        //         $('#from_validation').validate({
        //             rules:{
        //                 fname:{
        //                     required:true
        //                 }
        //             }
        //         });
        //     })

        // });
        $('#form_validation').validate({
            rules:{
                fname:"required",
                // password:"required",
                // email:"required"
                email:{
                    required:true,
                    email:true
                },
                password:{
                    required:true,
                    minlength :5,
                    maxlength:10
                }
            },
            // submitHandler:function(form_validation){
            //     form_validation.submit();
            // }
            submitHandler:function(form){
                form.submit();
            }
        });
    </script>
</body>

</html>