@extends('layouts.main')

@section('content')
  <form action="{{ route('comics.store') }}" method="POST">

    @csrf

    <input type="text" name="title" placeholder="Inserisci il titolo del comic">
    <input type="text" name="price" placeholder="Inserisci il prezzo del comic">
    <input type="text" name="type" placeholder="Inserisci il tipo del comic">
    <button type="submit">Inserisci</button>
  </form>
@endsection
