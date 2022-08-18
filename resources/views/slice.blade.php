<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <p id="name"></p>
    <p id="demo"></p>
    <script>
        var name = "Sheena,Aiswarya,Swetha,Najila";
        // var result= name.slice(0,6);//here 6 is considered as 5
        // var result= name.slice(1); //here no need to enter end second number same in positive value
        // console.log(result)
        // document.getElementById("demo").innerHTML = result;
        // var result = name.substring(0,6);
        // var result = name.substr(0,6); //here 6 is length of the string we want legnth count start from 1
        // var result = name.substr(5);
        // var result = name.substr(-6);
        // var text = "My name is Aiswarya Aiswarya";//only first value will take
        // document.getElementById("name").innerHTML = text;

        // var text = "My name is Aiswarya Aiswarya";//only first value will take
        // var result = text.replace(/aiswarya/ig,"Swetha")//i  for case sensitive
        // document.getElementById("name").innerHTML = text;
        // var result = text.replace(/Aiswarya/g,"Swetha")//here all the values will change g = global
        // document.getElementById("demo").innerHTML = result;//here no negative va;ue for start and end

        // var text = "i am aiswarya";
        // var text = "I AM AISWARYA"
        // var upper = text.toUpperCase();
        // var lower = text.toLowerCase();
        // document.getElementById("demo").innerHTML = lower;

        // let text1 = "Hello";
        // let text2 = "World";
        // let text3 = text1.concat(",", text2);
        // document.getElementById("demo").innerHTML = text3;

        // let text1 = "     Hello World!      ";
        // let text2 = text1.trim();// The trim() method removes whitespace from both sides of a string:
        // document.getElementById("demo").innerHTML = text2;

        // var text = "helloo";
        // var result = text.padStart(8,"*");//here we convert helloo to 8 characters
        // document.getElementById("demo").innerHTML = result;

        // var account_no = 1234; //To pad a number, convert the number to a string first.
        // var result = account_no.toString().padStart(13,"0");//0000000001234
        // document.getElementById("demo").innerHTML = result;

        // let text = "HELLO WORLD";//"H" as result
        // let char = text.charAt(22);
        // document.getElementById("demo").innerHTML = char;

        // let text = "HELLO WORLD";
        // let char = text.charCodeAt(22);
        // document.getElementById("demo").innerHTML = char;

        // let text = "HELLO WORLD";//
        // let char = text[22];
        // document.getElementById("demo").innerHTML = char;

        // let text = "HELLO WORLD";
        // text[0] = "A";
        // document.getElementById("demo").innerHTML = text;

        // let text = "HELLO WORLD";
        // var text_arr = text.split(" ");//here we split according to white space
        // console.log(text_arr)
        // document.getElementById("demo").innerHTML = text_arr;


        array_1 = "i am happy happy";
        text1 = array_1.split(" ");
        console.log(text1)
        aray_2 = "happy"
        text2 = aray_2.split(" ")
        console.log(text2)
        array_3 = "anger"
        text3 = array_3.split(" ")
        console.log(text3)

        for(i=0;i<=text1.length;i++){
            for(k=0;k<=text2.length;k++){
                if(text1[i] == text2[k]){
                    last = array_1.replace(text1[i],array_3)
                    console.log(text1[i])
                }
            }
        }

        


    </script>
</body>

</html>