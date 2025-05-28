<x-layout>
    <x-slot:title>{{ $title }}</x-slot:title>
    <x-slot:header>{{ $header }}</x-slot:header>
    <article class="py-8 max-w-screen-md">
        <h2 class="mb-1 text-3xl tracking-tight font-bold text-gray-900 ">{{ $post['title'] }}</h2>
        <div class="text-base text-gray-500">
            <a href="#">{{ $post['author'] }}</a> | 7 February 2020
        </div>
        <p class="my-4 font-light">{{ $post['content']  }}</p>
        <a href="/posts" class="font-medium text-blue-600 hover:underline">&laquo; Back to posts</a>
    </article>
</x-layout>