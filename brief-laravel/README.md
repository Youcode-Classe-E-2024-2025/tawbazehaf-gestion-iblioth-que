Gestion de Bibliothèque
Ce projet est conçu pour vous permettre de mettre en pratique les bases de Laravel dans un contexte professionnel réaliste. Organisez-vous en équipe (ou individuellement, selon les instructions) et planifiez vos tâches afin de respecter le planning.

Configuration et Exécution du Projet Laravel
Prérequis
Avant de commencer, assurez-vous d'avoir installé les outils suivants :

PHP (à partir de la version recommandée par Laravel, voir PHP).
Composer (télécharger ici).
Node.js et npm (télécharger ici).
MySQL (ou un autre SGBD compatible, ex: PostgreSQL).
Laravel installé globalement (optionnel, peut être utilisé via Composer).
Installation du projet
1. Cloner le dépôt
Ouvrez un terminal et exécutez :

git clone https://github.com/Youcode-Classe-E-2024-2025/tawbazehaf-gestion-iblioth-que.git
cd brief-laravel 
2. Installer les dépendances PHP
Dans le dossier du projet, exécutez :

composer install
3. Configurer le fichier .env
Copiez le fichier .env.example et renommez-le en .env :

cp .env.example .env  # Linux/Mac
copy .env.example .env # Windows
Modifiez les paramètres de la base de données dans .env :

DB_CONNECTION=pgsql
DB_HOST=127.0.0.1
DB_PORT=5433
DB_DATABASE=gestion_bibliotheque
DB_USERNAME=postgres
DB_PASSWORD=0660911893
4. Générer la clé d'application
Exécutez la commande suivante pour générer une clé unique :

php artisan key:generate
5. Exécuter les migrations et seeders (si disponibles)
Créez la base de données et appliquez les migrations :

php artisan migrate --seed
6. Installer les dépendances front-end
Installez les dépendances npm :

npm install
Si votre projet utilise Vite, démarrez le build :

npm run dev
7. Démarrer le serveur local
Utilisez la commande artisan pour démarrer le serveur Laravel :

php artisan serve
Accédez au projet via : http://127.0.0.1:8000

8. Configuration supplémentaire (si nécessaire)
Si vous utilisez Sail (environnement Docker pour Laravel) :
./vendor/bin/sail up -d
Si vous utilisez Horizon pour la gestion des files d'attente :
php artisan horizon
Votre projet est maintenant configuré et prêt à être utilisé 🚀

Contexte du projet:
Vous faites partie de l’équipe de développement de la Bibliothèque Municipale de la ville de Saint-Marc. Dans le but de moderniser ses services, la bibliothèque souhaite digitaliser la gestion de ses ressources. Votre mission est de développer une application web simple qui permettra de gérer les livres et les emprunts.

Fonctionnalités requises
Vous devez développer une application web en Laravel qui permette de :

Gérer l'authentification :

S'inscrire.
Se connecter.
Se déconnecter.
Afficher les profils.
Gérer les livres :

Afficher la liste des livres disponibles.
Ajouter de nouveaux livres.
Modifier ou supprimer des livres existants.
Gérer les emprunts :

Enregistrer les emprunts et retours de livres.
Modalités pédagogiques
Type : Individuel
Début du Projet : 17/02/2025 - 09:45
Date de Remise : 21/02/2025 - 17:00
Soutenance : 24/02/2025
Livrables
Code Source : Le projet complet hébergé sur un repository Git (ex. GitHub, GitLab).

Documentation : Un document expliquant le fonctionnement de l’application et les choix techniques réalisés.

(Optionnel) Rapport de Test : Un bref rapport sur les tests effectués et les bugs identifiés/corrigés.

Critères de performance
Respect du brief : Adhérence aux consignes et fonctionnalités demandées.

Qualité du Code : Lisibilité, propreté, utilisation appropriée des concepts Laravel.

Fonctionnalités : Bonne implémentation des fonctionnalités de gestion des livres et des emprunts.

Documentation : Clarté et pertinence des explications fournies.

Gestion de Projet : Utilisation efficace de Git (commits fréquents, messages explicites).

