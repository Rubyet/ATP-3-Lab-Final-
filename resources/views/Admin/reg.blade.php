<!DOCTYPE html>
<html>
<head>
	<title>Register</title>
</head>
<body>
	<h1>Register</h1>

<br><br>

<form method="post">
	{{csrf_field()}}
	<table border="0">
		
		<tr>
			<td>Username</td>
			<td><input type="text" name="username" value="{{old('username')}}" required></td>
		</tr>
		<tr>
			<td>PASSWORD</td>
			<td><input type="password" name="password" value="{{old('password')}}" required></td>
		</tr>
		@if(session('type')=="Admin")
		<tr>
			<td>Type</td>
			<td>
				<select name="type">
					<option value="Admin">Admin</option>
					<option value="Member">Member</option>
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
			<td><input type="text" name="email" value="{{old('Email')}}" required></td>
		</tr>
		
		<tr>
			<td></td>
			<td><input type="submit" name="submit" value="Submit"></td>
		</tr>
	</table>
</form>
</body>
</html>