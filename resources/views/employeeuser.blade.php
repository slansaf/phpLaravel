<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>EmployeeUser</title>
</head>

<body>
	<form name="employeeuser" method="post" action="{{ Route('store_employee') }}">
		@csrf
		<label for="first_name">Имя: </label><input id="first_name" type="text" name="first_name" value="@if($employee){{$employee->first_name}} @endif"><br><br>
		<label for="last_name">Фамилия: </label><input id="last_name" type="text" name="last_name" value="@if($employee){{$employee->last_name}} @endif"><br><br>
		<label>Выбрать департамент: </label><br>

			<input type="checkbox" name="department[]" value="it" @if($employee && in_array('it', unserialize($employee->department))) checked @endif> IT </input> <br>
			<input type="checkbox" name="department[]" value="internal service" @if($employee && in_array('internal service', unserialize($employee->department))) checked @endif> Interna service </input><br>
			<input type="checkbox" name="department[]" value="finance" @if($employee && in_array('finance', unserialize($employee->department))) checked @endif> Finance </input><br><br>

		<input type="submit" value="Отправить">
	</form>
</body>

</html>