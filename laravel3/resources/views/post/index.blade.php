<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Data View in php laravel</title>
</head>
<body>

    <center>
    <h1>All Details</h1>
    </center>
    <table border='1'width='100%'>
        <thead>
            <th>Serial No</th>
            <th>Title</th>
            <th>Delails</th>
            <th>Action</th>
        </thead>
        <tbody>
        
                @foreach ($posts as $post)
                    
               
            <tr>
                <td>{{ $post->id }}</td>
                <td>{{ $post->title }}</td>
                <td>{{ $post->details}}</td>
                <td>

                    <a href="{{ route('post.show',$post->id) }}">Show Details</a>
                   
                    <a href="{{ route('post.edit',$post->id) }}">Edit</a>

                 
                    <form action="{{route('post.destroy',$post->id)}}" method="post">
                    
                        @csrf
                        @method('DELETE')

                        <button>Delete</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
    
</body>
</html>