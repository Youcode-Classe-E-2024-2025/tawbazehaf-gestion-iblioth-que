@props(['active' => false])
<a class="{{ $active ? 'bg-indigo-600 text-white shadow-md' : 'text-gray-500 hover:bg-indigo-500 hover:text-white hover:shadow-lg' }} 
    cursor-pointer rounded-md px-4 py-2 text-sm font-medium transition-all duration-200 ease-in-out" {{ $attributes }}>
    {{ $slot }}
</a>