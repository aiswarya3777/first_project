<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="post">
    @csrf
    <label for="">frist no</label>
    <input type="text" name="first" id="first">
    <label for=""> second no</label>
    <input type="text" name="second" id="second">
    <button type="submit">add</button>

    </form>
   @if(isset($add_result))
   <p>{{ $add_result }}</p>
   @endif
</body>
</html>