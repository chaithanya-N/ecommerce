<?php
session_start();

include 'database.php';

   $q1 = mysqli_query($link,"SELECT * FROM `sliderimage`");
      // $row = mysqli_fetch_array($q);
 
       while($roww = mysqli_fetch_assoc($q1))
      {
            $imgid = $roww['id'];
            $img = $roww['slider_image'];
        // echo "projects/".$id."/".$img;
            echo '<div class="col-md-4" style="padding:20px; "><img src="images\sliderimages/'.$img.'"/ style="width:100%"><a href="processdeletephotos.php?id='.$imgid.'"><span class="fa fa-trash" style="color:red; cursor:pointer" id="'.$imgid.'"></span></a></div>';

        // <button type="button" id="'.$imgid.'" class="btn btn-danger btn-sm">Delete</button>
      }

     
  ?>
 