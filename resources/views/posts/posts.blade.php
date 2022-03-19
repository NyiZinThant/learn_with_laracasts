<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Posts</title>
    <style>
        .container {
            margin: 10px auto;
            display: flex;
            align-items: center;
            flex-direction: column;
        }

        .post {
            width: 500px;
            background-color: rgb(250, 248, 248);
            margin-bottom: 15px;
            border-radius: 10px;
            padding: 10px 20px;
        }

    </style>
</head>

<body>
    <div class="container">
        @foreach ($posts as $post)
            <div class="post">
                <a href="/{{ $post->slug }}">
                    <h1>{{ $post->title }}</h1>
                </a>
                <p>
                    By
                    <a href="/authors/{{ $post->author->username }}">
                        {{ $post->author->name }}
                    </a>
                    In
                    <a href="/categories/{{ $post->category->slug }}">
                        {{ $post->category->name }}
                    </a>
                </p>
                <p>
                    {{ $post->excerpt }}
                </p>
            </div>
        @endforeach
    </div>
</body>

</html>
