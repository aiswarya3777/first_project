<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <script>
        // var small = 5;
        // var large = 10;
        // var largest ;
        // if(small>large){
        //     largest = small;
        //     console.log("a ia greater");
        // }else{
        //     largset = large;
        //     console.log("b is greater");
        // }
        // console.log(largset);

        //largest of 3 nos

        // var x = 5;
        // var y = 10;
        // var z = 20;
        // var  largest;
        // largest of 3 nos
        // if(x>y){
        //     if(x>z){
        //         largest = x;
        //     }else{
        //         largest = z;
        //     }
        // }else if(z>x){
        //     if(z>y){
        //         largest = z;
        //     }else{
        //         largest = y;
        //     }
        // }else if(y>x){
        //     if(y>z){
        //         largest = y;
        //     }else{
        //         largest = z;
        //     }
        // }
        // console.log(largest)


        //largest of 4 nos
        var x = 5;
        var y = 10;
        var z = 20;
        var p = 30;
        var largest;

        if (x>y) {
            if (x>z) {
                if (x>p) {
                    largest = x;
                } else {
                    largest = p;
                }
            } else if (z>p) {
                largest = z
            }
            else {
                largest = p;
            }
        } else if (y>x) {

            if (y>z) {
                if (y>p) {
                    largest = y;
                } else {
                    largets = p
                }
            } else if (p>y) {
                largest = p;
            } else {
                largest = y;
            }
        } else if (z>x) {
            if (z>y) {
                if (z>p) {
                    largest = z;
                } else {
                    largest = p
                }
            } else if (p>z) {
                largest = p;
            } else {
                largest = z;
            }
        } else if (p>x) {
            if (p>y) {
                if (p>z) {
                    largest = p;
                } else {
                    largest = z;
                }
            } else if (z>p) {
                largest = z;
            } else {
                largest = p
            }
        }
        console.log(largest);


    </script>
</body>

</html>