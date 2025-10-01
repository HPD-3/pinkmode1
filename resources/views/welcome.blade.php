<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Landing Page - Daftar Siswa Razza</title>
<script src="https://cdn.tailwindcss.com"></script>
<style>
  .particle {
      position: absolute;
      border-radius: 50%;
      opacity: 0.6;
      animation: float 8s ease-in-out infinite;
  }
  @keyframes float {
      0%, 100% { transform: translateY(0px) translateX(0px); opacity:0.6; }
      50% { transform: translateY(-40px) translateX(20px); opacity:0.9; }
  }
  .btn-neon {
      background: linear-gradient(90deg, #f472b6, #a78bfa);
      color: white;
      font-weight: bold;
      padding: 0.8rem 2rem;
      border-radius: 1rem;
      box-shadow: 0 0 10px #f472b6, 0 0 20px #a78bfa;
      transition: all 0.3s ease;
  }
  .btn-neon:hover {
      box-shadow: 0 0 20px #f472b6, 0 0 40px #a78bfa, 0 0 60px #f472b6;
      transform: scale(1.1);
  }
</style>
</head>
<body class="relative min-h-screen bg-gradient-to-tr from-pink-100 via-pink-300 to-pink-600 overflow-x-hidden font-sans">

<!-- Pink Glassmorphism Overlay -->
<div class="absolute inset-0 z-0 pointer-events-none">
    <div class="absolute top-0 left-0 w-2/3 h-1/2 bg-pink-200/60 rounded-br-full blur-3xl"></div>
    <div class="absolute bottom-0 right-0 w-1/2 h-2/3 bg-pink-400/40 rounded-tl-full blur-2xl"></div>
</div>

<!-- Particles -->
<div class="particle w-24 h-24 bg-pink-400" style="top:8%; left:12%; animation-delay: 0s;"></div>
<div class="particle w-32 h-32 bg-purple-500" style="top:65%; left:75%; animation-delay: 2s;"></div>
<div class="particle w-20 h-20 bg-pink-300" style="top:28%; left:48%; animation-delay: 4s;"></div>
<div class="particle w-28 h-28 bg-purple-400" style="top:82%; left:18%; animation-delay: 1s;"></div>
<div class="particle w-16 h-16 bg-pink-500" style="top:52%; left:8%; animation-delay: 3s;"></div>

<!-- Hero Section -->
<section class="relative z-10 flex items-center justify-center w-screen h-screen px-0">
    <div class="w-full flex flex-col md:flex-row items-center justify-between bg-gradient-to-br from-pink-100/80 via-pink-200/70 to-pink-400/60 p-0 md:p-0 rounded-none md:rounded-3xl shadow-2xl border border-pink-200/60 max-w-none">
        <!-- Logo Kiri -->
        <div class="flex-1 flex items-center justify-center py-16 md:py-32 bg-white/30 md:rounded-l-3xl">
            <div class="w-40 h-40 md:w-56 md:h-56 rounded-full bg-gradient-to-br from-pink-400 via-pink-300 to-pink-200 shadow-lg flex items-center justify-center border-4 border-white">
                <svg class="w-24 h-24 md:w-32 md:h-32 text-white" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 48 48">
                    <circle cx="24" cy="24" r="22" stroke="#f472b6" stroke-width="3" fill="#fbcfe8" />
                    <path d="M24 32c4.418 0 8-3.582 8-8s-3.582-8-8-8-8 3.582-8 8 3.582 8 8 8zm0 4c-5.523 0-16 2.686-16 8v2h32v-2c0-5.314-10.477-8-16-8z" fill="#f472b6" />
                </svg>
            </div>
        </div>
        <!-- Paragraf Kanan -->
        <div class="flex-1 flex flex-col justify-center items-start px-8 md:px-16 py-12 md:py-32">
            <h1 class="text-4xl md:text-5xl font-extrabold text-pink-700 mb-4 tracking-tight drop-shadow-lg text-left">
                Selamat Datang di <span class="text-pink-500">Daftar Siswa</span>
            </h1>
            <p class="text-base md:text-lg text-pink-700/90 mt-2 max-w-2xl font-medium text-left mb-10">
                Kelola data siswa dengan mudah, modern, dan penuh warna. Sistem informasi siswa yang <span class="font-semibold text-pink-600">intuitif</span> & <span class="font-semibold text-pink-600">aman</span> untuk kebutuhan sekolah Anda.
            </p>
            <div class="flex flex-col md:flex-row gap-6 w-full md:w-auto">
                <a href="/login" class="btn-neon text-lg w-full md:w-auto text-center">Masuk</a>
                <a href="/register" class="btn-neon text-lg w-full md:w-auto text-center">Daftar</a>
            </div>
        </div>
    </div>
</section>

<!-- Features Section -->
<section class="relative z-10 py-24 px-6">
    <div class="max-w-6xl mx-auto">
        <h2 class="text-4xl font-extrabold text-center text-pink-700 mb-16 tracking-wide drop-shadow-lg">Fitur Unggulan</h2>
        <div class="grid md:grid-cols-3 gap-10">
            <div class="bg-gradient-to-br from-pink-200/80 via-pink-300/70 to-pink-400/60 p-8 rounded-3xl shadow-xl border border-pink-200/60 hover:scale-105 transition-all duration-200">
                <div class="flex items-center justify-center mb-4">
                    <svg class="w-12 h-12 text-pink-500" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 32 32">
                        <rect x="6" y="10" width="20" height="12" rx="3" fill="#f472b6"/>
                        <path d="M10 14h12M10 18h8" stroke="#fff" stroke-width="2" stroke-linecap="round"/>
                    </svg>
                </div>
                <h3 class="text-2xl font-semibold text-pink-700 mb-2">Tambah Siswa Mudah</h3>
                <p class="text-pink-600">Input data siswa dengan form modern, validasi instan, dan pengalaman pengguna yang menyenangkan.</p>
            </div>
            <div class="bg-gradient-to-br from-pink-100/80 via-purple-200/70 to-purple-400/60 p-8 rounded-3xl shadow-xl border border-pink-200/60 hover:scale-105 transition-all duration-200">
                <div class="flex items-center justify-center mb-4">
                    <svg class="w-12 h-12 text-purple-500" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 32 32">
                        <circle cx="16" cy="16" r="10" fill="#a78bfa"/>
                        <path d="M16 12v4l3 3" stroke="#fff" stroke-width="2" stroke-linecap="round"/>
                    </svg>
                </div>
                <h3 class="text-2xl font-semibold text-purple-700 mb-2">Lihat Detail</h3>
                <p class="text-purple-600">Akses informasi lengkap setiap siswa dengan tampilan detail yang rapi dan interaktif.</p>
            </div>
            <div class="bg-gradient-to-br from-pink-200/80 via-pink-400/70 to-pink-500/60 p-8 rounded-3xl shadow-xl border border-pink-200/60 hover:scale-105 transition-all duration-200">
                <div class="flex items-center justify-center mb-4">
                    <svg class="w-12 h-12 text-pink-600" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 32 32">
                        <path d="M8 24l16-16M8 8h16v16" stroke="#fff" stroke-width="2" stroke-linecap="round"/>
                        <rect x="6" y="6" width="20" height="20" rx="4" fill="#f472b6"/>
                    </svg>
                </div>
                <h3 class="text-2xl font-semibold text-pink-700 mb-2">Edit & Hapus</h3>
                <p class="text-pink-600">Kelola data siswa: edit, hapus, atau perbarui kapan saja dengan keamanan dan kemudahan.</p>
            </div>
        </div>
    </div>
</section>

<!-- Footer -->
<footer class="relative z-10 py-10 text-center">
    <div class="flex flex-col items-center gap-2">
        <div class="w-16 h-1 rounded-full bg-gradient-to-r from-pink-400 via-pink-300 to-pink-200 mb-2"></div>
        <p class="text-pink-500 font-semibold tracking-wide">&copy; {{ date('Y') }} Daftar Siswa. All rights reserved.</p>
    </div>
</footer>

<!-- Particle Animation Script -->
<script>
const particles = document.querySelectorAll('.particle');
particles.forEach((p, i) => {
    const delay = i * 500;
    p.animate([
        { transform: 'translateY(0) translateX(0)' },
        { transform: 'translateY(-30px) translateX(20px)' },
        { transform: 'translateY(0) translateX(0)' }
    ], {
        duration: 6000 + i*1000,
        iterations: Infinity,
        delay: delay
    });
});
</script>
</body>
</html>
