<!DOCTYPE html>
<html lang="en" class="h-full bg-gray-100">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ request()->is('/') ? 'Login Page' :  'Books Page' }}</title>
    <!-- Envisager d'utiliser Tailwind CSS précompilé ou CDN -->
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="h-full">

    <div class="min-h-full">
        <nav class="bg-gray-300 shadow-md">
            <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
                <div class="flex h-16 items-center justify-between">
                    <div class="flex w-full justify-between items-center">
                        <div class="flex items-center">
                            <div class="shrink-0">
                                <img class="h-8 w-auto" src="{{asset('images/images-removebg-preview.png')}}"
                                    alt="Your Company">
                            </div>
                            <div class="hidden md:block">
                                <div class="ml-10 flex items-baseline space-x-4">
                                    <x-nav_link href="/books" :active="request()->is('books')">Home</x-nav_link>
                                    <x-nav_link href="/books/create" :active="request()->is('books/create')">Enter a
                                        Book</x-nav_link>
                                </div>
                            </div>
                        </div>
                        <div class="flex items-center gap-2">
                            @auth
                            <p class="text-sm font-semibold text-gray-800">Welcome, <span
                                    class="italic text-gray-500">{{Auth::user()->name}}</span></p>
                            <form action="/logout" method="post" class="ml-4">
                                @csrf
                                <button type="submit"
                                    class="bg-gray-500 text-white px-4 py-2 rounded-md hover:bg-gray-700">Logout</button>
                            </form>
                            @endauth
                        </div>
                    </div>
                </div>
            </div>
        </nav>

        <header class="bg-white shadow-md">
            <div class="mx-auto max-w-7xl px-4 py-6 sm:px-6 lg:px-8">
                <h1 class="text-3xl font-bold tracking-tight text-gray-900">{{$heading}}</h1>
            </div>
        </header>

        <main class="pb-16">
            <div class="mx-auto max-w-7xl px-4 py-6 sm:px-6 lg:px-8">
                {{$slot}}
            </div>
        </main>
    </div>

</body>

</html>