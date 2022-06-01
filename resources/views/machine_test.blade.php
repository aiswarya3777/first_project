<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
       
        .div1{
            display: inline-block;
            width: 100px;
            margin-left: 20px;
        }
        .div2{
            display: inline-block;
            width: 900px;
            margin: 100px;
        }
        #address label {
            display: inline-block;
            width: 5em;
            text-align: right;
            padding-right: 0.5em;
        }
        
       #address input {
             display: inline-block;
             }
             td { text-align: center; } 
       
        
    </style>
</head>
<body>
    <div class="container">
        <div class="row" id="address">
            <div class="col div1"><img src="images/profile.jpg" alt="" width="150px" height="150px" style="padding-top: 60px;">Photo</div>
            <div class="col div2">
                <label for="">Name : </label> <input class="input_text" type="text" placeholder="Enter Your Name"><br><br>
                <label for="">Class : </label> <input class="input_text" type="text" placeholder="Enter your Class">
            </div>
        </div>
       <U> PROGRAMING LANGUAGES</U>
       <ul>
           <li>C</li>
           <li>C++</li>
           <li>JAVA</li>
           <li>PASCAL</li>
           <li>COBOL</li>
       </ul>
       <br> <br> <br>
       <B>OBJECT ORIENTED PROGRAMMING LANGUAGES</B>
       <ol>
           <li>C++</li>
           <li>JAVA</li>
           <li>ADA</li>
           <li>FORTRAM</li>
       </ol>
       <ul type="none">
           <li>GECI
               <ul >
                   <li type="none">- Painnavu Idukki</li>
               </ul>
           </li>
           <li>PHSS
            <ul>
                <li type="none">- Pavandoor Calicut</li>
            </ul>
        </li>
        <li>GHSS
            <ul>
                <li type="none">- Narikuni Calicut </li>
            </ul>
        </li>
       </ul>

       <!-- time table -->
       <table border="1">
           <tr>
                <td colspan="6">Time Table</td>
           </tr>
           <tr>
               <td rowspan="5">1 Hour <br> for each period</td>
               <td>Monday</td>
               <td>Tuesday</td>
               <td>Wednesday</td>
               <td>Thursday</td>
               <td>Friday</td>
           </tr>
           <tr>
               <td>C++</td>
               <td>C</td>
               <td>Java</td>
               <td>Pascal</td>
               <td>COBOL</td>
           </tr>
           <tr>
               <td colspan="5">LUNCH</td>
           </tr>
           <tr>
               <td>C</td>
               <td>C++</td>
               <td>Pascal</td>
               <td>Java</td>
               <td rowspan="2">Project</td>
           </tr>
           <tr>
            <td>C</td>
            <td>C++</td>
            <td>Pascal</td>
            <td>Java</td>
           </tr>
           
       </table>
    </div>
</body>
</html>