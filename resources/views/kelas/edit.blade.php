@extends('layout')

@section('content')
    <div class="max-w-xl mx-auto p-6 bg-white rounded-lg shadow-lg">
        <h2 class="text-2xl font-semibold text-gray-800 mb-6">Edit Mata Pelajaran</h2>

        <form action="{{ route('mapel.update', $mapel->id) }}" method="POST" class="space-y-4">
            @csrf
            @method('PUT')

            <div>
                <label for="nama_mapel" class="block text-sm font-medium text-gray-700">Nama Mapel:</label>
                <input type="text" name="nama_mapel" value="{{ $mapel->nama_mapel }}" required
                    class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-blue-500 focus:border-blue-500 sm:text-sm">
            </div>

            <div class="text-right">
                <button type="submit"
                    class="inline-flex justify-center py-2 px-4 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-blue-600 hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500">
                    Update
                </button>
            </div>
        </form>
    </div>
@endsection
