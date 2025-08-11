@extends('layouts.app')
@section('title','Kontakt')
@section('content')
  <h2 class="text-2xl font-semibold">Kontakt</h2>
  <form class="mt-6 max-w-xl space-y-4">
    <input class="w-full border rounded px-3 py-2" placeholder="Ime i prezime">
    <input class="w-full border rounded px-3 py-2" placeholder="Email">
    <textarea class="w-full border rounded px-3 py-2" rows="5" placeholder="Poruka"></textarea>
    <button class="px-4 py-2 rounded bg-black text-white">Pošalji</button>
  </form>
@endsection
