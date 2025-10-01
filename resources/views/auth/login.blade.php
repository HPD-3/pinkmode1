<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - Elegant Pink</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="min-h-screen bg-gradient-to-tr from-pink-100 via-fuchsia-200 to-purple-400 flex items-center justify-center p-6">

    <div class="relative w-full max-w-lg">
        <!-- Decorative Circle -->
        <div class="absolute -top-10 -left-10 w-32 h-32 bg-pink-300/40 rounded-full blur-2xl z-0"></div>
        <div class="absolute -bottom-10 -right-10 w-32 h-32 bg-purple-300/40 rounded-full blur-2xl z-0"></div>
        <div class="relative z-10 bg-white/90 shadow-2xl rounded-3xl border border-pink-200 px-10 py-12">
            <div class="flex flex-col items-center mb-8">
                <div class="bg-gradient-to-br from-pink-400 via-pink-300 to-pink-200 w-20 h-20 rounded-full flex items-center justify-center shadow-lg border-4 border-white mb-4">
                    <svg class="w-10 h-10 text-white" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                        <path d="M16 17v-1a4 4 0 0 0-8 0v1M12 11a4 4 0 1 0 0-8 4 4 0 0 0 0 8z"/>
                    </svg>
                </div>
                <h1 class="text-4xl font-extrabold text-pink-700 text-center tracking-wide drop-shadow-lg mb-2">
                    Welcome Back
                </h1>
                <p class="text-pink-400 text-center text-base font-medium">Sign in to your account</p>
            </div>

            @if(session('status'))
                <div class="mb-4 p-3 bg-green-500/80 text-white rounded-lg text-center shadow">
                    {{ session('status') }}
                </div>
            @endif

            <form method="POST" action="{{ route('login') }}" class="space-y-6">
                @csrf

                <!-- Email -->
                <div>
                    <label for="email" class="block mb-1 font-semibold text-pink-700">Email</label>
                    <input type="email" name="email" id="email" value="{{ old('email') }}" required autofocus
                        class="w-full px-4 py-3 rounded-xl bg-white border border-pink-200 text-gray-900 focus:ring-2 focus:ring-pink-400 focus:border-pink-400 outline-none shadow-sm transition" />
                    @error('email')
                        <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                    @enderror
                </div>

                <!-- Password -->
                <div>
                    <label for="password" class="block mb-1 font-semibold text-pink-700">Password</label>
                    <input type="password" name="password" id="password" required
                        class="w-full px-4 py-3 rounded-xl bg-white border border-pink-200 text-gray-900 focus:ring-2 focus:ring-pink-400 focus:border-pink-400 outline-none shadow-sm transition" />
                    @error('password')
                        <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                    @enderror
                </div>

                <!-- Remember Me -->
                <div class="flex items-center">
                    <input id="remember_me" type="checkbox" name="remember" class="rounded border-pink-300 text-pink-600 shadow-sm focus:ring-pink-500">
                    <label for="remember_me" class="ml-2 text-sm text-pink-700">Remember me</label>
                </div>

                <!-- Forgot Password -->
                @if (Route::has('password.request'))
                    <div class="text-right">
                        <a href="{{ route('register') }}" class="text-sm text-pink-700 hover:text-pink-900 underline">
                            Register here
                        </a>
                    </div>
                @endif

                <!-- Submit Button -->
                <div class="flex justify-center mt-4">
                    <button type="submit" 
                            class="px-6 py-2 rounded-xl bg-pink-600 hover:bg-pink-700 text-white font-semibold shadow-lg transition">
                        Log In
                    </button>
                </div>
            </form>
        </div>

    </div>

</body>
</html>
