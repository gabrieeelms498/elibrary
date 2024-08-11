<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Book List') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg p-6">

                <button id="dropdownButton" data-dropdown-toggle="dropdown" class="text-white bg-gray-800 hover:bg-gray-900 focus:ring-4 focus:outline-none focus:ring-gray-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center inline-flex items-center dark:bg-gray-800 dark:hover:bg-gray-700 dark:focus:ring-gray-700 dark:border-gray-700" type="button">
                    Filter Kategori
                    <svg class="ms-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6" style="width: 12px; height: 12px;">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 4 4 4-4"/>
                    </svg>
                </button>

                <div id="dropdown" class="z-10 hidden bg-white divide-y divide-gray-100 rounded-lg shadow w-44 dark:bg-gray-700">
                    <ul class="py-2 text-sm text-gray-700 dark:text-gray-200" aria-labelledby="dropdownButton">
                        <li>
                            <a href="{{ route('user.library') }}" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">All Categories</a>
                        </li>
                        <li>
                            <a href="{{ route('user.library', ['kategori' => 'Fiksi']) }}" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Fiksi</a>
                        </li>
                        <li>
                            <a href="{{ route('user.library', ['kategori' => 'Sains']) }}" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Science</a>
                        </li>
                        <li>
                            <a href="{{ route('user.library', ['kategori' => 'Novel']) }}" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Novel</a>
                        </li>
                        <li>
                            <a href="{{ route('user.library', ['kategori' => 'Dongeng']) }}" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Dongeng</a>
                        </li>
                        <li>
                            <a href="{{ route('user.library', ['kategori' => 'Biografi']) }}" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Biografi</a>
                        </li>
                    </ul>
                </div>
                <br>

                <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
                    <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
                        <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                            <tr>
                                <th scope="col" class="px-6 py-3">Book Title</th>
                                <th scope="col" class="px-6 py-3">Description</th>
                                <th scope="col" class="px-6 py-3">Quantity</th>
                                <th scope="col" class="px-6 py-3">Categories</th>
                                <th scope="col" class="px-6 py-3">Covers</th>
                                <th scope="col" class="px-6 py-3">File</th>
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
                                        <a href="{{ Storage::url($book->filebuku) }}" target="_blank" class="font-medium text-gray-900 dark:text-white hover:underline">View File</a>
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

    <script>
        document.addEventListener('DOMContentLoaded', () => {
            const dropdownButton = document.getElementById('dropdownButton');
            const dropdownMenu = document.getElementById('dropdown');

            if (dropdownButton && dropdownMenu) {
                dropdownButton.addEventListener('click', () => {
                    dropdownMenu.classList.toggle('hidden');
                });
                document.addEventListener('click', (event) => {
                    if (!dropdownButton.contains(event.target) && !dropdownMenu.contains(event.target)) {
                        dropdownMenu.classList.add('hidden');
                    }
                });
            }
        });
    </script>
</x-app-layout>
