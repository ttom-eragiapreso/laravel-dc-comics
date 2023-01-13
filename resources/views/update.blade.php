@extends('layouts.main')

@section('content')
  <main class="bg-space-500 min-h-screen flex justify-center items-center">
    <div class="bg-bisque-300 shadow-2xl shadow-bisque-700/80 p-12 rounded-lg">

      <form action="{{ route('comics.update', $comic) }}" method="POST">
        @method('PUT')
        @csrf

        <input type="text" value="{{ $comic->title }}" name="title" placeholder="Inserisci il titolo del comic"
          class="px-2 py-1 rounded-md">
        <input type="text" value="{{ $comic->price }}" name="price" placeholder="Inserisci il prezzo del comic"
          class="px-2 py-1 rounded-md">
        <input type="text" value="{{ $comic->type }}" name="type" placeholder="Inserisci il tipo del comic"
          class="px-2 py-1 rounded-md">
        <button type="submit" class="btn-primary block mt-3">Edita</button>
      </form>

    </div>
  </main>
@endsection
