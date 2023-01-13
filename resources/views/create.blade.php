@extends('layouts.main')

@section('content')
  <main class="bg-space-500 min-h-screen flex justify-center items-center">
    <div class="bg-bisque-300 shadow-2xl shadow-bisque-700/80 p-12 rounded-lg w-1/2">

      @if ($errors->any())
        <div>
          <ul>
            @foreach ($errors->all() as $error)
              <li class="text-pastel-400">{{ $error }}</li>
            @endforeach
          </ul>
        </div>
      @endif


      <form action="{{ route('comics.store') }}" method="POST">

        @csrf

        <input type="text" value="{{ old('title') }}" name="title" placeholder="Inserisci il titolo del comic"
          class="px-2 py-1 rounded-md @error('title') border-red-500 @enderror">
        @error('title')
          <div>
            <p>{{ $message }}</p>
          </div>
        @enderror
        <input type="text" value="{{ old('price') }}" name="price" placeholder="Inserisci il prezzo del comic"
          class="px-2 py-1 rounded-md @error('price') border-red-500 @enderror">
        @error('price')
          <div>
            <p>{{ $message }}</p>
          </div>
        @enderror
        <input type="text" value="{{ old('type') }}" name="type" placeholder="Inserisci il tipo del comic"
          class="px-2 py-1 rounded-md @error('type') border-red-500 @enderror">
        @error('type')
          <div>
            <p>{{ $message }}</p>
          </div>
        @enderror
        <button type="submit" class="btn-primary block mt-3">Inserisci</button>
      </form>

    </div>
  </main>
@endsection
