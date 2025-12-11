<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Wijaya Medika</title>
    <script src="https://cdn.tailwindcss.com"></script>
  </head>
  <body class="bg-sky-50 text-slate-800">
    <header class="sticky top-0 z-40">
      <div class="bg-red-600">
        <div class="max-w-7xl mx-auto flex items-center justify-between px-4 py-3">
          <div class="flex items-center gap-3">
            <div class="h-10 w-10 rounded-full bg-white flex items-center justify-center">
              <span class="text-red-600 font-semibold">AP</span>
            </div>
            
          </div>
          <div class="flex items-center gap-4">
            <div class="relative">
              <button id="menuBtn" class="flex items-center text-white transition-transform active:scale-95">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-7 h-7">
                  <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
                </svg>
              </button>
              <div id="menuPopover" class="hidden absolute right-0 mt-2 w-44 sm:w-52 bg-white rounded-2xl shadow-lg ring-1 ring-slate-200 p-3">
                <a href="{{ route('login.ui') }}" class="block">
                  <div class="w-full bg-red-600 text-white rounded-lg px-4 py-2 text-sm text-center transition-transform duration-200 active:scale-95 hover:shadow-md">Login / Signup</div>
                </a>
              </div>
            </div>
            <a href="{{ route('cart') }}" class="flex items-center text-white transition-transform active:scale-95" aria-label="Keranjang">
              <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-7 h-7">
                <path d="M7.5 3.75A2.25 2.25 0 0 0 5.25 6v.75H3a.75.75 0 0 0 0 1.5h1.5l1.05 8.4A3 3 0 0 0 8.52 19.5h7.29a3 3 0 0 0 2.97-2.58l1.14-8.58H20.25a.75.75 0 0 0 0-1.5h-2.25V6a2.25 2.25 0 0 0-2.25-2.25h-8.25Z" />
                <circle cx="9" cy="21" r="1.5" />
                <circle cx="16" cy="21" r="1.5" />
              </svg>
            </a>
          </div>
        </div>
      </div>
      <div class="h-1 bg-sky-400"></div>
      <nav id="mobileMenu" class="md:hidden hidden bg-white shadow">
        <div class="max-w-7xl mx-auto px-4 py-3">
          <div class="grid grid-cols-2 gap-3">
            <a href="#" class="px-3 py-2 rounded-md bg-sky-100 text-sky-700">Categories</a>
            <a href="#" class="px-3 py-2 rounded-md bg-sky-100 text-sky-700">Promo</a>
          </div>
        </div>
      </nav>
    </header>

    <main class="max-w-7xl mx-auto px-4 py-6">
      <section>
        <div class="grid grid-cols-2 sm:grid-cols-2 lg:grid-cols-4 gap-4">
          <div class="bg-white rounded-2xl shadow-sm ring-1 ring-slate-200 p-4 flex flex-col h-full">
            <div class="aspect-[4/3] w-full overflow-hidden rounded-xl bg-slate-100 flex items-center justify-center">
              <img src="https://images.unsplash.com/photo-1586773860418-d3723c1f5b31?q=80&w=800&auto=format&fit=crop" alt="Panadol" class="h-full w-full object-cover" />
            </div>
            <div class="mt-3 text-sky-600 text-sm font-medium">Medicines</div>
            <h3 class="mt-1 font-semibold">Brufen 100mg / 5ml Syrup</h3>
            <div class="mt-2 mb-4 text-slate-900 font-extrabold">RP 3.000</div>
            <button data-item="Brufen" class="mt-auto w-full flex items-center justify-center gap-2 bg-red-600 text-white rounded-full py-2 transition-transform duration-200 ease-out active:scale-95 hover:shadow-md" aria-label="Keranjang">
              <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-5 h-5">
                <path d="M7.5 3.75A2.25 2.25 0 0 0 5.25 6v.75H3a.75.75 0 0 0 0 1.5h1.5l1.05 8.4A3 3 0 0 0 8.52 19.5h7.29a3 3 0 0 0 2.97-2.58l1.14-8.58H20.25a.75.75 0 0 0 0-1.5h-2.25V6a2.25 2.25 0 0 0-2.25-2.25h-8.25Z" />
              </svg>
            </button>
          </div>

          <div class="bg-white rounded-2xl shadow-sm ring-1 ring-slate-200 p-4 flex flex-col h-full">
            <div class="aspect-[4/3] w-full overflow-hidden rounded-xl bg-slate-100 flex items-center justify-center">
              <img src="https://images.unsplash.com/photo-1596755094514-bab66d4b22db?q=80&w=800&auto=format&fit=crop" alt="Panadol" class="h-full w-full object-cover" />
            </div>
            <div class="mt-3 text-sky-600 text-sm font-medium">Medicines</div>
            <h3 class="mt-1 font-semibold">Brufen 100mg / 5ml Syrup</h3>
            <div class="mt-2 mb-4 text-slate-900 font-extrabold">RP 3.000</div>
            <button data-item="Brufen" class="mt-auto w-full flex items-center justify-center gap-2 bg-red-600 text-white rounded-full py-2 transition-transform duration-200 ease-out active:scale-95 hover:shadow-md" aria-label="Keranjang">
              <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-5 h-5">
                <path d="M7.5 3.75A2.25 2.25 0 0 0 5.25 6v.75H3a.75.75 0 0 0 0 1.5h1.5l1.05 8.4A3 3 0 0 0 8.52 19.5h7.29a3 3 0 0 0 2.97-2.58l1.14-8.58H20.25a.75.75 0 0 0 0-1.5h-2.25V6a2.25 2.25 0 0 0-2.25-2.25h-8.25Z" />
              </svg>
            </button>
          </div>

          <div class="bg-white rounded-2xl shadow-sm ring-1 ring-slate-200 p-4 flex flex-col h-full">
            <div class="aspect-[4/3] w-full overflow-hidden rounded-xl bg-slate-100 flex items-center justify-center">
              <img src="https://images.unsplash.com/photo-1582719478250-c89cae4dc85b?q=80&w=800&auto=format&fit=crop" alt="Panadol" class="h-full w-full object-cover" />
            </div>
            <div class="mt-3 text-sky-600 text-sm font-medium">Medicines</div>
            <h3 class="mt-1 font-semibold">Brufen 100mg / 5ml Syrup</h3>
            <div class="mt-2 mb-4 text-slate-900 font-extrabold">RP 3.000</div>
            <button data-item="Brufen" class="mt-auto w-full flex items-center justify-center gap-2 bg-red-600 text-white rounded-full py-2 transition-transform duration-200 ease-out active:scale-95 hover:shadow-md" aria-label="Keranjang">
              <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-5 h-5">
                <path d="M7.5 3.75A2.25 2.25 0 0 0 5.25 6v.75H3a.75.75 0 0 0 0 1.5h1.5l1.05 8.4A3 3 0 0 0 8.52 19.5h7.29a3 3 0 0 0 2.97-2.58l1.14-8.58H20.25a.75.75 0 0 0 0-1.5h-2.25V6a2.25 2.25 0 0 0-2.25-2.25h-8.25Z" />
              </svg>
            </button>
          </div>

          <div class="bg-white rounded-2xl shadow-sm ring-1 ring-slate-200 p-4 flex flex-col h-full">
            <div class="aspect-[4/3] w-full overflow-hidden rounded-xl bg-slate-100 flex items-center justify-center">
              <img src="https://images.unsplash.com/photo-1582719366583-4f66b1e1f962?q=80&w=800&auto=format&fit=crop" alt="Panadol" class="h-full w-full object-cover" />
            </div>
            <div class="mt-3 text-sky-600 text-sm font-medium">Medicines</div>
            <h3 class="mt-1 font-semibold">Brufen 100mg / 5ml Syrup</h3>
            <div class="mt-2 mb-4 text-slate-900 font-extrabold">RP 3.000</div>
            <button data-item="Brufen" class="mt-auto w-full flex items-center justify-center gap-2 bg-red-600 text-white rounded-full py-2 transition-transform duration-200 ease-out active:scale-95 hover:shadow-md" aria-label="Keranjang">
              <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-5 h-5">
                <path d="M7.5 3.75A2.25 2.25 0 0 0 5.25 6v.75H3a.75.75 0 0 0 0 1.5h1.5l1.05 8.4A3 3 0 0 0 8.52 19.5h7.29a3 3 0 0 0 2.97-2.58l1.14-8.58H20.25a.75.75 0 0 0 0-1.5h-2.25V6a2.25 2.25 0 0 0-2.25-2.25h-8.25Z" />
              </svg>
            </button>
          </div>
        </div>
      </section>
    </main>

    <script>
      const menuBtn = document.getElementById('menuBtn')
      const mobileMenu = document.getElementById('mobileMenu')
      const menuPopover = document.getElementById('menuPopover')
      const cartCount = document.getElementById('cartCount')
      let count = 0
      if (menuBtn) {
        menuBtn.addEventListener('click', (e) => {
          e.stopPropagation()
          if (menuPopover) menuPopover.classList.toggle('hidden')
        })
        document.addEventListener('click', (e) => {
          if (menuPopover && !menuPopover.classList.contains('hidden')) {
            const within = menuPopover.contains(e.target) || menuBtn.contains(e.target)
            if (!within) menuPopover.classList.add('hidden')
          }
        })
      }
      document.querySelectorAll('button[data-item]').forEach(btn => {
        btn.addEventListener('click', () => {
          const productUrl = "{{ route('product') }}"
          window.location.href = productUrl
        })
      })
    </script>
  </body>
</html>
