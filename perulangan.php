<!DOCTYPE html>
<html>
	<head>
		<title>Fauzan Edris || Perulangan</title>
		<link href="images/tittle.ico" rel="icon">
		<link href="style.css" rel="stylesheet">
	</head>
	<body>
		<div id="navbar">
			<ul>
				<li><a href="index.php">Beranda</a></li>
				<li><a href="perulangan.php">Perulangan</a></li>
				<li><a href="percabangan.php">Percabangan</a></li>
			</ul>
		</div>
		<div id="header">
			<h1>Pemrograman Web</h1>
		</div>
		<div id="konten">
			<?php

				if (isset($_POST["angka"]))
				{
					$angka = $_POST["angka"]; // set var angka
				}
				else
				{
					$angka = -1; // jika tidak kosong
				}
			?>
				
			<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">  
				Input Angka : <input type="text" name='angka'><br><br>
				<input type="submit" name="submit" value="Submit"> 
			</form> 

			<h2>Perulangan</h2>
			<?php

				echo "<h4><li>For</li></h4>";
				for ($n=0;$n<=$angka;$n++)
				{
					$m = $n+1;
					echo "&emsp; Ini Index ke-$n, Bilangan ke-$m <br/>";
				}

				echo "<h4><li>While</li></h4>";
				$n=1;
				while ($n<=$angka)
				{
					echo "&emsp; Ini bilangan ke-$n <br/>";
					$n++;
				}
			?>
		</div>
		<div id="footer">
			<p class="">&#169; 160010023 - Fauzan Edris</p>
			<marquee>Konfigurasi Web Server</marquee>
		</div>
	</body>
</html>