@props(['active' => false])

<a 
    {{ $attributes->merge([
        'class' => 'inline-flex items-center transition-colors duration-200 rounded-md px-3 py-2 text-sm font-medium ' . 
        ($active 
            ? 'bg-purple-600 text-white shadow-sm hover:bg-purple-700 focus:outline-none focus:ring-2 focus:ring-purple-500 focus:ring-offset-2' 
            : 'text-gray-700 hover:bg-purple-50 hover:text-purple-700 focus:outline-none focus:ring-2 focus:ring-purple-100')
    ]) }}
>
    {{ $slot }}
</a>