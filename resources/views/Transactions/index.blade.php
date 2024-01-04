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
                    <x-primary-button tag="a" href="{{ route('Transactions.print')}}" target='blank'>Cetak PDF</x-primary-button>
                    <x-table>
                        <x-slot name="header">
                            <tr>
                                <th>No</th>
                                <th>Tanggal Transaksi</th>
                                <th>Produk ID</th>
                                <th>Jumlah</th>
                                <th>Total Harga</th>
                            </tr>
                        </x-slot>
                        @php $num=1; @endphp
                        @foreach($transactions as $transaction)
                         <tr>
                            <td>{{ $num++ }}</td>
                            <td>{{ $transaction->tanggal_transaksi }}</td>
                            <td>{{ $transaction->produk_id }}</td>
                            <td>{{ $transaction->jumlah }}</td>
                            <td>{{ $transaction->total_harga }}</td>
                        </tr>
                    @endforeach
                    </x-table>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>