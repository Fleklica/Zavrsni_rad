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
		  <li><a href="narudzba.php">Narudžba</a></li>
		  <li><a class="active" href="galerija.php">Galerija</a></li>
		</ul>
		

		  <div class="sadrzaj">
			<h1>SLIČKE</h1>
		
			<?php

		// open this directory 
		$myDirectory = opendir("slike");

		// get each entry
		while($entryName = readdir($myDirectory)) {
			$dirArray[] = $entryName;
		}

		// close directory
		closedir($myDirectory);

		//	count elements in array
		$indexCount	= count($dirArray);

		?>
		
		

			<?php
			// loop through the array of files and print them all in a list
			for($index=0; $index < $indexCount; $index++) {
				$extension = substr($dirArray[$index], -3);
				if ($extension == 'jpg'){ // list only jpgs
					echo '<li><img src="slike/' . $dirArray[$index] . '" alt="Image" /><span>' . $dirArray[$index] . '</span>';
				}	
			}
			?>

		
				
			
			
			</div>
		

	</body>
</html>



