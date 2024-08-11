<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Your Book List') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <form method="GET" action="{{ route('user.library') }}" class="mb-4">
                    <label for="kategori" class="block text-sm font-medium text-gray-700">Filter Kategori:</label>
                    <select name="kategori" id="kategori" class="mt-1 block w-full" style="width:100px">
                        <option value="">All Categories</option>
                        <option value="fiksi" {{ request('kategori') === 'fiksi' ? 'selected' : '' }}>Fiksi</option>
                        <option value="sains" {{ request('kategori') === 'sains' ? 'selected' : '' }}>Science</option>
                        <option value="novel" {{ request('kategori') === 'novel' ? 'selected' : '' }}>Novel</option>
                        <option value="dongeng" {{ request('kategori') === 'dongeng' ? 'selected' : '' }}>Dongeng</option>
                        <option value="biografi" {{ request('kategori') === 'biografi' ? 'selected' : '' }}>Biografi</option>
                    </select>
                    <button type="submit" class="px-4 py-2 bg-blue-500 text-white rounded mt-2">Filter</button>
                </form>
                <table class="w-full">
                    <thead>
                        <tr>
                            <th>Judul</th>
                            <th>Deskripsi</th>
                            <th>Jumlah</th>
                            <th>Kategori</th>
                            <th>Gambar</th>
                            <th>File</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($books as $book)
                            <tr>
                                <td>{{ $book->judul }}</td>
                                <td>{{ $book->deskripsi }}</td>
                                <td>{{ $book->jumlah }}</td>
                                <td>{{ $book->kategori }}</td>
                                <td>
                                    <img src="{{ Storage::url($book->gambar) }}" alt="{{ $book->judul }}" style="width:100px; height:100px;">
                                </td>
                                <td>
                                    <a href="{{ Storage::url($book->filebuku) }}" target="_blank">View File</a>
                                </td>
                                <td style="width: 100px;">
                                    <a href="{{ route('user.books.edit', $book->id) }}">Edit</a>
                                    <form action="{{ route('user.books.delete', $book->id) }}" method="POST" style="display:inline;">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="text-red-500">Delete</button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>

                {{ $books->appends(request()->query())->links() }}
            </div>
        </div>
    </div>
</x-app-layout>
