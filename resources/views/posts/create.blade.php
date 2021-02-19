<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="{{route('posts.store')}}" method="post">
        @csrf
        @method('POST')
        <div>
            <label for="title">titolo</label>
            <input type="text" name="title" id="">
        </div>

        <div>
            <label for="body">Body</label>
            <textarea name="body" id="" cols="30" rows="10"></textarea>
        </div>

        <button type="submit">Add Post</button>
    </form>
</body>
</html>