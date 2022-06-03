<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" ></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js" ></script>
    <style>
        /* table{
            width: 100%;
            text-align: center;
            border: 5px solid black;
        } */
    </style>
</head>
<body>
    <!-- class="table table-dark" -->
    <table border="1" class="table table-dark table-striped table-borderless table-hover table-sm">
        <!-- class="thead-light" -->
        <thead class="thead-light ">
            <tr>
              <th scope="col">NAME</th>
              <th scope="col">SUBJECT</th>
            </tr>
          </thead>
        <tr>
            <td>Sheena</td>
            <td>CSS</td>
        </tr>
        <tr>
            <td>Swetha</td>
            <td>PHP</td>
        </tr>
        <tr>
            <td> Najila</td>
            <td>LARAVEL</td>
        </tr>
        <tr>
            <td>Aiswarya</td>
            <td>BOOTSTRAP</td>
        </tr>
    </table>
<br><br>
<!-- class="thead-dark" -->
<!-- table-borderless -->
<table class="table table-striped table-bordered table-hover table-sm table-danger">
    <thead class="thead-dark ">
      <tr >
        <th scope="col">#</th>
        <th scope="col">First</th>
        <th scope="col">Last</th>
        <th scope="col">Handle</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <th scope="row">1</th>
        <td class="table-success">Mark</td>
        <td>Otto</td>
        <td>@mdo</td>
      </tr>
      <tr class="table-success">
        <th scope="row">2</th>
        <td>Jacob</td>
        <td>Thornton</td>
        <td>@fat</td>
      </tr>
      <tr>
        <th scope="row">3</th>
        <td>Larry</td>
        <td>the Bird</td>
        <td>@twitter</td>
      </tr>
    </tbody>
  </table>
</body>
</html>