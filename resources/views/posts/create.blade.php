<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="{{route('posts.store')}}" method="get">
        @csrf
        <div>
            <label for="title">titolo</label>
            <input type="text">
        </div>

        <div>
            <label for="body"></label>
            <textarea name="" id="" cols="30" rows="10"></textarea>
        </div>

        <button type="submit">submit</button>
    </form>
</body>
</html>