<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Accueil - Bibliothèque</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-gray-50">

    <!-- En-tête -->
    <header class="bg-indigo-600 text-white p-6">
        <div class="container mx-auto flex justify-between items-center">
            <h1 class="text-3xl font-semibold">Bibliothèque En Ligne</h1>
            <nav class="space-x-6">
                <a href="{{ route('login') }}" class="hover:text-gray-200">Se connecter</a>
                <a href="{{ route('register') }}" class="hover:text-gray-200">S'inscrire</a>
            </nav>
            <form method="POST" action="{{ route('logout') }}">
                @csrf
                <button type="submit" class="text-white hover:text-gray-200">Logout</button>
            </form>

        </div>
    </header>

    <!-- Section principale -->
    <section class="container mx-auto py-16 px-6">
        <div class="text-center mb-12">
            <h2 class="text-4xl font-semibold text-gray-800 mb-4">Bienvenue à la Bibliothèque</h2>
            <p class="text-lg text-gray-600">Explorez des milliers de livres, gérez vos emprunts et suivez vos lectures.
            </p>
        </div>

        <!-- Options principales -->
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            <!-- Option 1: Voir les livres -->
            <div class="bg-white p-6 rounded-lg shadow-lg hover:shadow-xl transition">
                <h3 class="text-2xl font-semibold text-gray-800 mb-4">Voir les Livres Disponibles</h3>
                <p class="text-gray-600 mb-4">Explorez notre large sélection de livres. Trouvez votre prochain livre
                    préféré !</p>
                <a href="{{ route('books.index') }}" class="text-indigo-600 hover:text-indigo-800">Voir les livres</a>
            </div>

            <!-- Option 2: Gérer votre profil -->
            <div class="bg-white p-6 rounded-lg shadow-lg hover:shadow-xl transition">
                <h3 class="text-2xl font-semibold text-gray-800 mb-4">Gérer Votre Profil</h3>
                <p class="text-gray-600 mb-4">Mettez à jour vos informations personnelles, suivez vos emprunts et vos
                    lectures.</p>


                <a href="{{ route('login') }}" class="text-indigo-600 hover:text-indigo-800">Accéder à votre profil</a>
            </div>

            <!-- Option 3: S'inscrire ou Se connecter -->
            <div class="bg-white p-6 rounded-lg shadow-lg hover:shadow-xl transition">
                <h3 class="text-2xl font-semibold text-gray-800 mb-4">Commencez à lire</h3>
                <p class="text-gray-600 mb-4">Créez un compte ou connectez-vous pour accéder à nos services de
                    bibliothèque en ligne.</p>
                <div class="space-x-4">
                    <a href="{{ route('register') }}"
                        class="py-2 px-4 bg-green-600 text-white rounded-lg hover:bg-green-700">S'inscrire</a>
                    <a href="{{ route('login') }}"
                        class="py-2 px-4 bg-indigo-600 text-white rounded-lg hover:bg-indigo-700">Se connecter</a>
                </div>
            </div>
        </div>
    </section>

    <!-- Section des livres populaires -->
    <section class="bg-gray-100 py-16">
        <div class="container mx-auto text-center">
            <h2 class="text-3xl font-semibold text-gray-800 mb-6">Livres Populaires</h2>
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                <!-- Livre 1 -->
                <div class="bg-white p-6 rounded-lg shadow-lg">
                    <img src="https://s3.amazonaws.com/AKIAJC5RLADLUMVRPFDQ.book-thumb-images/ableson.jpg" alt="Livre"
                        class="w-full h-48 object-cover rounded-t-lg mb-4">
                    <h3 class="text-xl font-semibold text-gray-800">Unlocking Android</h3>
                    <p class="text-gray-600">Unlocking Android: A Developer's Guide provides concise, hands-on
                        instruction for the Android operating system and development tools. This book teaches important
                        architectural concepts in a straightforward writing style and builds on this with practical and
                        useful examples throughout.</p>
                </div>
                <!-- Livre 2 -->
                <div class="bg-white p-6 rounded-lg shadow-lg">
                    <img src="https://s3.amazonaws.com/AKIAJC5RLADLUMVRPFDQ.book-thumb-images/ahmed.jpg" alt="Livre"
                        class="w-full h-48 object-cover rounded-t-lg mb-4">
                    <h3 class="text-xl font-semibold text-gray-800">Flex 3 in Action</h3>
                    <p class="text-gray-600">New web applications require engaging user-friendly interfaces and the
                        cooler, the better. With Flex 3, web developers at any skill level can create high-quality,
                        effective, and interactive Rich Internet Applications (RIAs) quickly and easily</p>
                </div>
                <!-- Livre 3 -->
                <div class="bg-white p-6 rounded-lg shadow-lg">
                    <img src="https://s3.amazonaws.com/AKIAJC5RLADLUMVRPFDQ.book-thumb-images/alag.jpg" alt="Livre"
                        class="w-full h-48 object-cover rounded-t-lg mb-4">
                    <h3 class="text-xl font-semibold text-gray-800">Collective Intelligence in Action</h3>
                    <p class="text-gray-600">There's a great deal of wisdom in a crowd, but how do you listen to a
                        thousand people talking at once Identifying the wants, needs, and knowledge of internet users
                        can be like listening to a mob. In the Web 2.0 era, leveraging the collective power of user
                        contributions, interactions, and feedback is the key to market dominance. A new category of
                        powerful programming techniques lets you discover the patterns, inter-relationships, and
                        individual profiles the collective intelligence locked in the data people leave behind as they
                        surf websites, post blogs, and interact with other users.</p>
                </div>
            </div>
        </div>
    </section>
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
        ...
        @auth
        <div class="bg-white p-6 rounded-lg shadow-lg hover:shadow-xl transition">
            <h3 class="text-2xl font-semibold text-gray-800 mb-4">Gérer Votre Profil</h3>
            <p class="text-gray-600 mb-4">Mettez à jour vos informations personnelles, suivez vos emprunts et vos
                lectures.</p>
            @foreach ($users as $user)
            <a href="/users" class="text-indigo-600 hover:text-indigo-800">Accéder à votre profil{{ $user->name }}</a>
            @endforeach
        </div>
        @endauth
        ...
    </div>
    <!-- Pied de page -->
    <footer class="bg-indigo-600 text-white py-6">
        <div class="container mx-auto text-center">
            <p>&copy; 2025 Bibliothèque En Ligne. Tous droits réservés.</p>
        </div>
    </footer>

</body>

</html>