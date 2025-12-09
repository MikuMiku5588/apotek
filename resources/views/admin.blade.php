@extends('layouts.app')

@section('content')
  <div class="max-w-7xl mx-auto px-4 py-4 flex items-center justify-end">
    <div class="relative">
      <button id="adminMenuBtn" class="text-slate-800 transition-transform active:scale-95">
        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-7 h-7">
          <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
        </svg>
      </button>
      <div id="adminMenuPopover" class="hidden absolute right-0 mt-2 w-44 bg-white rounded-2xl shadow-lg ring-1 ring-slate-200 p-3">
        <a href="{{ url('/input') }}" class="block">
          <div class="w-full bg-red-600 text-white rounded-lg px-4 py-2 text-sm text-center transition-transform duration-200 active:scale-95 hover:shadow-md">Input</div>
        </a>
        <button id="logoutBtn" class="mt-3 w-full bg-red-600 text-white rounded-lg px-4 py-2 text-sm text-center transition-transform duration-200 active:scale-95 hover:shadow-md">Log Out</button>
      </div>
    </div>
  </div>

  <section>
    <div class="grid grid-cols-2 sm:grid-cols-2 lg:grid-cols-4 gap-4">
      <div class="bg-white rounded-2xl shadow-sm ring-1 ring-slate-200 p-4 flex flex-col h-full">
        <div class="aspect-[4/3] w-full overflow-hidden rounded-xl bg-slate-100 flex items-center justify-center">
          <img src="https://images.unsplash.com/photo-1586773860418-d3723c1f5b31?q=80&w=800&auto=format&fit=crop" alt="Panadol" class="h-full w-full object-cover" />
        </div>
        <div class="mt-3 text-sky-600 text-sm font-medium">Medicines</div>
        <h3 class="mt-1 font-semibold">Brufen 100mg / 5ml Syrup</h3>
        <div class="mt-2 mb-4 text-slate-900 font-extrabold">RP 3.000</div>
        <a href="{{ url('/edit') }}" aria-label="Edit" class="mt-auto w-full flex items-center justify-center gap-2 bg-red-600 text-white rounded-full py-2 transition-transform duration-200 active:scale-95 hover:shadow-md">
          <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-5 h-5">
            <path d="M16.862 3.487a1.74 1.74 0 0 1 2.46 2.46l-9.354 9.354a3.481 3.481 0 0 1-1.534.878l-3.052.813a.75.75 0 0 1-.913-.913l.813-3.052a3.481 3.481 0 0 1 .878-1.534l9.354-9.354Z" />
            <path d="M5.25 19.5h13.5" />
          </svg>
        </a>
      </div>

      <div class="bg-white rounded-2xl shadow-sm ring-1 ring-slate-200 p-4 flex flex-col h-full">
        <div class="aspect-[4/3] w-full overflow-hidden rounded-xl bg-slate-100 flex items-center justify-center">
          <img src="https://images.unsplash.com/photo-1596755094514-bab66d4b22db?q=80&w=800&auto=format&fit=crop" alt="Obat" class="h-full w-full object-cover" />
        </div>
        <div class="mt-3 text-sky-600 text-sm font-medium">Medicines</div>
        <h3 class="mt-1 font-semibold">Obat A</h3>
        <div class="mt-2 mb-4 text-slate-900 font-extrabold">RP 15.500</div>
        <a href="{{ url('/edit') }}" aria-label="Edit" class="mt-auto w-full flex items-center justify-center gap-2 bg-red-600 text-white rounded-full py-2 transition-transform duration-200 active:scale-95 hover:shadow-md">
          <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-5 h-5">
            <path d="M16.862 3.487a1.74 1.74 0 0 1 2.46 2.46l-9.354 9.354a3.481 3.481 0 0 1-1.534.878l-3.052.813a.75.75 0 0 1-.913-.913l.813-3.052a3.481 3.481 0 0 1 .878-1.534l9.354-9.354Z" />
            <path d="M5.25 19.5h13.5" />
          </svg>
        </a>
      </div>

      <div class="bg-white rounded-2xl shadow-sm ring-1 ring-slate-200 p-4 flex flex-col h-full">
        <div class="aspect-[4/3] w-full overflow-hidden rounded-xl bg-slate-100 flex items-center justify-center">
          <img src="https://images.unsplash.com/photo-1582719366583-4f66b1e1f962?q=80&w=800&auto=format&fit=crop" alt="Obat" class="h-full w-full object-cover" />
        </div>
        <div class="mt-3 text-sky-600 text-sm font-medium">Medicines</div>
        <h3 class="mt-1 font-semibold">Obat B</h3>
        <div class="mt-2 mb-4 text-slate-900 font-extrabold">RP 20.000</div>
        <a href="{{ url('/edit') }}" aria-label="Edit" class="mt-auto w-full flex items-center justify-center gap-2 bg-red-600 text-white rounded-full py-2 transition-transform duration-200 active:scale-95 hover:shadow-md">
          <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-5 h-5">
            <path d="M16.862 3.487a1.74 1.74 0 0 1 2.46 2.46l-9.354 9.354a3.481 3.481 0 0 1-1.534.878l-3.052.813a.75.75 0 0 1-.913-.913l.813-3.052a3.481 3.481 0 0 1 .878-1.534l9.354-9.354Z" />
            <path d="M5.25 19.5h13.5" />
          </svg>
        </a>
      </div>

      <div class="bg-white rounded-2xl shadow-sm ring-1 ring-slate-200 p-4 flex flex-col h-full">
        <div class="aspect-[4/3] w-full overflow-hidden rounded-xl bg-slate-100 flex items-center justify-center">
          <img src="https://images.unsplash.com/photo-1582719478250-c89cae4dc85b?q=80&w=800&auto=format&fit=crop" alt="Obat" class="h-full w-full object-cover" />
        </div>
        <div class="mt-3 text-sky-600 text-sm font-medium">Medicines</div>
        <h3 class="mt-1 font-semibold">Obat C</h3>
        <div class="mt-2 mb-4 text-slate-900 font-extrabold">RP 12.000</div>
        <a href="{{ url('/edit') }}" aria-label="Edit" class="mt-auto w-full flex items-center justify-center gap-2 bg-red-600 text-white rounded-full py-2 transition-transform duration-200 active:scale-95 hover:shadow-md">
          <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-5 h-5">
            <path d="M16.862 3.487a1.74 1.74 0 0 1 2.46 2.46l-9.354 9.354a3.481 3.481 0 0 1-1.534.878l-3.052.813a.75.75 0 0 1-.913-.913l.813-3.052a3.481 3.481 0 0 1 .878-1.534l9.354-9.354Z" />
            <path d="M5.25 19.5h13.5" />
          </svg>
        </a>
      </div>
    </div>
  </section>

  <script>
    const adminMenuBtn = document.getElementById('adminMenuBtn')
    const adminMenuPopover = document.getElementById('adminMenuPopover')
    const logoutBtn = document.getElementById('logoutBtn')
    adminMenuBtn?.addEventListener('click', (e) => {
      e.stopPropagation()
      adminMenuPopover?.classList.toggle('hidden')
    })
    document.addEventListener('click', (e) => {
      if (adminMenuPopover && !adminMenuPopover.classList.contains('hidden')) {
        const within = adminMenuPopover.contains(e.target) || adminMenuBtn.contains(e.target)
        if (!within) adminMenuPopover.classList.add('hidden')
      }
    })
    logoutBtn?.addEventListener('click', () => {
      window.location.href = '{{ url('/') }}'
    })
  </script>
@endsection
