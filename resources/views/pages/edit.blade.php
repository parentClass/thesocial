<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    @foreach ($users as $user)
      {!! Form::open(['method'=>'PATCH',
                      'route'=>['social.update',$user->id]]) !!}
        {!! Form::label('first_name', 'First name: ') !!}
        {!! Form::text('first_name', $user->first_name) !!}
        <br/>
        {!! Form::label('last_name', 'Last name: ') !!}
        {!! Form::text('last_name', $user->last_name) !!}
        <br/>
        {!! Form::label('email', 'Email: ') !!}
        {!! Form::email('email', $user->email) !!}
        <br/>
        {!! Form::label('password', 'Password: ') !!}
        {!! Form::password('password') !!}
        <br/>
        {!! Form::submit('Send!') !!}
      {!! Form::close() !!}
    @endforeach
  </body>
</html>
