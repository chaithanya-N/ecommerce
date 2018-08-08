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
        <a href="category.php">category Management</a>
      </li>
      <li class="breadcrumb-item active">Subcategory Management</li>
    </ol>
           <div class="row">
            <div class="col-md-12">
              <h1 style="font-size:24px;">Manage Sub_Category</h1>
              <hr>
            </div>
          </div>
             <?php 
                  $id = $_GET['id'];
                  // echo $id;
                  $subcategory = mysqli_query($link,"SELECT * FROM  Sub_Category  WHERE  subcategory_id = '".$id."'");
                  $row = mysqli_fetch_assoc($subcategory);
                        ?>
                <div class="col-md-8 " style="color:#000;"> 
                  <form class="form-horizontal" action="" id="createsubcategoryform" method="post">
                    <div class="row" style="padding:15px;">
                         <label class="col-md-4"><b>Select Category</b></label>
                        <div class="col-md-8">
                          <select name="categoryn" class="form-control" id="categ" required>
                                <option value="" selected="yes" disabled="disabled">Select Category</option>
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
                              <input type="text" class="form-control" id="name" name="subcategory" 
                              value="<?php echo $row['subcategory_name']; ?>">
                           </div>                         
                        </div> 
                         <div class="row" style="padding:15px;">
                         <label class="col-md-4"><b>select status</b></label>
                        <div class="col-md-8">
                          <select name="subcategorystatus" class="form-control" id="subcategorystatus" required>
                                <option value="" selected="yes" disabled="disabled">select status</option>
                                <option selected="yes" value="selected" disabled="yes">select status</option>
                                 <option value="Active">Active</option>
                                  <option value="Deactive">Deactive</option>
                             </select>                                 
                        </div>  
                        </div>  
                         <input type="hidden" class="form-control" id="name1" name="subid" 
                            value="<?php echo $row['subcategory_id']; ?>">                                               
                    
                          <div class="form-group">
                            <div class="col-sm-offset-2 col-sm-10">
                            <button type="button" class="btn btn-warning" id="updatesubcategory">Update</button>
                            <a href="subcategory.php" type="button" class="btn btn-info"id="cancelecategory">Cancel</a> 
                              <button type="button" class="btn btn-danger" id="deletesubcategory">Delete</button>
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
 <!-- success edit Modal -->
 <!-- success delete Modal -->
<div id="deletesuccess" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header" style="background:#f0ad4e">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title" style="color:#fff">User Delete Successful</h4>
      </div>
      <div class="modal-body">
        <p>User has been Successfully Deleted!!!</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>

  </div>
</div>
<!-- success delete modal end -->
   
<div id="editsuccess" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header" style="background:#f0ad4e">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title" style="color:#fff">User Edit Successful</h4>
      </div>
      <div class="modal-body">
        <p>User has been Successfully Updated!!!</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>

  </div>
</div>
<!-- success edit modal end -->
 
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
   // get category from db
   $('#categ option').each(function(){

      var ut = '<?php echo $row['category_id']; ?>';
      if($(this).val() == ut)
      {
        $(this).addClass("active");
        $(this).attr("selected","selected");
      }
    

});
    // get category from db
  // get subcategory_status from db
  $('#subcategorystatus option').each(function(){

      var ut = '<?php echo $row['subcategory_status']; ?>';
      if($(this).val() == ut)
      {
        $(this).addClass("active");
        $(this).attr("selected","selected");
      }
    

});
// update subcategory_status
    $('#updatesubcategory').click(function(){
  var data = $('#createsubcategoryform').serialize();

   // alert();
  $.ajax({
    url:'process-editsubcategory.php',
    type:'POST',
    data:data,
    success:function(result)
    {
       // alert(result);
       window.location.href = "subcategory.php";
      // if(result='Success')
      // {
      //   $('#editsuccess').modal('show'); 
      //           $('#editsuccess').on('hidden.bs.modal', function () {
      //           window.location.href = "existinguser.php";
      //           })
      // }
    }

  })
})
 // update subcategory_status end
 // delete subcategory_status
 $('#deletesubcategory').click(function(){

  var data = $('#createsubcategoryform').serialize();

  $.ajax({
    url:'process-deletesubcategory.php',
    type:'POST',
    data:data,

    success:function(result)
    {
       // alert(result);
        window.location.href = "subcategory.php";
      // if(result == 'Success')
      // {
      //   $('#deletesuccess').modal('show'); 
      //               $('#deletesuccess').on('hidden.bs.modal', function () {
      //               window.location.href = "existinguser.php";
      //               })
      // }
    }

  })
})
 // delete subcategory_status end
});





    </script>
  </div>
</body>

</html>
