@csrf

@if ($mode === 'edit')
    @method('PUT')
@endif

<div class="grid grid-cols-1 gap-6 md:grid-cols-2">
    <div>
        <label for="name" class="mb-2 block text-sm font-semibold text-gray-700">
            Nama Produk <span class="text-red-500">*</span>
        </label>
        
        <input type="text"
            id="name"
            name="name"
            value="{{ old('name', $product->name) }}"
            class="w-full rounded-xl border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500"
            placeholder="Contoh: Laptop Lenovo">
        
        @error('name')
            <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
        @enderror
    </div>
    
    <div>
        <label for="category" class="mb-2 block text-sm font-semibold text-gray-700">
            Kategori
        </label>
        
        <input type="text"
            id="category"
            name="category"
            value="{{ old('category', $product->category) }}"
            class="w-full rounded-xl border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500"
            placeholder="Contoh: Elektronik">
            
        @error('category')
            <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
        @enderror
    </div>
        
    <div>
        <label for="stock" class="mb-2 block text-sm font-semibold text-gray-700">
            Stok <span class="text-red-500">*</span>
        </label>
            
        <input type="number"
            id="stock"
            name="stock"
            value="{{ old('stock', $product->stock ?? 0) }}"
            min="0"
            class="w-full rounded-xl border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500"                placeholder="Contoh: 10">
                
        @error('stock')
            <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
        @enderror
    </div>
    
    <div>
        <label for="price" class="mb-2 block text-sm font-semibold text-gray-700">
            Harga <span class="text-red-500">*</span>
        </label>
        
        <input type="number"
            id="price"
            name="price"
            value="{{ old('price', $product->price ?? 0) }}"
            min="0"
            step="0.01"
            class="w-full rounded-xl border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500"
            placeholder="Contoh: 2500000">
        
        @error('price')
            <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
        @enderror
    </div>
</div>

<div class="mt-6">
    <label for="description" class="mb-2 block text-sm font-semibold text-gray-700">
        Deskripsi
    </label>
    
    <textarea id="description"
            name="description"
            rows="5"
            class="w-full rounded-xl border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500"
            placeholder="Tulis deskripsi singkat produk...">{{old('description', $product->description) }}</textarea>
    
    @error('description')
        <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
    @enderror
</div>

<div class="mt-8 flex flex-col-reverse gap-3 sm:flex-row sm:justify-end">
    <a href="{{ route('products.index') }}"
        class="rounded-xl bg-gray-100 px-5 py-3 text-center text-sm font-semibold text-gray-700 transition hover:bg-gray-200">
        Batal
    </a>
    
    <button type="submit"
        class="rounded-xl bg-indigo-600 px-5 py-3 text-sm font-semibold text-white shadow-lg transition hover:bg-indigo-700">
        {{ $mode === 'edit' ? 'Update Produk' : 'Simpan Produk' }}
    </button>
</div>