<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
             {{ __('Transaksi') }}
        </h2>
    </x-slot>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">

                    <form method="post" action="{{ route('transaction.store') }}" enctype="multipart/form-data" class="mt-6 space-y-6">
            @csrf
    <div class="max-w-xl">
        <x-input-label for="tanggal_transaksi" value="Tanggal Transaksi" />
        <x-text-input id="tanggal_transaksi" type="date" name="tanggal_transaksi" class="mt-1 block w-full" value="{{ old('tanggal_transaksi')}}"
            required />
        <x-input-error class="mt-2" :messages="$errors->get('tanggal_transaksi')" />
    </div>
    <div class="max-w-xl">
        <x-input-label for="product" value="Produk" />
        <x-select-input id="product" name="id_produk" class="mt-1 block w-full" required>
            <option value="">Open this select menu</option>
            @foreach($products as $key => $value)
                @if(old('id_produk') == $key)
                    <option value="{{ $key }}" selected>{{$value }}</option>
                @else
                    <option value="{{ $key }}" selected>{{ $value}}</option>
                @endif
            @endforeach
        </x-select-input>
    </div>
    <div class="max-w-xl">
        <x-input-label for="harga" value="Harga" />
        <x-text-input id="harga" type="number" name="harga" class="mt-1 block w-full" value="{{ old('harga_satuan')}}"
            required />
        <x-input-error class="mt-2" :messages="$errors->get('harga')" />
    </div>
    <div class="max-w-xl">
        <x-input-label for="jumlah" value="Jumlah" />
        <x-text-input id="jumlah" type="number" name="jumlah" class="mt-1 block w-full" value="{{ old('jumlah')}}"
            required />
        <x-input-error class="mt-2" :messages="$errors->get('jumlah')" />
    </div>
    <div class="max-w-xl">
        <x-input-label for="total_harga" value="Total Harga" />
        <x-text-input id="total_harga" type="number" name="total_harga" class="mt-1 block w-full" value="{{ old('total_harga')}}"
            required />
        <x-input-error class="mt-2" :messages="$errors->get('total_harga')" />
    </div>
    <div class="max-w-xl">
        <x-input-label for="bayar" value="Bayar" />
        <x-text-input id="bayar" type="number" name="bayar" class="mt-1 block w-full" value="{{ old('bayar')}}" required />
        <x-input-error class="mt-2" :messages="$errors->get('bayar')" />
    </div>
    <div class="max-w-xl">
        <x-input-label for="kembalian" value="Kembalian" />
        <x-text-input id="kembalian" type="number" name="kembalian" class="mt-1 block w-full" value="{{ old('kembalian')}}" required />
        <x-input-error class="mt-2" :messages="$errors->get('kembalian')" />
    </div>
    
    
    <x-secondary-button tag="a" href="{{ route('transaction') }}">Cancel</x-secondary-button>
    <x-primary-button name="save_and_create" value="true">Save & Add Another</x-primary-button>
    <x-primary-button name="save" value="true">Save</x-primary-button>
</form>
</div>
</div>
</div>
</div>
<script>
        function calculate() {
            var harga = parseFloat(document.getElementById('harga').value) || 0;
            var jumlah = parseFloat(document.getElementById('jumlah').value) || 0;
            var totalHarga = harga * jumlah;

            document.getElementById('total_harga').value = totalHarga;

            var bayar = parseFloat(document.getElementById('bayar').value) || 0;
            var kembalian = bayar - totalHarga;

            document.getElementById('kembalian').value = kembalian;
        }

        // Menjalankan fungsi calculate() setiap kali input berubah
        document.getElementById('harga').addEventListener('input', calculate);
        document.getElementById('jumlah').addEventListener('input', calculate);
        document.getElementById('bayar').addEventListener('input', calculate);
    </script>
</x-app-layout>