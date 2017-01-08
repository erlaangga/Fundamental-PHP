<?php
session_start();
?>

<?php
echo session_id();
echo $_SESSION["makan"], "<br>";
echo "Session " . count($_SESSION) > 0 ? "ada" : "tidak ada";
foreach ( $_SESSION as $sesi ){
	echo $sesi . "<br>";
	echo "<br>Isi makan: " . $_SESSION["makan"];
}
?>
