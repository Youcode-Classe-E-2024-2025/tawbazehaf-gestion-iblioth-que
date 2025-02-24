<x-layout>
    <x-slot:heading>Book Page: {{$book->title}}</x-slot:heading>

    <p class="mb-10 text-lg text-gray-800">This book costs <strong>{{$book->price}}$</strong>.</p>

    <div class="flex gap-4 items-center">
        <!-- Edit Button -->
        <x-nav_link href="/books/{{$book->id}}/edit"
            class="bg-indigo-600 text-white hover:bg-indigo-500 rounded-md px-4 py-2 text-sm font-medium">Edit
        </x-nav_link>

        <!-- Delete Button -->
        <form action="/books/{{$book->id}}" method="post">
            @csrf
            @method('DELETE')
            <button type="submit"
                class="bg-red-600 text-white hover:bg-red-500 rounded-md px-4 py-2 text-sm font-medium">Delete</button>
        </form>

        <!-- Loan or Return Book Button -->
        @if ($book->user_id === null)
        <form action="/books/{{$book->id}}/edit/{{Auth::id()}}" method="POST">
            @csrf
            @method('PATCH')
            <button type="submit"
                class="bg-green-600 text-white hover:bg-green-500 rounded-md px-4 py-2 text-sm font-medium">Loan</button>
        </form>
        @elseif (Auth::id() == $book->user_id)
        <form action="/books/{{$book->id}}/edit/{{Auth::id()}}" method="POST">
            @csrf
            @method('PATCH')
            <button type="submit"
                class="bg-yellow-600 text-white hover:bg-yellow-500 rounded-md px-4 py-2 text-sm font-medium">Return
                Book</button>
        </form>
        @else
        <p class="text-gray-500 italic">This book is Loaned.</p>
        @endif
    </div>

</x-layout>