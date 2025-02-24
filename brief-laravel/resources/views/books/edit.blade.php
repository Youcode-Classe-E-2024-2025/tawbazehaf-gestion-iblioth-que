<x-layout>
    <x-slot:heading>
        Edit a Book: {{$book->title}}
    </x-slot:heading>

    <form method="POST" action="/books/{{$book->id}}" class="max-w-3xl mx-auto p-8 bg-white shadow-lg rounded-lg">
        @csrf
        @method('PATCH')

        <div class="space-y-12">
            <div class="border-b border-gray-300 pb-12">

                <!-- Title Input -->
                <div class="mt-10 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">
                    <div class="sm:col-span-4">
                        <label for="title" class="block text-lg font-medium text-gray-900">Title</label>
                        <div class="mt-2">
                            <div
                                class="flex items-center rounded-md bg-gray-100 pl-3 focus-within:outline-2 focus-within:outline-indigo-500">
                                <input type="text" name="title" id="title"
                                    class="block w-full py-2 pr-3 px text-lg text-gray-900 placeholder-gray-500 focus:outline-none sm:text-lg"
                                    placeholder="e.g. The Hobbit" value="{{$book->title}}">
                            </div>
                        </div>
                        @error('title')
                        <p class="text-red-500 mt-1 text-sm">{{$message}}</p>
                        @enderror
                    </div>

                    <!-- Price Input -->
                    <div class="sm:col-span-4">
                        <label for="price" class="block text-lg font-medium text-gray-900">Price</label>
                        <div class="mt-2">
                            <div
                                class="flex items-center rounded-md bg-gray-100 pl-3 focus-within:outline-2 focus-within:outline-indigo-500">
                                <input type="number" name="price" id="price"
                                    class="block w-full py-2 pr-3 px text-lg text-gray-900 placeholder-gray-500 focus:outline-none sm:text-lg"
                                    value="{{$book->price}}">
                            </div>
                        </div>
                        @error('price')
                        <p class="text-red-500 mt-1 text-sm">{{$message}}</p>
                        @enderror
                    </div>
                </div>

                <!-- Action Buttons -->
                <div class="mt-6 flex items-center justify-end gap-x-6">
                    <a href="/books/{{$book->id}}"
                        class="text-lg font-semibold text-gray-600 hover:text-gray-800 cursor-pointer">Cancel</a>
                    <button type="submit"
                        class="bg-indigo-600 px-4 py-2 text-lg font-semibold text-white rounded-md shadow-md hover:bg-indigo-500 focus:ring-4 focus:ring-indigo-300">Update</button>
                </div>
            </div>
        </div>
    </form>
</x-layout>