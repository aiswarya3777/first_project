<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="{{ url('updated') }}/{{ $update_data -> id}}" method="post">
        @csrf
    <label for="">first</label>
    <input type="text" name="first" id="" value="{{ $update_data ->first_name }}"><br>

    <label for="">last</label>
    <input type="text" name="last" id="" value ="{{ $update_data ->last_name }}"><br>

    <label for="">email</label>
    <input type="text" name="email" id="" value = "{{ $update_data ->email }}"><br>

    <label for="">password</label>
    <input type="text" name="password" id="" value="{{ $update_data ->password }}"><br>

    <button type="submit">Update</button>
    </form>
    
</body>
</html>