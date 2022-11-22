<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}" />
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
</head>
<body onload="data_dispaly()">
    <div class="container">

    <label for="">Name</label>
    <input type="text" name="" id="username"><br><br>

    <label for="">Email</label>
    <input type="text" name="" id="email"><br><br>

    <label for="">Password</label>
    <input type="text" name="" id="password"><br><br>

    <button type="submit" id="btn">Submit</button>

    <table id="datas">
        <tr>
            <td>Id</td>
            <td>Name</td>
            <td>Email</td>
            <td>Password</td>
            <td>Action</td>
            <td>Action</td>
        </tr>
    </table>
    <br><br><br><br>
    <h5>Update</h5>
    <div id="update">
        <!-- <input type="text" name="" id="inp"> when we use modal create a form then put id for each field then assign the value from database 
        in the function success the add update button the create a function for update -->
    </div>
   
    </div>
  
    <!-- ajax -->
    <script>
        $.ajaxSetup({
   headers: {
     'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
   }
});
        $().ready(function(){
            $('#btn').click(function(){
                $.ajax({
                    url : 'study_post',
                    type : 'POST',
                    data : {
                        name : $('#username').val(),
                        email :$('#email').val(),
                        password : $('#password').val()
                    },
                    success : function(){
                        data_dispaly()
                    }

                });
            });
        });

        //data retrive
        function data_dispaly(){
            $.ajax({
            url : 'data_form_db',
            type :'GET',
            success : function(Response){
                // console.log(Response.data_from_db)
                credential = Response.data_from_db;
                $(".rep").remove();
                for(i = 0; i<Response.data_from_db.length; i++){
                    $('#datas').append("<tr class='rep'><td>"+credential[i].id
                    +"</td><td>"+credential[i].name
                    +"</td><td>"+credential[i].email
                    +"</td><td>"+credential[i].password
                    +"</td><td><button onclick='data_delete("+credential[i].id
                    +")'>Delete</button></td><td><button onclick='data_update("+credential[i].id
                    +")'>Update</button></td></tr>")
                }
            }

        })
        }

        function data_delete(id){
            $.ajax({
                url : 'datas_delete',
                type : 'POST',
                data : {
                    data_id : id
                },
                success : function(){
                    data_dispaly()
                }
            });
        }

        function data_update(id){
            $.ajax({
                url : 'ajax_update',
                type : 'GET',
                data : {
                    update_id : id
                },
                success:function(Response){
                    data = Response.update_data;
                    // console.log(data)
                    //if in modal
                    // document.getElementById("inp").value = data.name;
                    $('.repeat').remove();
                        $('#update').append("<form id='reset_update'><label class='repeat'>Name</label><input class='repeat' type='text' id='update_name' value="+
                        data.name+"><br><label class='repeat'>Email</label><input class='repeat' type='text' id='update_email' value="+
                        data.email+"><br><label class='repeat'>Password</label><input class='repeat' id='update_password' type='text' value="+
                        data.password+"> <br><button class='repeat' onclick='updated_function("+data.id+")'>Update</button></form>");
                }
                
            })
        }
        function updated_function(id){
            
            $.ajax({
                url:'updated_data',
                type:'POST',
                data:{
                    updated_id : id,
                    get_name : $('#update_name').val(),
                    get_email : $('#update_email').val(),
                    get_password : $('#update_password').val()
                },
                success:function(){
                    document.getElementById("reset_update").reset();//this is to clear input field after update
                    data_dispaly()
                },
                error:function(){
                    alert('error')
                }
            })
        }
    </script>
</body>
</html>