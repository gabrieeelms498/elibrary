<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Book List') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <form method="GET" action="{{ route('admin.books') }}" class="mb-4">
                    <label for="kategori" class="block text-sm font-medium text-gray-700">Filter Kategori:</label>
                    <select name="kategori" id="kategori" class="mt-1 block w-full" style="width:100px">
                        <option value="">All Categories</option>
                        <option value="fiksi" {{ request('kategori') === 'fiksi' ? 'selected' : '' }}>Fiksi</option>
                        <option value="sains" {{ request('kategori') === 'sains' ? 'selected' : '' }}>Science</option>
                        <option value="novel" {{ request('kategori') === 'novel' ? 'selected' : '' }}>Novel</option>
                        <option value="dongeng" {{ request('kategori') === 'dongeng' ? 'selected' : '' }}>Dongeng</option>
                        <option value="biografi" {{ request('kategori') === 'biografi' ? 'selected' : '' }}>Biografi</option>
                    </select>
                    <button type="submit" class="text-white bg-gray-800 hover:bg-gray-900 focus:outline-none focus:ring-4 focus:ring-gray-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:bg-gray-800 dark:hover:bg-gray-700 dark:focus:ring-gray-700 dark:border-gray-700">Filter</button>
                </form>
                
                <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
                    <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
                        <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                            <tr>
                                <th scope="col" class="px-6 py-3">Judul</th>
                                <th scope="col" class="px-6 py-3">Deskripsi</th>
                                <th scope="col" class="px-6 py-3">Jumlah</th>
                                <th scope="col" class="px-6 py-3">Kategori</th>
                                <th scope="col" class="px-6 py-3">Gambar</th>
                                <th scope="col" class="px-6 py-3">File</th>
                                <th scope="col" class="px-6 py-3">Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($books as $book)
                                <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                                    <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                        {{ $book->judul }}
                                    </th>
                                    <td class="px-6 py-4">{{ $book->deskripsi }}</td>
                                    <td class="px-6 py-4">{{ $book->jumlah }}</td>
                                    <td class="px-6 py-4">{{ $book->kategori }}</td>
                                    <td class="px-6 py-4">
                                        <img src="{{ Storage::url($book->gambar) }}" alt="{{ $book->judul }}" style="width:100px; height:100px;">
                                    </td>
                                    <td class="px-6 py-4">
                                        <a href="{{ Storage::url($book->filebuku) }}" target="_blank">View File</a>
                                    </td>
                                    <td class="px-6 py-4">
                                        <a href="{{ route('admin.books.edit', $book->id) }}" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Edit</a>
                                        <form action="{{ route('admin.books.delete', $book->id) }}" method="POST" style="display:inline;">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="text-red-500">Delete</button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
                

                {{ $books->appends(request()->query())->links() }}
            </div>
        </div>
    </div>
</x-app-layout>
