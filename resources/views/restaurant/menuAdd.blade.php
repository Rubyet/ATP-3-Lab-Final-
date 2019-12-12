<!DOCTYPE html>
<html>
<head>
	<title>Add To menu</title>
</head>
<body>
	<h1>Add Menu</h1>

	<a href="{{route('admin.index')}}">Back</a> |
	<a href="{{route('logout.index')}}">logout</a>

<br><br>

<form method="post">
	{{csrf_field()}}
	<table border="0">
		
	    <tr>
            <input type="hidden" name="rid" value="{{$rid}}">
			<td>Item Name</td>
			<td><input type="text" name="name" value="{{old('name')}}" required></td>
        </tr>
        <tr>
			<td>Price</td>
			<td><input type="text" name="price" value="{{old('price')}}" required></td>
		</tr>
		
		<tr>
			<td></td>
			<td><input type="submit" name="submit" value="Save"></td>
		</tr>
	</table>
</form>
</body>
</html>