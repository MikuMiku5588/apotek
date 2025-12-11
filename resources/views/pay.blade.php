<!DOCTYPE html>
<html lang="id">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Pembayaran</title>
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

    <main class="max-w-md mx-auto px-4 py-6 space-y-6">
      <section id="summarySection" class="flex items-start gap-4">
        <div class="bg-gray-300 rounded-xl h-24 w-24 flex items-center justify-center text-slate-700 text-xs">gambar<br/>produk</div>
        <div class="flex-1">
          <div id="prodName" class="text-slate-900 font-medium">nama obat</div>
          <div id="prodPrice" class="text-slate-700">harga obat</div>
        </div>
        <div id="qtyControls" class="flex items-center gap-3">
          <button id="qtyMinus" class="h-8 w-8 rounded-full bg-slate-200 text-slate-700 flex items-center justify-center transition-transform active:scale-95">−</button>
          <span id="qty" class="min-w-4 text-center">1</span>
          <button id="qtyPlus" class="h-8 w-8 rounded-full bg-slate-200 text-slate-700 flex items-center justify-center transition-transform active:scale-95">+</button>
        </div>
        
      </section>
      <section>
        <div id="itemsList" class="hidden mt-2 space-y-2"></div>
      </section>

      <section>
        <h2 class="text-slate-900 font-semibold">Metode Pembayaran</h2>
        <div class="mt-3 space-y-3">
          <button data-method="qris" class="rounded-2xl bg-gray-300 p-4 w-full text-left transition-all active:scale-95">
            <div class="text-slate-900 font-medium">QRIS</div>
            <div class="mt-2 text-slate-700 font-semibold">QRIS</div>
          </button>

          <div class="rounded-2xl bg-gray-300">
            <button id="ewalletHeader" class="w-full flex items-center justify-between p-4">
              <div class="flex items-center gap-3">
                <span class="text-slate-900 font-medium">E-Wallet</span>
                <div class="flex items-center gap-2 text-slate-700">
                  <span class="inline-flex items-center rounded-full bg-sky-100 text-sky-700 px-3 py-1 text-xs">DANA</span>
                  <span class="inline-flex items-center rounded-full bg-sky-100 text-sky-700 px-3 py-1 text-xs">gopay</span>
                </div>
              </div>
              <svg id="ewalletChevron" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-5 h-5 text-slate-700"><path d="M6 9l6 6 6-6"/></svg>
            </button>
            <div id="ewalletBody" class="hidden px-4 pb-4">
              <div class="grid grid-cols-2 gap-3">
                <button data-ewallet="DANA" data-method="ewallet:DANA" class="rounded-2xl bg-gray-300 p-4 text-left transition-all active:scale-95">
                  <div class="text-sky-700 font-semibold">DANA</div>
                  <div class="text-slate-700">Rp</div>
                </button>
                <button data-ewallet="gopay" data-method="ewallet:gopay" class="rounded-2xl bg-gray-300 p-4 text-left transition-all active:scale-95">
                  <div class="text-sky-700 font-semibold">gopay</div>
                  <div class="text-slate-700">Rp</div>
                </button>
              </div>
            </div>
          </div>

          <div class="rounded-2xl bg-gray-300">
            <button id="bankHeader" class="w-full flex items-center justify-between p-4">
              <div class="flex items-center gap-3">
                <span class="text-slate-900 font-medium">Virtual Bank</span>
                <div class="flex items-center gap-2 text-slate-700">
                  <span class="inline-flex items-center rounded-full bg-blue-100 text-blue-700 px-3 py-1 text-xs">BCA</span>
                  <span class="inline-flex items-center rounded-full bg-orange-100 text-orange-700 px-3 py-1 text-xs">BNI</span>
                  <span class="inline-flex items-center rounded-full bg-indigo-100 text-indigo-700 px-3 py-1 text-xs">BRI</span>
                  <span class="inline-flex items-center rounded-full bg-amber-100 text-amber-700 px-3 py-1 text-xs">SeaBank</span>
                </div>
              </div>
              <svg id="bankChevron" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-5 h-5 text-slate-700"><path d="M6 9l6 6 6-6"/></svg>
            </button>
            <div id="bankBody" class="hidden px-4 pb-4">
              <div class="grid grid-cols-2 gap-3">
                <button data-bank="BCA" data-method="bank:BCA" class="rounded-2xl bg-gray-300 p-4 text-left transition-all active:scale-95">
                  <div class="text-blue-700 font-semibold">BCA</div>
                  <div class="text-slate-700">Rp</div>
                </button>
                <button data-bank="BNI" data-method="bank:BNI" class="rounded-2xl bg-gray-300 p-4 text-left transition-all active:scale-95">
                  <div class="text-orange-700 font-semibold">BNI</div>
                  <div class="text-slate-700">Rp</div>
                </button>
                <button data-bank="BRI" data-method="bank:BRI" class="rounded-2xl bg-gray-300 p-4 text-left transition-all active:scale-95">
                  <div class="text-indigo-700 font-semibold">BRI</div>
                  <div class="text-slate-700">Rp</div>
                </button>
                <button data-bank="SeaBank" data-method="bank:SeaBank" class="rounded-2xl bg-gray-300 p-4 text-left transition-all active:scale-95">
                  <div class="text-amber-700 font-semibold">SeaBank</div>
                  <div class="text-slate-700">Rp</div>
                </button>
              </div>
            </div>
          </div>
        </div>
      </section>

      <div class="pt-2">
        <button id="buyBtn" class="w-full rounded-full bg-red-600 text-white py-3 font-medium transition-transform duration-200 ease-out active:scale-95 hover:shadow-md">Beli</button>
      </div>
    </main>

    <script>
      const qtyEl = document.getElementById('qty')
      const minus = document.getElementById('qtyMinus')
      const plus = document.getElementById('qtyPlus')
      const prodNameEl = document.getElementById('prodName')
      const prodPriceEl = document.getElementById('prodPrice')
      const qtyControls = document.getElementById('qtyControls')
      const itemsList = document.getElementById('itemsList')
      const summarySection = document.getElementById('summarySection')
      const read = () => { try { return JSON.parse(localStorage.getItem('cart')||'[]') } catch { return [] } }
      const params = new URLSearchParams(location.search)
      const money = (n) => 'Rp ' + Number(n||0).toLocaleString('id-ID')
      const productName = params.get('n') || 'nama obat'
      const aParam = Number(params.get('a')||'')
      let unitPrice = Number(params.get('p')||3000)
      let qty = Number(params.get('q')||1)
      if (prodNameEl) prodNameEl.textContent = productName
      if (!isNaN(aParam) && aParam > 0) {
        if (prodPriceEl) prodPriceEl.textContent = `Total: ${money(aParam)}`
        qtyControls?.classList.add('hidden')
        summarySection?.classList.add('hidden')
        const items = read()
        if (itemsList && items.length) {
          itemsList.classList.remove('hidden')
          itemsList.innerHTML = items.map(it => `
            <div class="flex items-center justify-between rounded-xl bg-white ring-1 ring-slate-200 p-3">
              <div>
                <div class="font-medium">${it.name}</div>
                <div class="text-slate-700 text-sm">${money(it.price)} × ${it.qty}</div>
              </div>
              <div class="font-semibold">${money(it.price * it.qty)}</div>
            </div>
          `).join('')
        }
      } else {
        if (prodPriceEl) prodPriceEl.textContent = `Total: ${money(unitPrice * qty)}`
        if (qtyEl) qtyEl.textContent = String(qty)
        itemsList?.classList.add('hidden')
        summarySection?.classList.remove('hidden')
      }
      minus?.addEventListener('click', () => { qty = Math.max(1, qty - 1); if(qtyEl) qtyEl.textContent = String(qty); if (prodPriceEl) prodPriceEl.textContent = `Total: ${money(unitPrice * qty)}` })
      plus?.addEventListener('click', () => { qty += 1; if(qtyEl) qtyEl.textContent = String(qty); if (prodPriceEl) prodPriceEl.textContent = `Total: ${money(unitPrice * qty)}` })

      const ewalletHeader = document.getElementById('ewalletHeader')
      const ewalletBody = document.getElementById('ewalletBody')
      const ewalletChevron = document.getElementById('ewalletChevron')
      ewalletHeader?.addEventListener('click', () => {
        ewalletBody?.classList.toggle('hidden')
        if (ewalletChevron) {
          ewalletChevron.classList.toggle('rotate-180')
          ewalletChevron.classList.add('transition-transform')
        }
      })

      let selectedMethod = null
      const methodButtons = document.querySelectorAll('[data-method]')
      const clearAllHighlights = () => {
        methodButtons.forEach(b => {
          b.classList.remove('ring-2','ring-sky-500','bg-sky-50','ring-amber-500','bg-amber-50')
        })
      }
      methodButtons.forEach(btn => {
        btn.addEventListener('click', () => {
          clearAllHighlights()
          const method = btn.getAttribute('data-method') || ''
          const isBank = method.startsWith('bank:')
          btn.classList.add('ring-2', isBank ? 'ring-amber-500' : 'ring-sky-500', isBank ? 'bg-amber-50' : 'bg-sky-50')
          selectedMethod = method
        })
      })

      const bankHeader = document.getElementById('bankHeader')
      const bankBody = document.getElementById('bankBody')
      const bankChevron = document.getElementById('bankChevron')
      bankHeader?.addEventListener('click', () => {
        bankBody?.classList.toggle('hidden')
        if (bankChevron) {
          bankChevron.classList.toggle('rotate-180')
          bankChevron.classList.add('transition-transform')
        }
      })

      const buyBtn = document.getElementById('buyBtn')
      buyBtn?.addEventListener('click', () => {
        if (!selectedMethod) {
          alert('Pilih metode pembayaran terlebih dahulu')
          return
        }
        const amount = (!isNaN(aParam) && aParam > 0) ? aParam : (unitPrice * qty)
        const baseUrl = "{{ route('pay') }}"
        const q = new URLSearchParams({ m: selectedMethod, n: productName, q: String(qty), a: String(amount) })
        window.location.href = `${baseUrl}?${q.toString()}`
      })
    </script>
  </body>
  </html>
