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
  <!-- Custom fonts for this template-->
  <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
  <!-- Page level plugin CSS-->
  <link href="vendor/datatables/dataTables.bootstrap4.css" rel="stylesheet">
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
        <li class="breadcrumb-item active">Existing Slider Images</li>
       
      </ol>
     <!-- Example DataTables Card-->
       <div class="card mb-3"> -->
       <div class="card-header"> -->
       <i class="fa fa-table"></i> Data Table Example</div> -->
        <div class="table-responsive" style="padding:15px;">
                 <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                  <tr>
                    <th>S.No</th>
                    <th>Id</th>
                    <th>Slider Image</th>
                    <th>Status</th>
                    <th>Delete</th>
                  </tr>
                </thead>
                <tbody>
                <?php

                  $counter = 1;
                  $w = mysqli_query($link,"SELECT * FROM `sliderimage`");
                  while($wrow = mysqli_fetch_assoc($w))
                  {
                ?>
                  <tr>
                    <td><?php echo $counter; ?></td>
                    <td><?php echo $wrow['id']; ?></td>
                   
             <td><img src="images/sliderimages/<?php echo $wrow['slider_image']; ?>" alt="" class="img-responsive" style="height:80px;"></td>
                    <td><?php echo $wrow['status']; ?></td>
                    <td><a href="deleteslides.php?id=<?php echo $wrow['id'];?>" id="<?php echo $wrow['id'];?>"><span class="fas fa-trash-alt" id="sliderimage"></span></a></td>
                  </tr>
                  
                <?php
                $counter++; }
                ?>
                  
                  </tbody>

              </table>
            </div> -->
             
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
    <script src="vendor/datatables/jquery.dataTables.js"></script>
    <script src="vendor/datatables/dataTables.bootstrap4.js"></script>
    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin.min.js"></script>
    <!-- Custom scripts for this page-->
    <script src="js/sb-admin-datatables.min.js"></script>
    <script>
      document.ready(function(){ 
      var simageid=$('#sliderimage').val();
      $('#sliderimage').click(function(){

        

        alert(simageid);



      });
      })
    </script>
  </div>
</body>

</html>
