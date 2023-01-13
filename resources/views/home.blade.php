@extends('layouts.main')

@section('content')
  <div class="container-md mx-auto h-full bg-slate-300">
    @forelse ($all_comics as $comic)
      <div class="shadow-md shadow-space-400 rounded-lg overflow-hidden flex  max-h-[80%] mb-5">
        <div class="flex justify-center max-w-[50%]">
          <a href="{{ route('comics.show', $comic) }}" class="inline-block">
            <img src="{{ $comic['thumb'] }}" alt="{{ $comic['title'] }}">
          </a>
        </div>

        <div class="card-details p-3 max-w-[50%]">

          <h2>{{ $comic['title'] }}</h2>
          <p>{{ $comic['description'] }}</p>
          <h2>{{ $comic['price'] }}</h2>
          <h2>{{ $comic['series'] }}</h2>
          <h2>{{ $comic['sale_date'] }}</h2>
          <h2>{{ $comic['type'] }}</h2>
        </div>

        <div class="p-4">
          <a href="{{ route('comics.edit', $comic) }}">Edit</a>
        </div>

        <div class="ml-auto p-4">
          <form onsubmit="return confirm('Confermi l\'eliminazione di: {{ $comic['title'] }}')"
            action="{{ route('comics.destroy', $comic) }}" method="POST">
            @method('DELETE')
            @csrf
            <button type="submit" class="text-pastel-200">Delete</button>
          </form>
        </div>

      </div>
    @empty
    @endforelse

  </div>
@endsection
