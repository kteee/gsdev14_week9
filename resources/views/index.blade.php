@extends('layouts.app')

@section('title','index')

@section('content')

  <div class="container">
    <h2>Menu List</h2>
    <ul class='list-group'>
      <li class='list-group-item'><a href="{{ url('/deals') }}">取引一覧</a></li>
      <li class='list-group-item'><a href="{{ url('/items') }}">品目一覧</a></li>
    </ul>
  </div>

@endsection