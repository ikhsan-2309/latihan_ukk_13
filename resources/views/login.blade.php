<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
</head>

<body>
  <form action="{{ route('login') }}" method="post">
    @csrf
    <div>
      <label for="">Username</label>
      <input id="username" type="text" name="username" autofocus required>
    </div>
    <div>
      <label for="">Password</label>
      <input id="password" type="password" name="password" required>
    </div>
    <button type="submit">Login</button>
  </form>
</body>

</html>
