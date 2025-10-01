@extends('layouts.app')

@section('content')
<div class="w-full max-w-lg bg-gradient-to-br from-pink-100 via-pink-200 to-pink-50 p-8 rounded-3xl shadow-2xl border border-pink-200 mx-auto">
    <h1 class="text-2xl font-extrabold text-pink-700 mb-8 text-center tracking-wide drop-shadow">Detail Siswa</h1>

    <div class="space-y-5 text-gray-800">
        <div class="flex items-center bg-white/70 rounded-xl px-4 py-3 shadow-sm">
            <span class="font-semibold text-pink-700 w-40">NISN:</span>
            <p class="ml-2 flex-1 text-pink-900">{{ $siswa->nisn }}</p>
        </div>
        <div class="flex items-center bg-white/70 rounded-xl px-4 py-3 shadow-sm">
            <span class="font-semibold text-pink-700 w-40">Nama Lengkap:</span>
            <p class="ml-2 flex-1 text-pink-900">{{ $siswa->nama_lengkap }}</p>
        </div>
        <div class="flex items-center bg-white/70 rounded-xl px-4 py-3 shadow-sm">
            <span class="font-semibold text-pink-700 w-40">Tempat Lahir:</span>
            <p class="ml-2 flex-1 text-pink-900">
                {{ $siswa->tempat_lahir ?? '-' }}
            </p>
        </div>
        <div class="flex items-center bg-white/70 rounded-xl px-4 py-3 shadow-sm">
            <span class="font-semibold text-pink-700 w-40">Tanggal Lahir:</span>
            <p class="ml-2 flex-1 text-pink-900">{{ $siswa->tanggal_lahir }}</p>
        </div>
        <div class="flex items-center bg-white/70 rounded-xl px-4 py-3 shadow-sm">
            <span class="font-semibold text-pink-700 w-40">Alamat:</span>
            <p class="ml-2 flex-1 text-pink-900">{{ $siswa->alamat }}</p>
        </div>
        <div class="flex items-center bg-white/70 rounded-xl px-4 py-3 shadow-sm">
            <span class="font-semibold text-pink-700 w-40">Jurusan:</span>
            <p class="ml-2 flex-1 text-pink-900">{{ $siswa->jurusan }}</p>
        </div>
        <div class="flex items-center bg-white/70 rounded-xl px-4 py-3 shadow-sm">
            <span class="font-semibold text-pink-700 w-40">Angkatan:</span>
            <p class="ml-2 flex-1 text-pink-900">{{ $siswa->angkatan }}</p>
        </div>
        <div class="flex items-center bg-white/70 rounded-xl px-4 py-3 shadow-sm">
            <span class="font-semibold text-pink-700 w-40">No HP:</span>
            <p class="ml-2 flex-1 text-pink-900">{{ $siswa->no_hp }}</p>
        </div>
    </div>

    <div class="mt-8 flex justify-end">
        <a href="{{ route('siswa.index') }}" 
           class="bg-pink-600 hover:bg-pink-700 text-white px-6 py-2.5 rounded-xl shadow-lg font-semibold transition-all duration-200">
            Kembali
        </a>
    </div>
</div>
@endsection
