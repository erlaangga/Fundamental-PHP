<?php
session_start();
?>
<!-- untuk mengatur cookie -->
<?php 
$cookie_name = "user";
$cookie_value = "Meong";

// parameter set cookie
// setcookie(name, value, expire, path, domain, secure, httponly);
setcookie($cookie_name, $cookie_value); // 86400 = 1 day

?>

<html>
<head><title>Web Pribadi</title></head>
<body>

<h1>Hello world!</h1>

<svg width="100" height="100">
  
  	<circle cx="50" cy="50" r="40"
  	stroke="green" stroke-width="10" fill="black"/>
  
Sorry, your browser does not support inline SVG.
</svg>

<div id="map" style="width:400px;height:400px;background:yellow"></div>

<script>
// function myMap() {
//     var mapOptions = {
//         center: new google.maps.LatLng(-6.2293866,106.6890864),
//         zoom: 10,
//         mapTypeId: google.maps.MapTypeId.HYBRID
//     }
// var map = new google.maps.Map(document.getElementById("map"), mapOptions);
// }
</script>

<!-- <script src="https://maps.googleapis.com/maps/api/js?callback=myMap"></script> -->

<h2>It's me</h2>
<?php 
echo "Hai\n" //nampaknya titik koma adalah hal yang tidak wajib untuk statement terakhir dalam tag PHP
?>
<?php
// This is a single-line comment

# This is also a single-line comment

/*
This is a multiple-lines comment block
that spans over multiple
lines
*/

// You can also use comments to leave out parts of a code line
$x = 5 /* + 15 */ + 5;
echo $x;

?>

<?php
//tidak case sensitive
ECHO "Hello World!<br>";
echo "Hello World!<br>";
EcHo "Hello World!<br>";
?>

<!-- variabel pada PHP -->
<?php
$color = "red";
echo "My car is " . $color . "<br>";
echo "My house is " . $COLOR . "<br>";
echo "My boat is " . $coLOR . "<br>";
?>

<?php
$txt = "W3Schools.com";
echo "I love $txt!\n";
?>

<?php
$txt = "W3Schools.com";
echo "I love " . $txt . "!\n";
?>

<?php
$x = 5;
$y = 4;
echo "<br>";
echo $x + $y;
echo "<br/>"
?>

<!-- Scope variabel -->



<!-- Wow variabel global disimpan dalam array GLOBAL -->
<?php
$x = 5;
$y = 10;

// blok program pada PHP ditandai dengan kurung kurawal
function myTest() {
    $GLOBALS['y'] = $GLOBALS['x'] + $GLOBALS['y'];
} 

myTest();
echo $y; // outputs 15
echo "<br/>";

$x1 = 5;
$y1 = 10;

function myTest2() {
    global $x1, $y1;
    $y1 = $x1 + $y1;
}

myTest2();
echo $y1; // outputs 15
echo "<br/>";

// static variable
function myTest3() {
    static $x2 = 0;
    echo $x2;
    $x2++;
}

myTest3();
echo "<br>";
myTest3();
echo "<br>";
myTest3();

// local variable with can only be accessed by
?> 

<?php
$txt1 = "Learn PHP";
$txt2 = "W3Schools.com";
$x = 5;
$y = 4;

echo "<h2>$txt1</h2>";
echo "Study PHP at $txt2<br>";
echo $x + $y;

?>

<?php
// $txt1 = "Learn PHP";
// $txt2 = "W3Schools.com";
// $x = 5;
// $y = 4;
// So that's why I got some errors when I duplicated some variables even in different PHP section.
// The variable is declarated in the same HTML is known by other section.
print "<h2>$txt1</h2>";
print "Study PHP    at $txt2<br>";
print $x + $y;
echo "<br> Ini    adalah nilai ", 0xF; //spasi pertama dan spasi lebih dari satu kali diabaikan pada HTML
echo "<br>"
?>

<!-- tipe data -->
<?php
$br = "<br/>";
print br; 
echo br; //cetak karakter tidak perlu menggunakan tanda kutip
echo "pindah baris $br";
echo "meskipun variabelnya belom dideklarasikan, $inivariabel akan dianggap sebagai variabel kosong";
echo $br;
$nilainya = 5985;
var_dump($nilainya);
echo $br;
$nilainya = 10.365;
var_dump($nilainya);
echo "Typecasting di PHP: ", (Int)$nilainya;
echo " tipenya jadi: ",var_dump((Int) $nilainya);
echo $br;
$nilainya = true;
var_dump($nilainya);
echo $br;
$nilainya= array("Volvo","BMW","Toyota");
var_dump($nilainya);
echo $br;
$nilainya=NULL;
var_dump($nilainya);
echo $br;
?>

<!-- class pada PHP -->
<?php
class Car {
    function Car() {
        $this->model = "VW";
    }
}

// create an object
$herbie = new Car();

// show object properties
echo $herbie->model, $br;
echo "var_dump class: ", var_dump($herbie);
echo $br;
?>

<?php echo strlen("Hello world!"), $br; // outputs 12
echo str_word_count("Hello world!"), $br; // outputs 2
echo strrev("Hello world!"), $br; // outputs !dlrow olleH
echo strpos("Hello world!", "world"), $br; // outputs 6
echo "Tes"[0],$br;
echo str_replace("world", "meong", "Hello world!"), $br; // outputs Hello meong!

?>

<?php define("GREETING", "Welcome to W3Schools.com!"); // define(name, value, case-insensitive)
echo GREETING, $br; // nama konstan tidak perlu memakai tanda $ (dollar)
echo Greeting, $br;
define("GREETING", "Welcome to W3Schools.com!", true);
echo greeting, $br;
echo gReeting, $br;
echo greeTing, $br;

// constants are global
function greetin() {
	echo GREETING;
}

greetin();
require('tes/index.html');
require("tes/index.html");
echo 'menggunakan satu quote', $br; // bisa menggunakan kutip satu atau kutip dua 
print 'menggunakan satu quote $br <br>'; //kalau pake kutip satu ngga bisa menyisipkan variable
print "menggunakan dua quote $br"; 
require 'tes/index.html'; //menggunakan kutip satu atau dua ternyata juga bisa
require "tes/index.html";
print "makan"." nasi $br"; // tanda titik dipake untuk menyatukan string
?>

<?php
$t = date("H");
echo " Pukul $t $br";
if ($t < "10") {
    echo "Have a good morning!";
} elseif ($t < "20") {
    echo "Have a good day!";
} else {
    echo "Have a good night!";
}

$x = 5;
$y = 7;
echo $br;


// operator 
/*
Operator biner pada PHP
+	Addition	$x + $y	Sum of $x and $y	
-	Subtraction	$x - $y	Difference of $x and $y	
*	Multiplication	$x * $y	Product of $x and $y	
/	Division	$x / $y	Quotient of $x and $y	
%	Modulus	$x % $y	Remainder of $x divided by $y	
**	Exponentiation	$x ** $y	Result of raising $x to the $y'th power (Introduced in PHP 5.6)
 */

/*
Assignment Operator
x = y	x = y	The left operand gets set to the value of the expression on the right	
x += y	x = x + y	Addition	
x -= y	x = x - y	Subtraction	
x *= y	x = x * y	Multiplication	
x /= y	x = x / y	Division	
x %= y	x = x % y	Modulus	

*/

/*
==	Equal	$x == $y	Returns true if $x is equal to $y	
===	Identical	$x === $y	Returns true if $x is equal to $y, and they are of the same type	
!=	Not equal	$x != $y	Returns true if $x is not equal to $y	
<>	Not equal	$x <> $y	Returns true if $x is not equal to $y	
!==	Not identical	$x !== $y	Returns true if $x is not equal to $y, or they are not of the same type	
>	Greater than	$x > $y	Returns true if $x is greater than $y	
<	Less than	$x < $y	Returns true if $x is less than $y	
>=	Greater than or equal to	$x >= $y	Returns true if $x is greater than or equal to $y	
<=	Less than or equal to	$x <= $y	Returns true if $x is less than or equal to $y
 */

/*
Increment/Decrement Operator
++$x	Pre-increment	Increments $x by one, then returns $x	
$x++	Post-increment	Returns $x, then increments $x by one	
--$x	Pre-decrement	Decrements $x by one, then returns $x	
$x--	Post-decrement	Returns $x, then decrements $x by one
 */

/*
Logical Operator
Operator logika pada PHP bisa menggunakan simbol ataupun sintaks. Sintaks di PHP tidak case-sensitive 
and	And	$x and $y	True if both $x and $y are true	
or	Or	$x or $y	True if either $x or $y is true	
xor	Xor	$x xor $y	True if either $x or $y is true, but not both	
&&	And	$x && $y	True if both $x and $y are true	
||	Or	$x || $y	True if either $x or $y is true	
!	Not	!$x	True if $x is not true
 */

/*
.	Concatenation	$txt1 . $txt2	Concatenation of $txt1 and $txt2	
.=	Concatenation assignment	$txt1 .= $txt2	Appends $txt2 to $txt1	

 */

/*
 * 
+	Union	$x + $y	Union of $x and $y	
==	Equality	$x == $y	Returns true if $x and $y have the same key/value pairs	
===	Identity	$x === $y	Returns true if $x and $y have the same key/value pairs in the same order and of the same types	
!=	Inequality	$x != $y	Returns true if $x is not equal to $y	
<>	Inequality	$x <> $y	Returns true if $x is not equal to $y	
!==	Non-identity	$x !== $y	Returns true if $x is not identical to $y	
 */

if($x==5){
	echo "Lima", $br; 
}
if($x==7){
	echo "Tujuh", $br;
}
if($x-$y==-2){
	echo "-2", $br;
}
if($x==5 && $y==7){
	echo "Lima dan tujuh", $br;
}
if($x==5 || $y==2){
	echo "Lima atau dua", $br;
}
if($x==5 and $y==7){
	echo "Lima dan tujuh", $br;
}
if($x==5 or $y==2){
	echo "Lima atau dua", $br;
}
if($x!=9 && $y==7){
	echo "Tidak sembilan dan tujuh", $br;
}
if($x!=5 || $y==7){
	echo "tidak lima atau tujuh", $br;
}
if(!false){
	echo "Lima dan tujuh", $br;
}

?>
<?php
echo $br;
$favcolor = "red";

switch ($favcolor) {
    case "red":
        echo "Your favorite color is red!";
        break;
    case "blue":
        echo "Your favorite color is blue!";
        break;
    case "green":
        echo "Your favorite color is green!";
        break;
    default:
        echo "Your favorite color is neither red, blue, nor green!";
}
echo $br;
$favcolor = 1;

switch ($favcolor) {
	case 1:
		echo "Your favorite color is red!";
		break;
	case 2:
		echo "Your favorite color is blue!";
		break;
	case 3:
		echo "Your favorite color is green!";
		break;
	default:
		echo "Your favorite color is neither red, blue, nor green!";
}

?>

<br>
<!-- perulangan -->
<?php 
$x = 1; 

while($x <= 5) {
    echo "The number is: $x <br>";
    $x++;
} 

$x = 1;
do {
	echo "The number is: $x <br>";
	$x++;
} while ($x <= 5);
$x = 6;

// do while menjalankan do terlebih dahulu baru kemudian dicek pada while
do {
	echo "Nah $br";
	echo "The number is: $x <br>";
	$x++;
} while ($x <= 5);

for ($x = 0; $x <= 10; $x++) {
	echo "The number is: $x <br>";
}

$colors = array("red", "green", "blue", "yellow");

foreach ($colors as $value) {
	echo "$value <br>";
}
?>

<!-- fungsi -->
<?php
function writeMsg() {
    echo "Hello world!", $GLOBALS["br"];
}

writeMsg(); // call the function

//nama fungsi tidak case-sensitive
function familyName($fname) {
	global $br;
	echo "$fname Refsnes.$br";
}

familyname("Jani");
FamilyName("Hege");
FAmilyNAme("Stale");
familyName("Kai Jim");
familyName("Borge");

// nama fungsi hanya bisa dipakai sekali
function familyName2($fname, $year) {
	echo "$fname Refsnes. Born in $year <br>";
}

familyName2("Hege", "1975");
familyName2("Stale", "1978");
familyName2("Kai Jim", "1983");

// default argument
function setHeight($minheight = 50) {
	echo "The height is : $minheight <br>";
}

setHeight(350);
setHeight(); // will use the default value of 50
setHeight(135);
setHeight(80);

function sum($x, $y) {
	$z = $x + $y;
	return $z;
}

echo "5 + 10 = " . sum(5, 10) . "<br>";
echo "7 + 13 = " . sum(7, 13) . "<br>";
echo "2 + 4 = " . sum(2, 4), $br;

?>

<!-- Array -->
<?php $cars = array("Volvo", "BMW", "Toyota");
$arrlength = count($cars);

for($x = 0; $x < $arrlength; $x++) {
    echo $cars[$x];
    echo "<br>";
}
echo $cars, $br;

// Associative Array
$age = array("Peter"=>"35", "Ben"=>"37", "Joe"=>"43");
echo "Peter is " . $age['Peter'] . " years old. $br";
echo $age, $br;

foreach($age as $x => $x_value) {
	echo "Key=" . $x . ", Value=" . $x_value;
	echo "<br>";
}

foreach($age as $meonginj){
	echo $meonginj, $br;
}
?>

<!-- variabel spesial di PHP -->
<?php

$x = 75;
$y = 25;

function addition() {
	$GLOBALS['z'] = $GLOBALS['x'] + $GLOBALS['y'];
}

addition();
echo "Isi z adalah: ", $z, $br;
// foreach ($GLOBALS as $wow){
	
// 	echo "Isi per GLOBAL: ", $wow, $br;
	
// }
// the script stops running after echoing $GLOBALS

echo "\$_SERVER['PHP_SELF']: ",$_SERVER['PHP_SELF'];
echo "<br>";
echo "\$_SERVER['GATEWAY_INTERFACE']: ", $_SERVER['GATEWAY_INTERFACE'], $br;
echo "\$_SERVER['SERVER_NAME']: ",$_SERVER['SERVER_NAME'];
echo "<br>";
echo "\$_SERVER['SERVER_ADDR']: ",$_SERVER['SERVER_ADDR'];
echo "<br>";
echo "\$_SERVER['SERVER_SOFTWARE']: ",$_SERVER['SERVER_SOFTWARE'];
echo "<br>";
echo "\$_SERVER['SERVER_SIGNATURE']: ",$_SERVER['SERVER_SIGNATURE']," Signaturenya di itu.";
echo "<br>";
echo "\$_SERVER['SERVER_PORT']: ", $_SERVER['SERVER_PORT'], $br;
echo "\$_SERVER['PATH_TRANSLATED']: ", $_SERVER['PATH_TRANSLATED'], $br;
echo "\$_SERVER['HTTP_HOST']: ",$_SERVER['HTTP_HOST'];
echo "<br>";
echo "\$_SERVER['HTTP_REFERER']: ",$_SERVER['HTTP_REFERER'];
echo "<br>";
echo "\$_SERVER['HTTP_USER_AGENT']: ",$_SERVER['HTTP_USER_AGENT'];
echo "<br>";
echo "\$_SERVER['SCRIPT_NAME']: ", $_SERVER['SCRIPT_NAME'];
echo "<br>";
echo "\$_SERVER['REMOTE_ADDR']: ", $_SERVER['REMOTE_ADDR'];
echo "<br>";
echo $_SERVER['REMOTE_HOST'];
echo "<br>";
echo "\$_SERVER['REMOTE_PORT']: ", $_SERVER['REMOTE_PORT'];
echo "<br>";
echo "\$_SERVER['CONTEXT_DOCUMENT_ROOT']: ".$_SERVER["CONTEXT_DOCUMENT_ROOT"];
echo "<br>";
echo "\$_SERVER['DOCUMENT_ROOT']: ".$_SERVER["DOCUMENT_ROOT"];
echo "<br>";
echo "\$_SERVER['REQUEST_METHOD']: ".$_SERVER["REQUEST_METHOD"];
echo "<br>";
echo $_SERVER['HTTPS'];
echo "<br>";
echo "\$_SERVER['SCRIPT_FILENAME']: ", $_SERVER['SCRIPT_FILENAME'];
echo "<br>";
echo "\$_SERVER['SCRIPT_URI']: ",$_SERVER['SCRIPT_URI'];
echo "<br>";
echo $_SERVER['SCRIPT_PORT'];
echo "<br>";
echo "\$_SERVER['SCRIPT_ADMIN']: ", $_SERVER['SCRIPT_ADMIN'];
echo "<br>";
?>

<form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
  Name: <input type="text" name="fname">
  <input type="submit">
</form>

<!-- PHP $_REQUEST is used to collect data after submitting an HTML form. -->

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
	
	// collect value of input field
	$name = $_REQUEST['fname'];
	if (empty($name)) {
		echo "Name is empty";
	} else {
		echo $name;
	}
	
	echo $br;
	// review tentang array
    $tes2 = [1,2,3];
    echo "tes2 adalah $tes2 $br";
    foreach ($tes2 as $isites2){
    	echo $isites2, $br;
    }
    $tes3= ["kunci"=>"nilai", "makan" => "harga"];
    echo "tes3 adalah Associative $tes3 $br";
    foreach ($tes3 as $nilaites3){
    	echo $nilaites3, $br;
    }
    echo "Isi indeks 1 tes3: $tes3[3]"; //associative array tidak bisa diakses berdasarkan indeks
    echo kecuali;
    echo $br;
    foreach ($tes3 as $isites3 => $nilaites3){
    	echo $isites3." ".$nilaites3, $br;
    }
    foreach ($_REQUEST as $minta){
	    echo "Isi isi request: $minta $br";
    }
    echo "Isi request form: ", $_REQUEST["fname"], $br;

    
}
?>
<!--  ketika input disubmit maka halaman web kan reload dan menjalankan HTML dari atas lagi -->

<form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
  Name: <input type="text" name="fname2">
  <input type="submit">
</form>


<?php
/* PHP $_POST is widely used to collect form data after submitting an HTML form with method="post".
 *  $_POST is also widely used to pass variables.
 * 
 */
if ($_SERVER["REQUEST_METHOD"] == "POST") {
	
    // collect value of input field
    $name = $_POST['fname2'];
    if (empty($name)) {
        echo "Name is empty";
    } else {
        echo $name;
    }
}
echo $br;
?>

<a href="tesget.php?subject=PHP&web=W3schools.com"><button>Test $GET</button></a>

<br>
<!-- 
 Both GET and POST are treated as $_GET and $_POST. These are superglobals, which means that they are always accessible, regardless of scope - and you can access them from any function, class or file without having to do anything special.

$_GET is an array of variables passed to the current script via the URL parameters.

$_POST is an array of variables passed to the current script via the HTTP POST method.
 -->


<br>
<div>

<!-- Contoh data form diambil dengan menggunakan $_POST  -->
<!-- 
Information sent from a form with the POST method is invisible to others (all names/values are embedded within the body of the HTTP request) and has no limits on the amount of information to send.
Moreover POST supports advanced functionality such as support for multi-part binary input while uploading files to server.
However, because the variables are not displayed in the URL, it is not possible to bookmark the page.
 -->
<b>contoh data form diambil dengan menggunakan $_POST ketika menggunakan method post</b>
<form action="welcome.php" method="post">

Name: <input type="text" name="name"><br>
E-mail: <input type="text" name="email"><br>
<input type="submit">
</form>

<!-- contoh data form diambil dengan menggunakan $_GET -->
<!-- 
Information sent from a form with the GET method is visible to everyone (all variable names and values are displayed in the URL). GET also has limits on the amount of information to send. The limitation is about 2000 characters. However, because the variables are displayed in the URL, it is possible to bookmark the page. This can be useful in some cases.
GET may be used for sending non-sensitive data.
GET should NEVER be used for sending passwords or other sensitive information!
 -->
<b>contoh data form diambil dengan menggunakan $_GET ketika menggunakan method get</b>
<form method="get" action="welcome_get.php">
Name: <input type="text" name="name"><br/>
E-mail: <input type="text" name="email"><br/>
<input type="submit"/>
</form>

</div>

<!-- persiapan menerima data -->
<?php
if ($_POST["nama"]){
	echo "Namanya adalah ", $_POST['nama'], $br;
	echo htmlspecialchars($_POST["nama"]), $br;
	echo stripslashes($_POST["nama"]),$br;
	$tes;
	foreach ($_POST as $kunci=>$ini){
		$tes = trim($ini);
		$tes = stripslashes($ini);
		$tes = htmlspecialchars($tes);
		echo $tes,$br;
	}
}

function test_input($data) {
	$data = trim($data);
	$data = stripslashes($data);
	$data = htmlspecialchars($data);
	return $data;
}

// define variables and set to empty values
$nameErr = $emailErr = $genderErr = $websiteErr = "";
$name = $email = $gender = $comment = $website = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (empty($_POST["nama"])) {
    $nameErr = "Name is required";
  } else {
    $name = test_input($_POST["nama"]);
    // check if name only contains letters and whitespace
    if (!preg_match("/^[a-zA-Z ]*$/",$name)) {
      $nameErr = "Only letters and white space allowed"; 
    }
  }

  if (empty($_POST["email"])) {
    $emailErr = "Email is required";
  } else {
    $email = test_input($_POST["email"]);
    // check if e-mail address is well-formed
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
      $emailErr = "Invalid email format"; 
    }
  }

  if (empty($_POST["website"])) {
    $websiteErr = "Website is required";
  } else {
    $website = test_input($_POST["website"]);
    // check if URL address syntax is valid (this regular expression also allows dashes in the URL)
    if (!preg_match("/\b(?:(?:https?|ftp):\/\/|www\.)[-a-z0-9+&@#\/%?=~_|!:,.;]*[-a-z0-9+&@#\/%=~_|]/i",$website)) {
      $websiteErr = "Invalid URL"; 
    }
  }

  if (empty($_POST["comment"])) {
    $comment = "";
  } else {
    $comment = test_input($_POST["comment"]);
  }

  if (empty($_POST["gender"])) {
    $genderErr = "Gender is required";
  } else {
    $gender = test_input($_POST["gender"]);
  }
}

?>

<h2>Mengirim ke dalam halaman sendiri</h2>
<form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF'])?>" method="POST">
Nama: <input type="text" name="nama" value="<?php echo $name;?>" /><span class="error">*<?php echo $nameErr;?></span><br>
Email: <input type="email" name="email" value="<?php echo $email;?>"/><span class="error">*<?php echo $emailErr;?></span><br>
Website: <input type="url" name="website" value="<?php echo $website;?>" /><span class="error">*<?php echo $websiteErr;?></span><br>
Komentar: <textarea name="comment" rows="5" cols="40" ><?php echo $comment;?></textarea><br>
Jenis kelamin:
<input type="radio" name="gender" value="male">Lelaki
<input type="radio" name="gender"  value="female">Wanita<span class="error"><?php if (isset($gender) && $gender=="female") echo "checked";?>*<?php echo $genderErr;?></span><br>
<input type="submit" name="masukkan" value="Masukkan">
</form>

<?php
echo "Today is " . date("Y/m/d") . "<br>";
echo "Today is " . date("Y.m.d") . "<br>";
echo "Today is " . date("Y-m-d") . "<br>";
echo "Today is " . date("l");
?>

<?php 

echo "The time is " . date("h:i:s");

?>

<?php 
echo $br;
// require will produce a fatal error (E_COMPILE_ERROR) and stop the script
// include will only produce a warning (E_WARNING) and the script will continue
include 'tes.php';
require 'tes/meong.html';
include 'tes/meong.html';

// file php yang terpanggil menjadi bagian dari file php yang memanggil
// variabel atau fungsinya pun dapat kita gunakan
echo $punyameong,$br;
?>

<?php 
readfile("tes/kepanjangan.txt");

$cobaarray = ["makan", "minum", "mandi"];
foreach($cobaarray as $kegiatan){
	echo "Meong kadang $kegiatan", $br;
}

$cobaarrayasso = ["makan"=>"nasi", "minum"=>"air", "mandi"=>jarang];
foreach ($cobaarrayasso as $kegiatan => $bernilai){
	echo $kegiatan," biasanya: ", $bernilai, $br;
}

$filenya = "tes/kepanjangan.txt";
$kepanjangan = fopen($filenya, 'r') or die("unable to open file");
while(!feof($kepanjangan)) {
 echo fgets($kepanjangan) . "<br>";
}
$kepanjangan = fopen($filenya, 'r') or die("unable to open file");
echo fread($kepanjangan, filesize($filenya)), $br;
fclose($filenya);

$myfile = fopen("newfile.txt", "a") or die("Unable to open file!");
$txt = "John Doe\n";
fwrite($myfile, $txt);
$txt = "Jane Doe\n";
fwrite($myfile, $txt);
fclose($myfile);

?>

<h3>Upload file</h3>

<form action="upload.php" method="post" enctype="multipart/form-data">
Pilih gambar untuk diunggah:
<input type="file" name="gambar" >
<input type="submit" value="Unggah Gambar" name="unggah">
</form>

<!-- Tempat mengatur cookie harus berada diluar markup HTML. Lihat baris 1-->

<h2>Cookie!</h2>

<?php 
if(!isset($_COOKIE[$cookie_name])) {
    echo "Cookie named '" . $cookie_name . "' is not set!";
} else {
    echo "Cookie '" . $cookie_name . "' is set!<br>";
    echo "Value is: " . $_COOKIE[$cookie_name];
}
?>
<br>
<form action="cookietes.php" method="post">
Nama: <input type="text" placeholder="Masukkan nama" name="nama">
Password: <input type="password" name="pass">
<input type="submit" value="Masukkan">
</form>
<br>

<?php
if(count($_COOKIE) > 0) {
    echo "Cookies are enabled.";
} else {
    echo "Cookies are disabled.";
}
?>
<br>
<?php 
$_SESSION["makan"] = "nasi";
echo "Session ",count($_SESSION)>0?"ada.":"tidak ada.";
echo $br;
echo "Isi session makan: ",$_SESSION["makan"], $br;
echo session_id();
?>
<form action="sessiontes.php" method="post">
<input type="text" name="name" placeholder="Masukkan nama makanan"> 
<button type="submit">Kirim</button> <button type="reset" style="margin-left: 10px;">Ulangi</button>
</form>
<br>

<?php 
// using database with PDO
$host = "localhost";
$username = "root";
$password = "";

// try {
// $connectdb = new PDO("mysql:host=$host;dbname=belajar",$username, $password);
// // set the PDO error mode to exception
// $connectdb->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
// echo "Berhasil terhubung", $br;	
// } catch (PDOException $e) {
// 	"Gagal terhubung: ".$e->getMessage();
// }
// $connectdb->null;

// $conn = new mysqli($host, $username, $password);
// // Check connection
// if ($conn->connect_error) {
// 	die("Connection failed: " . $conn->connect_error);
// }
// echo "Connected successfully";
// $conn->close();
?>

<?php 
echo "<p>Copyright &copy; 2016-" . date("Y") . " by Erlangga"
?>


</body>
</html>
