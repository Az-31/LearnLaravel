@props(['href'])

@php
    $isActive = request()->is(trim($href, '/')) || request()->is(trim($href, '/') . '/*');

    $baseClass = 'rounded-md px-3 py-2 font-medium';
    $defaultClass = 'text-gray-300 hover:bg-gray-700 hover:text-white';
    $activeClass = 'bg-gray-900 text-white';
@endphp

<a 
    href="{{ $href }}" 
    {{ $attributes->merge([
        'class' => ($isActive ? $activeClass : $defaultClass) . ' ' . $baseClass
    ]) }}
>
    {{ $slot }}
</a>
