<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <p>
      <a href="{{ route('social.create') }}">Add User</a>
    </p>
    @foreach ($users as $user)
      <p>Id: {{ $user->id }}</p>
      <p>Name: {{ $user->first_name }} {{ $user->last_name }}</p>
      <p>Email: {{ $user->email }}</p>
      <p>
        <a href="{{ route('social.edit', $user->id) }}">Edit</a>
      </p>
      <p>
        {!! Form::open(['method'=>'DELETE',
                        'route'=>['social.destroy',$user->id]]) !!}
        {!! Form::submit('Delete') !!}
        {!! Form::close() !!}
      </p>
    @endforeach
  </body>
</html>
