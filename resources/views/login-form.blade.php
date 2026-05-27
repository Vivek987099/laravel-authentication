<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>LOGIN FORM</h1>
    <form action="{{ route('login-process') }}" method="POST" >
        @csrf
        Email : <input type="email" placeholder="enter email" name="email" >
        <span>@error('email') {{ $message }}  @enderror </span>
        Password : <input type="password" placeholder="enter password" name="password" >
        <span>@error('email') {{ $message }}  @enderror </span>
        <input type="submit" value="Login">
    </form>
</body>
</html>