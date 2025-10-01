<aside id="sidebar" 
       class="fixed inset-y-0 left-0 w-64 bg-white/80 backdrop-blur-xl  border-pink-200 text-pink-700 transform -translate-x-full md:translate-x-0 
              transition-transform duration-300 shadow-2xl z-40 ">

    <!-- Header -->
    <div class="flex items-center justify-between px-6 py-5 border-b-2 border-pink-200 bg-gradient-to-r from-pink-100/80 to-pink-200/60 rounded-tr-3xl">
        <div class="flex items-center gap-3">
            <span class="inline-block bg-pink-400/80 p-2 rounded-xl shadow-lg">
                <svg class="w-7 h-7 text-white" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M17 20h5v-2a4 4 0 0 0-4-4H6a4 4 0 0 0-4 4v2h5"/>
                    <circle cx="12" cy="7" r="4" stroke="currentColor"/>
                </svg>
            </span>
            <h2 class="text-2xl font-extrabold tracking-wide text-pink-700 drop-shadow">Daftar Siswa</h2>
        </div>
        <!-- Tombol Close mobile -->
        <button id="closeSidebar" 
                class="md:hidden text-pink-400 hover:text-yellow-400 transition-transform transform hover:scale-125 bg-white/70 rounded-full p-2 shadow">
            <svg class="w-6 h-6" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12"/>
            </svg>
        </button>
    </div>

    <!-- Menu -->
    <nav class="px-6 py-6 space-y-4">
        <a href="{{ route('siswa.index') }}" 
           class="flex items-center gap-3 px-5 py-3 rounded-xl text-base font-semibold transition-all duration-300 
                  hover:bg-pink-100/80 hover:text-pink-900 hover:pl-8 hover:shadow-xl
                  {{ request()->routeIs('siswa.index') ? 'bg-pink-400/90 text-white shadow-lg pl-8' : '' }}">
            <span class="inline-block">
                <svg class="w-5 h-5 {{ request()->routeIs('siswa.index') ? 'text-white' : 'text-pink-400' }}" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M3 12l2-2m0 0l7-7 7 7M13 5v6h6"/>
                </svg>
            </span>
            Home
        </a>

        <a href="{{ route('siswa.create') }}" 
           class="flex items-center gap-3 px-5 py-3 rounded-xl text-base font-semibold transition-all duration-300 
                  hover:bg-pink-100/80 hover:text-pink-900 hover:pl-8 hover:shadow-xl
                  {{ request()->routeIs('siswa.create') ? 'bg-pink-400/90 text-white shadow-lg pl-8' : '' }}">
            <span class="inline-block">
                <svg class="w-5 h-5 {{ request()->routeIs('siswa.create') ? 'text-white' : 'text-pink-400' }}" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M12 4v16m8-8H4"/>
                </svg>
            </span>
            Tambah Siswa
        </a>
    </nav>
</aside>
