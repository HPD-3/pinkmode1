@extends('layouts.app')

@section('content')
<div class="flex justify-center items-center min-h-screen bg-transparent ">
    <div class="w-full max-w-2xl bg-white/70 p-10 rounded-3xl shadow-2xl border border-pink-200/60 backdrop-blur-2xl relative overflow-visible">
        <div class="absolute -top-8 left-1/2 -translate-x-1/2">
            <div class="w-20 h-20 rounded-full bg-gradient-to-br from-pink-400 via-pink-300 to-pink-200 shadow-lg flex items-center justify-center border-4 border-white">
                <svg class="w-10 h-10 text-white" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                    <path d="M12 14c2.21 0 4-1.79 4-4s-1.79-4-4-4-4 1.79-4 4 1.79 4 4 4zm0 2c-2.67 0-8 1.34-8 4v2h16v-2c0-2.66-5.33-4-8-4z"/>
                </svg>
            </div>
        </div>
        <h1 class="text-3xl font-extrabold mb-8 text-pink-700 text-center tracking-wide drop-shadow-lg mt-12">
            Tambah Data Siswa
        </h1>

        <form action="{{ route('siswa.store') }}" method="POST" class="space-y-6 text-gray-800">
            @csrf
            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                <div>
                    <label for="nisn" class="block text-sm font-semibold text-pink-900 mb-1">NISN</label>
                    <input type="text" name="nisn" id="nisn"
                        class="w-full px-4 py-2 rounded-xl bg-white/90 text-gray-900 border border-pink-300 focus:ring-2 focus:ring-pink-400 focus:border-pink-400 focus:outline-none shadow-sm"
                        value="{{ old('nisn') }}"
                        required>
                    @error('nisn')
                        <div class="text-red-500 text-xs mt-1">{{ $message }}</div>
                    @enderror
                </div>
                <div>
                    <label for="nama_lengkap" class="block text-sm font-semibold text-pink-900 mb-1">Nama Lengkap</label>
                    <input type="text" name="nama_lengkap" id="nama_lengkap"
                        class="w-full px-4 py-2 rounded-xl bg-white/90 text-gray-900 border border-pink-300 focus:ring-2 focus:ring-pink-400 focus:border-pink-400 focus:outline-none shadow-sm"
                        value="{{ old('nama_lengkap') }}"
                        required>
                    @error('nama_lengkap')
                        <div class="text-red-500 text-xs mt-1">{{ $message }}</div>
                    @enderror
                </div>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                <div>
                    <label for="tempat_lahir" class="block text-sm font-semibold text-pink-900 mb-1">Tempat Lahir</label>
                    <input type="text" name="tempat_lahir" id="tempat_lahir"
                        class="w-full px-4 py-2 rounded-xl bg-white/90 text-gray-900 border border-pink-300 focus:ring-2 focus:ring-pink-400 focus:border-pink-400 focus:outline-none shadow-sm"
                        value="{{ old('tempat_lahir') }}"
                        required>
                    @error('tempat_lahir')
                        <div class="text-red-500 text-xs mt-1">{{ $message }}</div>
                    @enderror
                </div>
                <div>
                    <label for="tanggal_lahir" class="block text-sm font-semibold text-pink-900 mb-1">Tanggal Lahir</label>
                    <input type="date" name="tanggal_lahir" id="tanggal_lahir"
                        class="w-full px-4 py-2 rounded-xl bg-white/90 text-gray-900 border border-pink-300 focus:ring-2 focus:ring-pink-400 focus:border-pink-400 focus:outline-none shadow-sm"
                        value="{{ old('tanggal_lahir') }}">
                    @error('tanggal_lahir')
                        <div class="text-red-500 text-xs mt-1">{{ $message }}</div>
                    @enderror
                </div>
            </div>

            <div>
                <label for="alamat" class="block text-sm font-semibold text-pink-900 mb-1">Alamat</label>
                <textarea name="alamat" id="alamat" rows="2"
                    class="w-full px-4 py-2 rounded-xl bg-white/90 text-gray-900 border border-pink-300 focus:ring-2 focus:ring-pink-400 focus:border-pink-400 focus:outline-none shadow-sm" required>{{ old('alamat') }}</textarea>
                @error('alamat')
                    <div class="text-red-500 text-xs mt-1">{{ $message }}</div>
                @enderror
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                <div>
                    <label for="jurusan" class="block text-sm font-semibold text-pink-900 mb-1">Jurusan</label>
                    <input type="text" name="jurusan" id="jurusan"
                        class="w-full px-4 py-2 rounded-xl bg-white/90 text-gray-900 border border-pink-300 focus:ring-2 focus:ring-pink-400 focus:border-pink-400 focus:outline-none shadow-sm"
                        value="{{ old('jurusan') }}">
                    @error('jurusan')
                        <div class="text-red-500 text-xs mt-1">{{ $message }}</div>
                    @enderror
                </div>
                <div>
                    <label for="angkatan" class="block text-sm font-semibold text-pink-900 mb-1">Angkatan</label>
                    <input type="text" name="angkatan" id="angkatan"
                        class="w-full px-4 py-2 rounded-xl bg-white/90 text-gray-900 border border-pink-300 focus:ring-2 focus:ring-pink-400 focus:border-pink-400 focus:outline-none shadow-sm"
                        value="{{ old('angkatan') }}">
                    @error('angkatan')
                        <div class="text-red-500 text-xs mt-1">{{ $message }}</div>
                    @enderror
                </div>
            </div>

            <div>
                <label for="no_hp" class="block text-sm font-semibold text-pink-900 mb-1">No HP</label>
                <input type="text" name="no_hp" id="no_hp"
                    class="w-full px-4 py-2 rounded-xl bg-white/90 text-gray-900 border border-pink-300 focus:ring-2 focus:ring-pink-400 focus:border-pink-400 focus:outline-none shadow-sm"
                    value="{{ old('no_hp') }}">
                @error('no_hp')
                    <div class="text-red-500 text-xs mt-1">{{ $message }}</div>
                @enderror
            </div>

            <div class="flex justify-end space-x-4 pt-6">
                <a href="{{ route('siswa.index') }}"
                    class="px-5 py-2 rounded-xl border border-pink-400 text-pink-700 bg-white/80 hover:bg-pink-100 hover:text-pink-900 font-semibold shadow transition-all duration-200">
                    Kembali
                </a>
                <button type="submit"
                    class="px-6 py-2 rounded-xl bg-gradient-to-r from-pink-500 via-pink-400 to-pink-600 hover:from-pink-600 hover:to-pink-500 text-white font-bold shadow-lg transition-all duration-200">
                    Simpan
                </button>
            </div>
        </form>
    </div>
</div>
@endsection
