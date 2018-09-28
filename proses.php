<?php
error_reporting(0);
	$uss= $_POST['username'];
	$pss= $_POST['password'];
	$file = $_FILES["file"]["name"];
	$tmp_name = $_FILES["file"]["tmp_name"];

	$user = array(
		"user" => 'rich',
		"pass" => '1234');

	if (isset($_POST['submit'])) {
		if ($uss==$user['user']&& $pss==$user['pass']) {
			echo "Hai <b>".$uss."! </b>Anda telah Sukses Log in<br><br>";
			echo "<form method='post'>
					<input type='checkbox' name='hobi[]' value='Memancing'>Memancing<br>
					<input type='checkbox' name='hobi[]' value='Tidur'>Tidur<br>
					<input type='checkbox' name='hobi[]' value='Makan'>Makan<br>
					<input type='checkbox' name='hobi[]' value='Sepak bola'>Sepak Bola<br><br>
					Upload Foto : <input type='File' name='file'><br><br>
					<input type='submit' name='submit2'>
				</form>";
		}
		else{
			echo "Username atau Password yang anda masukkan salah";
		}
	}
?>


<?php
	
	if(isset($_POST['submit2'])){
		$data = $_POST['hobi'];
		echo "Hobby : ";
		foreach ($data as $nilai) {
			echo "$nilai, ";
		}
		echo "<br>Gambar : <br>";
		echo "<img src='file.jpg'>";
		
		move_uploaded_file($tmp_name, "images/".$file);
	}
?>


		
