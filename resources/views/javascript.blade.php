<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Java Script</title>
    <script type="text/javascript" src="{{ asset('js/first_javascript.js')}}"></script>
</head>
<body>
    <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Ex voluptas vel numquam nam consectetur. Ipsa fuga fugit quia inventore veniam!</p>
    <h1>Java Script</h1>
    <br><br>
    <!-- alert on click -->
    <!-- <input type="button" value="Java Script" onclick="alert('Hi Aiswarya')"> -->
    <!-- alert internal -->
    <input type="button" value="External" onclick="validation()">
    <br><br>
    <form action="">
        <input type="button" value="click here" onclick="message()">
    </form>
    
    <!-- <script type="text/javascript">
        function validation(){
            alert("This is external script");
        }
        // to write something in page
        
    //document.write("Document.write in Js");
    </script> -->

    <!-- variable in javascript -->

    <script>
       
        var name = "first variable";
        var age = 5;
        var age1 = null;
        document.write(name);
        console.log(age);
        console.log(typeof(name));
        console.log(typeof(age));
        console.log(typeof(age1));
        console.log(typeof(null));
        document.write("<br>");
        var name1 = "Aiswarya changed";
        var name2 = name1;
        name1 = "sheena"; 
        // to chnage the va;ue in name1
        console.log(name1);
        console.log(name2);

        var person ={
            name :'Aiswaya', 
            age:23,
            gender:"female"
        }
        /*here memory stored in heap object created in stack*/
        var person2 = person; 
        
        // console.log(person);
        console.log(person2);
        // person2.age=77;
        // console.log(person2);
        // document.write("<br>");
        // document.write("<br>");
        // var arr=[0,"Aiswarya"]
        // console.log(arr);
        // arr[1]=300
        // console.log(arr[1]);
        // document.write("<br>");
        // document.write("<br>");
        // var a = 10;
        // let a = "let a example";
        // console.log(a);
        // var foo = {name: 'one'};
        let foo = {bar: 'baz'};
        foo.b //autocompletes bar
        // console.log(foo);
        // exmaple of var
        document.write("exmaple of var");

        var a =5;
        console.log(a)
        {
            let a ="exmaple of var and let"
            console.log(a)
        }
        // console.log(a)
        // var a =6;
        // console.log(a)
        // var array1 = [1,2,3,5]
        // var array2 = array1
        // console.log(array2)
        // const pi=3.14;
        // pi = 25;
        // console.log(pi)
        // we cant update const variable
        var flower = "flower";
        {
            let flower = "Rose";
        }
        console.log(flower)

        // let usage
        var a =100;
        function display(){
            var a = 10; //here the value of the var is local that is within the function
            console.log("inside function",a)
        }
        console.log(a)
        display() //this is function call
        // console.log(a) //here value 10 will not print because the value only access in the function
    </script>
</body>
</html>