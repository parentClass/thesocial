<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>

    {!! Form::open(['method'=>'POST',
                    'route'=>['social.store']
                  ]) !!}
      {!! Form::label('first_name', 'First name: ') !!}
      {!! Form::text('first_name') !!}
      <br/>
      {!! Form::label('last_name', 'Last name: ') !!}
      {!! Form::text('last_name') !!}
      <br/>
      {!! Form::label('email', 'Email: ') !!}
      {!! Form::email('email') !!}
      <br/>
      {!! Form::label('password', 'Password: ') !!}
      {!! Form::password('password') !!}
      <br/>
      {!! Form::submit('Send!') !!}
    {!! Form::close() !!}
  </body>
</html>
