<!DOCTYPE html>
<html lang="id">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Keranjang</title>
    <script src="https://cdn.tailwindcss.com"></script>
  </head>
  <body class="bg-white text-slate-800">
    <header class="bg-red-600">
      <div class="max-w-7xl mx-auto px-4 py-4 flex items-center justify-between">
        <div class="h-10 w-10 rounded-full bg-white flex items-center justify-center"><span class="text-red-600 font-semibold">AP</span></div>
        <button onclick="history.back()" class="inline-flex items-center gap-2 text-white rounded-full px-3 py-1 ring-1 ring-white/50 hover:bg-white/10 transition-transform active:scale-95">
          <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-5 h-5"><path d="M15.75 19.5 8.25 12l7.5-7.5" /></svg>
          <span>Kembali</span>
        </button>
      </div>
      <div class="h-1 bg-sky-400"></div>
    </header>

    <main class="max-w-md mx-auto px-4 py-6 space-y-4">
      <section class="rounded-2xl bg-slate-50 p-4">
        <div id="empty" class="text-slate-600">Keranjang kosong</div>
        <div id="list" class="space-y-3"></div>
        <div id="total" class="mt-4 flex justify-between font-semibold"></div>
        <div class="mt-4 grid grid-cols-3 gap-3">
          <button id="clearBtn" class="rounded-full bg-slate-200 text-slate-800 py-3 transition-transform active:scale-95 hover:shadow">Kosongkan</button>
          <a href="<?php echo e(route('index')); ?>" class="rounded-full bg-slate-200 text-slate-800 py-3 text-center transition-transform active:scale-95 hover:shadow">Belanja Lagi</a>
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
              <button data-idx=\"${idx}\" data-act=\"minus\" class=\"h-8 w-8 rounded-full bg-slate-200 text-slate-700 flex items-center justify-center leading-none\" aria-label=\"Kurangi\">
                <svg xmlns=\"http://www.w3.org/2000/svg\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\" stroke-linecap=\"round\" class=\"w-4 h-4\"><path d=\"M5 12h14\"/></svg>
              </button>
              <button data-idx=\"${idx}\" data-act=\"plus\" class=\"h-8 w-8 rounded-full bg-slate-200 text-slate-700 flex items-center justify-center leading-none\" aria-label=\"Tambah\">
                <svg xmlns=\"http://www.w3.org/2000/svg\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\" stroke-linecap=\"round\" class=\"w-4 h-4\"><path d=\"M12 5v14\"/><path d=\"M5 12h14\"/></svg>
              </button>
              <button data-idx=\"${idx}\" data-act=\"remove\" class=\"h-8 w-8 rounded-full bg-red-600 text-white flex items-center justify-center leading-none\" aria-label=\"Hapus\">
                <svg xmlns=\"http://www.w3.org/2000/svg\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\" stroke-linecap=\"round\" class=\"w-4 h-4\"><path d=\"M6 6l12 12\"/><path d=\"M18 6l-12 12\"/></svg>
              </button>
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
            const payUrl = "<?php echo e(route('pay')); ?>"
            location.href = payUrl + '?' + q
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
  </body>
  </html>
<?php /**PATH C:\Users\MyBook Hype\Documents\projeks\laravel12_breeze\resources\views/cart.blade.php ENDPATH**/ ?>