@extends('layouts.app')
@section('title','Optifaab – Optika i dioptrijska rješenja')

@section('content')
  {{-- HERO (crveno/crno/bijelo) --}}
  <section class="relative overflow-hidden rounded-3xl bg-gradient-to-br from-black via-slate-900 to-black text-white">
    <div class="absolute -top-24 -right-24 h-72 w-72 rounded-full blur-3xl opacity-30 bg-red-600"></div>
    <div class="absolute -bottom-24 -left-24 h-72 w-72 rounded-full blur-3xl opacity-30 bg-red-400"></div>

    <div class="relative mx-auto max-w-7xl px-6 py-20 lg:flex lg:items-center lg:py-28">
      <div class="max-w-2xl">
        <span class="inline-flex items-center gap-2 rounded-full bg-white/10 px-3 py-1 text-sm ring-1 ring-white/15">
          <span class="inline-block h-2 w-2 rounded-full bg-red-500"></span>
          Besplatan brzi pregled dioptrije – ovaj tjedan
        </span>
        <h1 class="mt-6 text-4xl font-extrabold tracking-tight sm:text-5xl">
          Jasniji pogled. <span class="text-red-500">Savršeno prilagođene</span> naočale.
        </h1>
        <p class="mt-5 text-lg text-slate-300">
          Jednojakosne, progresivne, računalne (plavo svjetlo) i uredske leće. Premium premazi, lagani okviri i precizno centriranje.
        </p>

        <div class="mt-8 flex flex-wrap items-center gap-3">
          <a href="/kontakt" class="rounded-xl bg-white px-5 py-3 font-medium text-black hover:bg-slate-100 transition">Naruči pregled</a>
          <a href="#kategorije" class="rounded-xl border border-white/20 px-5 py-3 font-medium text-white hover:bg-white/10 transition">Kolekcije i leće</a>
        </div>

        <div class="mt-8 flex items-center gap-6 text-sm text-slate-300">
          <div class="flex -space-x-2">
            <img class="h-8 w-8 rounded-full ring-2 ring-slate-900" src="https://api.dicebear.com/7.x/avataaars/svg?seed=A" alt=""/>
            <img class="h-8 w-8 rounded-full ring-2 ring-slate-900" src="https://api.dicebear.com/7.x/avataaars/svg?seed=B" alt=""/>
            <img class="h-8 w-8 rounded-full ring-2 ring-slate-900" src="https://api.dicebear.com/7.x/avataaars/svg?seed=C" alt=""/>
          </div>
          <span>1000+ zadovoljnih klijenata</span>
        </div>
      </div>

      <div class="mt-10 lg:ml-auto lg:mt-0 lg:max-w-xl">
        <div class="rounded-2xl border border-white/10 bg-white/5 p-2 backdrop-blur">
          <div class="rounded-xl bg-white p-4 text-slate-900">
            <div class="aspect-[16/10] w-full rounded-lg bg-slate-100 shadow-inner grid place-items-center">
              <span class="text-sm text-slate-500">Mockup: crni okvir + crveni detalji</span>
            </div>
            <div class="mt-4 grid grid-cols-3 gap-3 text-xs text-slate-600">
              <div class="rounded-lg border p-3"><div class="text-slate-900 font-semibold">HD</div> Antirefleks Ultra</div>
              <div class="rounded-lg border p-3"><div class="text-slate-900 font-semibold">UV420</div> Plavo svjetlo blok</div>
              <div class="rounded-lg border p-3"><div class="text-slate-900 font-semibold">+30%</div> Šire vidno polje</div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  {{-- TRUST --}}
  <section class="mx-auto max-w-7xl px-6 py-10">
    <p class="text-center text-sm text-slate-500">Suradnja s vodećim proizvođačima leća i okvira</p>
    <div class="mt-6 grid grid-cols-2 gap-6 opacity-80 sm:grid-cols-3 md:grid-cols-5">
      <div class="grid place-items-center rounded-xl border p-6">Brand</div>
      <div class="grid place-items-center rounded-xl border p-6">Brand</div>
      <div class="grid place-items-center rounded-xl border p-6">Brand</div>
      <div class="grid place-items-center rounded-xl border p-6">Brand</div>
      <div class="grid place-items-center rounded-xl border p-6">Brand</div>
    </div>
  </section>

  {{-- KATEGORIJE LEĆA / USLUGA --}}
  <section id="kategorije" class="mx-auto max-w-7xl px-6 py-14">
    <div class="mx-auto max-w-3xl text-center">
      <h2 class="text-3xl font-bold tracking-tight">Rješenja za svaku potrebu vida</h2>
      <p class="mt-3 text-slate-600">Stručno savjetovanje i precizno mjerenje dioptrije u 15 minuta.</p>
    </div>

    <div class="mt-10 grid grid-cols-1 gap-6 sm:grid-cols-2 lg:grid-cols-4">
      @php
        $cats = [
          ['title'=>'Jednojakosne naočale','desc'=>'Za daljinu ili blizinu. Tanke, lagane leće s premium premazima.','href'=>'/usluge','badge'=>'Najtraženije'],
          ['title'=>'Progresivne naočale','desc'=>'Jasno na svim udaljenostima bez mijenjanja naočala.','href'=>'/usluge','badge'=>'Multifokalno'],
          ['title'=>'Računalne (Blue Light)','desc'=>'Za rad na ekranu: smanjuju napor, filtriraju plavo svjetlo.','href'=>'/usluge','badge'=>'UV420'],
          ['title'=>'Uredske naočale','desc'=>'Široko vidno polje 60–120 cm za open-space okruženja.','href'=>'/usluge','badge'=>'Produktivnost'],
        ];
      @endphp

      @foreach ($cats as $c)
        <div class="group overflow-hidden rounded-2xl border bg-white">
          <div class="aspect-[16/10] bg-gradient-to-br from-slate-100 to-white grid place-items-center">
            <span class="rounded-full border px-3 py-1 text-xs font-medium text-slate-700">{{ $c['badge'] }}</span>
          </div>
          <div class="p-6">
            <h3 class="text-lg font-semibold">{{ $c['title'] }}</h3>
            <p class="mt-2 text-sm text-slate-600">{{ $c['desc'] }}</p>
            <a href="{{ $c['href'] }}" class="mt-3 inline-flex items-center text-sm font-medium text-red-600 hover:underline">
              Saznaj više
              <svg class="ml-1 h-4 w-4" viewBox="0 0 24 24" fill="none"><path d="M9 5l7 7-7 7" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg>
            </a>
          </div>
        </div>
      @endforeach
    </div>
  </section>

  {{-- BENEFITI / PREMAZI --}}
  <section class="mx-auto max-w-7xl px-6">
    <div class="grid grid-cols-1 gap-6 rounded-2xl bg-slate-50 p-6 sm:grid-cols-4">
      <div><div class="text-3xl font-bold text-red-600">Antirefleks</div><div class="text-sm text-slate-600">Jasnija slika, manje odsjaja noću.</div></div>
      <div><div class="text-3xl font-bold text-red-600">Hidro/oleo</div><div class="text-sm text-slate-600">Lakše čišćenje i otpornost na mrlje.</div></div>
      <div><div class="text-3xl font-bold text-red-600">UV/Blue</div><div class="text-sm text-slate-600">Zaštita od UV i plavog spektra ekrana.</div></div>
      <div><div class="text-3xl font-bold text-red-600">Tanke leće</div><div class="text-sm text-slate-600">Index 1.6–1.74 za veću dioptriju.</div></div>
    </div>
  </section>

  {{-- SHOWCASE OKVIRI + FITTING --}}
  <section class="mx-auto max-w-7xl px-6 py-14">
    <div class="grid grid-cols-1 gap-6 md:grid-cols-3">
      <div class="group overflow-hidden rounded-2xl border bg-white">
        <div class="aspect-[16/10] bg-slate-100"></div>
        <div class="p-6">
          <h3 class="text-lg font-semibold">Okviri – crni, crveni, titan</h3>
          <p class="mt-2 text-sm text-slate-600">Klasični i moderni modeli uz lagane materijale. Probaj u salonu.</p>
          <a href="/usluge" class="mt-4 inline-block text-sm font-medium text-red-600 hover:underline">Pogledaj kolekciju</a>
        </div>
      </div>
      <div class="group overflow-hidden rounded-2xl border bg-white">
        <div class="aspect-[16/10] bg-slate-100"></div>
        <div class="p-6">
          <h3 class="text-lg font-semibold">Precizno mjerenje dioptrije</h3>
          <p class="mt-2 text-sm text-slate-600">Objektivna i subjektivna metoda – gotovi u 15 min.</p>
          <a href="/kontakt" class="mt-4 inline-block text-sm font-medium text-red-600 hover:underline">Rezerviraj termin</a>
        </div>
      </div>
      <div class="group overflow-hidden rounded-2xl border bg-white">
        <div class="aspect-[16/10] bg-slate-100"></div>
        <div class="p-6">
          <h3 class="text-lg font-semibold">Centriranje & fitting</h3>
          <p class="mt-2 text-sm text-slate-600">PD, visine i kut ugradnje – udobnost i jasna slika.</p>
          <a href="/usluge" class="mt-4 inline-block text-sm font-medium text-red-600 hover:underline">Kako radimo</a>
        </div>
      </div>
    </div>
  </section>

  {{-- TESTIMONIAL --}}
  <section class="mx-auto max-w-7xl px-6">
    <div class="rounded-3xl bg-black p-10 text-white md:p-14">
      <blockquote class="max-w-3xl">
        <p class="text-xl leading-relaxed">
          “Progresivi su savršeno pogođeni, nema navikavanja. Tim je sve objasnio i složio u roku dva dana.”
        </p>
        <footer class="mt-6 flex items-center gap-4 text-sm text-slate-300">
          <img class="h-10 w-10 rounded-full" src="https://api.dicebear.com/7.x/avataaars/svg?seed=ref" alt="">
          <div>
            <div class="font-medium text-white">I. R., arhitekt</div>
            <div>Zagreb</div>
          </div>
        </footer>
      </blockquote>
    </div>
  </section>

  {{-- MINI-PAKETI LEĆA (indikativno) --}}
  <section class="mx-auto max-w-7xl px-6 py-14">
    <div class="grid grid-cols-1 gap-6 md:grid-cols-3">
      <div class="rounded-2xl border p-6">
        <h3 class="text-lg font-semibold">Jednojakosne Start</h3>
        <p class="mt-1 text-sm text-slate-600">AR + UV zaštita</p>
        <div class="mt-4 text-3xl font-bold">od €69</div>
        <ul class="mt-4 space-y-2 text-sm text-slate-600">
          <li>Standardni index</li>
          <li>Antirefleks Basic</li>
          <li>Garancija 12 mj</li>
        </ul>
        <a href="/kontakt" class="mt-6 inline-block rounded-xl bg-red-600 px-5 py-3 text-white">Upit</a>
      </div>

      <div class="relative rounded-2xl border-2 border-red-600 p-6">
        <span class="absolute -top-3 right-4 rounded-full bg-red-600 px-3 py-1 text-xs text-white">Najpopularnije</span>
        <h3 class="text-lg font-semibold">Progresivne Pro</h3>
        <p class="mt-1 text-sm text-slate-600">Široko vidno polje</p>
        <div class="mt-4 text-3xl font-bold">od €299</div>
        <ul class="mt-4 space-y-2 text-sm text-slate-600">
          <li>Antirefleks Ultra</li>
          <li>Oleo + hidro premaz</li>
          <li>Garancija 24 mj</li>
        </ul>
        <a href="/kontakt" class="mt-6 inline-block rounded-xl bg-red-600 px-5 py-3 text-white">Zatraži ponudu</a>
      </div>

      <div class="rounded-2xl border p-6">
        <h3 class="text-lg font-semibold">Računalne / Uredske</h3>
        <p class="mt-1 text-sm text-slate-600">Blue Light + uredski dizajn</p>
        <div class="mt-4 text-3xl font-bold">od €149</div>
        <ul class="mt-4 space-y-2 text-sm text-slate-600">
          <li>UV420 filter</li>
          <li>Rad 60–120 cm</li>
          <li>Opcija tanjih leća</li>
        </ul>
        <a href="/kontakt" class="mt-6 inline-block rounded-xl bg-red-600 px-5 py-3 text-white">Dogovori mjerenje</a>
      </div>
    </div>
  </section>

  {{-- FAQ --}}
  <section class="mx-auto max-w-7xl px-6">
    <div class="mx-auto max-w-3xl text-center">
      <h2 class="text-3xl font-bold">Česta pitanja</h2>
      <p class="mt-2 text-slate-600">Brzi odgovori prije posjeta.</p>
    </div>
    <div class="mx-auto mt-8 max-w-3xl divide-y rounded-2xl border bg-white">
      @php
        $faqs = [
          ['q'=>'Koliko traju progresivne naočale za izradu?','a'=>'U pravilu 3–7 radnih dana, ovisno o kompleksnosti i indeksu.'],
          ['q'=>'Trebam li zaštitu od plavog svjetla?','a'=>'Ako provodiš 4+ sata na ekranu dnevno, preporučujemo UV420/Blue Light filter.'],
          ['q'=>'Imate li jamstvo?','a'=>'Da, 12–24 mjeseca ovisno o premazu i tipu leće. Mehanička oštećenja nisu uključena.'],
        ];
      @endphp
      @foreach ($faqs as $f)
        <details class="group p-6">
          <summary class="flex cursor-pointer list-none items-center justify-between">
            <span class="font-medium text-slate-900">{{ $f['q'] }}</span>
            <span class="ml-4 grid h-6 w-6 place-items-center rounded-full border">
              <svg class="h-3 w-3 transition group-open:rotate-45" viewBox="0 0 24 24" fill="none"><path d="M12 5v14M5 12h14" stroke="currentColor" stroke-width="2" stroke-linecap="round"/></svg>
            </span>
          </summary>
          <p class="mt-3 text-sm text-slate-600">{{ $f['a'] }}</p>
        </details>
      @endforeach
    </div>
  </section>

  {{-- CTA ZAVRŠNI --}}
  <section id="kontakt" class="mx-auto max-w-7xl px-6 py-14">
    <div class="rounded-3xl bg-gradient-to-r from-red-600 to-black p-10 text-white">
      <div class="flex flex-col items-start justify-between gap-6 md:flex-row md:items-center">
        <div>
          <h3 class="text-2xl font-bold">Spreman za jasniji pogled?</h3>
          <p class="mt-2 text-white/90">Pošalji upit ili rezerviraj pregled – odgovor u roku 24 h.</p>
        </div>
        <a href="/kontakt" class="rounded-xl bg-white px-6 py-3 font-medium text-black hover:bg-slate-100">Kontakt forma</a>
      </div>
    </div>
  </section>
@endsection
