<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    {{-- @if (isset($data))
    {{ $data }}
    @endif --}}
    <form action="" method="post">

        <label for="">Product Name</label>
        <input type="text" name="name" id=""><br><br>
        @csrf
        <label for="">Product Price</label>
        <input type="text" name="price" id=""><br><br>

        <button type="submit">Add</button><br><br>
    </form>
    
    <table>
        <tr>
            <td>Id</td>
            <td>Name</td>
            <td>Price</td>
            <td>Action</td>
            <td>Action</td>
        </tr>
        @if ($details->count())
        @foreach ($details as $i)
        <tr>
            <td>{{ $i->id }}</td>
            <td>{{ $i->name }}</td>
            <td>{{ $i->price }}</td>
            <td>

                <form action="{{ route('add_project.destroy',$i->id) }}" method="POST">
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                     <input type="hidden" name="_method" value="DELETE">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger btn-block">Delete</button>
                </form>
            </td>
            <td>

                <form action="{{route('add_project.update',$i->id)}}" method="POST">
                    {{csrf_field()}}
                @method('PUT')
                </form>

            </td>
        </tr>
        @endforeach
        @endif
    </table>
</body>

</html>