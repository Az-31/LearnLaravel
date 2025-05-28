<x-layout>
    <x-slot:title>{{ $title }}</x-slot:title>
    <x-slot:header>{{ $header }}</x-slot:header>

    @foreach ($posts as $post)
    <article class="py-8 max-w-screen-md border-b border-gray-300">
        <h2 class="mb-1 text-3xl tracking-tight font-bold text-gray-900 hover:text-blue-700 hover:underline cursor-pointer"><a href="posts/{{ $post['id'] }}">{{ $post['title'] }}</a></h2>
        <div class="text-base text-gray-500">
            <a href="#">{{ $post['author'] }}</a> | 7 February 2020
        </div>
        <p class="my-4 font-light">{{ Str::limit($post['content'], 150) }}</p>
        <a href="posts/{{ $post['id'] }}" class="font-medium text-blue-600 hover:underline">Read more &raquo;</a>
    </article>
    @endforeach
</x-layout>