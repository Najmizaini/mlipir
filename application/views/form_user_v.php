<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8"/>
	<title>Form Input - User</title>
</head>
<body>
	<form action="http://localhost/CI/index.php/user/add" method="post">
		Username<br>
		<input type="text" name="username"><br>
		Pasword<br>
		<input type="password" name="password"><br>
		Fullname<br>
		<input type="text" name="fullname"><br>
		Level<br>
		<select name="level">
			<option value="admin">Admin</option>
			<option value="user">User</option>
		</select><br>
		<input type="submit" value="simpan"></input>
	</form>

</body>
</html>