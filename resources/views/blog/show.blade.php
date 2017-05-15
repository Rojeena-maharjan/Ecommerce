<!DOCTYPE html>
<html>
<head>
	<title>Show</title>

</head>
<body>



<div>
	<div>
		<div>
			
		</div>
	</div>
</div>

<table class="table striped">
	<tr>
		<td>Title
		
			{{$data->title}}

		</td>
	</tr>

	<tr>
		<td>
			Description:{{$data->description}}
			
		</td>
	</tr>

	
	
	
			
</table>

<form method="post" action="{{route('comment.store')}}">
	<textarea name="comments"></textarea><br>
	<input type="submit" value="Comment">

	{{csrf_field()}}
</form>

</body>
</html>