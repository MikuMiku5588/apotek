<!DOCTYPE html>
<html lang="id">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Detail Produk</title>
    <script src="https://cdn.tailwindcss.com"></script>
  </head>
  <body class="bg-white text-slate-800">
    <header class="bg-red-600">
      <div class="max-w-7xl mx-auto px-4 py-4 flex items-center justify-between">
        <div class="flex items-center gap-3">
          <div class="h-10 w-10 rounded-full bg-white flex items-center justify-center">
            <span class="text-red-600 font-semibold">AP</span>
          </div>
        </div>
        <div class="flex items-center gap-2">
          <button onclick="history.back()" class="inline-flex items-center gap-2 text-white rounded-full px-3 py-1 ring-1 ring-white/50 hover:bg-white/10 transition-transform active:scale-95">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-5 h-5">
              <path d="M15.75 19.5 8.25 12l7.5-7.5" />
            </svg>
            <span>Kembali</span>
          </button>
          <a href="{{ route('cart') }}" class="text-white transition-transform active:scale-95" aria-label="Keranjang">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-6 h-6">
              <path d="M7.5 3.75A2.25 2.25 0 0 0 5.25 6v.75H3a.75.75 0 0 0 0 1.5h1.5l1.05 8.4A3 3 0 0 0 8.52 19.5h7.29a3 3 0 0 0 2.97-2.58l1.14-8.58H20.25a.75.75 0 0 0 0-1.5h-2.25V6a2.25 2.25 0 0 0-2.25-2.25h-8.25Z" />
              <circle cx="9" cy="21" r="1.5" />
              <circle cx="16" cy="21" r="1.5" />
            </svg>
          </a>
        </div>
      </div>
      <div class="h-1 bg-sky-400"></div>
    </header>

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
        <a href="{{ route('pay') }}?n=Brufen%20100mg%20%2F%205ml%20Syrup&p=3000&q=1" class="block w-full">
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
        const cartUrl = "{{ route('cart') }}"
        window.location.href = cartUrl
      })
    </script>
  </body>
  </html>
