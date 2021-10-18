<!DOCTYPE HTML>
<html>
	<head>
		
	</head>  
	<body>
		<form action="welcome.php" method="post">
		Name: <input type="text" name="name"><br><br>
		E-mail: <input type="text" name="email"><br><br>
		Phone: <input type="number" name="phone"><br><br>
		Gender:
		<input type="radio" name="gender"
		<?php if (isset($gender) && $gender=="female") echo "checked";?>
		value="female">Female
		<input type="radio" name="gender"
		<?php if (isset($gender) && $gender=="male") echo "checked";?>
		value="male">Male<br><br>
		<input type="submit">
		</form>
	</body>
</html>