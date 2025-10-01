
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register - Elegant Pink</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="min-h-screen bg-gradient-to-tr from-pink-100 via-pink-300 to-purple-400 flex items-center justify-center p-6">

    <div class="w-full max-w-lg bg-white/80 backdrop-blur-2xl rounded-3xl shadow-2xl p-10 border-2 border-pink-200 relative overflow-visible">
        <div class="absolute -top-10 left-1/2 -translate-x-1/2">
            <div class="w-24 h-24 rounded-full bg-gradient-to-br from-pink-400 via-pink-300 to-pink-200 shadow-lg flex items-center justify-center border-4 border-white">
                <svg class="w-12 h-12 text-white" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                    <path d="M16 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2" />
                    <circle cx="12" cy="7" r="4" />
                </svg>
            </div>
        </div>
        <h1 class="text-4xl font-extrabold text-pink-700 text-center mb-10 mt-16 tracking-wide drop-shadow-lg animate-pulse">
            Create Account
        </h1>

        <form method="POST" action="{{ route('register') }}" class="space-y-7 text-gray-800">
            @csrf

            <!-- Name -->
            <div>
                <label for="name" class="block mb-1 font-semibold text-pink-900">Full Name</label>
                <input type="text" name="name" id="name" value="{{ old('name') }}" required autofocus
                       class="w-full px-5 py-3 rounded-2xl bg-white/90 border border-pink-300 text-gray-900 focus:ring-2 focus:ring-pink-400 focus:border-pink-400 outline-none shadow-sm transition" />
                @error('name')
                    <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                @enderror
            </div>

            <!-- Email -->
            <div>
                <label for="email" class="block mb-1 font-semibold text-pink-900">Email Address</label>
                <input type="email" name="email" id="email" value="{{ old('email') }}" required
                       class="w-full px-5 py-3 rounded-2xl bg-white/90 border border-pink-300 text-gray-900 focus:ring-2 focus:ring-pink-400 focus:border-pink-400 outline-none shadow-sm transition" />
                @error('email')
                    <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                @enderror
            </div>

            <!-- Password -->
            <div>
                <label for="password" class="block mb-1 font-semibold text-pink-900">Password</label>
                <input type="password" name="password" id="password" required
                       class="w-full px-5 py-3 rounded-2xl bg-white/90 border border-pink-300 text-gray-900 focus:ring-2 focus:ring-pink-400 focus:border-pink-400 outline-none shadow-sm transition" />
                @error('password')
                    <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                @enderror
            </div>

            <!-- Confirm Password -->
            <div>
                <label for="password_confirmation" class="block mb-1 font-semibold text-pink-900">Confirm Password</label>
                <input type="password" name="password_confirmation" id="password_confirmation" required
                       class="w-full px-5 py-3 rounded-2xl bg-white/90 border border-pink-300 text-gray-900 focus:ring-2 focus:ring-pink-400 focus:border-pink-400 outline-none shadow-sm transition" />
                @error('password_confirmation')
                    <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                @enderror
            </div>

            <div class="flex items-center justify-between mt-8">
                <a href="{{ route('login') }}" class="text-pink-700 hover:text-pink-900 text-sm underline font-medium">
                    Already registered?
                </a>
                <button type="submit"
                        class="px-8 py-3 rounded-2xl bg-gradient-to-r from-pink-500 to-pink-700 hover:from-pink-600 hover:to-pink-800 text-white font-bold shadow-lg transition-all duration-200">
                    Register
                </button>
            </div>
        </form>
    </div>

</body>
</html>
