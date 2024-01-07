<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Barang Masuk') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <!-- CONTENT HERE -->
                    <x-primary-button tag="a" href="{{ route('incoming.create')}}">Tambah Data Produk Masuk</x-primary-button>
                    <br/><br/>

                    <x-table>
                        <x-slot name="header">
                            <tr>
                                <th>No</th>
                                <th>Tanggal</th>
                                <th>Produk</th>
                                <th>Jumlah</th>
                                <th>Biaya</th>
                            </tr>
                        </x-slot>
                        @php $num=1; @endphp
                        @foreach($products as $in)
                         <tr>
                            <td>{{ $num++ }}</td>
                            <td>{{ $in->tanggal }}
                            <td>{{ $in->product->nama_produk }}
                            <td>{{ $in->jumlah }}</td>
                            <td>{{ $in->biaya }}</td>
                        </tr>
                    @endforeach
                    </x-table>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
                