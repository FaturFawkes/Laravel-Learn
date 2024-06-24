<x-layout>
    <x-slot:title>{{ $title }}</x-slot>
    <h3 class="text-xl">Welcome to my blog</h3>

    @foreach ($posts as $post)
        <article class="py-8 max-w-screen-md border-b border-gray-300">
            <a href="/posts/{{  $post['slug'] }}">
                <h2 class="mb-1 text-3xl tracking-tight font-bold text-gray-900 hover:text-blue-600">{{ $post['title'] }}</h2>
            </a>
            <div class="text-base text-gray-500">
                <a href="#">{{ $post['author'] }}</a> | 24 June 2024
            </div>
            <p class="my-4 font-light">{{ Str::limit($post['body'], 50) }}</p>
            <a href="/posts/{{ $post['slug'] }}" class="font-medium text-blue-500">Read More &raquo;</a>
        </article>
    @endforeach

</x-layout>
