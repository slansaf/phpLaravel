<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>
<body>
	<form action="{{Route('post_form')}}" method="post" name="myname">
		<label>Name:</label>
		<input type="text" name="my_name">
		<input type="submit" value="Отправить">
		@csrf
	</form>
</body>
</html>