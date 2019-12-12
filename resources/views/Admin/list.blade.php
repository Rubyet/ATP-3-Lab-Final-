<!DOCTYPE html>
<html>
<head>
	<title>Member list</title>
</head>
<body>
	<h1>Member List</h1>

	<a href="{{route('admin.index')}}">Back</a> |
	<a href="{{route('logout.index')}}">logout</a>

<br><br>
	<table border="1">
		<tr>
			<td>ID</td>
			<td>Name</td>
			<td>Email</td>
			<td>Type</td>
			<td>ACTION</td>
		</tr>


	@foreach($User as $user)
		<tr>
			<td>{{ $user->id }}</td>
			<td>{{ $user->username }}</td>
			<td>{{ $user->email }}</td>
			<td>{{ $user->type }}</td>
			<td>
				<a href="{{ route('admin.edit', $user->id)  }}"> EDIT </a> | 
				<a href="{{ route('admin.delete', $user->id ) }}"> DELETE </a> | 
			</td>
		</tr>
	@endforeach

	</table>
</body>
</html>