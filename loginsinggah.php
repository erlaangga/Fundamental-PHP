<?php
session_start ();
echo $_POST ["username"];
$_SESSION ["username"] = $_POST ["username"];
header ( "Location: halaman_utama.php" );
?>