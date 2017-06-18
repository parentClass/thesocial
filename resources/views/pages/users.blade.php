<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    @foreach ($users as $user)
      <p>Id: {{ $user->id }}</p>
      <p>Name: {{ $user->first_name }} {{ $user->last_name }}</p>
      <p>Email: {{ $user->email }}</p>
    @endforeach
  </body>
</html>
