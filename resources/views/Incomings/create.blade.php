<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
             {{ __('Produk Masuk') }}
        </h2>
    </x-slot>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">

                    <form method="post" action="{{ route('incoming.store') }}" enctype="multipart/form-data" class="mt-6 space-y-6">
            @csrf
            <div class="max-w-xl">
                <x-input-label for="tanggal" value="Tanggal" />
                <x-text-input id="tanggal" type="date" name="tanggal" class="mt-1 block w-full" value="{{ old('tanggal')}}"
                    required />
                <x-input-error class="mt-2" :messages="$errors->get('tanggal')" />
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
                <x-input-label for="jumlah" value="Jumlah" />
                <x-text-input id="jumlah" type="number" name="jumlah" class="mt-1 block w-full" value="{{ old('jumlah')}}"
                    required />
                <x-input-error class="mt-2" :messages="$errors->get('jumlah')" />
            </div>
    <div class="max-w-xl">
        <x-input-label for="biaya" value="Biaya" />
        <x-text-input id="biaya" type="number" name="biaya" class="mt-1 block w-full" value="{{ old('biaya')}}"
            required />
        <x-input-error class="mt-2" :messages="$errors->get('biaya')" />
    </div>
    <x-secondary-button tag="a" href="{{ route('incoming') }}">Cancel</x-secondary-button>
    <x-primary-button name="save_and_create" value="true">Save & Create Another</x-primary-button>
    <x-primary-button name="save" value="true">Save</x-primary-button>
</form>
</div>
</div>
</div>
</div>
</x-app-layout>