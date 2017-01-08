<?php
$user = $_COOKIE ["user"];
if (isset ( $_POST ["nama"] ))
	$user = $_POST ["nama"];
	
// tes iseng :D
echo $user;

if (count ( $_COOKIE ) == 0 and count ( $_POST ) != 0) {
	$pass = $_POST ["pass"];
	
	// mendeklarasikan cookie
	setcookie ( "user", $name, time () + 86400, "/" );
	echo "<br>nama yang dimasukkan adalah $user";
}
if (count ( $_COOKIE ) != 0)
	echo "<br>Anda sudah memasukkan nama ", $_COOKIE ["user"];

	
// untuk menghapus cookie kita dapat mengosongkan nilai cookie
// setcookie("user", "", time() - 3600, "/"); // cookie menjadi kadaluarsa 1 Jam sebelumnya
?>
<html>
<head>
<title>Tes Cookie</title>
</head>
<body>
	<form action="cookietes2.php" method="post">
		<input placeholder="Nama" value="<?php echo $user?>" type="text" name="nama"> <input
			type="submit">
	</form>
</body>
</html>