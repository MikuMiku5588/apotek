@extends('layouts.app')

@section('content')
  <main class="max-w-md mx-auto px-4 py-6 space-y-4">
    <section class="rounded-2xl bg-slate-50 p-4 space-y-2">
      <div class="text-slate-900 font-semibold">Wijaya Medika Klinik</div>
      <div id="order"></div>
      <div id="method"></div>
      <div id="status" class="text-green-600 font-medium"></div>
    </section>
    <div class="flex gap-3">
      <button id="printBtn" class="flex-1 rounded-full bg-red-600 text-white py-3 font-medium transition-transform duration-200 active:scale-95 hover:shadow-md">Cetak</button>
      <a href="{{ url('/') }}" class="flex-1 rounded-full bg-slate-200 text-slate-800 py-3 text-center font-medium transition-transform duration-200 active:scale-95 hover:shadow-md">Selesai</a>
    </div>
  </main>

  <script>
    const p = new URLSearchParams(location.search)
    const name = p.get('n') || 'Produk'
    const qty = Number(p.get('q') || '1')
    const amount = Number(p.get('a') || '0')
    const m = p.get('m') || 'qris'
    const va = p.get('va') || ''
    const s = p.get('s') || 'success'
    document.getElementById('order').textContent = `${name} × ${qty} — Rp ${amount.toLocaleString('id-ID')}`
    document.getElementById('method').textContent = `Metode: ${m}${va ? ' • VA ' + va : ''}`
    document.getElementById('status').textContent = s === 'success' ? 'Pembayaran Berhasil' : 'Menunggu Pembayaran'
    document.getElementById('printBtn')?.addEventListener('click', () => window.print())
  </script>
@endsection
