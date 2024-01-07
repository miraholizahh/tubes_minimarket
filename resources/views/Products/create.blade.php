<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
             {{ __('Produk') }}
        </h2>
    </x-slot>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">

                    <form method="post" action="{{ route('product.store') }}" enctype="multipart/form-data" class="mt-6 space-y-6">
            @csrf
    <div class="max-w-xl">
        <x-input-label for="code" value="Code" />
        <x-text-input id="code" type="text" name="code" class="mt-1 block w-full" value="{{ old('code')}}"
            required />
        <x-input-error class="mt-2" :messages="$errors->get('code')" />
    </div>
    <div class="max-w-xl">
        <x-input-label for="nama_produk" value="Nama Produk" />
        <x-text-input id="nama_produk" type="text" name="nama_produk" class="mt-1 block w-full" value="{{ old('nama_produk')}}"
            required />
        <x-input-error class="mt-2" :messages="$errors->get('nama_produk')" />
    </div>
    <div class="max-w-xl">
        <x-input-label for="harga" value="Harga" />
        <x-text-input id="harga" type="text" name="harga" class="mt-1 block w-full" value="{{ old('harga')}}"
            required />
        <x-input-error class="mt-2" :messages="$errors->get('harga')" />
    </div>
    <div class="max-w-xl">
        <x-input-label for="stok" value="Stok" />
        <x-text-input id="stok" type="number" name="stok" class="mt-1 block w-full" value="{{ old('stok')}}" required />
        <x-input-error class="mt-2" :messages="$errors->get('stok')" />
    </div>
    
    <div class="max-w-xl">
        <x-input-label for="category" value="Kategori Produk" />
        <x-select-input id="category" name="kategori_id" class="mt-1 block w-full" required>
            <option value="">Open this select menu</option>
            @foreach($categories as $key => $value)
                @if(old('kategori_id') == $key)
                    <option value="{{ $key }}" selected>{{$value }}</option>
                @else
                    <option value="{{ $key }}" selected>{{ $value}}</option>
                @endif
            @endforeach
        </x-select-input>
    </div>
    <x-secondary-button tag="a" href="{{ route('product') }}">Cancel</x-secondary-button>
    <x-primary-button name="save_and_create" value="true">Save & Create Another</x-primary-button>
    <x-primary-button name="save" value="true">Save</x-primary-button>
</form>
</div>
</div>
</div>
</div>
</x-app-layout>