@extends('../layouts.app')

@section('title', 'DealEdit')

@section('content')
<div class="container">
  <h2>取引内容確認</h2>
  
  <p>取引を削除する</p>
  <form action='{{ url("deals/".$deal->id."/delete") }}' method='POST'>
    {{ csrf_field() }}
    {{ method_field('DELETE') }}
    <button type='submit' class='btn btn-outline-danger btn-block'>削除する</button>
  </form>
  
  <p class='mt-5'>取引を編集する</p>
  <form action='{{ url("deals/".$deal->id."/edit") }}' method='POST' class='form-group'>
    {{csrf_field()}}
    {{method_field('PUT')}}

    <div class="mt-3">
      <label for="date">日付</label>
      <input type="date" name='date' id='date' class='form-control' value='{{ $deal->date }}'>
    </div>

    <div class="mt-3">
      <label for="amount">金額</label>
      <input type="amount" name='amount' id='amount' class='form-control' value='{{ $deal->amount }}'>
    </div>

    <div class="mt-3">
      <label for="item">アイテム</label>
      <input type="text" name='item' id='item' class='form-control' value='{{ $deal->item }}'>
    </div>

    <div class="mt-3">
      <label for="detail">補足</label>
      <input type="text" name='detail' id='detail' class='form-control' value='{{ $deal->detail }}'>
    </div>

    <div class="mt-3">
      <button type='submit' class='btn btn-primary btn-block'>編集</button>
    </div>
  </form>
</div>
@endsection