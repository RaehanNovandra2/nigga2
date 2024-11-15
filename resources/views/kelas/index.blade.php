@extends('layout')

@section('content')
    <div class="mt-10 mx-4 md:mx-auto max-w-7xl p-6 bg-white rounded-lg shadow-lg">
        <h2 class="text-2xl font-semibold text-gray-800 mb-6">Daftar Mata Pelajaran</h2>

        <div class="mb-4 text-right">
            <a href="{{ route('mapel.create') }}"
               class="inline-flex items-center px-4 py-2 bg-blue-600 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-blue-700 focus:outline-none focus:border-blue-700 focus:ring focus:ring-blue-300 active:bg-blue-600 disabled:opacity-25 transition">
               Tambah Mapel
            </a>
        </div>

        @if ($message = Session::get('success'))
            <p class="mb-4 text-green-600 text-sm font-medium">{{ $message }}</p>
        @endif

        <div class="overflow-x-auto">
            <table class="min-w-full divide-y divide-gray-200">
                <thead class="bg-gray-50">
                    <tr>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">No</th>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Nama Mapel</th>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Aksi</th>
                    </tr>
                </thead>
                @foreach ($kelas as $m)
                <tbody class="bg-white divide-y divide-gray-200">
                    <tr class="hover:bg-gray-100">
                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">{{ $loop->iteration }}</td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">{{ $m->nama_mapel }}</td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                            <a href="{{ route('mapel.edit', $m->id) }}"
                               class="text-blue-600 hover:text-blue-900">Edit</a>
                            <form action="{{ route('mapel.destroy', $m->id) }}" method="POST" style="display:inline;">
                                @csrf
                                @method('DELETE')
                                
                                <button type="submit" class="text-red-600 hover:text-red-900 ml-4">Hapus</button>
                            </form>
                        </td>
                    </tr>
                </tbody>
                @endforeach
            </table>
        </div>
    </div>
@endsection
