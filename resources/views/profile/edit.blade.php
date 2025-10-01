@extends('layouts.app')

@section('content')
<div class="py-12 min-h-screen bg-transparent flex items-center justify-center">
    <div class="w-full max-w-4xl mx-auto space-y-10">

        <!-- Update Profile Information -->
        <div class="relative overflow-hidden p-8 sm:p-12 bg-gradient-to-br from-pink-50/90 via-pink-100/90 to-pink-200/90 text-pink-900 backdrop-blur-2xl shadow-2xl sm:rounded-3xl border border-pink-200">
            <div class="absolute -top-8 -left-8 w-24 h-24 bg-pink-200/60 rounded-full blur-2xl z-0"></div>
            <div class="absolute -bottom-8 -right-8 w-32 h-32 bg-pink-300/40 rounded-full blur-2xl z-0"></div>
            <div class="relative z-10">
                <h2 class="text-2xl font-extrabold mb-6 text-pink-700 tracking-tight drop-shadow">Update Profile</h2>
                @include('profile.partials.update-profile-information-form')
            </div>
        </div>

        <!-- Update Password -->
        <div class="relative overflow-hidden p-8 sm:p-12 bg-gradient-to-br from-pink-100/90 via-pink-200/90 to-pink-300/90 text-pink-900 backdrop-blur-2xl shadow-2xl sm:rounded-3xl border border-pink-200">
            <div class="absolute -top-8 -right-8 w-20 h-20 bg-pink-300/50 rounded-full blur-2xl z-0"></div>
            <div class="absolute -bottom-8 -left-8 w-28 h-28 bg-pink-200/40 rounded-full blur-2xl z-0"></div>
            <div class="relative z-10">
                <h2 class="text-2xl font-extrabold mb-6 text-pink-700 tracking-tight drop-shadow">Update Password</h2>
                @include('profile.partials.update-password-form')
            </div>
        </div>

        <!-- Delete Account -->
        <div class="relative overflow-hidden p-8 sm:p-12 bg-gradient-to-br from-pink-400/90 via-pink-500/90 to-pink-600/90 text-white backdrop-blur-2xl shadow-2xl sm:rounded-3xl border border-pink-600">
            <div class="absolute -top-8 -left-8 w-24 h-24 bg-pink-600/40 rounded-full blur-2xl z-0"></div>
            <div class="absolute -bottom-8 -right-8 w-32 h-32 bg-pink-400/30 rounded-full blur-2xl z-0"></div>
            <div class="relative z-10">
                <h2 class="text-2xl font-extrabold mb-6 text-white tracking-tight drop-shadow">Delete Account</h2>
                @include('profile.partials.delete-user-form')
            </div>
        </div>

    </div>
</div>
@endsection
