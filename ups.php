<?php
session_start();
include("database.php");

 $status =isset($_POST['users']) ? $_POST['users'] : '';

echo $status;
// $q = mysqli_query($link,"INSERT INTO `projects` (`project-type`, `client`, `area`, `technique`, `completed`, `location`) VALUES ('$projtype','$client','$area','$technique','$completed','$location')");

$q = mysqli_query($link,"INSERT INTO `sliderimage`(`status`) VALUES ('$status')");

$last_id = $link->insert_id;
echo $last_id;

mkdir("images/sliderimages/".$last_id);
extract($_POST);
$error=array();
$extension = array("jpeg","jpg","png","gif");

  foreach ($_FILES['files']['tmp_name'] as $key => $tmp_name) 
{

  $file_name = $_FILES['files']['name'][$key];
  $file_tmp = $_FILES['files']['tmp_name'][$key];

 // $filename = $_FILES['files']['name'];
 $sourcePath = $_FILES['files']['tmp_name'];
 $targetPath = "images/sliderimages/".$last_id."/".$file_name;
 // $image_name = addslashes($filename);

  

   $ext = pathinfo($file_name,PATHINFO_EXTENSION);

if(in_array($ext,$extension))
   {

    move_uploaded_file($file_tmp = $_FILES['files']['tmp_name'][$key],$targetPath.'/'.$file_name);


     // $q = mysqli_query($link,"INSERT INTO `sliderimage`(`slider_image`,`status`) VALUES ('$file_name','$status')");
     $q = mysqli_query($link,"UPDATE  `sliderimage` SET `slider_image`= '$targetPath'WHERE id = '".$last_id."'");

     

      // header('location:slidermanagement.php');

   }   
  
  
  }
  // }
 // }

?>








<?php
session_start();
include('database.php');

 $product=isset($_POST['product']) ? $_POST['product'] : '';
 $itemstatus=isset($_POST['itemstatus']) ? $_POST['itemstatus'] : '';
 $subcategid=isset($_POST['subcateg']) ? $_POST['subcateg'] : '';
 $categoryid=isset($_POST['categoryn']) ? $_POST['categoryn'] : '';
$itemname = $_POST['itemname'];
$itemprice = $_POST['itemprice'];
// $itemstatus = $_POST['itemstatus'];
$itemdescription = $_POST['itemdes'];


  // echo $itemdescription;


$q = mysqli_query($link,"INSERT INTO `items`(`product_id`,`subcategory_id`,`category_id`,`Item_name`,`item_price`,`item_description`, 
`item_status` ) VALUES ('$product','$subcategid','$categoryid','$itemname','$itemprice','$itemdescription','$itemstatus')");

  echo "SUCCESS";

?>








<?php 

include'database.php';


 $product=isset($_POST['product']) ? $_POST['product'] : '';
 $itemstatus=isset($_POST['itemstatus']) ? $_POST['itemstatus'] : '';
 $subcategid=isset($_POST['subcateg']) ? $_POST['subcateg'] : '';
 $categoryid=isset($_POST['categoryn']) ? $_POST['categoryn'] : '';
$itemname = $_POST['itemname'];
$itemprice = $_POST['itemprice'];
// $itemstatus = $_POST['itemstatus'];
$itemdescription = $_POST['itemdes'];

    $destination = "images/itemimages/";


echo $destination;
//  // echo $destination  ;

 extract($_POST);
$error=array();
$extension = array("jpeg","jpg","png","gif");

foreach ($_FILES['files']['tmp_name'] as $key => $tmp_name) {
   
   $file_name = $_FILES['files']['name'][$key];
   $file_tmp = $_FILES['files']['tmp_name'][$key];

   $ext = pathinfo($file_name,PATHINFO_EXTENSION);
   if(in_array($ext,$extension))
   {
    move_uploaded_file($file_tmp = $_FILES['files']['tmp_name'][$key],$destination.'/'.$file_name);
    
     
$q = mysqli_query($link,"INSERT INTO `items`(`product_id`,`subcategory_id`,`category_id`,`Item_name`,`item_image`,`item_price`,
`item_description`,`item_status` ) VALUES ('$product','$subcategid','$categoryid','$itemname','$file_name','$itemprice',
'$itemdescription','$itemstatus')");

      // header('location:manageitem.php');
   
   }
   

}





$last_id = $link->insert_id;
echo $last_id;
$dir = "images/itemimages/".$itemname;

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
    
   $q = mysqli_query($link,"UPDATE `itemfeatures` SET `item_images`= '".$file_name."' WHERE item_id = '".$last_id."'");
      // header('location:slidermanagement.php');
    
   }

}

    // if(is_array($_FILES)) {
        
     // $filename = $_FILES['file']['name'];
    //  $path = "images/itemimages/".$itemname;
     // if(is_uploaded_file($_FILES['file']['tmp_name'])) {
     //   $sourcePath = $_FILES['file']['tmp_name'];
    //    $targetPath = $path."/".$filename;
     //   $image_name = addslashes($filename);  
     
     //   if(move_uploaded_file($sourcePath,$targetPath)) {
    //      $q = mysqli_query($link,"UPDATE `itemfeatures` SET `item_images`= '".$targetPath."' WHERE item_id = '".$last_id."'");
    //    }
    //  }
     // }
}
else
{

// mkdir("images/itemimages/".$itemname);

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
    
   $q = mysqli_query($link,"UPDATE `itemfeatures` SET `item_images`= '".$file_name."' WHERE item_id = '".$last_id."'");
      // header('location:slidermanagement.php');
    
   }

}

  
   
   //   if(is_array($_FILES)) {
        
     // $filename = $_FILES['file']['name'];
 
     // if(is_uploaded_file($_FILES['file']['tmp_name'])) {
     //   $sourcePath = $_FILES['file']['tmp_name'];
    //    $targetPath = "images/itemimages/".$filename;
     //   $image_name = addslashes($filename);  
     
     //   if(move_uploaded_file($sourcePath,$targetPath)) {
    //      $q = mysqli_query($link,"UPDATE `itemfeatures` SET `item_images`= '".$targetPath."' WHERE item_id = '".$last_id."'");
    //    }
    //  }
     // }
}




 


?>









f(!file_exists($dir))
{
  mkdir("images/itemimages/".$itemname);
    if(is_array($_FILES)) {
        
     $filename = $_FILES['file']['name'];
      $path = "images/itemimages/".$itemname;
     if(is_uploaded_file($_FILES['file']['tmp_name'])) {
      $sourcePath = $_FILES['file']['tmp_name'];
      $targetPath = $path."/".$filename;
      $image_name = addslashes($filename);  
     
      if(move_uploaded_file($sourcePath,$targetPath)) {
        $q = mysqli_query($link,"UPDATE `itemfeatures` SET `item_images`= '".$targetPath."' WHERE item_id = '".$last_id."'");
        }
      }
     }
}
else
{
   
      if(is_array($_FILES)) {
        
     $filename = $_FILES['file']['name'];
 
     if(is_uploaded_file($_FILES['file']['tmp_name'])) {
      $sourcePath = $_FILES['file']['tmp_name'];
      $targetPath = "images/itemimages/".$filename;
      $image_name = addslashes($filename);  
     
      if(move_uploaded_file($sourcePath,$targetPath)) {
        $q = mysqli_query($link,"UPDATE `itemfeatures` SET `item_images`= '".$targetPath."' WHERE item_id = '".$last_id."'");
        }
      }
     }
}








