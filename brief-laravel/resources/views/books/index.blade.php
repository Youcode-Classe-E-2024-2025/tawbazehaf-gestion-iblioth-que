<x-layout>
    <x-slot:heading>
        Books
    </x-slot:heading>
<div class="space-y-4 grid grid-cols-3 gap-5 mb-4">

    @foreach ($books as $book)
        <a href="/books/{{$book['id']}}" class="inline-block p-6 border border-gray-200">
            @if (isset($book->user_id))
                <p class="text-lg text-indigo-300 italic">Loaned by: {{$book->user->name}} </p>
            @else
                <p class="text-lg text-indigo-300 italic">Not Loaned Yet. </p>
            @endif
            <div>
                Book Name :<strong> {{$book['title']}} : </strong> 
                {{$book['price']}}$
            </div>
        </a>
    @endforeach
</div>
<div class="text-nowrap mr-8 block w-full">{{ $books->links() }} </div>
</x-layout>