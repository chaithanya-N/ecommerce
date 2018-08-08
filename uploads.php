<?php

session_start();

include 'database.php';


if(is_array($_FILES)) {

 $filename = $_FILES['file']['name'];
 if(is_uploaded_file($_FILES['file']['tmp_name'])) {
 $sourcePath = $_FILES['file']['tmp_name'];
 $targetPath = "images/sliderimages/".$filename;
 $image_name = addslashes($filename);	
 
 if(move_uploaded_file($sourcePath,$targetPath)) {
  // echo $sourcePath.','.$targetPath;
 	$q = mysqli_query($link,"SELECT slider_image from sliderimage");
	$row = mysqli_num_rows($q);

	if($row > 0)
	{
		$ulogo = mysqli_query($link,"UPDATE `sliderimage` SET  `slider_image`= '$targetPath'");
		echo '
			<script>
				window.location.href="slidermanagement.php";
				alert("photo updated Successfully");
			</script>
		';	
		// header("Location:logomanagement.php");
	}
	else
	{
		$ulogo = mysqli_query($link,"INSERT INTO `sliderimage`(`slider_image`) VALUES ('$targetPath')");
		echo '
			<script>
				
				window.location.href="slidermanagement.php";
				alert("photo Added Successfully");
			</script>
		';	
		// header("Location:logomanagement.php");
	}

 }


	}
 }

?>