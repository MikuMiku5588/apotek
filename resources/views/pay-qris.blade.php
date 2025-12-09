@extends('layouts.app')

@section('content')
  <main class="max-w-md mx-auto px-4 py-6 space-y-6">
    <div class="bg-gray-100 rounded-2xl p-6 text-center">
      <div class="mx-auto h-44 w-44 bg-white rounded-xl shadow flex items-center justify-center text-slate-700">QR CODE</div>
      <div class="mt-3 text-slate-700">Scan menggunakan aplikasi pembayaran</div>
    </div>
    <div id="summary" class="bg-slate-50 rounded-2xl p-4"></div>
    <button id="finish" class="w-full rounded-full bg-red-600 text-white py-3 font-medium transition-transform duration-200 active:scale-95 hover:shadow-md">Selesai</button>
  </main>

  <script>
    const params = new URLSearchParams(location.search)
    const name = params.get('n') || 'Produk'
    const qty = Number(params.get('q') || '1')
    const amount = Number(params.get('a') || '0')
    const summary = document.getElementById('summary')
    summary.innerHTML = `<div class="flex justify-between"><span>${name} × ${qty}</span><span>Rp ${amount.toLocaleString('id-ID')}</span></div>`
    document.getElementById('finish')?.addEventListener('click', () => {
      const q = new URLSearchParams({ m: 'qris', n: name, q: String(qty), a: String(amount), s: 'success' })
      location.href = `{{ url('/receipt') }}?${q}`
    })
  </script>
@endsection
