<x-layout>
<x-slot:heading>
    Enter a Book page
</x-slot:heading>

<form method="POST" action="/books">
    @csrf
    <div class="space-y-12">
        <div class="border-b border-gray-900/10 pb-12">
    
        <div class="mt-10 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">
            <div class="sm:col-span-4">
            <label for="title" class="block text-sm/6 font-medium text-gray-900">Title</label>
            <div class="mt-2">
                <div class="flex items-center rounded-md bg-white pl-3 outline-1 -outline-offset-1 outline-gray-300 focus-within:outline-2 focus-within:-outline-offset-2 focus-within:outline-indigo-600">
                <input type="text" name="title" id="title" class="block min-w-0 grow py-1.5 pr-3 px text-base text-gray-900 placeholder:text-gray-400 focus:outline-none sm:text-sm/6" placeholder="the hobbits">
                </div>
            </div>
            @error('title')
                <p class="text-red-500">{{$message}}</p>
            @enderror
            </div>
    
            <div class="sm:col-span-4">
            <label for="price" class="block text-sm/6 font-medium text-gray-900">Price</label>
            <div class="mt-2">
                <div class="flex items-center rounded-md bg-white pl-3 outline-1 -outline-offset-1 outline-gray-300 focus-within:outline-2 focus-within:-outline-offset-2 focus-within:outline-indigo-600">
                    <input type="number" min="120" max="53000" name="price" id="price" class="block min-w-0 grow py-1.5 pr-3 px text-base text-gray-900 placeholder:text-gray-400 focus:outline-none sm:text-sm/6" placeholder="555">
                    </div>
            </div>
            @error('price')
                <p class="text-red-500">{{$message}}</p>
            @enderror
            </div>
    </div>

    {{-- <div>
        @if ($errors->any())
            @foreach ($errors->all() as $error)
                <li class="text-red-400 italic">{{$error}} </li>
            @endforeach
        @endif
    </div> --}}
    
    <div class="mt-6 flex items-center justify-end gap-x-6">
        <a href="/books" class="cursor-pointer text-sm/6 font-semibold text-gray-900">Cancel</a>
        <button type="submit" class="cursor-pointer rounded-md bg-indigo-600 px-3 py-2 text-sm font-semibold text-white shadow-xs hover:bg-indigo-500 focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Save</button>
    </div>
    </div>
</div>
    </form>
    
</x-layout>