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
                <a href="login.html" class="hover:text-gray-200">Se connecter</a>
                <a href="register.html" class="hover:text-gray-200">S'inscrire</a>
            </nav>
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
                <a href="books.html" class="text-indigo-600 hover:text-indigo-800">Voir les livres</a>
            </div>

            <!-- Option 2: Gérer votre profil -->
            <div class="bg-white p-6 rounded-lg shadow-lg hover:shadow-xl transition">
                <h3 class="text-2xl font-semibold text-gray-800 mb-4">Gérer Votre Profil</h3>
                <p class="text-gray-600 mb-4">Mettez à jour vos informations personnelles, suivez vos emprunts et vos
                    lectures.</p>
                <a href="profile.html" class="text-indigo-600 hover:text-indigo-800">Accéder à votre profil</a>
            </div>

            <!-- Option 3: S'inscrire ou Se connecter -->
            <div class="bg-white p-6 rounded-lg shadow-lg hover:shadow-xl transition">
                <h3 class="text-2xl font-semibold text-gray-800 mb-4">Commencez à lire</h3>
                <p class="text-gray-600 mb-4">Créez un compte ou connectez-vous pour accéder à nos services de
                    bibliothèque en ligne.</p>
                <div class="space-x-4">
                    <a href="register.html"
                        class="py-2 px-4 bg-green-600 text-white rounded-lg hover:bg-green-700">S'inscrire</a>
                    <a href="login.html" class="py-2 px-4 bg-indigo-600 text-white rounded-lg hover:bg-indigo-700">Se
                        connecter</a>
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
                    <img src="https://via.placeholder.com/150" alt="Livre"
                        class="w-full h-48 object-cover rounded-t-lg mb-4">
                    <h3 class="text-xl font-semibold text-gray-800">Titre du Livre</h3>
                    <p class="text-gray-600">Une brève description du livre. Ce livre est très apprécié par nos
                        lecteurs.</p>
                </div>
                <!-- Livre 2 -->
                <div class="bg-white p-6 rounded-lg shadow-lg">
                    <img src="https://via.placeholder.com/150" alt="Livre"
                        class="w-full h-48 object-cover rounded-t-lg mb-4">
                    <h3 class="text-xl font-semibold text-gray-800">Titre du Livre</h3>
                    <p class="text-gray-600">Une brève description du livre. Ce livre est très apprécié par nos
                        lecteurs.</p>
                </div>
                <!-- Livre 3 -->
                <div class="bg-white p-6 rounded-lg shadow-lg">
                    <img src="https://via.placeholder.com/150" alt="Livre"
                        class="w-full h-48 object-cover rounded-t-lg mb-4">
                    <h3 class="text-xl font-semibold text-gray-800">Titre du Livre</h3>
                    <p class="text-gray-600">Une brève description du livre. Ce livre est très apprécié par nos
                        lecteurs.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Pied de page -->
    <footer class="bg-indigo-600 text-white py-6">
        <div class="container mx-auto text-center">
            <p>&copy; 2025 Bibliothèque En Ligne. Tous droits réservés.</p>
        </div>
    </footer>

</body>

</html>