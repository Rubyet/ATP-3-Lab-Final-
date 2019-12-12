<!DOCTYPE html>
<html>
<head>
	<title>Food Experience</title>
</head>
<body>
	<h1 align="center">Welcome To Our Blog</h1>
	<table align="center">
		<tr>
			<td >
				<a href="">Login</a> |
				<a href="">Register</a> |
				<a href="">Restaurant List</a>
			</td>
		</tr>
	</table>	

<br><br>
	

	@foreach($Blog as $blog)
	<table border="1" align="center" >
		<tr>
			<td><h2>{{$User['username']->where($User['id']==$blog['uid'])}}</h2></td>
		</tr>
		<tr>
			<td><h4>{{$blog['post']}}</td>
		</tr>
		<tr>
			<td>
				<h4>Comments:</h4>
				<form>
				@foreach($Comment as $comment)	
				<table  border="1">
					<tr>
						<td >
							{{$User[ $comment['uid'] ]}}
						</td>
					</tr>
					<tr>
						<td >
							{{$comment['comment']}}
						</td>
					</tr>
				</table>
				@endforeach
				<table>
					<tr>
						<td>
							<input type="text" name="comment"> | <input type="submit" name="submit" value="Go">
						</td>
					</tr>
				</table>
				</form>
			</td>
		</tr>
		
	</table>	
	<br><br>
			
		
	@endforeach
	
</body>
</html>