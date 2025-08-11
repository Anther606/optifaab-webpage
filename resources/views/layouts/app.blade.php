<!doctype html>
<html lang="hr">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>@yield('title', 'Nova stranica')</title>
  @vite(['resources/css/app.css','resources/js/app.js'])
</head>
<body class="antialiased text-slate-800">
  <header class="sticky top-0 z-40 bg-white/80 backdrop-blur border-b">
  <div class="max-w-7xl mx-auto px-4 py-3 flex items-center justify-between">
    <a href="/" class="font-semibold">Optifaab</a>

    {{-- Desktop nav --}}
    <nav class="hidden md:flex gap-6 text-sm">
      <a href="/" class="hover:text-red-600">Početna</a>
      <a href="/usluge" class="hover:text-red-600">Usluge</a>
      <a href="/cjenik" class="hover:text-red-600">Cjenik</a>
      <a href="/kontakt" class="hover:text-red-600">Kontakt</a>
    </nav>

    {{-- Mobile trigger --}}
    <button id="openDrawer" class="md:hidden inline-flex items-center justify-center h-10 w-10 rounded-lg border border-slate-300">
      <span class="sr-only">Otvori izbornik</span>
      <!-- hamburger -->
      <svg viewBox="0 0 24 24" class="h-5 w-5" fill="none" stroke="currentColor" stroke-width="2">
        <path d="M4 7h16M4 12h16M4 17h16" stroke-linecap="round"/>
      </svg>
    </button>
  </div>
</header>

{{-- Backdrop --}}
<div id="backdrop" class="fixed inset-0 z-40 bg-black/50 opacity-0 pointer-events-none transition-opacity"></div>

{{-- Slide-in drawer (left -> right) --}}
<aside id="mobileDrawer"
  class="fixed inset-y-0 left-0 z-50 w-80 max-w-[85%] bg-black text-white transform -translate-x-full transition-transform">
  <div class="flex items-center justify-between px-4 h-14 border-b border-white/10">
    <span class="font-semibold">Izbornik</span>
    <button id="closeDrawer" class="inline-flex h-9 w-9 items-center justify-center rounded-lg border border-white/20">
      <span class="sr-only">Zatvori</span>
      <!-- X icon -->
      <svg viewBox="0 0 24 24" class="h-4 w-4" fill="none" stroke="currentColor" stroke-width="2">
        <path d="M6 6l12 12M18 6l-12 12" stroke-linecap="round"/>
      </svg>
    </button>
  </div>

  <nav class="px-4 py-4 space-y-2 text-base">
    <a href="/" class="block rounded-lg px-3 py-2 hover:bg-white/10">Početna</a>
    <a href="/usluge" class="block rounded-lg px-3 py-2 hover:bg-white/10">Usluge</a>
    <a href="/cjenik" class="block rounded-lg px-3 py-2 hover:bg-white/10">Cjenik</a>
    <a href="/kontakt" class="block rounded-lg px-3 py-2 hover:bg-white/10">Kontakt</a>
  </nav>

  <div class="mt-auto p-4">
    <a href="/kontakt" class="block rounded-xl bg-red-600 px-4 py-3 text-center font-medium hover:bg-red-700">Naruči pregled</a>
  </div>
</aside>


  <main class="max-w-7xl mx-auto px-4 py-10">
    @yield('content')
  </main>

  <footer class="border-t">
    <div class="max-w-7xl mx-auto px-4 py-6 text-sm text-slate-500">
      © {{ date('Y') }} Brand. Sva prava pridržana.
    </div>
  </footer>
</body>
</html>
