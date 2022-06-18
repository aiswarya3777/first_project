<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <!-- here hello saved in innerHtml -->
    <p id="p1">Hello</p>
    <input type="text" name="" id="content_fech">
    <button type="submit" onclick="content_change()" value="">SUBMIT</button>
    <button type="submit"  ondblclick="alert('double click')" value="">double click</button>
    
    <script>
        console.log(document);
        var p_tag = document.getElementById("p1").innerHTML; //here we get the content in that p tag by using .innerHTML
        console.log(p_tag)

        function content_change() {
            //whatever in the input field we get in the p tag
            var input_content =  document.getElementById("content_fech").value;
            document.getElementById("p1").innerHTML = input_content;
            // here text color will change onclick
            document.getElementById("p1").style.color = "black";
            console.log(input_content)
            
        }


    </script>
</body>

</html>