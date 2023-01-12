@extends('layouts.main')

@section('content')
  @forelse ($all_comics as $comic)
    <h2>{{ $comic['title'] }}</h2>
    <h2>{{ $comic['slug'] }}</h2>
    <p>{{ $comic['description'] }}</p>
    <a href="{{ route('comics.show', $comic) }}"><img src="{{ $comic['thumb'] }}" alt="{{ $comic['title'] }}"></a>
    <h2>{{ $comic['price'] }}</h2>
    <h2>{{ $comic['series'] }}</h2>
    <h2>{{ $comic['sale_date'] }}</h2>
    <h2>{{ $comic['type'] }}</h2>
  @empty
  @endforelse
@endsection
