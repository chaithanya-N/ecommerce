<?php
 session_start();
include("database.php");
if (!isset($_SESSION['email'])) {
    header('Location: login.php');
    exit();
}
  ?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <title>SB Admin - Start Bootstrap Template</title>
  <!-- Bootstrap core CSS-->
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
   <link href="css/styles.css" rel="stylesheet">
  <!-- Custom fonts for this template-->
  <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
  <!-- Custom styles for this template-->
  <link href="css/sb-admin.css" rel="stylesheet">
   <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css" integrity="sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ" crossorigin="anonymous">

   <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"> -->
</head>
<style>
a:hover {
    text-decoration:none; 
}
li>.active{background-color:#337ab7;color:#fff;}
</style>


<body class="fixed-nav sticky-footer bg-dark" id="page-top">
 <!-- Navigation-->
<?php include 'navbar.php'; ?>

<div class="content-wrapper">
  <div class="container-fluid">
    <!-- Breadcrumbs-->
    <ol class="breadcrumb">
      <li class="breadcrumb-item">
        <a href="dashboard.php">Dashboard</a>
      </li>
      <li class="breadcrumb-item">
        <a href="slidermanagement.php">Image Management</a>
      </li>
      <li class="breadcrumb-item active">Manage Slider Image</li>
    </ol>
    </div>
     <div class="container-fluid">
      <div class="row">
        <div class="col-md-12">
          <h1 style="font-size:24px;">Manage Slider Image</h1>
          <hr>
        </div>
      </div>

  <!-- <div class="container"> -->
    <!-- Nav pills -->
    <ul class="nav nav-pills" role="tablist">
      <li class="nav-item">
        <a class="nav-link active" data-toggle="pill" href="#home">Upload Slider IMages</a>
      </li>
      <li  class="nav-item">
        <a  id="del" class="nav-link" data-toggle="pill" href="#menu1">Delete Photos</a>
      </li>
    </ul>

    <!-- Tab panes -->
    <div class="tab-content">
      <div id="home" class="container tab-pane active"><br>
        <div class="row" style="background:#f7f7f7; padding:20px;margin:15px;">
              <div class="col-md-8 col-md-offset-4" >
               <!-- <h1 style="font-size:16px;"> Upload Slider Image</h1> -->
                 <form action="upload-sliderimage.php" method="post" enctype="multipart/form-data">
                      <div class="row">
                        <!-- <div class="row" id="uploadpics1">                       
                          <label class="col-md-4"><b>Upload  images</b> </label>
                        <div class="col-md-8">
                            <input type="file" name="file[]" multiple class="btn btn-primary" id="file">
                        </div>
                    </div>    --> 
                        <label class="col-md-4"><b>Upload image</b> </label>
                        <div class="col-md-8">
                         <input class="input-control" type="file" name="files[]" class="btn btn-primary" multiple style="margin:10px;">                         
                        </div>
                        <label class="col-md-4"><b>select status</b></label>
                        <div class="col-md-8">
                          <select name="users" class="form-control" id="statusct" required>
                                <option value="" selected="yes" disabled="disabled">select status</option>
                                <option selected="yes" value="selected" disabled="yes">select status</option>
                                 <option value="Active">Active</option>
                                  <option value="Deactive">Deactive</option>
                             </select>                                 
                        </div>
                           <button class=" col-md-offset-8 btn btn-primary" style="margin:10px;" type="submit" 
                           value="Upload" id="upbtn">Upload</button>
                      </div>                                                       
                   </form>
                 </div>
           </div>
      </div>
      <div id="menu1" class="container tab-pane fade">
        <div class="col-md-12" style="padding:10px;">
          <div class="row">
            
            <?php    
                $w = mysqli_query($link,"SELECT * FROM `sliderimage`");
                while($wrow = mysqli_fetch_assoc($w))
                {
              ?>           
                    <div class="col-md-3" style="border:1px solid; padding:10px; ">
                      <div class="thumbnail">
                        <a href="/w3images/lights.jpg">
                          <img  src="images/sliderimages/<?php echo $wrow['slider_image']; ?>" alt="" class="img-responsive"  style=" width:100%; ">
                          <div class="caption">
                            <p>
                            <a href="deleteslides.php?id=<?php echo $wrow['id'];?>" id="<?php echo $wrow['id'];?>">
                                  <span style="color:red; cursor:pointer" class="fas fa-trash-alt" id="sliderimage"> </span></a>
                                </p>
                          </div>
                        </a>
                      </div>
                    </div>
                 <?php
                }
                ?>
          
          </div>
        </div>
         
         </div>
      
    </div>
  </div>
      
      <!-- /.content-wrapper-->
      <footer class="sticky-footer">
        <div class="container">
          <div class="text-center">
            <small>Copyright © Your Website 2018</small>
          </div>
        </div>
    </footer>
    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
      <i class="fa fa-angle-up"></i>
    </a>
    <!-- Logout Modal-->
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
            <button class="close" type="button" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">×</span>
            </button>
          </div>
          <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
          <div class="modal-footer">
            <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
            <a class="btn btn-primary right" href="login.php">Logout</a>
          </div>
        </div>
      </div>
    </div>
    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>
    <!-- Page level plugin JavaScript-->
    <script src="vendor/chart.js/Chart.min.js"></script>
    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin.min.js"></script>
    <!-- Custom scripts for this page-->
   <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script src="js/sb-admin-charts.min.js"> </script>
    <script>
 $(document).ready(function(){
    $('#home').addClass('active');


    var full_url = document.URL; // Get current url
    var url_array = full_url.split('#') // Split the string into an array with / as separator
    var last_segment = url_array[url_array.length-1];  // Get the last part of the array (-1)
    // alert( last_segment ); // Alert last segment


    if(last_segment == "del")
    {
        $('.nav-pills li>a.active').removeClass('active');
        $('#del').addClass('active');
         $('#home').removeClass('active');
        $('#menu1').addClass('in');
        $('#menu1').addClass('active');
     }

   });
</script>
  </div>
</body>

</html>

