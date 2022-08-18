<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.0/jquery.validate.min.js"> </script>  
</head>
<body>
    <div class="container">
<form id="myform">
    <input type="text" name="field1" /><br><br>
    <input type="text" name="field2" /><br><br>
    <!-- <input type="submit" /> -->
    <button type="submit" id="btn">submit</button>
</form>
</div>
<script>
    $().ready(function () {
        $("#btn").click(function(){
            $("#myform").validate({
            rules:{
                field1 : {
                    required :true,
                    email:true
                },
                field2:{
                    required :true,
                    minlength :8
                }
            }
        })
        })
      

// $('#myform').validate({ // initialize the plugin
//     rules: {
//         field1: {
//             required: true,
//             email: true
//         },
//         field2: {
//             required: true,
//             minlength: 5
//         }
//     }
// });

});
</script>
</body>
</html>