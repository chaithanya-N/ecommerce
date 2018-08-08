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
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>


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
    
            <div class="row">
              <div class="col-md-12">
                <div class="row">
                     <ul class="nav nav-pills">
                        <li class="active"><a data-toggle="pill" href="#home">Upload Slider IMages</a></li>
                         <li><a data-toggle="pill" href="#menu1">Delete Photos</a></li>
                     </ul>


                 <div id="home" class="tab-pane fade in active">
                  <div class="row" style="background:#f7f7f7; padding:20px;">
                    <div class="col-md-6 col-md-offset-3" >
                      <h1 style="font-size:16px;"> Upload Slider Image</h1>
                   <form action="upload-sliderimage.php" method="post" enctype="multipart/form-data">
                        <div class="row">
                           <input type="file" name="files[]" multiple style="margin:10px;">
                            <label class="col-md-3">select status </label>
                            <div class="col-md-9">
                                <select name="projtype" class="form-control" id="Project" required>
                                    <option value="" selected="yes" disabled="disabled">select status</option>
                                    <option selected="yes" value="selected" disabled="yes">select status</option>
                                     <option value="">Active</option>
                                      <option value="">Deactive</option>
                                 </select>
                                  <!--  <label style="color:red;" class="fname-error error" id="error0">Please enter your Project Type </label>   -->
                            </div>
                             <button  style="margin:10px;" type="submit" value="Upload" id="upbtn">Upload</button>

                        </div>
                                                       
                     </form>
                   </div>
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
            <a class="btn btn-primary" href="login.php">Logout</a>
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
    <script type="text/javascript" src="js/jquery.min.js"></script>
    <script type="text/javascript" src="js/jquery.form.js"></script>
    <script src="js/sb-admin-charts.min.js"> </script>
    <script>
// $(document).ready(function(){
//     $('#sliderhidden').hide();

//   $('#img').click(function(){
//     $('#sliderhidden').show();

//   })

// });
</script>
  </div>
</body>

</html>

       