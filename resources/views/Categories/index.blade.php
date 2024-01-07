<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Category') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <!-- CONTENT HERE -->
                    <x-primary-button tag="a" href="{{ route('category.create')}}">Tambah Kategori</x-primary-button>
                    <x-table>
                        <x-slot name="header">
                            <tr>
                                <th>No</th>
                                <th>Code</th>
                                <th>Nama</th>
                            </tr>
                        </x-slot>
                        @php $num=1; @endphp
                        @foreach($categories as $category)
                         <tr>
                            <td>{{ $num++ }}</td>
                            <td>{{ $category->code }}</td>
                            <td>{{ $category->nama }}</td>
                        </tr>
                    @endforeach
                    </x-table>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
                