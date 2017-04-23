<!DOCTYPE html>
<html>

	<head>
		<meta charset="UTF-8">
		<title>Moja galerija</title>
		<link rel="stylesheet" type="text/css" href="style.css">
	</head>
	
	<body>
	
		<ul>
		  <li><a href="index.php">Početna</a></li>
		  <li><a href="login.php">Login</a></li>
		  <li><a class="active" href="registracija.php">Registracija</a></li>
		  <li><a href="narudzba.php">Narudžba</a></li>
		  <li><a href="galerija.php">Galerija</a></li>
		</ul>
		

		
			<table align="center">
			<form action="/action_page.php">
				<tr><th>Ime:</th> <th><input type="text" name="ime"></th></tr>
				<tr><th>Prezime:</th> <th><input type="text" name="prezime"></th></tr>
				<tr><th>Broj mobitela:</th> <th><input type="number_format" name="broj_mobitela"></th></tr>
				<tr><th>E-mail:</th> <th><input type="text" name="e-mail"></th></tr>
				<tr><th>Korisničko ime:</th> <th><input type="text" name="username"></th></tr>
				<tr><th>Lozinka:</th> <th><input type="text" name="password"></th></tr>
				<tr><th>Adresa_stanovanja:</th> <th><input type="text" name="adresa_stanovanja"></th></tr>
				<tr><th>Mjesto:</th> <th><input type="text" name="mjesto"></th></tr>
				<tr><th>Poštanski broj:</th> <th><input type="number_format" name="postanski_broj"></th></tr>
				<tr><th><button type="button">Registracija</button></th></tr>
			</form>			
			</table>
			
		

	</body>
</html>