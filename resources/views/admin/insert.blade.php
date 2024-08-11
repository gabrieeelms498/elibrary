<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Insert Book') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <form action="{{ route('admin.insert.submit') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="mb-4">
                        <label for="judul" class="block text-sm font-medium text-gray-700">Judul Buku</label>
                        <input type="text" name="judul" id="judul" class="mt-1 block w-full" required>
                    </div>
                    <div class="mb-4">
                        <label for="deskripsi" class="block text-sm font-medium text-gray-700">Deskripsi</label>
                        <input type="text" name="deskripsi" id="deskripsi" class="mt-1 block w-full" required>
                    </div>
                    <div class="mb-4">
                        <label for="kategori" class="block text-sm font-medium text-gray-700">Kategori</label>
                        <select name="kategori" id="kategori" class="mt-1 block w-full" required>
                            <option value="Fiksi">Fiksi</option>
                            <option value="Sains">Science</option>
                            <option value="Novel">Novel</option>
                            <option value="Dongeng">Dongeng</option>
                            <option value="Biografi">Biografi</option>
                        </select>
                    </div>
                    <div class="mb-4">
                        <label for="jumlah" class="block text-sm font-medium text-gray-700">Jumlah</label>
                        <input type="number" name="jumlah" id="jumlah" class="mt-1 block w-full" required>
                    </div>
                    <div class="mb-4">
                        <label for="filebuku" class="block text-sm font-medium text-gray-700">Upload File</label>
                        <input type="file" name="filebuku" id="filebuku" class="mt-1 block w-full" required>
                    </div>
                    <div class="mb-4">
                        <label for="gambar" class="block text-sm font-medium text-gray-700">Upload Gambar</label>
                        <input type="file" name="gambar" id="gambar" class="mt-1 block w-full" required>
                    </div>
                    <button type="submit" class="px-4 py-2 bg-blue-500 text-white rounded">Submit</button>
                </form>
                
            </div>
        </div>
    </div>
</x-app-layout>