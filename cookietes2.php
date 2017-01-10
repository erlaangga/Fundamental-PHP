<?php 
if(count($_COOKIE)!=0){
	foreach ($_COOKIE as $cook) echo "Cookie sudah ada dengan isi ".$cook."<br>";
}else echo "Cookie belum ada ".$_POST['nama'];
?>