<x-app-layout>
    <x-slot name="header">
        <div class="flex flex-col gap-3 sm:flex-row sm:items-center sm:justify-between">
            <div>
                <h2 class="text-2xl font-bold text-gray-900">
                    Detail Produk
                </h2>
                <p class="mt-1 text-sm text-gray-500">
                    Informasi lengkap produk.
                </p>
            </div>
            
            <a href="{{ route('products.index') }}"
                class="rounded-xl bg-gray-900 px-5 py-3 text-center text-sm font-semibold text-white transition hover:bg-gray-700">
                Kembali
            </a>
        </div>
    </x-slot>
    
    <div class="py-10">
        <div class="mx-auto max-w-4xl px-4 sm:px-6 lg:px-8">
            <div class="overflow-hidden rounded-2xl bg-white shadow-sm ring-1 ring-gray-100">
                <div class="bg-gradient-to-r from-indigo-600 to-purple-600 px-8 py-8 text-white">
                    <h3 class="text-3xl font-bold">
                        {{ $product->name}}
                    </h3>
                    <p class="mt-2 text-indigo-100">
                        {{ $product->category ?? 'Tanpa kategori' }}
                    </p>
                </div>
                
                <div class="grid grid-cols-1 gap-6 p-8 md:grid-cols-3">
                    <div class="rounded-2xl bg-gray-50 p-5">
                        <p class="text-sm font-semibold text-gray-500">
                            Stok
                        </p>
                        <p class="mt-2 text-2xl font-bold text-gray-900">
                            {{ $product->stock }}
                        </p>
                    </div>
                    
                    <div class="rounded-2xl bg-gray-50 p-5">
                        <p class="text-sm font-semibold text-gray-500">
                            Harga
                        </p>
                        <p class="mt-2 text-2xl font-bold text-gray-900">
                            Rp {{ number_format($product->price, 0, ',', '.') }}
                        </p>
                    </div>
                    
                    <div class="rounded-2xl bg-gray-50 p-5">
                        <p class="text-sm font-semibold text-gray-500">
                            Tanggal Input
                        </p>
                        <p class="mt-2 text-lg font-bold text-gray-900">
                            {{ $product->created_at->format('d M Y') }}
                        </p>
                    </div>
                </div>
                
                <div class="border-t border-gray-100 p-8">
                    <h4 class="mb-3 text-lg font-bold text-gray-900">
                        Deskripsi
                    </h4>
                    <p class="leading-relaxed text-gray-600">
                        {{ $product->description ?? 'Belum ada deskripsi.'}}
                    </p>
                </div>
                
                <div class="flex flex-col gap-3 border-t border-gray-100 bg-gray-50 px-8 py-6 sm:flex-row sm:justify-end">
                    <a href="{{ route('products.edit', $product) }}"
                        class="rounded-xl bg-yellow-400 px-5 py-3 text-center text-sm font-semibold text-yellow-950 transition hover:bg-yellow-500">
                        Edit Produk
                    </a>
                    
                    <form action="{{ route('products.destroy', $product)}}"
                            method="POST"
                            onsubmit="return confirm('Yakin ingin menghapus produk ini?')">
                        @csrf
                        @method('DELETE')
                        
                        <button type="submit"
                            class="w-full rounded-xl bg-red-600 px-5 py-3 text-sm font-semibold text-white transition hover:bg-red-700 sm:w-auto">
                            Hapus Produk
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>