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
        <th>CREATED</th>
        <th>UPDATED</th>
      </tr>
    </thead>
    <tbody>
    @foreach($users as $user)
      <tr>
        <td>{{$user->id}}</td>
        <td>{{$user->name}}</td>
        <td>{{$user->email}}</td>
        <td>{{$user->email_verified_at}}</td>
        <td>{{$user->created_at}}</td>
        <td>{{$user->updated_at}}</td>
      </tr>
    @endforeach
    </tbody>
  </table>
</div>
@endsection