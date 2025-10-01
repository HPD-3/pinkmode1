@extends('layouts.app')

@section('content')
<div class="flex justify-center items-center min-h-[70vh]">
    <div class="w-full max-w-7xl  bg-pink-500 p-10 rounded-3xl shadow-2xl backdrop-blur-2xl border border-pink-300">
        <h1 class="text-3xl font-extrabold text-pink-300 mb-8 text-center tracking-wide drop-shadow-lg">Daftar Siswa</h1>



        <!-- Tabel -->
        <div class="overflow-x-auto rounded-2xl shadow-inner">
            <table class="w-full border border-pink-300 text-base rounded-2xl overflow-hidden bg-white/80" id="myTable">
                <thead>
                    <tr class="bg-pink-600/90 text-pink-50">
                        <th class="border border-pink-300 px-4 py-3 text-left">NISN</th>
                        <th class="border border-pink-300 px-4 py-3 text-left">Nama</th>
                        <th class="border border-pink-300 px-4 py-3 text-left">Jurusan</th>
                        <th class="border border-pink-300 px-4 py-3 text-left">Angkatan</th>
                        <th class="border border-pink-300 px-4 py-3 text-left">No HP</th>
                        <th class="border border-pink-300 px-4 py-3 text-left">Alamat</th>
                        <th class="border border-pink-300 px-4 py-3 text-center">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse($data as $siswa)
                    <tr class="hover:bg-pink-100/60 transition bg-white even:bg-pink-50">
                        <td class="border border-pink-200 px-4 py-2 text-gray-900">{{ $siswa->nisn }}</td>
                        <td class="border border-pink-200 px-4 py-2 text-gray-900">{{ $siswa->nama_lengkap }}</td>
                        <td class="border border-pink-200 px-4 py-2 text-gray-900">{{ $siswa->jurusan }}</td>
                        <td class="border border-pink-200 px-4 py-2 text-gray-900">{{ $siswa->angkatan }}</td>
                        <td class="border border-pink-200 px-4 py-2 text-gray-900">{{ $siswa->no_hp }}</td>
                        <td class="border border-pink-200 px-4 py-2 text-gray-900">{{ $siswa->alamat }}</td>
                        <td class="border border-pink-200 px-4 py-2 text-center space-x-2">
                            <a href="{{ route('siswa.show', $siswa->id) }}" 
                               class="bg-green-500 hover:bg-green-600 text-white px-3 py-1 rounded-lg shadow transition">
                                Lihat
                            </a>
                            <a href="{{ route('siswa.edit', $siswa->id) }}" 
                               class="bg-yellow-400 hover:bg-yellow-500 text-white px-3 py-1 rounded-lg shadow transition">
                                Edit
                            </a>
                            <form action="{{ route('siswa.destroy', $siswa->id) }}" method="POST" class="inline" 
                                  onsubmit="return confirm('Yakin mau hapus data ini?')">
                                @csrf @method('DELETE')
                                <button class="bg-red-500 hover:bg-red-600 text-white px-3 py-1 rounded-lg shadow transition">
                                    Hapus
                                </button>
                            </form>
                        </td>
                    </tr>
                    @empty
                    <tr>
                        <td colspan="7" class="text-center py-6 text-pink-400 font-semibold">Tidak ada data siswa</td>
                    </tr>
                    @endforelse
                </tbody>
            </table>
        </div>

        <!-- Pagination -->
        <div class="mt-6 flex justify-center text-pink-700">
            {{ $data->links() }}
        </div>
    </div>
</div>
@endsection
