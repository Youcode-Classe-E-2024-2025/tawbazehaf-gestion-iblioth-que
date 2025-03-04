<!DOCTYPE html>
<html lang="en" class="h-full bg-gray-50">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ request()->is('/') ? 'Login Page' : 'Books Page' }}</title>
    <script src="https://unpkg.com/@tailwindcss/browser@4"></script>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Inter', sans-serif;
        }
    </style>
</head>
<body class="h-full">

<div class="min-h-full flex flex-col">
    <nav class="bg-white border-b border-gray-200 shadow-sm">
        <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
            <div class="flex h-16 items-center justify-between">
                <div class="flex w-full justify-between items-center">
                    <div class="flex items-center">
                        <div class="hidden md:block">
                            <div class="ml-10 flex items-baseline space-x-4">
                                <x-nav_link href="/books" :active="request()->is('books')" class="px-3 py-2 rounded-md text-sm font-medium {{ request()->is('books') ? 'bg-purple-600 text-white' : 'text-gray-700 hover:bg-purple-100 hover:text-purple-700' }}">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 mr-1 inline-block" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6" />
                                    </svg>
                                    Home
                                </x-nav_link>
                                <x-nav_link href="/books/create" :active="request()->is('books/create')" class="px-3 py-2 rounded-md text-sm font-medium {{ request()->is('books/create') ? 'bg-purple-600 text-white' : 'text-gray-700 hover:bg-purple-100 hover:text-purple-700' }}">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 mr-1 inline-block" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6v6m0 0v6m0-6h6m-6 0H6" />
                                    </svg>
                                    Add Book
                                </x-nav_link>
                            </div>
                        </div>
                    </div>
                    <div class="flex items-center gap-3">
                        @auth
                            <div class="flex items-center bg-gray-100 px-3 py-1.5 rounded-full">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-gray-500 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" />
                                </svg>
                                <span class="text-sm font-medium text-gray-700">{{Auth::user()->name}}</span>
                            </div>
                            <form action="/logout" method="post">
                                @csrf
                                <button type="submit" class="inline-flex items-center px-3 py-1.5 border border-transparent rounded-md text-sm font-medium text-white bg-purple-600 hover:bg-purple-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-purple-500 transition-colors duration-200">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 mr-1" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h4a3 3 0 013 3v1" />
                                    </svg>
                                    Logout
                                </button>
                            </form>
                        @endauth
                    </div>
                </div>
            </div>
        </div>
        
        <!-- Mobile menu, show/hide based on menu state -->
        <div class="md:hidden border-t border-gray-200">
            <div class="space-y-1 px-4 py-3">
                <a href="/books" class="{{ request()->is('books') ? 'bg-purple-100 text-purple-700' : 'text-gray-700 hover:bg-purple-50 hover:text-purple-700' }} block px-3 py-2 rounded-md text-base font-medium">Home</a>
                <a href="/books/create" class="{{ request()->is('books/create') ? 'bg-purple-100 text-purple-700' : 'text-gray-700 hover:bg-purple-50 hover:text-purple-700' }} block px-3 py-2 rounded-md text-base font-medium">Add Book</a>
            </div>
        </div>
    </nav>

    <header class="bg-white shadow">
        <div class="mx-auto max-w-7xl px-4 py-6 sm:px-6 lg:px-8">
            <div class="border-l-4 border-purple-600 pl-4">
                {{$heading}}
            </div>
        </div>
    </header>
    
    <main class="flex-grow bg-gray-50 pb-16">
        <div class="mx-auto max-w-7xl px-4 py-6 sm:px-6 lg:px-8">
            {{$slot}}
        </div>
    </main>
    
    <footer class="bg-white border-t border-gray-200">
        <div class="mx-auto max-w-7xl px-4 py-4 sm:px-6 lg:px-8">
            <div class="text-center text-sm text-gray-500">
                <p>&copy; {{ date('Y') }} Book Library. All rights reserved.</p>
            </div>
        </div>
    </footer>
</div>

</body>
</html>