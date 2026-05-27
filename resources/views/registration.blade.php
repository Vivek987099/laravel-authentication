<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    
</head>
<body>
    <h1>REGISTRATION FORM</h1>    
    <form action="{{ route('users.store') }}" method="POST" >
        @csrf
        Name : <input type="text" name='name' placeholder="enter name">
        <span style="color:red"> @error('name')  {{ $message}} @enderror </span> <br><br>
        Email : <input type="email" name='email' placeholder="enter email">
        <span style="color:red"> @error('email')  {{ $message}} @enderror </span> <br><br>
        Password : <input type="password" placeholder="enter password" name="password">
        <span style="color:red"> @error('password')  {{ $message}} @enderror </span> <br><br>
        <input type="submit" value="submit">

    </form>
</body>
</html>