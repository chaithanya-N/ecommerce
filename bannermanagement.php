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
    <link href="css/styles.css" rel="stylesheet">
  
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <!-- Custom fonts for this template-->
  <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
  <!-- Custom styles for this template-->
  <link href="css/sb-admin.css" rel="stylesheet">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css" integrity="sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ" crossorigin="anonymous">
</head>

<body class="fixed-nav sticky-footer bg-dark" id="page-top">
  <!-- Navigation-->
  <?php include 'navbar.php'; ?>
  <!-- Navigation End-->
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
        <li class="breadcrumb-item active">Manage Banner Image</li>
         </ol>
         <div class="row">
        <div class="col-md-12">
          <h1 style="font-size:24px;">Manage Banner Image</h1>
          <hr>
        </div>
      </div>

    <!-- Nav pills -->
    <ul class="nav nav-pills" role="tablist">
      <li class="nav-item">
        <a class="nav-link active" data-toggle="pill" href="#home">Upload Banner IMages</a>
      </li>
      <li id="del" class="nav-item">
        <a class="nav-link" data-toggle="pill" href="#menu1">Delete Photos</a>
      </li>
    </ul>

    <!-- Tab panes -->
    <div class="tab-content">
      <div id="home" class="container tab-pane active"><br>
        <div class="row" style="background:#f7f7f7; padding:20px;margin:15px;">
              <div class="col-md-8 col-md-offset-4" >
               <!-- <h1 style="font-size:16px;"> Upload Slider Image</h1> -->
                 <form action="upload-bannerimage.php" method="post" enctype="multipart/form-data">
                      <div class="row">
                        <label class="col-md-4"><b>Upload image</b> </label>
                        <div class="col-md-8">
                         <input class="input-control" type="file" name="files[]" multiple style="margin:10px;">                         
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
                      $w = mysqli_query($link,"SELECT * FROM `bannerimage`");
                      while($wrow = mysqli_fetch_assoc($w))
                      {
                    ?>             
                     <div class="col-md-3" style="border:1px solid; padding:10px; ">
                      <div class="thumbnail">
                        <a href="/w3images/lights.jpg">
                         <img  src="images/bannerimages/<?php echo $wrow['banner_image']; ?>" alt="" class="img-responsive"  style="width:100%;">
                          <div class="caption">
                            <p>
                            <a href="deletebanner.php?id=<?php echo $wrow['id'];?>" id="<?php echo $wrow['id'];?>">
                        <span style="color:red; cursor:pointer" class="fas fa-trash-alt" id="bannerimage"></span></a> 
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
 </div>
    <!-- /.container-fluid-->
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
            <a class="btn btn-primary" href="login.html">Logout</a>
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
    <script src="js/sb-admin-charts.min.js"></script>
  </div>
</body>

</html>

       