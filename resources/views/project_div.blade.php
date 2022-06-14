<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <style>
        .div_margin{
            /* border: 1px solid black; */
            margin: 20px;
            /* width: 500px; */
            /* border-radius: 10%; */
        }
        .fa-cubes{
            color: #ff9b41;
        }
        .status_div{
            font-weight: 900;
        }
        .faicon_style{
            display: inline-block;
            border-radius:100% ;
            height:55px;
        }
        .main_status_div{
            border: 1px solid;
            padding: 5px;
            box-shadow: 2px 2px #888888;
                    }
        .row_div{
            margin: 100px;
        }
        .range_color{
            style="accent-color: #ff9b41"
        }

        /* second */
        .div_range{
            width: 210px;
            margin-left:40px;
        }
        /* endsecond */
    </style>
</head>
<body>
<div class="container" >
    <div class="row row_div div_margin" style="width: 100%; display: inline; " >
        <div class="col-3 main_status_div div_margin" style="display: inline-block;">
            <div class="faicon_style div_margin">
                <span>
                    <i class="fa fa-cubes fa-3x"></i>
                </span>
            </div>
            <div style="display: inline-block;" class="div_margin">
                <span class="status_div">112</span>
                <p class="status_div">Projects</p>
            </div>
        </div>
        <div class="col-3 main_status_div div_margin" style="display: inline-block;">
            <div class="faicon_style div_margin">
                <span>
                    <i class="fa fa-cubes fa-3x"></i>
                </span>
            </div>
            <div style="display: inline-block;" class="div_margin">
                <span class="status_div">112</span>
                <p class="status_div">Projects</p>
            </div>
        </div>
        <div class="col-3 main_status_div div_margin" style="display: inline-block;">
            <div class="faicon_style div_margin">
                <span>
                    <i class="fa fa-cubes fa-3x"></i>
                </span>
            </div>
            <div style="display: inline-block;" class="div_margin">
                <span class="status_div">112</span>
                <p class="status_div">Projects</p>
            </div>
        </div>
        <div class="col-3 main_status_div div_margin" style="display: inline-block;">
            <div class="faicon_style div_margin">
                <span>
                    <i class="fa fa-cubes fa-3x"></i>
                </span>
            </div>
            <div style="display: inline-block;" class="div_margin">
                <span class="status_div">112</span>
                <p class="status_div">Projects</p>
            </div>
        </div>
    </div>

    <!-- second_div -->
    <div class="div_range" style="width: 100%; display: inline; " >
        <div class="col-3 main_status_div div_margin div_range" style="display: inline-block;">
            <span>New Employees</span>
            <span>10</span>
            <p>New employee</p>
            <form>
                <div class="form-group">
                    <input type="range" class="form-control-range " id="formControlRange">
                </div>
            </form>
            <p>Total employee</p>
        </div>
        <div class="col-3 main_status_div div_margin div_range" style="display: inline-block;">
            <span>New Employees</span>
            <span>10</span>
            <p>New employee</p>
            <form>
                <div class="form-group">
                    <input type="range" class="form-control-range " id="formControlRange">
                </div>
            </form>
            <p>Total employee</p>
        </div>
        <div class="col-3 main_status_div div_margin div_range" style="display: inline-block;">
            <span>New Employees</span>
            <span>10</span>
            <p>New employee</p>
            <form>
                <div class="form-group">
                    <input type="range" class="form-control-range " id="formControlRange">
                </div>
            </form>
            <p>Total employee</p>
        </div>
        <div class="col-3 main_status_div div_margin div_range" style="display: inline-block;">
            <span>New Employees</span>
            <span>10</span>
            <p>New employee</p>
            <form>
                <div class="form-group">
                    <input type="range" class="form-control-range " id="formControlRange">
                </div>
            </form>
            <p>Total employee</p>
        </div>
    <!-- end second_div -->
</div> 
</body>
</html>