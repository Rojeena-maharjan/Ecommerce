<!DOCTYPE html>
<html>
<head>
	<title>Blog</title>
</head>
<body>
	@foreach($blogs as $blog)

	<table>
		<tr>
			<td>
				Title:{{$blog->title}}
			</td>
			<td>
				Comments:{{$blog->comments}}
			</td>
		</tr>

		


	</table>

	<a href="{{route('blog.show',$blog['id'])}}">Show</a>
		
		

	@endforeach
</body>
</html>