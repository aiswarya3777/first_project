<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="{{ url('update_model')}}/{{$update_data ->id }}" method="post">
        @csrf
    <label for="">First Name</label>
    <input type="text" name="first" id="" value="{{ $update_data -> fname}}"><br><br>

    <label for="">Last Name</label>
    <input type="text" name="last" id="" value="{{ $update_data -> lname}}"><br><br>

    <label for="">Email</label>
    <input type="text" name="email" id="" value="{{ $update_data -> email}}"> <br><br>

    <label for="">Password</label>
    <input type="text" name="password" id="" value="{{ $update_data -> password }}"><br><br>

    <button type="submit">Update</button>
    </form>
</body>
</html>