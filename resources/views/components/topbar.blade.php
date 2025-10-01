<header class="relative z-50 flex items-center justify-between bg-white/70 backdrop-blur-lg shadow-lg p-3 md:p-5 border-b-2 border-pink-300 rounded-b-3xl"
    style="margin-left: 0; width: 100%;"
>
    <!-- Tombol toggle untuk mobile -->
    <button class="md:hidden text-pink-600 text-3xl hover:text-yellow-400 transition-transform transform hover:scale-125 focus:outline-none" id="mobileMenuBtn">
        <span class="sr-only">Open sidebar</span>
        <svg class="w-8 h-8" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" d="M4 6h16M4 12h16M4 18h16"/>
        </svg>
    </button>

    <!-- Search -->
    <form method="GET" action="{{ route('siswa.index') }}" class="flex-1 max-w-lg mx-4">
        <div class="relative">
            <input type="search" name="search" value="{{ request('search') }}"
                placeholder="Cari siswa..."
                class="w-full rounded-2xl bg-pink-100/60 border-2 border-pink-300 px-4 py-2.5 text-pink-800 placeholder-pink-400 focus:ring-2 focus:ring-pink-400 focus:border-yellow-400 transition-all duration-300 shadow-inner hover:bg-pink-200/80 outline-none"
            >
            <span class="absolute right-3 top-1/2 -translate-y-1/2 text-pink-400">
                <svg class="w-5 h-5" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                    <circle cx="11" cy="11" r="7" stroke="currentColor"/>
                    <line x1="21" y1="21" x2="16.65" y2="16.65" stroke="currentColor" stroke-linecap="round"/>
                </svg>
            </span>
        </div>
    </form>

    <!-- User Menu -->
    <div class="relative z-50 ml-2">
        <button id="userMenuBtn" 
            class="flex items-center gap-2 bg-gradient-to-r from-pink-400 to-pink-500 hover:from-yellow-300 hover:to-pink-400 text-white px-5 py-2.5 rounded-full font-bold shadow-md transition-all duration-200 hover:shadow-xl hover:text-pink-700 focus:outline-none focus:ring-2 focus:ring-pink-300"
        >
            <span class="inline-block bg-white/30 rounded-full p-1">
                <svg class="w-6 h-6 text-pink-100" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                    <circle cx="12" cy="8" r="4" stroke="currentColor"/>
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" d="M4 20c0-3.314 3.582-6 8-6s8 2.686 8 6"/>
                </svg>
            </span>
            <span class="truncate max-w-[100px]">{{ Auth::user()->name ?? 'Guest' }}</span>
            <svg class="w-4 h-4 ml-1 text-pink-100" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7"/>
            </svg>
        </button>
        <div id="userMenuDropdown" 
            class="hidden absolute right-0 mt-3 w-52 bg-white/90 backdrop-blur-xl text-pink-700 
                rounded-2xl shadow-2xl overflow-hidden z-50 border border-pink-200 animate-fadeIn"
        >
            <a href="{{ route('profile.edit') }}" 
                class="block px-5 py-3 hover:bg-pink-100/80 hover:text-pink-900 transition-all font-semibold"
            >
                <svg class="inline w-5 h-5 mr-2 text-pink-400" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M15.232 5.232l3.536 3.536M9 11l6 6M3 21h6l11.293-11.293a1 1 0 0 0 0-1.414l-4.586-4.586a1 1 0 0 0-1.414 0L3 15v6z"/>
                </svg>
                Profile
            </a>
            <form method="POST" action="{{ route('logout') }}">
                @csrf
                <button type="submit" 
                    class="w-full text-left px-5 py-3 hover:bg-pink-100/80 hover:text-pink-900 transition-all font-semibold flex items-center"
                >
                    <svg class="inline w-5 h-5 mr-2 text-pink-400" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V7a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v1"/>
                    </svg>
                    Log Out
                </button>
            </form>
        </div>
    </div>
</header>

<script>
    // Toggle dropdown user menu
    const userMenuBtn = document.getElementById('userMenuBtn');
    const userMenuDropdown = document.getElementById('userMenuDropdown');

    userMenuBtn?.addEventListener('click', () => {
        userMenuDropdown.classList.toggle('hidden');
    });

    // Tutup dropdown kalau klik di luar
    document.addEventListener('click', (e) => {
        if (!userMenuBtn.contains(e.target) && !userMenuDropdown.contains(e.target)) {
            userMenuDropdown.classList.add('hidden');
        }
    });
</script>
