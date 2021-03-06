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
    <link href="css/styles.css" rel="stylesheet">
  
  <!-- Bootstrap core CSS-->
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
          <a href="dashboard.php">category Management</a>
        </li>
        <li class="breadcrumb-item active">Subcategory Management</li>
      </ol>
      <div class="row">
            <div class="col-md-12">
              <h1 style="font-size:24px;">Manage Sub-Category</h1>
              <hr>
            </div>
      </div>
            </div>
            <div class="row" style="margin:5px;" >
 <ul class="nav nav-pills" role="tablist">
  <li class="nav-item">
    <a class="nav-link active" data-toggle="pill" href="#home">Create SubCategory</a>
  </li>
  <li  class="nav-item">
    <a  id="del" class="nav-link" data-toggle="pill" href="#menu1">SubCategory List</a>
  </li>
</ul>
</div>

<div class="tab-content">
        <div id="home" class="container tab-pane active"><br>
           <div class="row" style="background:#f7f7f7; padding:20px;margin:15px;">
                <div class="col-md-8 col-md-offset-4" >
                  <form class="form-horizontal" action="" id="createsubcategoryform" method="post">
                    <div class="row" style="padding:15px;">
                         <label class="col-md-4"><b>Select Category</b></label>
                        <div class="col-md-8">
                          <select name="categoryn" class="form-control" id="status" required>                   
                                <option selected="yes" value="selected" disabled="yes">select Category</option>
                                 <?php 
 
             $categoryselect = mysqli_query($link,"SELECT DISTINCT * FROM  category order BY `category_name` ASC");
            while($categorytrow = mysqli_fetch_assoc($categoryselect))
                                 {
                                ?>
             <option value="<?php echo $categorytrow['category_id']?>"><?php echo ucfirst($categorytrow['category_name']) ?></option>
                        
                                <?php 
                              }
                              ?>
                             </select>                                 
                        </div>  
                        </div>   
                       <div class="row" style="padding:15px;">
                          <label class="col-md-4"><b>Create SubCategory</b> </label>
                          <div class="col-md-8">
                              <input type="text" class="form-control" id="name" name="subcategory" placeholder="Enter SubCategory">
                           </div>                         
                        </div> 
                         <div class="row" style="padding:15px;">
                         <label class="col-md-4"><b>select status</b></label>
                        <div class="col-md-8">
                          <select name="subcategorystatus" class="form-control" id="status" required>
                                <option value="" selected="yes" disabled="disabled">select status</option>
                                <option selected="yes" value="selected" disabled="yes">select status</option>
                                 <option value="Active">Active</option>
                                  <option value="Deactive">Deactive</option>
                             </select>                                 
                        </div>  
                        </div>                  
                            <button class=" col-md-offset-8 btn btn-primary" style="margin:10px;" type="submit" 
                             value="Upload" id="createsubcategorybtn">Create</button>                                                                         
                     </form>
                     </div>    
                   </div>
            </div>
     
      <div id="menu1" class="container tab-pane fade" style="padding:15px;">
        <div class="card mb-3">
        <div class="card-header">
          <i class="fa fa-table"></i> Data Table Example</div>
        <div class="card-body">
          <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
               <thead>
                  <tr>
                    <th>S.No</th>
                    <th>Category Name</th>  
                    <th>SubCategory Name</th>                  
                    <th>SubCategory Status<Status>
                    <th>Edit<Status>
                  </tr>
                </thead>
                 <tbody>
                <?php
                  $counter = 1;
$w = mysqli_query($link,"SELECT * FROM sub_category s INNER JOIN category c on s.category_id = c.category_id 
 ORDER BY subcategory_name");
                  // $w = mysqli_query($link,"SELECT * FROM `sub_category`");
                  while($wrow = mysqli_fetch_assoc($w))
                  {
                ?>
                  <tr>
                    <td><?php echo $counter; ?></td>
                    <td><?php echo $wrow['category_name']; ?></td>
                    <td><?php echo $wrow['subcategory_name']; ?></td>
                    <td><?php echo $wrow['subcategory_status']; ?></td>
                   <td><a href="editsubcategory.php?id=<?php echo $wrow['subcategory_id'];?>" id="<?php echo 
                   $wrow['subcategory_id'];?>"><i class="fas fa-edit"></i></a></td>
                  </tr>
                  
                <?php
                $counter++; }
                ?>
                  
                  </tbody>

            </table>
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
    <script src="js/sb-admin-charts.min.js"></script>

     <script>
      $(document).ready(function() {

    $('#createsubcategorybtn').click(function(){
      var data = $('#createsubcategoryform').serialize();
         // console.log(data);
         // alert();
         $.ajax({
              url: 'process-createsubcategory.php',     
                type: 'POST', // performing a POST request
                data : data,
                                
               success: function(result)         
                {
                    // alert(result);
                   if(result = "SUCCESS")
                    {
                  //         alert(result);
                         window.location.href = "subcategory.php";
                  // //  //   $('#usercreate').modal('show'); 
                  // //  //  $('#usercreate').on('hidden.bs.modal', function () {
                  // //  // window.location.href = "createuser.php";
                  // //  //   })
                  }
                }
         });
    })
});

    </script>
  </div>
</body>

</html>

       