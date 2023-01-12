@extends('layouts.main')

@section('content')
  <h1>Contenuto</h1>
  <h2>{{ $comic['title'] }}</h2>
  <h2>{{ $comic['slug'] }}</h2>
  <p>{{ $comic['description'] }}</p>
@endsection
