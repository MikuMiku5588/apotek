@extends('layouts.app')

@section('content')
  <main class="max-w-md mx-auto px-4 py-6 space-y-6">
    <h2 id="title" class="text-slate-900 font-semibold"></h2>
    <div class="rounded-2xl bg-gray-100 p-6">
      <div id="vaLabel" class="text-slate-800"></div>
      <div id="va" class="mt-3 text-2xl font-bold tracking-wider"></div>
      <div class="mt-2 text-slate-700 text-sm">Gunakan nomor Virtual Account untuk melakukan pembayaran.</div>
    </div>
    <div id="summary" class="bg-slate-50 rounded-2xl p-4"></div>
    <button id="finish" class="w-full rounded-full bg-red-600 text-white py-3 font-medium transition-transform duration-200 active:scale-95 hover:shadow-md">Selesai</button>
  </main>

  <script>
    const params = new URLSearchParams(location.search)
    const method = params.get('m') || 'bank:BCA'
    const name = params.get('n') || 'Produk'
    const qty = Number(params.get('q') || '1')
    const amount = Number(params.get('a') || '0')
    const bank = method.split(':')[1]
    document.getElementById('title').textContent = `Virtual Bank (${bank})`
    document.getElementById('vaLabel').textContent = `Virtual Account ${bank}`
    const vaNumber = `${Math.floor(100000 + Math.random()*900000)}${Math.floor(100000 + Math.random()*900000)}`
    document.getElementById('va').textContent = vaNumber
    const summary = document.getElementById('summary')
    summary.innerHTML = `<div class="flex justify-between"><span>${name} × ${qty}</span><span>Rp ${amount.toLocaleString('id-ID')}</span></div>`
    document.getElementById('finish')?.addEventListener('click', () => {
      const q = new URLSearchParams({ m: method, n: name, q: String(qty), a: String(amount), s: 'success', va: vaNumber })
      location.href = `{{ url('/receipt') }}?${q}`
    })
  </script>
@endsection
