@extends('../layouts.app')

@section('title','index')

@section('content')

  <div class="container">
    <h2>登録フォーム</h2>
    <form action="{{ url('deals/new') }}" method='POST' class='form-group'>
      {{csrf_field()}}
      {{method_field('POST')}}

      <div class="mt-3">
        <label for="date">日付</label>
        <input type="date" name='date' id='date' class='form-control'>
      </div>

      <div class='mt-3'>
        <label for='type'>収支</label>
        <select name='type' id='type' class='form-control'>
          <option value='in'>IN</option>
          <option value='out'>OUT</option>
        </select>
      </div>

      <div class="mt-3">
        <label for="item">アイテム</label>
        <select name='item' id='item' class='form-control'>
          <option value='blank'></option>
          @foreach($items as $item)
            <option value='{{$item->name}}'>{{$item->name}}</option>
          @endforeach
        </select>
      </div>

      <div class="mt-3">
        <label for="amount">金額</label>
        <input type="amount" name='amount' id='amount' class='form-control'>
      </div>

      <div class="mt-3">
        <label for="detail">補足</label>
        <input type="text" name='detail' id='detail' class='form-control'>
      </div>

      <div class="mt-3">
        <button type='submit' class='btn btn-primary btn-block'>登録</button>
      </div>
    </form>

    <hr>

    <h2 class='mt-5'>登録内容一覧</h2>
    <table class="table">
      <thead>
        <tr>
          <th>ID</th>
          <th>DATE</th>
          <th>TYPE</th>
          <th>ITEM</th>
          <th>AMOUNT</th>
          <th>DETAIL</th>
          <th>EDIT</th>
        </tr>
      </thead>
      <tbody>
        @foreach($deals as $deal)
        <tr>
          <td>{{$deal->id}}</td>
          <td>{{$deal->date}}</td>
          <td>{{$deal->type}}</td>
          <td>{{$deal->item}}</td>
          <td>{{$deal->amount}}</td>
          <td>{{$deal->detail}}</td>
          <td><a href='{{ url("/deals/".$deal->id) }}' class='btn btn-outline-primary'>確認</button></td>
        </tr>
        @endforeach
      </tbody>
    </table>

  </div>

@endsection