@extends('layouts.app')

@section('content')
  <main class="max-w-md mx-auto px-4 py-6 space-y-6">
    <h2 id="title" class="text-slate-900 font-semibold"></h2>
    <div id="walletBox" class="rounded-2xl bg-gray-100 p-6"></div>
    <div id="summary" class="bg-slate-50 rounded-2xl p-4"></div>
    <button id="finish" class="w-full rounded-full bg-red-600 text-white py-3 font-medium transition-transform duration-200 active:scale-95 hover:shadow-md">Selesai</button>
  </main>

  <script>
    const params = new URLSearchParams(location.search)
    const method = params.get('m') || 'ewallet:DANA'
    const name = params.get('n') || 'Produk'
    const qty = Number(params.get('q') || '1')
    const amount = Number(params.get('a') || '0')
    const brand = method.split(':')[1]
    document.getElementById('title').textContent = `E‑Wallet (${brand})`
    const walletBox = document.getElementById('walletBox')
    walletBox.innerHTML = `<div class="text-slate-800">Bayar menggunakan ${brand}</div><div class="mt-2 text-slate-700 text-sm">Buka aplikasi ${brand} dan selesaikan pembayaran.</div>`
    const summary = document.getElementById('summary')
    summary.innerHTML = `<div class="flex justify-between"><span>${name} × ${qty}</span><span>Rp ${amount.toLocaleString('id-ID')}</span></div>`
    document.getElementById('finish')?.addEventListener('click', () => {
      const q = new URLSearchParams({ m: method, n: name, q: String(qty), a: String(amount), s: 'success' })
      location.href = `{{ url('/receipt') }}?${q}`
    })
  </script>
@endsection
