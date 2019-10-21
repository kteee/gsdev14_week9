@extends('../layouts.app')

@section('title','Items')

@section('content')

  <div class="container">
    <h2>品目新規登録</h2>
    <a href='{{ url("/items/new") }}' class='btn btn-outline-primary btn-block'>新規登録画面</a>
    <h2 class='mt-5'>品目一覧</h2>
    <table class="table">
      <thead>
        <tr>
          <th>ID</th>
          <th>NAME</th>
          <th>TYPE</th>
          <th>EDIT</th>
        </tr>
      </thead>
      <tbody>
        @foreach($items as $item)
        <tr>
          <td>{{$item->id}}</td>
          <td>{{$item->name}}</td>
          <td>{{$item->type}}</td>
          <td><a href='{{ url("/items/".$item->id) }}' class='btn btn-outline-primary'>確認</button></td>
        </tr>
        @endforeach
      </tbody>
    </table>

  </div>

@endsection