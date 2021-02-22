<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    @foreach($posts as $post)
        <div>
            <h2>{{$post->title}}</h2>
            <p>{{$post->body}}</p>
            <div>created at: {{$post->created_at}}</div>
            <div>updated at: {{$post->updated_at}}</div>
            <a href="{{route('posts.show', $post->id)}}">vedi</a>
            <a href="{{route('posts.edit', $post->id)}}">edita</a>
            <form action="{{route('posts.destroy', ['post' => $post->id] )}}" method="post">
                @csrf
                @method('DELETE')
                <button type="submit">Delete</button>
            </form>
        </div>
    @endforeach
    
    <button>
        <a href="{{ route('posts.create') }}">crea nuovi post</a>
    </button>
</body>
</html>
