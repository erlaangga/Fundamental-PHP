<?php
session_start();
if (!isset($_SESSION["username"])){
	header("Location:./index.php");
}
echo $_SESSION["username"];
echo"anda sukses login";
?>
