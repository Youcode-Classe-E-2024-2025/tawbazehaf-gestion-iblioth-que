<x-layout>
    <x-slot:heading>
        Books
    </x-slot:heading>

    <div class="space-y-6 grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6 mb-6">
        @foreach ($books as $book)
        <a href="/books/{{$book['id']}}"
            class="block p-6 border border-gray-200 rounded-lg shadow-lg hover:shadow-xl transition duration-300 ease-in-out transform hover:scale-105">

            <!-- Loaned Information -->
            @if (isset($book->user_id))
            <p class="text-lg text-indigo-500 italic mb-2">Loaned by: {{$book->user->name}}</p>
            @else
            <p class="text-lg text-indigo-500 italic mb-2">Not Loaned Yet.</p>
            @endif

            <!-- Book Details -->
            <div class="text-gray-900 font-semibold mb-2">
                <span class="text-lg">Book Name:</span> <strong>{{$book['title']}}</strong>
            </div>
            <div class="text-gray-700">
                <span class="text-lg">Price:</span> {{$book['price']}}$
            </div>

        </a>
        @endforeach
    </div>

    <!-- Pagination -->
    <div class="text-center mt-6">
        <div class="inline-block">
            {{ $books->links('pagination::tailwind') }}
        </div>
    </div>
</x-layout>