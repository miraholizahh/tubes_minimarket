<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-white leading-tight">
            {{ __('Laporan Transaksi') }}
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
                            <th class="border px-4 py-2 text-white">No</th>
                            <th class="border px-4 py-2 text-white">Total Pendapatan</th>
                            <th class="border px-4 py-2 text-white">Total Pengeluaran</th>
                        </tr>
                    </thead>
                    <tbody>
                        @php $num=1; @endphp
                            <tr>
                                <td class="border px-4 py-2 text-white">{{ $num++ }}</td>
                                <td class="border px-4 py-2 text-white">{{ $totalPendapatan }}</td>
                                <td class="border px-4 py-2 text-white">{{ $totalPengeluaran }}</td>
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
