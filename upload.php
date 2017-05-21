<?php require('db.php'); ?>
<?php require('check.php'); ?>
<!DOCTYPE html>
<html>

	<head>
		<meta charset="UTF-8">
		<title>Moja galerija</title>
		<link rel="stylesheet" type="text/css" href="style.css">
	</head>
	
	<body>
	
		<ul>
		  <li><a href="index1.php">Pocetna</a></li>
		  <li><a href="galerija1.php">Galerija</a></li>
          <li><a class="active" href="upload.php">Dodavanje slika</a></li>
          <li><a href="popis.php">Popis narudzbi</a></li>

		</ul>
		

		<div class="naslov";> 
			<h1>Dodavanje slika</h1>
		
		<form action="uploade.php" method="post" enctype="multipart/form-data">
		Odaberi sliku:
		<input type="file" name="fileToUpload" id="fileToUpload"><br>
		<input type="submit" value="Upload Image" name="submit">
		</form>

                </div>
		
		
	
		

	</body>
</html>