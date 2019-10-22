@extends('../layouts.app')

@section('title','image')

@section('content')
<div class="container">
  
  @if($errors->any())
    <div class="alert alert-warning">
      <ul>
        @foreach($erros->all() as $error)
        <li>{{ $error }}</li>
        @endforeach
      </ul>
    </div>
  @endif

  @if(session('success'))
  <div class="alert alert-success">
    <p>{{ session('success') }}</p>
    <p>{{ session('profile') }}</p>
  </div>
  @endif
  
  <h2>プロフィール画像</h2>
  <img src='{{ $image_url }}' alt='profile-pic'>

  <form action='{{ route("image_post",["id"=>$user_id]) }}' method='POST'  enctype='multipart/form-data' class='form-group'>
    {{ csrf_field() }}
    {{ method_field('POST') }}
    <input type='hidden' name='user_id' value='{{$user_id}}'>
    <div class='mt-3'>
      <input type='file' name='image' class='form-control'>
    </div>
    <div class='mt-3'>
      <button type='submit' class='btn btn-primary'>UPLOAD</button>
    </div>
  </form>
</div>
@endsection