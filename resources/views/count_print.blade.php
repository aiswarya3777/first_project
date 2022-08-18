<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <label for="">Enter a sentence</label>
    <input type="text" name="" id="sentence"><br><br>

    <label for="">Sentence to be replaced</label>
    <input type="text" name="" id="sent_to_replace">with <input type="text" name="" id="result"><br><br>
    <button type="submit" onclick="count()">Get Count</button>&nbsp;&nbsp;
    <button type="submit" onclick="spcl_chara()">Get Special chara</button>&nbsp;&nbsp;
    <button type="submit" onclick="first_upper()">convert</button>&nbsp;&nbsp;
    <button type="submit" onclick="replace_content()">Replace</button>
    <p id="count"></p>
    <p id="special"></p>
    <p id="first_upper"></p>
    <p id="orginal_sent"></p>
    <p id="replace"></p>


    <script>
        function count() {
            var text = document.getElementById("sentence").value;
            var split_text = text.split(" ");
            document.getElementById("count").innerHTML = "The count is " + split_text.length;
        }

        function spcl_chara() {
            var text = document.getElementById("sentence").value;
            var split_text = text.split("");
            var sent_length = split_text.length;
            var reg = "[$&+,:;=?@#|'<>.-^*()%!_]"
            var reg_split = reg.split("");
            var reg_legnth = reg_split.length;
            flag = 0;
            for (i = 0; i < sent_length; i++) {
                for (j = 0; j < reg_legnth; j++) {
                    if (split_text[i] == reg_split[j]) {
                        flag++;
                    }
                }
            }
            document.getElementById("special").innerHTML = "The count is " + flag;
        }

        function first_upper() {
            var text = document.getElementById("sentence").value;
            var char = text.charAt(0).toUpperCase() + text.slice(1);
            console.log(char)
            document.getElementById("first_upper").innerHTML = char;
        }

        function replace_content() {
            var text = document.getElementById("sentence").value;//i am happy
            var replace_text = document.getElementById("sent_to_replace").value;//happy
            var regEx = new RegExp(replace_text, "ig");
            var replaced = document.getElementById("result").value;//anger
            //"REPLACEALL" FUNCTION REPLACE ALL THE WORDS WE WANT
           newText = text.replace(regEx,replaced);
           console.log(newText)
           document.getElementById("replace").innerHTML = newText;
        }
        
































    </script>
</body>

</html>