<!DOCTYPE html>
<html>
<head>
	<title>Home</title>
</head>
<body>
	<h1>Welcome To The food blog! {{ session('type') }}</h1>

	<br>
	@if(session('type')=="Admin")

		<a href="{{ route('admin.details',session('id')) }}">Profile</a> | |
		<a href="{{ route('admin.create') }}">Add Member</a> | |
		<a href="{{ route('admin.list') }}">Show All Member</a> | |
		<a href="{{ route('blog.index') }}">Food Experience</a> | |
		<a href="{{route('restaurant.index')}}"> Restaurants </a> | |
		<a href="{{ route('logout.index') }}">logout</a>
	@else
		<a href="{{ route('admin.details',session('id')) }}">Profile</a> | |
		<a href="{{ route('blog.index') }}">Food Experience</a> | |
		<a href="{{route('restaurant.index')}}"> Restaurants </a> | |
		<a href="{{ route('logout.index') }}">logout</a>		
	@endif
	

</body>
</html>