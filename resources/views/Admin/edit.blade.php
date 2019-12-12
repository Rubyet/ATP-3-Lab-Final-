<!DOCTYPE html>
<html>
<head>
	<title>Student Edit</title>
</head>
<body>
	<h1>Edit Student</h1>

	<a href="{{route('admin.index')}}">Back</a> |
	<a href="{{route('logout.index')}}">logout</a>

<br><br>

<form method="post">
	{{csrf_field()}}
	<table border="0">
		<tr>
			<td>ID</td>
			<td><input type="text" name="id" value="{{$user['id']}}"></td>
		</tr>
		<tr>
			<td>Name</td>
			<td><input type="text" name="name" value="{{$user['name']}}"></td>
		</tr>
		<tr>
			<td>Contact</td>
			<td><input type="text" name="contact" value="{{$user['contact']}}"></td>
		</tr>
		<tr>
			<td>Username</td>
			<td><input type="text" name="username" value="{{$user['username']}}"></td>
		</tr>
		<tr>
			<td>PASSWORD</td>
			<td><input type="password" name="password" value="{{$user['password']}}"></td>
		</tr>
		<tr>
			<td>Type</td>
			<td><input type="text" name="type" value="{{$user['type']}}"></td>
		</tr>
		<tr>
			<td></td>
			<td><input type="submit" name="submit" value="Save"></td>
		</tr>
	</table>
</form>
</body>
</html>