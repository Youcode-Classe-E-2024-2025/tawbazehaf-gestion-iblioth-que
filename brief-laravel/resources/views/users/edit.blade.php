<!DOCTYPE html>
<html>

<head>
    <title>Modifier Profile</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>

<body class="bg-gray-100">
    <div class="container mx-auto px-4 py-8">
        <div class="bg-white rounded-lg shadow p-6">
            <h2 class="text-2xl font-bold mb-4">Modifier votre profile</h2>

            <form action="{{ route('users.update', $user) }}" method="POST">
                @csrf
                @method('PUT')

                <div class="mb-4">
                    <label class="block text-gray-700">Nom</label>
                    <input type="text" name="name" value="{{ $user->name }}" class="w-full p-2 border rounded">
                </div>

                <div class="mb-4">
                    <label class="block text-gray-700">Email</label>
                    <input type="email" name="email" value="{{ $user->email }}" class="w-full p-2 border rounded">
                </div>

                <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded">
                    Sauvegarder les modifications
                </button>
            </form>
        </div>
    </div>
</body>

</html>