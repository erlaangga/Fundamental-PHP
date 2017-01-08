<?php
$target_dir = "tes/";
$target_file = $target_dir . basename($_FILES["gambar"]["name"]);
$br = "<br>";
echo "isi target_file: ", $target_file, $br ;
echo "name: ", $_FILES["gambar"]["tmp_name"], $br;
echo "tmp_name: ", $_FILES["gambar"]["tmp_name"], $br;
echo "basename name: ", basename($_FILES["gambar"]["tmp_name"]), $br;
echo "basename tmp_name: ", basename($_FILES["gambar"]["tmp_name"]), $br;
$uploadOK = 1;
$imageFileType = pathinfo($target_file, PATHINFO_EXTENSION);
echo "isi imageFileType: ", $imageFileType, $br;

if (isset($_POST["unggah"])){
	$cek = getimagesize($_FILES["gambar"]["tmp_name"]);
	if ($cek!==false){
		echo "Berkas adalah gambar - ". $cek["mime"].".",$br ;
		$uploadOK = 1;
	}
	else {
		echo "File is not an image",$br;
		$uploadOK = 0;
	}
	// mengecek apakah file sudah ada atau belum
	if (file_exists($target_file)) {
		echo "Sorry, file already exists.", $br;
		$uploadOk = 0;
	}
	// mengecek ukuran berkas. Jika diatas 500KB akan menampilkan pesan.  
	if ($_FILES["gambar"]["size"] > 500000) {
		echo "Sorry, your file is too large.", $br;
		$uploadOk = 0;
	}
	// membatasi tipe file
	if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
			&& $imageFileType != "gif" ) {
				echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.", $br;
				$uploadOk = 0;
			}
	// menampilkan pesan tentang status file yang diunggah
	if ($uploadOK==0){
		echo "Sorry, your image is failed to upload.", $br;
	}
	else {
		if (move_uploaded_file($_FILES["gambar"]["tmp_name"], $target_file)){
			echo "Your file ",$_FILES["gambar"]['name']," has been uploaded.", $br;
		}
		else{
			echo "There was an error uploading your file.", $br;
		}
	}
}

echo "1".!false, $br;
echo "2".!true, $br;
echo "3".!TRUE, $br;
echo "4".!False, $br;
echo "5",move_uploaded_file($_FILES["gambar"]["tmp_name"], $target_dir),$br;

// fungsi untuk melihat info tentang server PHP yang kita jalankan 
phpinfo();
?>