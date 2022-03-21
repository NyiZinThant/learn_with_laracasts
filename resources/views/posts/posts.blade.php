{{-- <!DOCTYPE html>
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

</html> --}}

<x-layout>
    @include('posts._posts-header')
    <main class="max-w-6xl mx-auto mt-6 lg:mt-20 space-y-6">
        @if ($posts->count())
            <x-post-featured-card :post="$posts[0]" />

            <div class="lg:grid lg:grid-cols-6">
                <x-posts-grid :posts="$posts" />
            </div>
        @else
            <p class="text-center">No post yet. Please check back later.</p>
        @endif
        {{-- <div class="lg:grid lg:grid-cols-3">
            <x-post-card />
            <x-post-card />
            <x-post-card />
        </div> --}}
    </main>
</x-layout>
