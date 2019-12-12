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
			<td><input type="text" name="id" value="{{$user['id']}}" required readonly></td>
		</tr>
		<tr>
			<td>Username</td>
			<td><input type="text" name="username" value="{{$user['username']}}" required></td>
		</tr>
		<tr>
			<td>PASSWORD</td>
			<td><input type="password" name="password" value="{{$user['password']}}" required></td>
		</tr>
		@if(session('type')=="Admin" && $user['type']=="Member")
		<tr>
			<td>Type</td>
			<td>
				<select name="type">
					<option value="Admin">Admin</option>
					<option value="Member" selected>Member</option>
				</select>
			</td>
		</tr>
		@elseif(session('type')=="Admin" && $user['type']=="Admin")
		<tr>
			<td>Type</td>
			<td>
				<select name="type">
					<option value="Admin" selected>Admin</option>
					<option value="Member" >Member</option>
				</select>
			</td>
		</tr>
		@else
		<tr>
			<td>Type</td>
			<td>
				<select name="type">
					<option value="Member"  selected>Member</option>
				</select>
			</td>
		</tr>
		@endif
		<tr>
			<td>Email</td>
			<td><input type="text" name="email" value="{{$user['email']}}" required></td>
		</tr>

		<tr>
			<td></td>
			<td><input type="submit" name="submit" value="Save"></td>
		</tr>
	</table>
</form>
</body>
</html>