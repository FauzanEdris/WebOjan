<!DOCTYPE html>
<html>
	<head>
		<title>Fauzan Edris || Percabangan</title>
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

				if (isset($_POST["gender"]))
				{
					$gender = $_POST["gender"]; // set var gender
				}
				else
				{
					$gender = " "; // jika tidak kosong
				}
			
				if (isset($_POST["date"]))
				{
					$date = $_POST["date"];
				}
				else
				{
					$date = " ";
				}
			?>
				
			<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
				Pilihlah Gender Anda :
			  	<input type="radio" name="gender" value="Laki-laki">Laki-laki
			  	<input type="radio" name="gender" value="Perempuan">Perempuan
			  	<br/>
			  	Pilih Hari Janji Ketemu :
			  	<select name="date">
			  		<option value="senin">Senin</option>
			  		<option value="selasa">Selasa</option>
			  		<option value="rabu">Rabu</option>
			  		<option value="kamis">Kamis</option>
			  		<option value="jumat">Jumat</option>
			  		<option value="sabtu">Sabtu</option>
			  		<option value="minggu">Minggu</option>
			  	</select>
				<input type="submit" name="submit" value="Submit"> 
			</form> 

			<h2>Percabangan</h2>
			<?php

				echo "<h4><li>If Else</li></h4>";
			
				if ($gender == "Laki-laki")
				{
					echo "&emsp; Gender Anda adalah $gender <br/>";
					echo "&emsp; Anda <b>tidak boleh</b> memakai Anting, Berambut Panjang dan memakai Rok";
				}
				else if ($gender == "Perempuan")
				{
					echo "&emsp; Gender Anda adalah $gender <br/>";
					echo "&emsp; Anda <b>boleh</b> memakai Anting, Berambut Panjang dan memakai Rok";
				}
				else
				{
					echo "Pilihlah Gender Anda..";
				}
				
				echo "<h4><li>Switch Case</li></h4>";
				switch ($date)
				{
					case "senin" : 
						echo "&emsp; Hari $date saya bisa jam 1 di ruangan 4.3";
						break;
					case "selasa" : 
						echo "&emsp; Hari $date saya bisa jam 3 di ruangan 4.4";
						break;
					case "jumat" : 
						echo "&emsp; Hari $date saya bisa jam 1 di ruangan PSI";
						break;
					case "sabtu" : 
						echo "&emsp; Hari $date saya bisa jam 1 di ruangan 3.3";
						break;
					case "rabu" : case "kamis" : case "minggu" :
						echo "&emsp; Saya Libur di hari $date";
						break;
					default:
						echo "Pilih Hari Ketemuan..";
				}
			?>
		</div>
		<div id="footer">
			<p class="">&#169; 160010023 - Fauzan Edris</p>
			<marquee>Konfigurasi Web Server</marquee>
		</div>
	</body>
</html>