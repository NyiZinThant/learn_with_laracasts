<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Posts</title>
    <style>
        .container {
            display: flex;
            justify-content: center;
        }

        .post {
            background-color: rgb(250, 248, 248);
            margin-bottom: 15px;
            border-radius: 10px;
            padding: 10px 30px;
        }

    </style>
</head>

<body>
    <div class="container">
        <div class="post">
            <a href="/{{ $post->slug }}">
                <h1>{{ $post->title }}</h1>
            </a>
            By
            <a href="#">
                {{ $post->user->name }}
            </a>
            <a href="/categories/{{ $post->category->slug }}">
                <p>{{ $post->category->name }}</p>
            </a>
            <p>
                {{ $post->body }}
            </p>
            <a href="/">back</a>
        </div>
    </div>
</body>

</html>
