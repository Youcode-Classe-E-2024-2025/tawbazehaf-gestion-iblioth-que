<x-layout>
    <x-slot:heading>Book Page : {{$book->title}}</x-slot:heading>

    <p class="mb-10">This book Costs {{$book->price}}$. </p>
<div class="flex gap-2 items-center">
    <x-nav_link href="/books/{{$book->id}}/edit ">Edit</x-nav_link>
    <form action="/books/{{$book->id}}" method="post">
        @csrf
        @method('DELETE')
        <button type="submit" class="text-gray-500 hover:bg-gray-700 hover:text-white cursor-pointer rounded-md px-3 py-2 text-sm font-medium inline-block">Delete</button>
    </form>
    @if ($book->user_id === null)
    <form action="/books/{{$book->id}}/edit/{{Auth::id()}}" method="POST">
        @csrf
        @method('PATCH')
        <button type="submit" class="text-gray-500 hover:bg-gray-700 hover:text-white cursor-pointer rounded-md px-3 py-2 text-sm font-medium inline-block">Loan</button>
    </form>
    @elseif (Auth::id() == $book->user_id)
        <form action="/books/{{$book->id}}/edit/{{Auth::id()}}" method="POST">
            @csrf
            @method('PATCH')
            <button type="submit" class="text-gray-500 hover:bg-gray-700 hover:text-white cursor-pointer rounded-md px-3 py-2 text-sm font-medium inline-block">Return Book</button>
        </form>
    @else
    <p class="text-gray-500 underline">This book is Loaned.</p>
    @endif
</div>

</x-layout>