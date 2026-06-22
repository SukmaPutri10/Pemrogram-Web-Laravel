<x-app-layout>
    <x-slot name="header">
        <div>
            <h2 class="text-2xl font-bold text-gray-900">
                Edit Produk
            </h2>
            <p class="mt-1 text-sm text-gray-500">
                Perbarui data produk yang sudah tersimpan.
            </p>
        </div>
    </x-slot>
    
    <div class="py-10">
        <div class="mx-auto max-w-4xl px-4 sm:px-6 lg:px-8">
            <div class="rounded-2xl bg-white p-8 shadow-sm ring-1 ring-gray-100">
                <form action="{{ route('products.update', $product) }}" method="POST">
                    @include('products.form', ['mode' => 'edit'])
                </form>
            </div>
        </div>
    </div>
</x-app-layout>