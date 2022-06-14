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

        //ascending
        // var x = [2, 9, 6, 8];
        // var length = x.length;
        // var a = 0;
        // for (i = 0; i < length; i++) 
        // {
        //     for (j = i + 1; j < length; j++)
        //     {
        //         if (x[i] > x[j]) 
        //         {
        //             a =  x[i];
        //             x[i] = x[j];
        //             x[j] = a;
        //         }
        //     }
        //     console.log(x[i])
        // }

//descending
        var x = [2, 9, 6, 8];
        var length = x.length;
        var a = 0;
        for (i = 0; i < length; i++) 
        {
            for (j = i + 1; j < length;j++)
            {
                if (x[i] < x[j]) 
                {
                    a =  x[i];
                    x[i] = x[j];
                    x[j] = a;
                }
            }
            console.log(x[i])
        }

            // check position of Array Element

            var a = [1,2,5,3,4]
            
</script>
</body>

</html>