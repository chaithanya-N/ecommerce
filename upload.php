<?php
session_start();

include 'database.php';
if(isset($_POST['submit'])){
    // File upload configuration
     $fileName =$_FILES['images']['name'];
  $targetPath = "images/sliderimages/".$fileName;
    $allowTypes = array('jpg','png','jpeg','gif');
    
    $images_arr = array();
    foreach($_FILES['images']['name'] as $key=>$val){
        $image_name = $_FILES['images']['name'][$key];
        $tmp_name   = $_FILES['images']['tmp_name'][$key];
        $size       = $_FILES['images']['size'][$key];
        $type       = $_FILES['images']['type'][$key];
        $error      = $_FILES['images']['error'][$key];
        
        // File upload path
        $fileName = basename($_FILES['images']['name'][$key]);
        $targetFilePath = $targetPath . $fileName;
        
        // Check whether file type is valid
        $fileType = pathinfo($targetFilePath,PATHINFO_EXTENSION);
        if(in_array($fileType, $allowTypes)){    
            // Store images on the server
            if(move_uploaded_file($_FILES['images']['tmp_name'][$key],$targetFilePath)){
                $images_arr[] = $targetFilePath;



       
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


if(!empty($images_arr)){ ?>
        <ul>
        <?php foreach($images_arr as $image_src){ ?>
            <li><img src="<?php echo $image_src; ?>" alt=""></li>
        <?php } ?>
        </ul>
<?php }




}
  

 

    

?>