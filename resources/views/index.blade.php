@extends('layouts.app')

@section('content')
  <section>
    <div class="grid grid-cols-2 sm:grid-cols-2 lg:grid-cols-4 gap-4">
      <div class="bg-white rounded-2xl shadow-sm ring-1 ring-slate-200 p-4 flex flex-col h-full">
        <div class="aspect-[4/3] w-full overflow-hidden rounded-xl bg-slate-100 flex items-center justify-center">
          <img src="https://images.unsplash.com/photo-1586773860418-d3723c1f5b31?q=80&w=800&auto=format&fit=crop" alt="Panadol" class="h-full w-full object-cover" />
        </div>
        <div class="mt-3 text-sky-600 text-sm font-medium">Medicines</div>
        <h3 class="mt-1 font-semibold">Brufen 100mg / 5ml Syrup</h3>
        <div class="mt-2 mb-4 text-slate-900 font-extrabold">RP 3.000</div>
        <a href="{{ url('/product') }}" class="mt-auto w-full">
          <div class="w-full flex items-center justify-center gap-2 bg-red-600 text-white rounded-full py-2 transition-transform duration-200 ease-out active:scale-95 hover:shadow-md">Lihat Produk</div>
        </a>
      </div>

      <div class="bg-white rounded-2xl shadow-sm ring-1 ring-slate-200 p-4 flex flex-col h-full">
        <div class="aspect-[4/3] w-full overflow-hidden rounded-xl bg-slate-100 flex items-center justify-center">
          <img src="https://images.unsplash.com/photo-1596755094514-bab66d4b22db?q=80&w=800&auto=format&fit=crop" alt="Panadol" class="h-full w-full object-cover" />
        </div>
        <div class="mt-3 text-sky-600 text-sm font-medium">Medicines</div>
        <h3 class="mt-1 font-semibold">Brufen 100mg / 5ml Syrup</h3>
        <div class="mt-2 mb-4 text-slate-900 font-extrabold">RP 3.000</div>
        <a href="{{ url('/product') }}" class="mt-auto w-full">
          <div class="w-full flex items-center justify-center gap-2 bg-red-600 text-white rounded-full py-2 transition-transform duration-200 ease-out active:scale-95 hover:shadow-md">Lihat Produk</div>
        </a>
      </div>

      <div class="bg-white rounded-2xl shadow-sm ring-1 ring-slate-200 p-4 flex flex-col h-full">
        <div class="aspect-[4/3] w-full overflow-hidden rounded-xl bg-slate-100 flex items-center justify-center">
          <img src="https://images.unsplash.com/photo-1582719478250-c89cae4dc85b?q=80&w=800&auto=format&fit=crop" alt="Panadol" class="h-full w-full object-cover" />
        </div>
        <div class="mt-3 text-sky-600 text-sm font-medium">Medicines</div>
        <h3 class="mt-1 font-semibold">Brufen 100mg / 5ml Syrup</h3>
        <div class="mt-2 mb-4 text-slate-900 font-extrabold">RP 3.000</div>
        <a href="{{ url('/product') }}" class="mt-auto w-full">
          <div class="w-full flex items-center justify-center gap-2 bg-red-600 text-white rounded-full py-2 transition-transform duration-200 ease-out active:scale-95 hover:shadow-md">Lihat Produk</div>
        </a>
      </div>

      <div class="bg-white rounded-2xl shadow-sm ring-1 ring-slate-200 p-4 flex flex-col h-full">
        <div class="aspect-[4/3] w-full overflow-hidden rounded-xl bg-slate-100 flex items-center justify-center">
          <img src="https://images.unsplash.com/photo-1582719366583-4f66b1e1f962?q=80&w=800&auto=format&fit=crop" alt="Panadol" class="h-full w-full object-cover" />
        </div>
        <div class="mt-3 text-sky-600 text-sm font-medium">Medicines</div>
        <h3 class="mt-1 font-semibold">Brufen 100mg / 5ml Syrup</h3>
        <div class="mt-2 mb-4 text-slate-900 font-extrabold">RP 3.000</div>
        <a href="{{ url('/product') }}" class="mt-auto w-full">
          <div class="w-full flex items-center justify-center gap-2 bg-red-600 text-white rounded-full py-2 transition-transform duration-200 ease-out active:scale-95 hover:shadow-md">Lihat Produk</div>
        </a>
      </div>
    </div>
  </section>
@endsection
