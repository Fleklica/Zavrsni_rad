<?php require('db.php'); ?>
<!DOCTYPE html>
<html>

	<head>
		<meta charset="UTF-8">
		<title>Moja galerija</title>
		<link rel="stylesheet" type="text/css" href="style.css">
	</head>
	
	<body>
	
		<ul>
		  <li><a href="index.php">Pocetna</a></li>
		  <li><a class="active" href="narudzba.php">Narudzba</a></li>
		  <li><a href="galerija.php">Galerija</a></li>
		</ul>
		

	 <?php
            $sql = "SELECT * FROM users WHERE Username='" . $_POST['username'] ."'  AND Password='". $_POST['password'] ."'";
            $result = $conn->query($sql);
			

            if ($result->num_rows > 0) {
                
                session_start();
                $_SESSION['login'] = "1";
                header("Location: index1.php");
			
			}
				
			
            else {
                echo "Provjerite jeste li ispravno unijeli podatke!";
                session_start();
                $_SESSION['login'] = '';
            }
            ?>

        <form action="login.php">
            <input type="submit" value="Prijava"><br>
        </form>

	
		

	</body>
</html>