<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Laravel Started !!!!</h1><br><br>

    <h1>First Git experiment</h1><br><br>
    <img src="images/Art desgn.jpg" alt="image">
    @yield('content')
    <!-- href link method -->
    <a href="{{ Route ('index') }}">Index Page</a> &nbsp; &nbsp; &nbsp;
    <a href="{{ Route ('home') }}">Home Page</a>&nbsp; &nbsp; &nbsp;
    <a href="{{ Route ('welcome') }}">welcome Page</a>&nbsp; &nbsp; &nbsp;   
</body>
</html>