<!DOCTYPE html>
<html>

<head>
    <title>Liste des Livres</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>

<body class="bg-gray-100">
    <div class="container mx-auto px-4 py-8">
        <h1 class="text-3xl font-bold mb-6">Bibliothèque</h1>

        @auth
        <a href="{{ route('books.create') }}" class="bg-green-500 text-white px-4 py-2 rounded mb-4 inline-block">
            Ajouter un livre
        </a>
        @endauth

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
            @foreach($books as $book)
            <div class="bg-white rounded-lg shadow p-6">
                <h2 class="text-xl font-bold mb-2">{{ $book->title }}</h2>
                <p class="text-gray-600 mb-2">{{ $book->author }}</p>
                <p class="mb-4">{{ $book->description }}</p>

                <div class="flex space-x-2">
                    <a href="{{ route('books.show', $book) }}" class="bg-blue-500 text-white px-3 py-1 rounded">Voir</a>
                    @auth
                    <a href="{{ route('books.edit', $book) }}"
                        class="bg-yellow-500 text-white px-3 py-1 rounded">Modifier</a>
                    <form action="{{ route('books.destroy', $book) }}" method="POST" class="inline">
                        @csrf
                        @method('DELETE')
                        <button class="bg-red-500 text-white px-3 py-1 rounded">Supprimer</button>
                    </form>
                    @endauth
                </div>
            </div>
            @endforeach
        </div>
    </div>
</body>

</html>