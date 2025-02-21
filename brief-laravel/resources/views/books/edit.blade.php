<x-layout>
<x-slot:heading>
    Edit a Book : {{$book->title}}
</x-slot:heading>

<form method="POST" action="/books/{{$book->id}}">
    @csrf
    @method('PATCH')

    <div class="space-y-12">
        <div class="border-b border-gray-900/10 pb-12">
    
        <div class="mt-10 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">
            <div class="sm:col-span-4">
            <label for="title" class="block text-sm/6 font-medium text-gray-900">Title</label>
            <div class="mt-2">
                <div class="flex items-center rounded-md bg-white pl-3 outline-1 -outline-offset-1 outline-gray-300 focus-within:outline-2 focus-within:-outline-offset-2 focus-within:outline-indigo-600">
                <input 
                type="text" 
                name="title" 
                id="title" 
                class="block min-w-0 grow py-1.5 pr-3 px text-base text-gray-900 placeholder:text-gray-400 focus:outline-none sm:text-sm/6" 
                placeholder="the Hobbits"
                value="{{$book->title}}"
                >
                </div>
            </div>
            @error('title')
                {{$message}}
            @enderror
            </div>
    
            <div class="sm:col-span-4">
            <label for="price" class="block text-sm/6 font-medium text-gray-900">Price</label>
            <div class="mt-2">
                <input 
                name="price" 
                type="number" 
                id="price" 
                class="block w-full rounded-md bg-white px-3 py-1.5 text-base text-gray-900 outline-1 -outline-offset-1 outline-gray-300 placeholder:text-gray-400 focus:outline-2 focus:-outline-offset-2 focus:outline-indigo-600 sm:text-sm/6"
                value="{{$book->price}}"
                >
            </input>
            </div>
            @error('price')
                {{$message}}
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
        <a href="/books/{{$book->id}}" class="text-sm/6 font-semibold text-gray-900">Cancel</button>
        <button type="submit" class="cursor-pointer ml-4 rounded-md bg-indigo-600 px-3 py-2 text-sm font-semibold text-white shadow-xs hover:bg-indigo-500 focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Update</button>
    </div>
    </div>
    </div>
    </form>
    
</x-layout>