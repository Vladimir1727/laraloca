<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>

<form action="{{url('picture/')}}" method="POST" enctype="multipart/form-data">
	{{csrf_field()}}
	<input type="file" name="ipath">
	<input type="submit">
</form>

</body>
</html>
