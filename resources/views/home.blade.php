@extends('layouts.main')

@section('content')
  <div class="container mx-auto px-5">
    @forelse ($all_comics as $comic)
      <div class="flex-column">
        <div class="flex justify-center">
          <a href="{{ route('comics.show', $comic) }}" class="inline-block">
            <img src="{{ $comic['thumb'] }}" alt="{{ $comic['title'] }}">
          </a>
        </div>
        <h2>{{ $comic['title'] }}</h2>
        <p>{{ $comic['description'] }}</p>
        <h2>{{ $comic['price'] }}</h2>
        <h2>{{ $comic['series'] }}</h2>
        <h2>{{ $comic['sale_date'] }}</h2>
        <h2>{{ $comic['type'] }}</h2>
        <hr>
      </div>
    @empty
    @endforelse

  </div>
@endsection
