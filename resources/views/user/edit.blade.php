<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Edit Book') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <form action="{{ route('user.books.update', $book->id) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')

                    <div class="mb-4">
                        <label for="judul" class="block text-sm font-medium text-gray-700">Judul Buku</label>
                        <input type="text" name="judul" id="judul" value="{{ old('judul', $book->judul) }}" class="mt-1 block w-full" required>
                    </div>

                    <div class="mb-4">
                        <label for="deskripsi" class="block text-sm font-medium text-gray-700">Deskripsi</label>
                        <textarea name="deskripsi" id="deskripsi" class="mt-1 block w-full" required>{{ old('deskripsi', $book->deskripsi) }}</textarea>
                    </div>

                    <div class="mb-4">
                        <label for="kategori" class="block text-sm font-medium text-gray-700">Kategori</label>
                        <select name="kategori" id="kategori" class="mt-1 block w-full" required>
                            <option value="fiksi" {{ old('kategori', $book->kategori) == 'fiksi' ? 'selected' : '' }}>Fiksi</option>
                            <option value="Sains" {{ old('kategori', $book->kategori) == 'Sains' ? 'selected' : '' }}>Science</option>
                            <option value="Novel" {{ old('kategori', $book->kategori) == 'Novel' ? 'selected' : '' }}>Novel</option>
                            <option value="Dongeng" {{ old('kategori', $book->kategori) == 'Dongeng' ? 'selected' : '' }}>Dongeng</option>
                            <option value="Biografi" {{ old('kategori', $book->kategori) == 'Biografi' ? 'selected' : '' }}>Biografi</option>
                        </select>
                    </div>

                    <div class="mb-4">
                        <label for="jumlah" class="block text-sm font-medium text-gray-700">Jumlah</label>
                        <input type="number" name="jumlah" id="jumlah" value="{{ old('jumlah', $book->jumlah) }}" class="mt-1 block w-full" required>
                    </div>

                    <div class="mb-4">
                        <label for="filebuku" class="block text-sm font-medium text-gray-700">Upload File</label>
                        <input type="file" name="filebuku" id="filebuku" class="mt-1 block w-full">
                    </div>

                    <div class="mb-4">
                        <label for="gambar" class="block text-sm font-medium text-gray-700">Upload Gambar</label>
                        <input type="file" name="gambar" id="gambar" class="mt-1 block w-full">
                    </div>

                    <button type="submit" class="px-4 py-2 bg-blue-500 text-white rounded">Update</button>
                </form>
            </div>
        </div>
    </div>
</x-app-layout>
