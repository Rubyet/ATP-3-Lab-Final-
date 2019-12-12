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
			<td><h2>
				{{$User[ $blog['uid'] ]->username  }}
			</h2></td>
		</tr>
		<tr>
			<td><h4>{{$blog['post']}}</td>
		</tr>
		<tr>
			<td>
				<h4>Comments:</h4>
				
				@foreach($Comment as $comment)	
				<table  border="1">
					<tr>
						<td >
							{{$User[ $comment['uid'] ]->username}}
						</td>
					</tr>
					<tr>
						<td >
							{{$comment['comment']}}
						</td>
					</tr>
				</table>
				<br>
				@endforeach
				<table>
					<tr>
						<td>
						
						</td>
					</tr>
				</table>
				
			</td>
		</tr>
		
	</table>	
	<br><br>
			
		
	@endforeach
	
</body>
</html>