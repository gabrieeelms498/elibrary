<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Insert Book') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg" style="padding: 30px">
                <form action="{{ route('admin.insert.submit') }}" method="POST" enctype="multipart/form-data" class="max-w-sm mx-auto">
                    @csrf
                    <div class="mb-4">
                        <label for="judul" style="font-size: 18px" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Book Title</label>
                        <input type="text" name="judul" id="judul" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" required>
                    </div>
                    <div class="mb-4">
                        <label for="deskripsi" style="font-size: 18px" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Description</label>
                        <input type="text" name="deskripsi" id="deskripsi" class="block w-full p-4 text-gray-900 border border-gray-300 rounded-lg bg-gray-50 text-base focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" required>
                    </div>
                    <div class="mb-4">
                        <label for="Kategori" style="font-size: 18px" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Select Categories</label>
                        <select style="width: 250px" id="kategori" name="kategori" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                            <option value="Fiksi">Fiksi</option>
                            <option value="Sains">Science</option>
                            <option value="Novel">Novel</option>
                            <option value="Dongeng">Dongeng</option>
                            <option value="Biografi">Biografi</option>
                        </select>
                    </div>
                    <div class="mb-4">
                        <label for="jumlah" style="font-size: 18px" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Quantity</label>
                        <input type="number" style="width:250px" name="jumlah" id="jumlah" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="0" required>
                    </div>
                    <div class="mb-4">
                        <label for="filebuku" style="font-size: 18px;" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Upload File</label>
                        <input type="file" style="width:250px;" class="block w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400" name="filebuku" id="filebuku" class="mt-1 block w-full" required>
                        <p class="mt-1 text-sm text-gray-500 dark:text-gray-300" id="file_input_help">PDF File.</p>
                    </div>
                    <div class="mb-4">
                        <label for="gambar" style="font-size: 18px; " class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Upload Picture</label>
                        <input type="file" style="width:250px;" name="gambar" id="gambar" class="block w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400" name="filebuku" id="filebuku" class="mt-1 block w-full" required>
                        <p class="mt-1 text-sm text-gray-500 dark:text-gray-300" id="file_input_help">SVG, PNG, JPG or GIF (MAX. 800x400px).</p>
                    </div>
                    <button type="submit" class="text-gray-900 bg-white border border-gray-300 focus:outline-none hover:bg-gray-100 focus:ring-4 focus:ring-gray-100 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:bg-gray-800 dark:text-white dark:border-gray-600 dark:hover:bg-gray-700 dark:hover:border-gray-600 dark:focus:ring-gray-700">Submit</button>
                </form>
                
            </div>
        </div>
    </div>
</x-app-layout>