<x-layout>
    <x-slot:heading>
        <h1 class="text-3xl font-bold text-gray-800 mb-6">Books Collection</h1>
    </x-slot:heading>

    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6 mb-8">
        @foreach ($books as $book)
            <a href="/books/{{$book['id']}}" class="block transition-all duration-300 hover:shadow-lg rounded-lg overflow-hidden bg-white border border-gray-200 hover:border-purple-300 transform hover:-translate-y-1">
                <div class="p-6">
                    <div class="mb-4">
                        @if (isset($book->user_id))
                            <span class="inline-flex items-center px-3 py-1 rounded-full text-sm font-medium bg-purple-100 text-purple-800">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 mr-1" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" />
                                </svg>
                                Loaned by: {{$book->user->name}}
                            </span>
                        @else
                            <span class="inline-flex items-center px-3 py-1 rounded-full text-sm font-medium bg-green-100 text-green-800">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 mr-1" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                                </svg>
                                Available
                            </span>
                        @endif
                    </div>
                    
                    <h2 class="text-xl font-semibold text-gray-800 mb-2">{{$book['title']}}</h2>
                    
                    <div class="flex justify-between items-center mt-4">
                        <span class="text-lg font-bold text-purple-600">${{$book['price']}}</span>
                        <span class="inline-flex items-center justify-center w-8 h-8 rounded-full bg-purple-100 text-purple-600 hover:bg-purple-200">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3" />
                            </svg>
                        </span>
                    </div>
                </div>
            </a>
        @endforeach
    </div>

    <div class="mt-8 bg-white rounded-lg shadow p-4">
        {{ $books->links() }}
    </div>
</x-layout>