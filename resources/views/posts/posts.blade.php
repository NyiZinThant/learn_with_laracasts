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
    </main>
</x-layout>
