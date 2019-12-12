<!DOCTYPE html>
<html>
<head>
	<title>Add Employee</title>
</head>
<body>
	<h1>Add Employee</h1>

	<a href="{{route('admin.index')}}">Back</a> |
	<a href="{{route('logout.index')}}">logout</a>

<br><br>

<form method="post">
	{{csrf_field()}}
	<table border="0">
		
		<tr>
			<td>Name</td>
			<td><input type="text" name="name" value="{{old('name')}}"></td>
		</tr>
		<tr>
			<td>Contact No.</td>
			<td><input type="text" name="contact" value="{{old('contact')}}"></td>
		</tr>
		<tr>
			<td>Username</td>
			<td><input type="text" name="username" value="{{old('username')}}"></td>
		</tr>
		<tr>
			<td>PASSWORD</td>
			<td><input type="password" name="password" value="{{old('password')}}"></td>
		</tr>
		<tr>
			<td>Type</td>
			<td><input type="text" name="type" value="{{old('type')}}"></td>
		</tr>
		<tr>
			<td></td>
			<td><input type="submit" name="submit" value="Save"></td>
		</tr>
	</table>
</form>
</body>
</html>