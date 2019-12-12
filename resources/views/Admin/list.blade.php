<!DOCTYPE html>
<html>
<head>
	<title>Employee list</title>
</head>
<body>
	<h1>emloyee List</h1>

	<a href="{{route('admin.index')}}">Back</a> |
	<a href="{{route('logout.index')}}">logout</a>

<br><br>
	<table border="1">
		<tr>
			<td>ID</td>
			<td>Name</td>
			<td>Contact</td>
			<td>Type</td>
			<td>ACTION</td>
		</tr>


	@foreach($employee as $Emloyee)
		<tr>
			<td>{{ $Emloyee->id }}</td>
			<td>{{ $Emloyee->name }}</td>
			<td>{{ $Emloyee->contact }}</td>
			<td>{{ $Emloyee->type }}</td>
			<td>
				<a href="{{ route('admin.edit', $Emloyee->id)  }}"> EDIT </a> | 
				<a href="{{ route('admin.delete', $Emloyee->id ) }}"> DELETE </a> | 
			</td>
		</tr>
	@endforeach

	</table>
</body>
</html>