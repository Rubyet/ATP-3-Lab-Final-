<!DOCTYPE html>
<html>
<head>
	<title>Menu</title>
</head>
<body>
	<h1>Menu</h1>

	<a href="{{route('menu.create', $rid)}}">Add To menu</a> |
	<a href="{{route('logout.index')}}">logout</a>

<br><br>
	
	<table border="1" align="center" >
	<tr>
		<td><h4>No.</h4></td>
		<td><h4>Item Name.</h4></td>
		<td><h4>Price.</h4></td>
	</tr>
	@foreach($Menu as $menu)
	
		<tr>
			<td> {{$menu['id']}}</td>
			<td> {{$menu['name']}}</td>
			<td> {{$menu['price']}}</td>
		</tr>
			
		
	@endforeach
	</table>
	
</body>
</html>