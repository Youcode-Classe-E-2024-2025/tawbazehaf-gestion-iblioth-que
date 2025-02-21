<!DOCTYPE html>
<html>

<head>
    <title>Emprunts</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>

<body class="bg-gray-100">
    <div class="container mx-auto px-4 py-8">
        <h1 class="text-3xl font-bold mb-6">Mes Emprunts</h1>

        <div class="bg-white rounded-lg shadow overflow-hidden">
            <table class="w-full">
                <thead class="bg-gray-50">
                    <tr>
                        <th class="px-6 py-3 text-left">Livre</th>
                        <th class="px-6 py-3 text-left">Date d'emprunt</th>
                        <th class="px-6 py-3 text-left">Date de retour</th>
                        <th class="px-6 py-3 text-left">Actions</th>
                    </tr>
                </thead>
                <tbody class="divide-y divide-gray-200">
                    @foreach($borrows as $borrow)
                    <tr>
                        <td class="px-6 py-4">{{ $borrow->book->title }}</td>
                        <td class="px-6 py-4">{{ $borrow->borrowed_at }}</td>
                        <td class="px-6 py-4">{{ $borrow->return_date }}</td>
                        <td class="px-6 py-4">
                            @if(!$borrow->returned_at)
                            <form action="{{ route('borrows.return', $borrow) }}" method="POST" class="inline">
                                @csrf
                                <button class="bg-green-500 text-white px-3 py-1 rounded">Retourner</button>
                            </form>
                            @else
                            <span class="text-green-500">Retourné</span>
                            @endif
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</body>

</html>