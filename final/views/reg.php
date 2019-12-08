<!DOCTYPE html>
<html>
<head>
	<title>Login Page</title>
</head>
<body>

	<form method="POST" action="../php/regCheck.php">
		<fieldset>
			<legend>Registration</legend>
		<table>
			<tr>
				<td>Employer name:</td>
				<td><input type="text" name="ename"></td>
			</tr>
			<tr>
				<td>CompanyName:</td>
				<td><input type="text" name="cname"></td>
			</tr>
			<tr>
				<td>UserName:</td>
				<td><input type="text" name="uname"></td>
			</tr>
			
			<tr>
				<td>ContactNo.:</td>
				<td><input type="number" name="cno"></td>
			</tr>
			
			<tr>
				<td>Password:</td>
				<td><input type="password" name="pass"></td>
			</tr>
			<tr>
			<td>
			<font > User Type: </font><br>
			<input type="radio" name="utype" value="Employee"/>Employee
			<input type="radio" name="utype" value="Admin"/>Admin
			
			</td>
			
			</tr>
			<tr>
				<td><input type="submit" name="submit" value="Submit"></td>
				<td></td>
			</tr>
		</table>
		</fieldset>
	</form>

	<a href="login.php">SignIn</a>
</body>
</html>