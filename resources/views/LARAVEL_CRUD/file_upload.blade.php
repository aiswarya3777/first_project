<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="" method="post" enctype="multipart/form-data">
        @csrf
        
        Name : <input type="text" name="name" id=""><br><br>
        Email : <input type="text" name="email" id=""><br><br>
        Profile Photo : <input type="file" name="profile" id=""><br><br>
        <embed src="images/SANITARY FITNESS CERTIFICATE.pdf" type="application/pdf" width="500px" height="500px" />

        <button type="submit">Save</button>
    </form>
    @if(isset($msg))
    {{ $msg }}
    @endif
<br><br><br>
    <table>
        <tr>
            <td>ID</td>
            <td>NAME</td>
            <td>EMAIL</td>
            <td>IMAGE</td>
        </tr>
@forelse($details as $i)
        <tr>
            <td>{{ $i->id }}</td>
            <td>{{ $i->name }}</td>
            <td>{{ $i->email }}</td>
            <td><img src="{{ asset('storage/upload_images/'.$i ->image) }}" width="50px" height="50px"></td>
           @empty
           <td>no data</td>
        </tr>
       @endforelse

    </table>
</body>

</html>