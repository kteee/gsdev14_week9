@extends('../layouts.app')

@section('title', 'Users')

@section('content')
<div class="container">
  <table>
    <thead>
      <tr>
        <th>ID</th>
        <th>NAME</th>
        <th>EMAIL</th>
        <th>VERIFIED</th>
        <th>AUTHORITY</th>
        <th>PROFILE</th>
        <th>DELETE</th>
      </tr>
    </thead>
    <tbody>
    @foreach($users as $user)
      <tr>
        <td>{{$user->id}}</td>
        <td>{{$user->name}}</td>
        <td>{{$user->email}}</td>
        <td>{{$user->email_verified_at}}</td>
        <td>{{$user->authorization->authority}}</td>
        <td><a class='btn btn-outline-primary btn-sm' href='{{ route("image_get",["id"=>$user->id]) }}'>PROFILE</a></td>
        <td><a class='btn btn-outline-danger btn-sm' href='{{ route("delete_get",["id"=>$user->id]) }}'>DEL</a></td>
      </tr>
    @endforeach
    </tbody>
  </table>
</div>
@endsection