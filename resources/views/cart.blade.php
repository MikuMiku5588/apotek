@extends('layouts.app')

@section('content')
  <main class="max-w-md mx-auto px-4 py-6 space-y-4">
    <section class="rounded-2xl bg-slate-50 p-4">
      <div id="empty" class="text-slate-600">Keranjang kosong</div>
      <div id="list" class="space-y-3"></div>
      <div id="total" class="mt-4 flex justify-between font-semibold"></div>
      <div class="mt-4 grid grid-cols-3 gap-3">
        <button id="clearBtn" class="rounded-full bg-slate-200 text-slate-800 py-3 transition-transform active:scale-95 hover:shadow">Kosongkan</button>
        <a href="{{ url('/') }}" class="rounded-full bg-slate-200 text-slate-800 py-3 text-center transition-transform active:scale-95 hover:shadow">Belanja Lagi</a>
        <button id="payAllBtn" class="rounded-full bg-red-600 text-white py-3 transition-transform active:scale-95 hover:shadow">Bayar Semua</button>
      </div>
    </section>
  </main>

  <script>
    const money = (n) => 'Rp ' + Number(n||0).toLocaleString('id-ID')
    const read = () => { try { return JSON.parse(localStorage.getItem('cart')||'[]') } catch { return [] } }
    const write = (items) => localStorage.setItem('cart', JSON.stringify(items))
    const render = () => {
      const items = read()
      const empty = document.getElementById('empty')
      const list = document.getElementById('list')
      const total = document.getElementById('total')
      if (!items.length) {
        empty.classList.remove('hidden')
        list.innerHTML = ''
        total.innerHTML = ''
        document.getElementById('payAllBtn')?.classList.add('hidden')
        return
      }
      empty.classList.add('hidden')
      document.getElementById('payAllBtn')?.classList.remove('hidden')
      list.innerHTML = items.map((it, idx) => `
        <div class=\"flex items-center justify-between rounded-xl bg-white shadow-sm ring-1 ring-slate-200 p-3\">
          <div>
            <div class=\"font-medium\">${it.name}</div>
            <div class=\"text-slate-700 text-sm\">${money(it.price)} × ${it.qty}</div>
          </div>
          <div class=\"flex items-center gap-2\">
            <button data-idx=\"${idx}\" data-act=\"minus\" class=\"h-8 w-8 rounded-full bg-slate-200 text-slate-700 flex items-center justify-center\">−</button>
            <button data-idx=\"${idx}\" data-act=\"plus\" class=\"h-8 w-8 rounded-full bg-slate-200 text-slate-700 flex items-center justify-center\">+</button>
            <button data-idx=\"${idx}\" data-act=\"remove\" class=\"h-8 w-8 rounded-full bg-red-600 text-white flex items-center justify-center\">×</button>
          </div>
        </div>
      `).join('')
      const sum = items.reduce((a,b) => a + (b.price*b.qty), 0)
      total.innerHTML = `<span>Total</span><span>${money(sum)}</span>`
      const payAll = document.getElementById('payAllBtn')
      if (payAll) {
        payAll.onclick = () => {
          const itemsNow = read()
          if (!itemsNow.length) { alert('Keranjang kosong'); return }
          const totalNow = itemsNow.reduce((a,b) => a + (b.price*b.qty), 0)
          const q = new URLSearchParams({ n: 'Keranjang', a: String(totalNow), q: '1' })
          location.href = `{{ url('/pay') }}?${q}`
        }
      }
      list.querySelectorAll('button[data-act]').forEach(btn => {
        btn.addEventListener('click', () => {
          const act = btn.getAttribute('data-act')
          const idx = Number(btn.getAttribute('data-idx'))
          const arr = read()
          const it = arr[idx]
          if (!it) return
          if (act === 'minus') it.qty = Math.max(1, it.qty - 1)
          else if (act === 'plus') it.qty += 1
          else if (act === 'remove') arr.splice(idx,1)
          write(arr)
          render()
        })
      })
    }
    document.getElementById('clearBtn')?.addEventListener('click', () => { write([]); render() })
    render()
  </script>
@endsection
