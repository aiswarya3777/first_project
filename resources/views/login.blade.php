<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>User Login</h1>
    <form action="user" method="POST">
        @csrf
        <input type="text" name="user" id="" placeholder="Type User name"><br><br>
        <input type="password" name="password" id="" placeholder="Password"><br><br>
        <button type="submit">Login</button>
    </form>
</body>
</html>