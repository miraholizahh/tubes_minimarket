<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Transaction') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <!-- CONTENT HERE -->
                    <x-primary-button tag="a" href="{{ route('transaction.create')}}">Tambah Transaksi</x-primary-button>
                    <br/><br/>

                    <x-table>
                        <x-slot name="header">
                            <tr>
                                <th>No</th>
                                <th>Tanggal</th>
                                <th>Nama Produk</th>
                                <th>Harga</th>
                                <th>Jumlah</th>
                                <th>Total</th>
                                <th>Bayar</th>
                                <th>Kembalian<th>
                            </tr>
                        </x-slot>
                        @php $num=1; @endphp
                        @foreach($products as $transaction)
                         <tr>
                            <td>{{ $num++ }}</td>
                            <td>{{ $transaction->tanggal_transaksi }}
                            <td>{{ $transaction->product->nama_produk }}
                            <td>{{ $transaction->product->harga_jual }}
                            <td>{{ $transaction->jumlah }}
                            <td>{{ $transaction->total_harga }}</td>
                            <td>{{ $transaction->bayar }}</td>
                            <td>{{ $transaction->kembalian }}</td>
                        </tr>
                    @endforeach
                    </x-table>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>