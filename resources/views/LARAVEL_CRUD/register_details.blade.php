<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>
<body>
<table class="table">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">first_name</th>
      <th scope="col">last_name</th>
      <th scope="col">email</th>
      <th scope="col"> password</th>
      <th>action</th>
      <th>action</th>
      
    </tr>
  </thead>
  <tbody>
  <!-- $details is the key word from controller -->
  
    @forelse($details as $i)
    <tr>
      <th scope="row">{{ $i->id }}</th>
      <td>{{ $i->first_name }}</td>
      <td>{{ $i ->last_name }}</td>
      <td>{{ $i->email }}</td>
      <td>{{ $i->password }}</td>
      <td><a href="{{ url('delete') }}/{{ $i->id }}">Delete</a></td>
      <td><a href="{{ url('update') }}/{{ $i->id }}">Update</a></td>
      @empty
      <td>no data</td>
    </tr>
    @endforelse
    <!-- @if(isset($details))
   <p>{{ $details }}</p>
   @endif -->
  </tbody>
</table>

<br><br><br>
<center><b><a href="{{ url('logout') }}">Logout</a></b></center>
</body>
</html>