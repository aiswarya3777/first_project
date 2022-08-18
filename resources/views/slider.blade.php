<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/lightslider/1.1.6/js/lightslider.min.js"> </script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/lightslider/1.1.6/css/lightslider.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="">
    <style>
        img{
            float: left;
            width: 100%;
            height: 100%;
            object-fit: cover;
        }
        ul,li{
            margin: 0;
            padding: 0;
            list-style: none;
        }
    </style>
</head>

<body>
    <ul id="LightSlider" class="gallery">
        <li><a href="#"><img src="{{asset('images/slider_1.jpg')}}" alt=""></a></li>
        <li><a href="#"><img src="{{asset('images/slider_2.jpg')}}" alt=""></a></li>
        <li><a href="#"><img src="{{asset('images/slider_5.jpg')}}" alt=""></a></li>
    </ul>
    <script>
        $().ready(function(){
            $("#LightSlider").lightSlider({
                item:1,
                slideMove:1,
                slideMargin:10,
                mode:"slide",
                useCSS:true,
                speed:2000,
                auto:true,
                pause:4500,
                loop:true,
                controls:true,
                keyPress:true,
                pager:true,
                thumbMargin:3,
                currentPagerPosition:'middle',
                enableDrag:true,
                swipeThreshold:40,
                responsive:[],
                onBeforeStart:function($el){},
                onSliderLoad:function($el){},
                onBeforeSlide:function($el,scene){},
                onAfterSlide:function($el,scene){},
                onBeforeNextSlide:function($el,scene){},
                onBeforePrevSlide:function($el,scene){},

            });
        });
    </script>
</body>

</html>