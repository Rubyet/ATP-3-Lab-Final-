<!DOCTYPE html>
<html>
<head>
	<title>Admin Home</title>
</head>
<body>
	<h1>Welcome home! {{ session('type') }}</h1>

	<br>
	@if(session('type')=="Admin")
	
		<a href="{{ route('admin.create') }}">Add Employee</a> | |
		<a href="{{ route('admin.list') }}">Show All Employee</a> | |
		<a href="{{ route('logout.index') }}">logout</a>
	@else
	
		<a href="{{ route('product.create') }}">Add Product</a> | |
		<a href="{{ route('product.list') }}">Show All product</a> | |
		<a href="{{ route('logout.index') }}">logout</a>		
	@endif
	

</body>
</html>