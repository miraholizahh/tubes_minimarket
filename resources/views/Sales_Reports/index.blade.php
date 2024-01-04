<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Sales Report') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <!-- CONTENT HERE -->
                    <x-table>
                        <x-slot name="header">
                            <tr>
                                <th>No</th>
                                <th>Tanggal Laporan</th>
                                <th>Total Penjualan</th>
                            </tr>
                        </x-slot>
                        @php $num=1; @endphp
                        @foreach($sales_reports as $sales_report)
                         <tr>
                            <td>{{ $num++ }}</td>
                            <td>{{ $sales_report->tanggal_laporan }}</td>
                            <td>{{ $sales_report->total_penjualan }}</td>
                        </tr>
                    @endforeach
                    </x-table>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>