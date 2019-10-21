@extends('../layouts.app')

@section('title','Item New')

@section('content')

  <div class="container">
    <h2>品目新規登録</h2>
    <form action='{{ url("/items/new") }}' method='POST' class='form-group'>
      {{ csrf_field() }} 
      {{ method_field('POST') }}
      <div class="mt-3">
        <label for="name">NAME</label>
        <input type='text' name='name' id='name' class='form-control'>
      </div>
      <div class="mt-3">
        <label for="type">TYPE</label>
        <select name="type" id="type" class='form-control'>
          <option value="in">IN</option>
          <option value="out">OUT</option>
        </select>
      </div>
      <button type='submit' class='mt-4 btn btn-primary btn-block'>登録</button>
    </form>
  </div>

@endsection