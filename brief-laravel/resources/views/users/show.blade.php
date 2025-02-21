<div class="container mx-auto px-4 py-8">
    <div class="bg-white rounded-lg shadow-lg p-6">
        <h2 class="text-2xl font-bold mb-4">Profile de {{ $user->name }}</h2>

        <div class="mb-4">
            <p class="text-gray-600">Email: {{ $user->email }}</p>
            <p class="text-gray-600">Membre depuis: {{ $user->created_at->format('d/m/Y') }}</p>
        </div>

        @if(Auth::id() === $user->id)
        <a href="{{ route('users.edit', $user) }}"
            class="bg-indigo-600 text-white px-4 py-2 rounded hover:bg-indigo-700">
            Modifier le profil
        </a>
        @endif
    </div>
</div>