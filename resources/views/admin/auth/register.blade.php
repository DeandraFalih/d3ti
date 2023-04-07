<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Register</title>
</head>
<body>
<form action="{{ url ('/register/process') }}" method="post">
    @csrf
    nama<input type="text" name="nama"><br/>
    username<input type="text" name="username"><br/>
    email<input type="text" name="email"><br/>
    password<input type="password" name="password"><br/>
    telepon<input type="number" name="telepon"><br/>
    role<input type="text" name="role"><br/>
    <button type="submit" class="btn btn-primary btn-block" name="register">Register</button>
</form>
</body>
</html>