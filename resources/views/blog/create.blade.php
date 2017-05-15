<!DOCTYPE html>
<html>
<head>
	<title>Add info</title>
</head>
<body>
	<form action="{{route('blog.store')}}" method="post">
		Name:
		<input type="text" name="title"><br><br>
		Title:
		<input type="text" name="description"><br>
		<input type="submit" value="Save">
		{{csrf_field()}}
	</form>
</body>
</html>