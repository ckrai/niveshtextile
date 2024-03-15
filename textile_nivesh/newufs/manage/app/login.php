<?php require_once('app_include/session.php'); ?>
<?php $token = $_SESSION["token"]; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Varion Advisors | Login</title>
    <!-- Bootstrap -->
    <link rel="stylesheet" href="../assets/login/dist/vendor/bootstrap-4.5.3/css/bootstrap.min.css" type="text/css">
    <!-- Material design icons -->
    <link rel="stylesheet" href="../assets/login/dist/icons/material-design-icons/css/mdi.min.css" type="text/css">
    <!-- Google font -->
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300&display=swap" rel="stylesheet">
    <!-- Latform styles -->
    <link rel="stylesheet" href="../assets/login/dist/css/latform-style-1.min.css" type="text/css">
    <link rel="stylesheet" href="../assets/plugins/fontawesome-free/css/all.min.css">
    <!-- Toastr -->
    <link rel="stylesheet" href="../assets/plugins/jquery-toast/dist/jquery.toast.min.css">
</head>
<body>
<div class="form-wrapper">
    <div class="container">
        <div class="card">
            <div class="card-body">
                <div class="logo">
                    <img src="../assets/login/dist/images/logo-colorful.png" alt="logo" style="height: 90px;">
                </div>
                <div class="my-5 text-center">
                    <h3 class="font-weight-bold mb-3">Sign In</h3>
                    <p class="text-muted">Sign in to Latform to continue</p>
                </div>
                <form id="loginform">
                    <div class="form-group">
                        <label for="email">Email/Phone</label>
                        <div class="form-icon-wrapper">
                            <input type="email" class="form-control" id="username" name="username" placeholder="Enter email or phone" autofocus
                                   >
                            <i class="form-icon-left mdi mdi-email"></i>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="password">Password</label>
                        <div class="form-icon-wrapper">
                            <input type="password" class="form-control" id="password" name="password" placeholder="Enter password"
                                   >
                            <i class="form-icon-left mdi mdi-lock"></i>
                            <a href="#" class="form-icon-right password-show-hide" title="Hide or show password">
                                <i class="mdi mdi-eye"></i>
                            </a>
                        </div>
                        <input type="hidden" name="token" id="token" value="<?php echo $token; ?>">
                    </div>
                    <div class="form-group">
                        <div class="d-md-flex justify-content-between">
                            <div class="custom-control custom-checkbox mb-2 mb-md-0">
                                <input type="checkbox" class="custom-control-input" id="customCheck1" checked>
                                <label class="custom-control-label" for="customCheck1">Remember me</label>
                            </div>
                            <a href="#">I forgot my password!</a>
                        </div>
                    </div>
                    <div class="form-group">
                        <button class="btn btn-primary btn-block" type="submit" name="submit" id="submit" >Sign In</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- Jquery -->
<script src="../assets/login/dist/vendor/jquery.min.js"></script>
<!-- Bootstrap -->
<script src="../assets/login/dist/vendor/bootstrap-4.5.3/js/bootstrap.min.js"></script>
<!-- Latform scripts -->
<script src="../assets/login/dist/js/latform.min.js"></script>
<!-- Toastr -->
<script src="../assets/plugins/jquery-toast/dist/jquery.toast.min.js" ></script>
<script src="toast.js" ></script>
</body>
</html>
<script type="text/javascript" language="javascript" >
   $(document).ready(function(){
    $('#loginform')[0].reset();
       $(document).on('submit', '#loginform', function(e){
         e.preventDefault();
         $elm=$(".btn-primary");
         $elm.hide();
         $elm.after('<i class="fa fa-spinner fa-pulse fa-1x fa-fw submit-loading" style="margin-left:158px"></i>');
           var username = $('#username').val();
           var password = $('#password').val();

           if(username != '' && password != '')
           {
               $.ajax({
                   url:"action/validate-login",
                   method:'POST',
                   data:new FormData(this),
                   contentType:false,
                   processData:false,
                       success: function (data)
                     {
                      $(".submit-loading").remove();
                       $elm.show();
                       var data = jQuery.parseJSON(data);
                       if( data.valid == 1)
                      {
                       success_noti(data.message, data.uname);
                       setTimeout(function(){
                         location.href = 'home';
                       }, 1000);
                       return false;  
                      }
                     else
                      {
                       warning_noti(data.message, data.uname);
                       return false;
                      }   
               }
               });
           }
           else
           {
               info_noti("Username or password cannot be empty.");
               setTimeout(function(){
                  location.reload();}, 3000);
               return false;
           }
       });
   }); 
</script>
