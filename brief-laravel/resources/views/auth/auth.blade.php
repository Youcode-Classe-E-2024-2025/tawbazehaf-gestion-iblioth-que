<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ request()->is('/') ? 'Login Page' : 'Books Page' }}</title>
    <script src="https://unpkg.com/@tailwindcss/browser@4"></script>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
        body {
            font-family: 'Inter', sans-serif;
        }
        .form-transition {
            transition: all 0.3s ease-in-out;
        }
        .tab-indicator {
            transition: transform 0.3s ease;
        }
    </style>
</head>
<body class="h-screen text-base-content overflow-hidden bg-gray-50">
    <div id="auth-wrapper" class="flex h-full w-full">
        <!-- Left side - Image and tagline -->
        <div class="hidden lg:flex lg:w-1/2 bg-purple-900 relative overflow-hidden">
            <div class="absolute inset-0 bg-gradient-to-b from-purple-800/70 to-purple-900/90 z-10"></div>
            <img class="absolute inset-0 w-full h-full object-cover opacity-80 mix-blend-overlay" src="{{ asset('images/6399a4d27711a5ad2c9bf5cd_ben-sweet-2LowviVHZ-E-unsplash-1.jpeg') }}">
            <div class="relative z-20 max-w-xl mx-auto text-center flex flex-col items-center justify-center h-full px-8">
                <div class="mb-6">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-16 w-16 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253" />
                    </svg>
                </div>
                <h1 class="text-4xl font-bold text-white mb-6">Book Library</h1>
                <p class="text-purple-100 text-lg mb-8">Connect, Read, and Participate in worlds that matter to you.</p>
                <div class="flex space-x-3">
                    <span class="h-2 w-2 rounded-full bg-white opacity-70"></span>
                    <span class="h-2 w-2 rounded-full bg-white"></span>
                    <span class="h-2 w-2 rounded-full bg-white opacity-70"></span>
                </div>
            </div>
        </div>
        
        <!-- Right side - Authentication forms -->
        <div class="w-full lg:w-1/2 flex items-center justify-center p-6">
            <div class="w-full max-w-md space-y-8">
                <!-- Logo for mobile -->
                <div class="lg:hidden flex flex-col items-center mb-8">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-12 w-12 text-purple-600 mb-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253" />
                    </svg>
                    <h1 class="text-2xl font-bold text-gray-900">Book Library</h1>
                </div>
                
                <!-- Tab navigation -->
                <div class="relative">
                    <div class="flex border-b border-gray-200">
                        <button onclick="toggleForm('signin')" id="signin-tab" class="w-1/2 py-3 text-center text-sm font-medium text-gray-900 relative">Sign In</button>
                        <button onclick="toggleForm('signup')" id="signup-tab" class="w-1/2 py-3 text-center text-sm font-medium text-gray-500 relative">Sign Up</button>
                    </div>
                    <div id="tab-indicator" class="tab-indicator absolute bottom-0 left-0 h-0.5 w-1/2 bg-purple-600"></div>
                </div>
                
                <!-- Sign In Form -->
                <form id="signin-form" action='/auth/login' method='post' class="form-transition space-y-6">
                    @csrf
                    <div>
                        <label for="email" class="block text-sm font-medium text-gray-700 mb-1">Email address</label>
                        <div class="relative">
                            <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-gray-400" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 12a4 4 0 10-8 0 4 4 0 008 0zm0 0v1.5a2.5 2.5 0 005 0V12a9 9 0 10-9 9m4.5-1.206a8.959 8.959 0 01-4.5 1.207" />
                                </svg>
                            </div>
                            <input 
                                type="email" 
                                name="email" 
                                value="{{old('email')}}" 
                                class="w-full pl-10 pr-3 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-purple-600 focus:border-purple-600 transition-colors" 
                                placeholder="name@company.com"
                            >
                        </div>
                        @error('email')
                            <p class="mt-2 text-sm text-red-600 flex items-center">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 mr-1" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 9v2m0 4h.01m-6.938 4h13.856c1.54 0 2.502-1.667 1.732-3L13.732 4c-.77-1.333-2.694-1.333-3.464 0L3.34 16c-.77 1.333.192 3 1.732 3z" />
                                </svg>
                                {{$message}}
                            </p>
                        @enderror
                    </div>
                    
                    <div>
                        <label for="password" class="block text-sm font-medium text-gray-700 mb-1">Password</label>
                        <div class="relative">
                            <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-gray-400" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z" />
                                </svg>
                            </div>
                            <input 
                                type="password" 
                                name="password" 
                                class="w-full pl-10 pr-3 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-purple-600 focus:border-purple-600 transition-colors" 
                                placeholder="••••••••"
                            >
                        </div>
                        @error('password')
                            <p class="mt-2 text-sm text-red-600 flex items-center">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 mr-1" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 9v2m0 4h.01m-6.938 4h13.856c1.54 0 2.502-1.667 1.732-3L13.732 4c-.77-1.333-2.694-1.333-3.464 0L3.34 16c-.77 1.333.192 3 1.732 3z" />
                                </svg>
                                {{$message}}
                            </p>
                        @enderror
                    </div>
                    
                    <div class="flex items-center justify-between">
                        <div class="flex items-center">
                            <input 
                                type="checkbox" 
                                id="remember-me" 
                                name="remember-me" 
                                class="h-4 w-4 text-purple-600 border-gray-300 rounded focus:ring-purple-500"
                            >
                            <label for="remember-me" class="ml-2 text-sm text-gray-600">Remember me</label>
                        </div>
                        <span class="text-sm text-purple-600 hover:text-purple-500 cursor-pointer transition-colors">Forgot password?</span>
                    </div>
                    
                    <button class="w-full cursor-pointer bg-purple-600 text-white py-3 px-4 rounded-lg hover:bg-purple-700 focus:ring-4 focus:ring-purple-200 transition-colors flex items-center justify-center">
                        <span>Sign in</span>
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 ml-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3" />
                        </svg>
                    </button>
                    <div class="text-center text-sm text-gray-600">
                        Don't have an account? 
                        <span onclick="toggleForm('signup')" class="text-purple-600 hover:text-purple-500 cursor-pointer font-medium transition-colors">Sign up</span>
                    </div>
                </form>
            
                <!-- Sign Up Form -->
                <form id="signup-form" action='/auth/register' method='post' class="form-transition hidden space-y-6">
                    @csrf
                    <div>
                        <label for="name" class="block text-sm font-medium text-gray-700 mb-1">Username</label>
                        <div class="relative">
                            <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-gray-400" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" />
                                </svg>
                            </div>
                            <input 
                                type="text" 
                                name="name" 
                                class="w-full pl-10 pr-3 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-purple-600 focus:border-purple-600 transition-colors" 
                                placeholder="Your username"
                            >
                        </div>
                        @error('name')
                            <p class="mt-2 text-sm text-red-600 flex items-center">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 mr-1" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 9v2m0 4h.01m-6.938 4h13.856c1.54 0 2.502-1.667 1.732-3L13.732 4c-.77-1.333-2.694-1.333-3.464 0L3.34 16c-.77 1.333.192 3 1.732 3z" />
                                </svg>
                                {{$message}}
                            </p>
                        @enderror
                    </div>
                    
                    <div>
                        <label for="email" class="block text-sm font-medium text-gray-700 mb-1">Email address</label>
                        <div class="relative">
                            <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-gray-400" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 12a4 4 0 10-8 0 4 4 0 008 0zm0 0v1.5a2.5 2.5 0 005 0V12a9 9 0 10-9 9m4.5-1.206a8.959 8.959 0 01-4.5 1.207" />
                                </svg>
                            </div>
                            <input 
                                type="email" 
                                name="email" 
                                class="w-full pl-10 pr-3 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-purple-600 focus:border-purple-600 transition-colors" 
                                placeholder="name@company.com"
                            >
                        </div>
                        @error('email')
                            <p class="mt-2 text-sm text-red-600 flex items-center">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 mr-1" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 9v2m0 4h.01m-6.938 4h13.856c1.54 0 2.502-1.667 1.732-3L13.732 4c-.77-1.333-2.694-1.333-3.464 0L3.34 16c-.77 1.333.192 3 1.732 3z" />
                                </svg>
                                {{$message}}
                            </p>
                        @enderror
                    </div>
                    
                    <div>
                        <label for="password" class="block text-sm font-medium text-gray-700 mb-1">Password</label>
                        <div class="relative">
                            <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-gray-400" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z" />
                                </svg>
                            </div>
                            <input 
                                type="password" 
                                name="password" 
                                class="w-full pl-10 pr-3 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-purple-600 focus:border-purple-600 transition-colors" 
                                placeholder="••••••••"
                            >
                        </div>
                        @error('password')
                            <p class="mt-2 text-sm text-red-600 flex items-center">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 mr-1" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 9v2m0 4h.01m-6.938 4h13.856c1.54 0 2.502-1.667 1.732-3L13.732 4c-.77-1.333-2.694-1.333-3.464 0L3.34 16c-.77 1.333.192 3 1.732 3z" />
                                </svg>
                                {{$message}}
                            </p>
                        @enderror
                    </div>
                    
                    <div>
                        <label for="password_confirmation" class="block text-sm font-medium text-gray-700 mb-1">Confirm Password</label>
                        <div class="relative">
                            <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-gray-400" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z" />
                                </svg>
                            </div>
                            <input 
                                type="password" 
                                name="password_confirmation" 
                                class="w-full pl-10 pr-3 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-purple-600 focus:border-purple-600 transition-colors" 
                                placeholder="••••••••"
                            >
                        </div>
                    </div>
                    
                    <div class="flex items-center">
                        <input 
                            type="checkbox" 
                            id="terms" 
                            name="terms" 
                            class="h-4 w-4 text-purple-600 border-gray-300 rounded focus:ring-purple-500"
                        >
                        <label for="terms" class="ml-2 text-sm text-gray-600">
                            I agree to the 
                            <span class="text-purple-600 cursor-pointer hover:text-purple-500 transition-colors">Terms of Service</span> 
                            and 
                            <span class="text-purple-600 cursor-pointer hover:text-purple-500 transition-colors">Privacy Policy</span>
                        </label>
                    </div>
                    
                    <button class="w-full cursor-pointer bg-purple-600 text-white py-3 px-4 rounded-lg hover:bg-purple-700 focus:ring-4 focus:ring-purple-200 transition-colors flex items-center justify-center">
                        <span>Create Account</span>
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 ml-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3" />
                        </svg>
                    </button>
                    
                    <div class="text-center text-sm text-gray-600">
                        Already have an account? 
                        <span onclick="toggleForm('signin')" class="text-purple-600 hover:text-purple-500 cursor-pointer font-medium transition-colors">Sign in</span>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Handle form validation
            const signinForm = document.getElementById('signin-form');
            const signupForm = document.getElementById('signup-form');
            signinForm.reset();
            signupForm.reset();
        });

        function toggleForm(formType) {
            const signinForm = document.getElementById('signin-form');
            const signupForm = document.getElementById('signup-form');
            const signinTab = document.getElementById('signin-tab');
            const signupTab = document.getElementById('signup-tab');
            const tabIndicator = document.getElementById('tab-indicator');

            if (formType === 'signup') {
                signinForm.classList.add('hidden');
                signupForm.classList.remove('hidden');
                signinTab.classList.remove('text-gray-900');
                signinTab.classList.add('text-gray-500');
                signupTab.classList.remove('text-gray-500');
                signupTab.classList.add('text-gray-900');
                tabIndicator.style.transform = 'translateX(100%)';
            } else {
                signupForm.classList.add('hidden');
                signinForm.classList.remove('hidden');
                signupTab.classList.remove('text-gray-900');
                signupTab.classList.add('text-gray-500');
                signinTab.classList.remove('text-gray-500');
                signinTab.classList.add('text-gray-900');
                tabIndicator.style.transform = 'translateX(0)';
            }
        }
    </script>
</body>
</html>