<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <title>Document</title>
</head>

<body>
    <p id="para">Lorem ipsum dolor sit amet consectetur adipisicing elit. Natus fugiat ducimus harum dolore placeat quos libero
        consequatur, temporibus debitis doloremque ab. Impedit soluta minus rerum, sint sed pariatur repudiandae unde!
    </p>
    <p id="para">Lorem ipsum dolor sit amet consectetur adipisicing elit. Natus fugiat ducimus harum dolore placeat quos libero
        consequatur, temporibus debitis doloremque ab. Impedit soluta minus rerum, sint sed pariatur repudiandae unde!
    </p>
    <p id="para">Lorem ipsum dolor sit amet consectetur adipisicing elit. Natus fugiat ducimus harum dolore placeat quos libero
        consequatur, temporibus debitis doloremque ab. Impedit soluta minus rerum, sint sed pariatur repudiandae unde!
    </p>
    
    <button type="submit" id="btn">hide para</button>
    <script>
        $(document).ready(function(){
            $("para").hover(function(){
               alert("done")
            });
        });
    </script>
</body>

</html>