<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-white leading-tight">
            {{ __('Laporan Stok Produk') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg p-6">
                <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded" onclick="printLaporan()">
                    Print Laporan
                </button>
                <h3 class="text-lg font-semibold mb-4 text-white">Hari Ini: {{ \Carbon\Carbon::today()->format('d F Y') }}</h3>

                <table class="min-w-full border border-white">
                    <thead>
                        <tr>
                            <th class="border px-4 py-2 text-white">Produk</th>
                            <th class="border px-4 py-2 text-white">Terjual</th>
                            <th class="border px-4 py-2 text-white">Masuk</th>
                            <th class="border px-4 py-2 text-white">Total Transactions</th>
                            <th class="border px-4 py-2 text-white">Total Incoming</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($produkData as $produk)
                            <tr>
                                <td class="border px-4 py-2 text-white">{{ $produk->nama_produk }}</td>
                                <td class="border px-4 py-2 text-white">{{ $produk->totalTerjual }}</td>
                                <td class="border px-4 py-2 text-white">{{ $produk->totalMasuk }}</td>
                                <td class="border px-4 py-2 text-white">{{ $produk->transactions->sum('jumlah') }}</td>
                                <td class="border px-4 py-2 text-white">{{ $produk->incoming_products->sum('jumlah') }}</td>
                            </tr>
                        @endforeach
                        <tr>
                            <td class="border px-4 py-2 text-white">Total</td>
                            <td class="border px-4 py-2 text-white">{{ $totalTerjual }}</td>
                            <td class="border px-4 py-2 text-white">{{ $totalMasuk }}</td>
                            <td class="border px-4 py-2 text-white">{{ $produkData->sum(function($produk) { return $produk->transactions->sum('jumlah'); }) }}</td>
                            <td class="border px-4 py-2 text-white">{{ $produkData->sum(function($produk) { return $produk->incoming_products->sum('jumlah'); }) }}</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <script>
        function printLaporan() {
            window.print();
        }
    </script>
</x-app-layout>
