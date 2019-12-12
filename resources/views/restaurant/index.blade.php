<!DOCTYPE html>
<html>
<head>
	<title>Restaurants</title>
</head>
<body>
	<h1>Restaurant List</h1>

	<a href="">Back</a> |
	<a href="{{route('logout.index')}}">logout</a>

<br><br>
	

	@foreach($Restaurant as $restaurant)
	<table border="1" align="center" >
		<tr>
			<td><h2> {{$restaurant['name']}} </h2></td>
		</tr>
		<tr>
			<td><h4>Location : </h4>{{$restaurant['location']}}</td>
		</tr>
		<tr>
			<td><h4>Background Of this Restaurant: </h4><br> {{$restaurant['background']}}</td>
		</tr>
		<tr>
			<td>
				<a href="{{route('menu.index',$restaurant['id'])}}"> Menu </a>
			</td>
		</tr>
	</table>	
	<br><br>
			
		
	@endforeach
	
</body>
</html>