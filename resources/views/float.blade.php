<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Float in CSS</title>
    <link rel="stylesheet" href="css/float.css">
    <style>
        /* postion absolute */
        .seconddiv{
            border: 5px solid blue;
            width: 900px;
            position: absolute;
            margin-top: 20px; 
        }
        h3{
            padding-top: 10px;
            position: sticky;
            top:0;
        }
        .grad{
            background-image: linear-gradient(to right, rgba(255,0,0,0), rgba(255,0,0,1));
        }
        #grad {
  background-image: linear-gradient(to right, red , yellow);
}
    </style>
</head>
<body>
    <marquee width="100%" direction="left" height="100px" class="grad">
        This is a sample scrolling text that has scrolls in the upper direction. Lorem ipsum dolor, sit amet consectetur adipisicing elit. Minima omnis, harum corporis aut dolores eius eos veniam ullam aperiam maiores?
        </marquee>

        <marquee width="100%" behavior="alternate" direction="up" height="100px" id="grad">
            This is a sample scrolling text that has scrolls in the upper direction. Lorem ipsum dolor, sit amet consectetur adipisicing elit. Minima omnis, harum corporis aut dolores eius eos veniam ullam aperiam maiores?
            </marquee>
    <h3>
        Lorem ipsum dolor sit amet consectetur, adipisicing elit. Numquam possimus quos doloremque, harum veniam illum maiores fuga dolore labore accusamus nulla maxime, ab, deserunt atque provident placeat saepe aperiam laudantium vel at pariatur dolor! Quod harum suscipit a incidunt quibusdam necessitatibus aspernatur, soluta perferendis iure doloremque obcaecati, sed laborum nulla aliquam architecto! Labore est soluta vitae animi repellat. Totam, asperiores maxime. Maiores laboriosam architecto corporis, eos quasi voluptate fugit eum neque tenetur illo, numquam harum dicta quam fugiat. Aliquid suscipit voluptatum animi quidem dolor neque ea reprehenderit. Adipisci eum similique architecto necessitatibus doloribus? Vero explicabo sit aspernatur dicta vitae molestias!
    </h3>
    <div id="div_position">
        Lorem ipsum dolor sit amet consectetur, adipisicing elit. Tempore quasi quis delectus aliquam quam, tempora, minus amet ullam temporibus obcaecati praesentium? Alias modi nulla, error illo nostrum tenetur animi similique?
        Lorem ipsum dolor sit amet consectetur adipisicing elit. Sed iure, deleniti beatae est, dolore animi voluptates nisi odit similique rem nam quas explicabo. Voluptatem architecto, doloribus veniam et temporibus exercitationem? Aspernatur expedita, deserunt praesentium dolores possimus sapiente commodi, fuga laboriosam dignissimos impedit explicabo id amet quibusdam incidunt ipsa officiis et?
      <div class="seconddiv">
          Lorem ipsum dolor sit amet consectetur adipisicing elit. Sit explicabo cupiditate provident molestias eveniet amet excepturi commodi quaerat placeat aperiam autem earum reprehenderit mollitia minus quia dolores rerum quos reiciendis debitis id aliquam, eligendi veritatis! Minima deleniti odio tenetur, unde culpa, tempora dolorum sed temporibus possimus maxime eos veniam ducimus facilis delectus quos voluptas a cumque, in illum doloribus pariatur cupiditate. Delectus, pariatur iure provident facere hic doloribus voluptate aliquam est modi blanditiis culpa repellendus. Ex corporis inventore voluptas aut nam minus eos sunt fuga ipsa, voluptate quia repellat debitis perferendis beatae culpa nisi magnam hic corrupti. Molestiae, id fugit.
      </div>
    </div>
    
    <div id="main_div">
        <!-- content floating towards right -->
    <h1>CONTENT FLOAT</h1>
    <P>Lorem ipsum dolor sit amet consectetur adipisicing elit. 
        Similique, distinctio? Praesentium adipisci aut inventore quia,
         eaque ex nisi cupiditate ad necessitatibus, ab voluptates, 
         neque fuga commodi unde totam ea molestias voluptatum.
          Iure cum sed harum unde! Quasi, suscipit reprehenderit quidem rerum provident vitae culpa. 
          Dolor ullam ipsum iure velit molestias.</P>
    <img src="images/Food&R.jpg" alt="image 1">
    </div>

    <!-- CSS for table -->
    <table>
        <tr>
            <td>CONTENT</td>
            <td>CONTENT</td>
        </tr>
        <tr>
            <td>CONTENT</td>
            <td>CONTENT</td>
        </tr>
        <tr>
            <td>CONTENT</td>
            <td>CONTENT</td>
        </tr>
        <tr>
            <td>CONTENT</td>
            <td>CONTENT</td>
        </tr>
    </table>
    <!-- positioning -->
    Lorem ipsum dolor sit amet consectetur adipisicing elit. Quis ut, voluptate obcaecati voluptas nam doloribus voluptates magni sapiente temporibus nulla, tenetur dolores ipsum aperiam sequi? Ipsam esse voluptatem pariatur, ad sapiente atque incidunt voluptatum ea distinctio quibusdam molestias fugiat quae. Facilis nam omnis magni repudiandae eius voluptatum nemo esse beatae voluptas! Repudiandae, ad. Vero ipsa quos molestiae eum quam adipisci excepturi similique? Cum commodi fugiat suscipit praesentium quibusdam sapiente voluptate! Dolore nisi libero asperiores quod distinctio nulla molestiae debitis, labore tempora voluptatum. Illum placeat omnis ipsa a magnam necessitatibus aut maiores modi commodi aperiam! Accusantium beatae odit perspiciatis facere incidunt.
      
        
</body>
</html>