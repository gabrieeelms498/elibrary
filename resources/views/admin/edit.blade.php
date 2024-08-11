<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Edit Book') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg" style="padding: 30px">
                <form action="{{ route('admin.books.update', $book->id) }}" method="POST" enctype="multipart/form-data" class="max-w-sm mx-auto">
                    @csrf
                    @method('PUT')

                    <div class="mb-4">
                        <label for="judul" style="font-size: 18px" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Book Title</label>
                        <input type="text" name="judul" id="judul" value="{{ old('judul', $book->judul) }}" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" required>
                    </div>

                    <div class="mb-4">
                        <label for="deskripsi" style="font-size: 18px" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Description</label>
                        <input type="text" name="deskripsi" id="deskripsi" value="{{ old('deskripsi', $book->deskripsi) }}" class="block w-full p-4 text-gray-900 border border-gray-300 rounded-lg bg-gray-50 text-base focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" required>
                    </div>

                    <div class="mb-4">
                        <label for="kategori" style="font-size: 18px" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Select Categories</label>
                        <select id="kategori" name="kategori" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                            <option value="Fiksi" {{ old('kategori', $book->kategori) == 'Fiksi' ? 'selected' : '' }}>Fiksi</option>
                            <option value="Sains" {{ old('kategori', $book->kategori) == 'Sains' ? 'selected' : '' }}>Science</option>
                            <option value="Novel" {{ old('kategori', $book->kategori) == 'Novel' ? 'selected' : '' }}>Novel</option>
                            <option value="Dongeng" {{ old('kategori', $book->kategori) == 'Dongeng' ? 'selected' : '' }}>Dongeng</option>
                            <option value="Biografi" {{ old('kategori', $book->kategori) == 'Biografi' ? 'selected' : '' }}>Biografi</option>
                        </select>
                    </div>

                    <div class="mb-4">
                        <label for="jumlah" style="font-size: 18px" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Quantity</label>
                        <input type="number" name="jumlah" id="jumlah" value="{{ old('jumlah', $book->jumlah) }}" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="0" required>
                    </div>

                    <div class="mb-4">
                        <label for="filebuku" style="font-size: 18px;" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Upload File</label>
                        <input type="file" name="filebuku" id="filebuku" class="block w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400">
                    </div>

                    <div class="mb-4">
                        <label for="gambar" style="font-size: 18px; " class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Upload Picture</label>
                        <input type="file" name="gambar" id="gambar" class="block w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400">
                    </div>

                    <button type="submit" class="text-gray-900 bg-white border border-gray-300 focus:outline-none hover:bg-gray-100 focus:ring-4 focus:ring-gray-100 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:bg-gray-800 dark:text-white dark:border-gray-600 dark:hover:bg-gray-700 dark:hover:border-gray-600 dark:focus:ring-gray-700">Update</button>
                </form>
            </div>
        </div>
    </div>
</x-app-layout>
