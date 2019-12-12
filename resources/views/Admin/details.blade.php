<!DOCTYPE html>
<html>
<head>
	<title>userlist</title>
</head>
<body>
	<h1>Details </h1>

	<a href="{{route('home.index')}}">Back</a> |
	<a href="{{route('logout.index')}}">logout</a>

<br><br>
	<table border="0">
	<tr>
			<td>ID</td>
			<td><input type="text" name="id" value="{{$user['id']}}" required readonly></td>
		</tr>
		<tr>
			<td>Username</td>
			<td><input type="text" name="username" value="{{$user['username']}}" required readonly></td>
		</tr>
		<tr>
			<td>PASSWORD</td>
			<td><input type="password" name="password" value="{{$user['password']}}" required readonly></td>
		</tr>
		<tr>
			<td>Type</td>
			<td>
				{{$user['type']}}
			</td>
		</tr>
		<tr>
			<td>Email</td>
			<td><input type="text" name="email" value="{{$user['email']}}" required></td>
		</tr>
		<h3>Want to make changes</h3>
		<a href="{{ route('admin.edit' , $user->id) }}">Edit</a>
	</table>
</body>
</html>