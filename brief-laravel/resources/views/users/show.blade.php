<div class="container mx-auto px-6 py-8">
    <div class="bg-white rounded-lg shadow-lg p-8">
        <h2 class="text-3xl font-semibold text-gray-800 mb-6">Profile de {{ $user->name }}</h2>

        <div class="mb-6">
            <p class="text-lg text-gray-700">Email: <span class="font-medium text-gray-900">{{ $user->email }}</span>
            </p>
            <p class="text-lg text-gray-700">Membre depuis: <span
                    class="font-medium text-gray-900">{{ $user->created_at->format('d/m/Y') }}</span></p>
        </div>

        @if(Auth::id() === $user->id)
        <a href="{{ route('users.edit', $user) }}"
            class="bg-indigo-600 text-white px-6 py-3 rounded-md hover:bg-indigo-700 transition duration-300 transform hover:scale-105">
            Modifier le profil
        </a>
        @endif
    </div>
</div>