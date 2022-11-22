<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}" />
    <title>Document</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
</head>
<body onload="data_retrive()">
    
        <label for="">Name</label>
        <input type="text" name="" id="name">
        <p id="message"></p>
        <br><br>

        <label for="">Email</label>
        <input type="text" name="" id="email"><br><br>

        <label for="">Password</label>
        <input type="password" name="" id="pass"><br><br>

        <button type="submit" id="submit" >Save</button>
    
    <br><br><br><br>

    <table border="1" style="margin-left:20px;" id="appendId">
        <tr>
            <td>Id</td>
            <td>Name</td>
            <td>Email</td>
            <td>Password</td>
        </tr>

       
    </table>

    <script>
        // add this to add csrf 
        $.ajaxSetup({
   headers: {
     'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
   }
});
        //  $().ready(function(){ this is not neccessary 
            
        $().ready(function(){
            $('#submit').click(function(){

                // first ajax function 
                //for view and post give different name other wise it will not work properly

                $.ajax({

                    url:'ajax_posting',
                    type:'POST',
                    data:{
                     get_name : $('#name').val(),
                     get_email : $('#email').val(),
                     get_password : $('#pass').val() 
                    },

                    success:function(){
                        data_retrive(); 
                    }
                    
                });


            });

            //checking name in db
            $('#name').change(function(){
                // $('#name').val()
                check_name_val = $(this).val();
                if(check_name_val != ''){
                    $.ajax({
                        url:'ajax_check_name',
                        type:'POST',
                        data :{
                            name_checking : check_name_val
                        },
                        success:function(Response){
                            document.getElementById('message').innerHTML = Response.message;
                            // alert(Response.message);
                            // document.getElementById('message').html(Response);
                            if(Response == true){
                                return true;
                            }else{
                                return false;
                            }
                        }
                    });
                }
            });
            //end checking name in db
        });
        //to display data
        
        function data_retrive(){
           
            $.ajax({
                url :'data_retrive',
                type : 'GET',
                success:function(Response){
                    // here we write the code for retrive data from db
                    console.log(Response.datas);// all data fetched
                    // length = Response.datas.length
                    //now we append table tr then append td
                    data_from_db = Response.datas;
                    //this remove() is use to avoid repeatation so it remove last table and show new table
                    $('.avoid_repeatation').remove();
                    for(i = 0; i< Response.datas.length ; i++){
                        $('#appendId').append("<tr class='avoid_repeatation'> <td>"+ data_from_db[i].id
                        +"</td> <td>"+data_from_db[i].name 
                        +"</td><td>"+ data_from_db[i].email
                        +"</td><td>"+data_from_db[i].password+
                        "</td><td><button onclick='delete_1("+data_from_db[i].id
                        +")'>Delete</button></td><td><button onclick='update_1("+ data_from_db[i].id
                         +")'>Update</button></td></tr>");
                    }

                }
               
            });
        }


        //to delete the datas
        function delete_1(id){
            // alert(id)
            $.ajax({
                url : 'delete_ajax',
                type :'POST',
                data :{
                    delete_id :id
                } ,
                success :function(){
                    data_retrive();
                }
            })
        }

        function update_1(id){
            // alert(id)
            $.ajax({
                url : 'update_ajax',
                type : 'POST',
                data :{
                    update_id : id
                },
                success:function(){   
            }
            })
            
        }
    </script>
</body>
</html>