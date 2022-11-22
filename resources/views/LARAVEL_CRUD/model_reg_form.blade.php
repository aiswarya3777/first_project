<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
    <style>
        .div_form{
            padding-top:50px;
        }
    </style>
</head>
<body>
    <form action="" method="post">
        <div class="container div_form">
            @csrf
            <div class="row">
                <div class="col-6"><label for="">First name</label></div>
                <div class="col-6"><input type="text" name="fname" id=""></div>
            </div>
            <div class="row">
                <div class="col-6"><label for="">Last name</label></div>
                <div class="col-6"><input type="text" name="lname" id=""></div>
            </div><div class="row">
                <div class="col-6"><label for="">Email</label></div>
                <div class="col-6"><input type="text" name="email" id=""></div>
            </div><div class="row">
                <div class="col-6"><label for="">Password</label></div>
                <div class="col-6"><input type="text" name="password" id=""></div>
            </div>
            <div class="row">
                <div class="col-4"></div>
                <div class="col-2"> <button type="submit" class="btn btn-warning" name="btn">Register</button></div>
                <div class="col-4"></div>
           
            </div>
        
        
       
        </div>
        
    </form>

    <br><br><br>
    <table border="1" align="center">
        <tr>
            <td>ID</td>
        <td>Fname</td>
        <td>Lname</td>
        <td>Email</td>
        <td>Password</td>
        <td>Action</td>
        <td>Action</td>
        </tr>
@foreach($data as $i)
        <tr>
            <td>{{ $i->id }}</td>
            <td>{{ $i->fname }}</td>
            <td>{{ $i->lname }}</td>
            <td>{{ $i->email }}</td>
            <td>{{ $i->password }}</td>
            <td><a href="{{ url('delete1') }}/{{ $i -> id }} ">Delete</a></td>
            <td><a href="{{ url('update1')}}/{{ $i-> id }}">Update</a></td>
        </tr>
        @endforeach
    </table>
</body>
</html>
</body>
</html>