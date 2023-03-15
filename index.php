<!DOCTYPE html>
<html lang="ru">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Test Form</title>
</head>
<body>
	<form action="signature_class.php" method="get">
		<div>
			<label> Введите имя</label>
			<input type="text" name="name" placeholder="Имя"> 
		</div>
		<br>
		<div>
			<label> Введите фамилию</label>
			<input type="text" name="surname" placeholder="Фамилия">
		</div>
		<br>
		<div>
			<label> Введите Отчество</label>
			<input type="text" name="father_name" placeholder="Отчество">
		</div>
		<br>
		<div>
			<label> Введите телефон 1</label>
			<input type="tel" name="first_phone" placeholder="Телефон">
		</div>
		<br>
		<div>
			<label> Введите телефон 2</label>
			<input type="tel" name="second_phone" placeholder="Телефон">
		</div>
		<br>
		<div>
			<label> Введите почту 1</label>
			<input type="email" name="first_email" placeholder="Электронная почта">
		</div>
		<br>
		<div>
			<label> Введите почту 2</label>
			<input type="email" name="second_email" placeholder="Электронная почта">
		</div>
		<br>
		<div>
			<button type="submit"> Сгенерировать </button>
		</div>
		<br> 
	</form>
</body>
</html>