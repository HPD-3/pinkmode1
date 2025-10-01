@extends('layouts.app')

@section('content')
<div class="flex items-center justify-center min-h-screen bg-transparent  p-6">
    <div class="w-full max-w-2xl bg-white/70 p-10 rounded-3xl shadow-2xl border border-pink-200/60 backdrop-blur-2xl relative overflow-visible">
        <div class="absolute -top-8 left-1/2 -translate-x-1/2">
            <div class="w-20 h-20 rounded-full bg-gradient-to-br from-pink-400 via-pink-300 to-pink-200 shadow-lg flex items-center justify-center border-4 border-white">
                <svg class="w-10 h-10 text-white" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                    <path d="M12 14c2.21 0 4-1.79 4-4s-1.79-4-4-4-4 1.79-4 4 1.79 4 4 4zm0 2c-2.67 0-8 1.34-8 4v2h16v-2c0-2.66-5.33-4-8-4z"/>
                </svg>
            </div>
        </div>
        <h1 class="text-3xl font-extrabold mb-8 text-pink-700 text-center tracking-wide drop-shadow-lg mt-12">
            {{ isset($siswa) ? 'Edit Data Siswa' : 'Tambah Data Siswa' }}
        </h1>

        <form action="{{ isset($siswa) ? route('siswa.update',$siswa->id) : route('siswa.store') }}" 
              method="POST" 
              class="space-y-6 text-gray-800">
            @csrf
            @if(isset($siswa)) @method('PUT') @endif

            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                <div>
                    <label class="block text-sm font-semibold text-pink-900 mb-1">NISN</label>
                    <input type="text" name="nisn" value="{{ old('nisn', $siswa->nisn ?? '') }}"
                        class="w-full px-4 py-2 rounded-xl bg-white/90 text-gray-900 border border-pink-300 focus:ring-2 focus:ring-pink-400 focus:border-pink-400 focus:outline-none shadow-sm">
                </div>
                <div>
                    <label class="block text-sm font-semibold text-pink-900 mb-1">Nama Lengkap</label>
                    <input type="text" name="nama_lengkap" value="{{ old('nama_lengkap', $siswa->nama_lengkap ?? '') }}"
                        class="w-full px-4 py-2 rounded-xl bg-white/90 text-gray-900 border border-pink-300 focus:ring-2 focus:ring-pink-400 focus:border-pink-400 focus:outline-none shadow-sm">
                </div>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                <div>
                    <label class="block text-sm font-semibold text-pink-900 mb-1">Tempat Lahir</label>
                    <input type="text" name="tempat_lahir" value="{{ old('tempat_lahir', $siswa->tempat_lahir ?? '') }}"
                        class="w-full px-4 py-2 rounded-xl bg-white/90 text-gray-900 border border-pink-300 focus:ring-2 focus:ring-pink-400 focus:border-pink-400 focus:outline-none shadow-sm">
                </div>
                <div>
                    <label class="block text-sm font-semibold text-pink-900 mb-1">Tanggal Lahir</label>
                    <input type="date" name="tanggal_lahir" value="{{ old('tanggal_lahir', $siswa->tanggal_lahir ?? '') }}"
                        class="w-full px-4 py-2 rounded-xl bg-white/90 text-gray-900 border border-pink-300 focus:ring-2 focus:ring-pink-400 focus:border-pink-400 focus:outline-none shadow-sm">
                </div>
            </div>

            <div>
                <label class="block text-sm font-semibold text-pink-900 mb-1">Alamat</label>
                <textarea name="alamat" rows="2"
                    class="w-full px-4 py-2 rounded-xl bg-white/90 text-gray-900 border border-pink-300 focus:ring-2 focus:ring-pink-400 focus:border-pink-400 focus:outline-none shadow-sm">{{ old('alamat', $siswa->alamat ?? '') }}</textarea>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                <div>
                    <label class="block text-sm font-semibold text-pink-900 mb-1">Jurusan</label>
                    <input type="text" name="jurusan" value="{{ old('jurusan', $siswa->jurusan ?? '') }}"
                        class="w-full px-4 py-2 rounded-xl bg-white/90 text-gray-900 border border-pink-300 focus:ring-2 focus:ring-pink-400 focus:border-pink-400 focus:outline-none shadow-sm">
                </div>
                <div>
                    <label class="block text-sm font-semibold text-pink-900 mb-1">Angkatan</label>
                    <input type="text" name="angkatan" value="{{ old('angkatan', $siswa->angkatan ?? '') }}"
                        class="w-full px-4 py-2 rounded-xl bg-white/90 text-gray-900 border border-pink-300 focus:ring-2 focus:ring-pink-400 focus:border-pink-400 focus:outline-none shadow-sm">
                </div>
            </div>

            <div>
                <label class="block text-sm font-semibold text-pink-900 mb-1">No HP</label>
                <input type="text" name="no_hp" value="{{ old('no_hp', $siswa->no_hp ?? '') }}"
                    class="w-full px-4 py-2 rounded-xl bg-white/90 text-gray-900 border border-pink-300 focus:ring-2 focus:ring-pink-400 focus:border-pink-400 focus:outline-none shadow-sm">
            </div>

            <div class="flex justify-between pt-6">
                <a href="{{ route('siswa.index') }}" 
                   class="bg-gradient-to-r from-pink-200 via-pink-300 to-pink-400 hover:from-pink-300 hover:to-pink-500 transition px-6 py-2 rounded-xl text-pink-800 font-semibold shadow-lg border border-pink-200">
                   Kembali
                </a>
                <button type="submit" 
                        class="bg-gradient-to-r from-pink-500 via-pink-400 to-pink-600 hover:from-pink-600 hover:to-pink-700 transition px-6 py-2 rounded-xl text-white font-bold shadow-lg border border-pink-400">
                    {{ isset($siswa) ? 'Update' : 'Simpan' }}
                </button>
            </div>
        </form>
    </div>
</div>
@endsection
