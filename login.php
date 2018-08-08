
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
  <!-- Custom styles for this template-->
  <link href="css/sb-admin.css" rel="stylesheet">
</head>
<style>
.error{font-size:13px; color:red;}
</style>

<body class="bg-dark">
  <div class="container">
    <div class="card card-login mx-auto mt-5">
      <div class="card-header">Login</div>
      <div class="card-body">
        <form id="loginform">
          <div class="form-group">
            <label for="exampleInputEmail1">Email address</label>
            <input class="form-control" name="email" id="email" type="email" aria-describedby="emailHelp" placeholder="Enter email">
              <span id="email-error" class="error"> </span>
             <!-- <span style="color:red" id="emaile">Please enter valid email<span> -->
          </div>
          <div class="form-group">
            <label for="exampleInputPassword1">Password</label>
            <input class="form-control" id="password" type="password" placeholder="Password" name="password">
            <span id="pwd-error" class="error"> </span>
            <!-- <span style="color:red" id="pswe">Please enter password<span> -->
          </div>
          <div class="form-group">
            <div class="form-check">
              <label class="form-check-label">
                <input class="form-check-input" type="checkbox"> Remember Password</label>
            </div>
          </div>
          <!-- <a class="btn btn-primary btn-block" href="dashb.html" id="loginbtn">Login</a> -->
        <input type="button" id="loginbtn" value="Login" 
         class="btn btn-primary btn-block">
        </form>
        <div class="text-center">
          <a class="d-block small mt-3" href="register.php">Register an Account</a>
          <a class="d-block small" href="forgot-password.html">Forgot Password?</a>
        </div>
      </div>
    </div>
  </div>
  <!-- Bootstrap core JavaScript-->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <!-- Core plugin JavaScript-->
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

   <script type="text/javascript">

    $(document).ready(function() {

    $('#email').blur(function(){
       var emailid = $(this).val();
      // alert (emailid);

      if(emailid != '')
      {
        $('#email-error').text('');
         $.ajax({
          url:'email-check.php',
          type:'POST',
          data: {'email':emailid},

          success:function(result)
          {
              // alert(result);
            if(result == 'no email')
            {
              $('#email-error').text('Your Email is not Registered');
            }
             if(result == 'email')
            {
              $('#email-error').text('');

              $('#loginbtn').click(function(){

                var data = $('#loginform').serialize();
                // console.log(data);
                $.ajax({
                  url:'process-login.php',
                  type:'POST',
                  data:data,

                  success:function(result)
                  {
                      // alert(result);

                    if(result == 'Password-Mismatch')
                    {
                      $('#pwd-error').text('Password Mismatch');
                      // window.location.href = 'index.php';
                    }

                    if(result == 'Admin')
                    {
                      window.location.href = 'dashboard.php';
                    }
                   
                  }
                })

              })


            }
          }
         })
      }
      else
      {
        $('#email-error').text('Email Should Not Be Empty');
       }

    })

 
// enable enter button 
$("#password").keyup(function(){
  if(event.keyCode == 13) {
        $("#loginbtn").click();
    }
 });

   })



  </script>
</body>

</html>
