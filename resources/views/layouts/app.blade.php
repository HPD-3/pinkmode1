<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ config('app.name', 'Contact Book') }}</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <link rel="stylesheet" href="https://cdn.datatables.net/2.3.4/css/dataTables.dataTables.min.css">
    <style>
        body {
            /* Soft pink glassmorphism effect */
            background: linear-gradient(135deg, #fce7f3 0%, #fbcfe8 40%, #f472b6 100%);
        }
        .main-glass {
            background: rgba(255, 182, 193, 0.25);
            box-shadow: 0 8px 32px 0 rgba(245, 56, 142, 0.25);
            backdrop-filter: blur(12px);
            border-radius: 2rem;
        }
    </style>
</head>
<body class="bg-gradient-to-br from-pink-200 via-pink-400 to-pink-600 min-h-screen flex font-sans">
    <!-- Main -->
    <div class="flex-1 flex flex-col md:ml-64 transition-all">
        <!-- Sidebar -->
        <x-sidebar />
        
        <!-- Topbar -->
        <x-topbar />

        <!-- Content -->
        <main class="flex-1 p-6 md:p-10 text-pink-50 relative z-0">
            @if(session('success'))
                <div class="mb-4 p-4 bg-gradient-to-r from-green-400/80 via-green-500/80 to-green-600/80 text-white rounded-xl shadow-lg border border-green-200/40">
                    {{ session('success') }}
                </div>
            @endif

            <div class="main-glass bg-pink-100/40 backdrop-blur-2xl rounded-3xl shadow-2xl p-8 md:p-10 overflow-visible border border-pink-200/60">
                @yield('content')
            </div>
        </main>
    </div>

    <!-- Script -->
    <script>
        const mobileMenuBtn = document.getElementById('mobileMenuBtn');
        const sidebar = document.getElementById('sidebar');
        const closeSidebar = document.getElementById('closeSidebar');
        const userMenuBtn = document.getElementById('userMenuBtn');
        const userMenuDropdown = document.getElementById('userMenuDropdown');

        // Toggle sidebar mobile
        mobileMenuBtn?.addEventListener('click', () => {
            sidebar.classList.remove('-translate-x-full');
        });
        closeSidebar?.addEventListener('click', () => {
            sidebar.classList.add('-translate-x-full');
        });

        // Toggle dropdown user menu
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

    <script src="https://code.jquery.com/jquery-3.7.1.slim.js"
            integrity="sha256-UgvvN8vBkgO0luPSUl2s8TIlOSYRoGFAX4jlCIm9Adc=" 
            crossorigin="anonymous"></script>
    <script src="https://cdn.datatables.net/2.3.4/js/dataTables.min.js"></script>
    <script type="text/javascript">
        let table = new DataTable('#myTable');
    </script>
</body>
</html>
