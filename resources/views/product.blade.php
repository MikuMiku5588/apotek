@extends('layouts.app')

@section('content')
  <main class="max-w-md mx-auto px-4 py-6 space-y-4">
    <section class="bg-red-700 text-white rounded-2xl p-4 space-y-4">
      <div class="bg-gray-300 rounded-xl h-44 flex items-center justify-center text-slate-700">gambar produk</div>
      <div class="space-y-1">
        <div class="text-white">nama obat</div>
        <div class="text-white">Rp.</div>
        <div class="text-white">stok</div>
      </div>
    </section>

    <section class="bg-gray-300 rounded-2xl p-4">
      <div class="text-slate-800 font-medium">Deskripsi & Manfaat</div>
      <p class="mt-2 text-slate-700 text-sm">Tulis deskripsi produk di sini.</p>
    </section>

    <div class="pt-2 grid grid-cols-2 gap-3">
      <a href="{{ url('/pay') }}?n=Brufen%20100mg%20%2F%205ml%20Syrup&p=3000&q=1" class="block w-full">
        <div class="w-full rounded-full bg-red-600 text-white py-3 text-center font-medium transition-transform duration-200 ease-out active:scale-95 hover:shadow-md">Beli</div>
      </a>
      <button id="addCartBtn" class="w-full rounded-full bg-slate-200 text-slate-800 py-3 font-medium transition-transform duration-200 ease-out active:scale-95 hover:shadow-md">Masukan ke Keranjang</button>
    </div>
  </main>
  <script>
    const addCartBtn = document.getElementById('addCartBtn')
    const read = () => { try { return JSON.parse(localStorage.getItem('cart')||'[]') } catch { return [] } }
    const write = (items) => localStorage.setItem('cart', JSON.stringify(items))
    const item = { name: 'Brufen 100mg / 5ml Syrup', price: 3000, qty: 1 }
    addCartBtn?.addEventListener('click', () => {
      const arr = read()
      const idx = arr.findIndex(i => i.name === item.name)
      if (idx >= 0) arr[idx].qty += 1
      else arr.push(item)
      write(arr)
      window.location.href = '{{ url('/cart') }}'
    })
  </script>
@endsection
