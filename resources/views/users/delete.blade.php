@extends('../layouts.app')

@section('title', 'Users')

@section('content')
<div class="container">
  <p>以下のユーザーを削除しますか？</p>
  <table>
    <thead>
      <tr>
        <th>ID</th>
        <th>NAME</th>
        <th>EMAIL</th>
        <th>VERIFIED</th>
        <th>AUTHORITY</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>{{$user->id}}</td>
        <td>{{$user->name}}</td>
        <td>{{$user->email}}</td>
        <td>{{$user->email_verified_at}}</td>
        <td>{{$user->authorization->authority}}</td>
      </tr>
    </tbody>
  </table>
  <form action='{{ url("/users/".$user->id."/delete") }}' method='POST'>
    {{csrf_field()}}
    {{method_field('DELETE')}}
    <button class='btn btn-outline-danger' type='submit'>DELETE</button>
  </form>
</div>
@endsection