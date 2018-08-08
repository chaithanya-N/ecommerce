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
  <meta name="viewport" content="width=device-width, initial-scale=1">
 
  <!-- Bootstrap core CSS-->
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <!-- Custom fonts for this template-->
  <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
  <!-- Custom styles for this template-->
    <link href="css/styles.css" rel="stylesheet">
  
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
          <a href="createuser.php">Usermanagement</a>
        </li>
        <li class="breadcrumb-item active">Create User</li>
      </ol>
      <div class="row">
        <div class="col-md-12">
          <h1 style="font-size:24px;">Create User</h1>
          <hr>
        </div>
      </div>
    
      <div class="col-md-8 " style="color:#000;"> 
          <form class="form-horizontal" action="" id="createuserform">
                <div class="form-group">
                  <label class="control-label col-sm-3" for="name">Name</label>
                  <div class="col-sm-9">
                    <input type="text" class="form-control" id="name" name="name" placeholder="Enter Name">
                  </div>
                </div>
                <div class="form-group">
                  <label class="control-label col-sm-3" for="email">Email</label>
                  <div class="col-sm-9">
                    <input type="email" class="form-control" id="email" name="email" placeholder="Enter email">
                  </div>
                </div>
                <div class="form-group">
                  <label class="control-label col-sm-3" for="name">Password</label>
                  <div class="col-sm-9">
                    <input type="password" class="form-control" id="psw" name="psw" placeholder="Enter password">
                  </div>
                </div>
                <div class="form-group">
                  <label class="control-label col-sm-3" for="pwd">User Type</label>
                  <div class="col-sm-9"> 
                    <select class="form-control" id="usertype" name="usertype">
                      <option value="" selected="yes" disabled="disabled">Select User Type</option>
                      <option value="Admin">Admin</option>
                      <option value="Moderator">Moderator</option>
                    </select>
                  </div>
                </div>
                <div class="form-group">
                  <label class="control-label col-sm-3" for="pwd">Status</label>
                  <div class="col-sm-9"> 
                    <select class="form-control" id="status" name="ustatus">
                      <option value="" selected="yes" disabled="disabled">Select status</option>
                      <option value="Active">Active</option>
                      <option value="Deactive">Deactive</option>
                    </select>
                  </div>
                </div>
                
                <div class="form-group"> 
                  <div class="col-sm-offset-4 col-sm-10">
                    <button type="button" class="btn btn-primary" id="createuserformbtn">Submit</button>
                  </div>
                </div>
              </form>
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
       <!-- Add Emp Modal -->
<div id="usercreate" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header" style="background:#f0ad4e">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title" style="color:#fff">User Create Successful</h4>
      </div>
      <div class="modal-body">
        <p>New User has been added Successfully!!!</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>

  </div>
</div>
 <!-- ABout end -->
 
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
     
   <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <script>
      
 $(document).ready(function() {

    $('#createuserformbtn').click(function(){
      var data = $('#createuserform').serialize();
         // console.log(data);
         // alert();
         $.ajax({
              url: 'process-createuser.php',     
                type: 'POST', // performing a POST request
                data : data,
                                
               success: function(result)         
                {
                   // alert(result);
                  if(result = "SUCCESS")
                     {
                         alert(result);
                          window.location.href = "createuser.php";
                   //   $('#usercreate').modal('show'); 
                   //  $('#usercreate').on('hidden.bs.modal', function () {
                   // window.location.href = "createuser.php";
                   //   })
                      }
                }
         });
    })
});






    </script>
  </div>
</body>

</html>
