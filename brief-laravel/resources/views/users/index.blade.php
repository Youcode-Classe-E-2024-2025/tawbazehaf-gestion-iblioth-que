<!DOCTYPE html>
<html>

<head>
    <title>Users List</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>

<body class="bg-gray-100">
    <div class="container mx-auto px-4 py-8">
        <h1 class="text-3xl font-bold mb-6">Liste des Utilisateurs</h1>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
            @foreach($users as $user)
            <div class="bg-white rounded-lg shadow p-6">
                <h2 class="text-xl font-bold mb-2">{{ $user->name }}</h2>
                <p class="text-gray-600 mb-2">{{ $user->email }}</p>
                <a href="{{ route('users.show', $user) }}" class="text-blue-500 hover:text-blue-700">
                    Voir le profil
                </a>
            </div>
            @endforeach
        </div>
    </div>
</body>

</html>