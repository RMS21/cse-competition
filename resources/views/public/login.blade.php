<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>login</title>
    <style media="screen">
      form{
        width: 400px;
        margin: 300px auto;
        padding: 10px;
        font-size: 25px;
        text-align: right;
      }
      label{
        padding: 5px;
        margin: 0 10px;
        width: 100px;
      }

      input{
        margin: 10px 0;
        width: 200px;
      }
    </style>
  </head>
  <body>
    @if(count($errors) > 0)
      @foreach($errors->all() as $error)
        {{ $error }}
      @endforeach
    @endif
    <form action="{{ route('post_team_login') }}" method="post">
        <label>TeamName</label>
        <input type="text" name="name">
        <br>
        <label>Password</label>
        <input type="password" name="password">
        <button type="submit" name="submit">Submit</button>
        <input type="hidden" name="_token" value="{{ csrf_token() }}">
    </form>
  </body>
</html>
