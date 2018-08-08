<?php
session_start();
include("database.php");


 $itemname=isset($_POST['itemname']) ? $_POST['itemname'] : '';
 
 
  echo $itemname;
 
if(!file_exists($dir))
{
	mkdir("images/itemimages/".$itemname);
  $destination = "images/itemimages/".$itemname;


 extract($_POST);
$error=array();
$extension = array("jpeg","jpg","png","gif");

foreach ($_FILES['file']['tmp_name'] as $key => $tmp_name) {
	 
	 $file_name = $_FILES['file']['name'][$key];
	 $file_tmp = $_FILES['file']['tmp_name'][$key];

	 $ext = pathinfo($file_name,PATHINFO_EXTENSION);
	 if(in_array($ext,$extension))
	 {
	 	move_uploaded_file($file_tmp = $_FILES['file']['tmp_name'][$key],$destination.'/'.$file_name);
	 	
	 $q = mysqli_query($link,"INSERT INTO `item_images`(`item_id`,`item_images`) VALUES
	  ('$itemname','$file_name')");
	 	 

	 }
	 
}

}
else
{

$destination = "images/itemimages/".$itemname;


 extract($_POST);
$error=array();
$extension = array("jpeg","jpg","png","gif");

foreach ($_FILES['file']['tmp_name'] as $key => $tmp_name) {
	 
	 $file_name = $_FILES['file']['name'][$key];
	 $file_tmp = $_FILES['file']['tmp_name'][$key];

	 $ext = pathinfo($file_name,PATHINFO_EXTENSION);
	 if(in_array($ext,$extension))
	 {
	 	move_uploaded_file($file_tmp = $_FILES['file']['tmp_name'][$key],$destination.'/'.$file_name);
	 	
	 $q = mysqli_query($link,"INSERT INTO `item_images`(`item_id`,`item_images`) VALUES
	  ('$itemname','$file_name')");
	 	 

	 }
	 
}



}

	
 header('location:manageitem.php');

?>









