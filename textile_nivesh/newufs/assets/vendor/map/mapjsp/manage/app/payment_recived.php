<?php require_once("app_include/session.php");?>
<?php require_once("app_include/function.php");?>
<?php include 'action/class/user-class.php'; ?>
<?php $token = $_SESSION["token"]; ?>
<?php is_logged_in(); ?>
<?php
if ($_SESSION['role']=="User") {
  $user = new User();
  $result = $user->get_user();
  $row = $result->fetch(PDO::FETCH_ASSOC);
  $a = $row['u_name'];
}
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>VAA Financial| Payment Recived </title>
  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="../app-assets/plugins/fontawesome-free/css/all.min.css">
  <!-- daterange picker -->
  <link rel="stylesheet" href="../app-assets/plugins/daterangepicker/daterangepicker.css">
  <!-- iCheck for checkboxes and radio inputs -->
  <link rel="stylesheet" href="../app-assets/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- Bootstrap Color Picker -->
  <link rel="stylesheet" href="../app-assets/plugins/bootstrap-colorpicker/css/bootstrap-colorpicker.min.css">
  <!-- Tempusdominus Bootstrap 4 -->
  <link rel="stylesheet" href="../app-assets/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
  <!-- Select2 -->
  <link rel="stylesheet" href="../app-assets/plugins/select2/css/select2.min.css">
  <link rel="stylesheet" href="../app-assets/plugins/select2-bootstrap4-theme/select2-bootstrap4.min.css">
  <!-- Bootstrap4 Duallistbox -->
  <link rel="stylesheet" href="../app-assets/plugins/bootstrap4-duallistbox/bootstrap-duallistbox.min.css">
  <!-- BS Stepper -->
  <link rel="stylesheet" href="../app-assets/plugins/bs-stepper/css/bs-stepper.min.css">
  <!-- dropzonejs -->
  <link rel="stylesheet" href="../app-assets/plugins/dropzone/min/dropzone.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="../app-assets/dist/css/adminlte.min.css">
  <style type="text/css">
    #spinner-div {
      position: fixed;
      display: none;
      width: 100%;
      height: 100%;
      top: 450px;
      right: 0;
      text-align: center;
      background-color: rgba(255, 255, 255, 0.8);
      
    }
  </style>
</head>
<body class="hold-transition sidebar-mini">
<div class="wrapper">
  <!-- Navbar -->
  <?php include 'app_include/app_navbar.php';?>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <?php include 'app_include/app_sidebar.php';?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Payment Recived</h1>
          </div>
          
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <!-- <div class="container-fluid"> -->
        <div class="container">
        <!-- SELECT2 EXAMPLE -->
        <div class="card card-default">
          <div class="card-header">
            <h3 class="card-title">Payment Recived Form</h3>

            <div class="card-tools">
              <button type="button" class="btn btn-tool" data-card-widget="collapse">
                <i class="fas fa-minus"></i>
              </button>
            </div>
          </div>
          <!-- /.card-header -->
          <form id="pay_form">
          <div class="card-body">
            <div class="row">
              <div class="col-md-4">
                <div class="form-group">
                  <label>Name</label>
                  <?php if ($_SESSION['role']=="User") {  ?>
                  <input type="text" class="form-control" id="name" name="name" value="<?php echo $row['u_name']; ?>">
                  <?php }  else { ?>
                  <input type="text" class="form-control" id="name" name="name" placeholder="Enter name">
                  <?php } ?>
                </div>
              </div>
               <div class="col-md-4">
                <div class="form-group">
                  <label>Mobile</label>
                   <?php if ($_SESSION['role']=="User") {  ?>
                  <input type="text" class="form-control" id="mobile" name="mobile" value="<?php echo $row['u_mobile']; ?>">
                   <?php }  else { ?>
                    <input type="text" class="form-control" id="name" name="name" placeholder="Enter name">
                  <?php } ?>
                </div>
              </div>
               <div class="col-md-4">
                <div class="form-group">
                  <label>Email</label>
                  <?php if ($_SESSION['role']=="User") {  ?>
                  <input type="email" class="form-control" id="email" name="email" value="<?php echo $row['u_email']; ?>">
                   <?php }  else { ?>
                   <input type="email" class="form-control" id="email" name="email" placeholder="Enter email">
                  <?php } ?>
                  
                </div>
              </div>
               <div class="col-md-4">
                <div class="form-group">
                  <label>District</label>
                  <select class="form-control select2" name="district" id="district" style="width: 100%;">
                       <?php if ($_SESSION['role']=="User") {  ?>
                  <option value="<?php echo $row['u_district']; ?>"><?php echo $row['u_district']; ?></option>
                   <?php }  else { ?>
                   <option value="">Select</option>
                  <?php } ?>
                        
                        <option value="Agra">Agra</option>
                        <option value="Aligarh">Aligarh</option>
                        <option value="Allahabad">Allahabad</option>
                        <option value="Ambedkar Nagar">Ambedkar Nagar</option>
                        <option value="Amethi">Amethi</option>
                        <option value="Amroha">Amroha</option>
                        <option value="Auraiya">Auraiya</option>
                        <option value="Azamgarh">Azamgarh</option>
                        <option value="Baghpat">Baghpat</option>
                        <option value="Bahraich">Bahraich</option>
                        <option value="Ballia">Ballia</option>
                        <option value="Balrampur">Balrampur</option>
                        <option value="Banda">Banda</option>
                        <option value="Barabanki">Barabanki</option>
                        <option value="Bareilly">Bareilly</option>
                        <option value="Basti">Basti</option>
                        <option value="Bhadohi">Bhadohi</option>
                        <option value="Bijnor">Bijnor</option>
                        <option value="Budaun">Budaun</option>
                        <option value="Bulandshahr">Bulandshahr</option>
                        <option value="Chandauli">Chandauli</option>
                        <option value="Chitrakoot">Chitrakoot</option>
                        <option value="Deoria">Deoria</option>
                        <option value="Etah">Etah</option>
                        <option value="Etawah">Etawah</option>
                        <option value="Faizabad">Faizabad</option>
                        <option value="Farrukhabad">Farrukhabad</option>
                        <option value="Fatehpur">Fatehpur</option>
                        <option value="Firozabad">Firozabad</option>
                        <option value="Gautam Buddha Nagar">Gautam Buddha Nagar</option>
                        <option value="Ghaziabad">Ghaziabad</option>
                        <option value="Ghazipur">Ghazipur</option>
                        <option value="Gonda">Gonda</option>
                        <option value="Gorakhpur">Gorakhpur</option>
                        <option value="Hamirpur">Hamirpur</option>
                        <option value="Hapur">Hapur</option>
                        <option value="Hardoi">Hardoi</option>
                        <option value="Hathras">Hathras</option>
                        <option value="Jalaun">Jalaun</option>
                        <option value="Jaunpur">Jaunpur</option>
                        <option value="Jhansi">Jhansi</option>
                        <option value="Kannauj">Kannauj</option>
                        <option value="Kanpur Dehat">Kanpur Dehat</option>
                        <option value="Kanpur Nagar">Kanpur Nagar</option>
                        <option value="Kasganj">Kasganj</option>
                        <option value="Kaushambi">Kaushambi</option>
                        <option value="Kheri">Kheri</option>
                        <option value="Kushinagar">Kushinagar</option>
                        <option value="Lalitpur">Lalitpur</option>
                        <option value="Lucknow">Lucknow</option>
                        <option value="Maharajganj">Maharajganj</option>
                        <option value="Mahoba">Mahoba</option>
                        <option value="Mainpuri">Mainpuri</option>
                        <option value="Mathura">Mathura</option>
                        <option value="Mau">Mau</option>
                        <option value="Meerut">Meerut</option>
                        <option value="Mirzapur">Mirzapur</option>
                        <option value="Moradabad">Moradabad</option>
                        <option value="Muzaffarnagar">Muzaffarnagar</option>
                        <option value="Pilibhit">Pilibhit</option>
                        <option value="Pratapgarh">Pratapgarh</option>
                        <option value="Raebareli">Raebareli</option>
                        <option value="Rampur">Rampur</option>
                        <option value="Saharanpur">Saharanpur</option>
                        <option value="Sambhal">Sambhal</option>
                        <option value="Sant Kabir Nagar">Sant Kabir Nagar</option>
                        <option value="Shahjahanpur">Shahjahanpur</option>
                        <option value="Shamli">Shamli</option>
                        <option value="Shravasti">Shravasti</option>
                        <option value="Siddharthnagar">Siddharthnagar</option>
                        <option value="Sitapur">Sitapur</option>
                        <option value="Sonbhadra">Sonbhadra</option>
                        <option value="Sultanpur">Sultanpur</option>
                        <option value="Unnao">Unnao</option>
                        <option value="Varanasi">Varanasi</option>
                  </select>

                   <input type="hidden" name="token" id="token" value="<?php echo $token; ?>">
                   <input type="hidden" name="uid" id="uid" value="<?php echo $_SESSION['u_id']; ?>">


                </div>
              </div>
              <div class="col-md-4">
                <div class="form-group">
                  <label>Amount</label>
                 <input type="text" class="form-control" id="amount" name="amount" placeholder="Enter amount">
                </div>
              </div>
             <div class="col-md-4">
                <div class="form-group">
                  <label>Payment Mode</label>
                 <input type="text" class="form-control" id="mode" name="mode" placeholder="Enter payment mode">
                </div>
              </div>
             <div class="col-md-5">
                <div class="form-group">
                  <label>Remark</label>
                    <textarea class="form-control" id="remark" name="remark" rows="4" cols="100"></textarea>
                </div>
              </div>
              <!-- /.col -->
            </div>
            <!-- /.row -->
          </div>
          <!-- /.card-body -->
          <div class="card-footer">
            <div class="row">
              <div class="col-md-5">
              </div>
               <div class="col-md-2">
                 <button type="submit" class="btn bg-gradient-primary">Submit</button>
              </div>
               <div class="col-md-5">
              </div>
              <!-- /.col -->
            </div>
          </div>
          </form>
        </div>
        <!-- /.card -->

         <!-- SELECT2 EXAMPLE -->
        <div class="card card-default akd">
     
        </div>
        <!-- /.card -->

        
      </div>
      <!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
 <?php include 'app_include/app_footer.php';?>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="../app-assets/plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="../app-assets/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- Select2 -->
<script src="../app-assets/plugins/select2/js/select2.full.min.js"></script>
<!-- Bootstrap4 Duallistbox -->
<script src="../app-assets/plugins/bootstrap4-duallistbox/jquery.bootstrap-duallistbox.min.js"></script>
<!-- InputMask -->
<script src="../app-assets/plugins/moment/moment.min.js"></script>
<script src="../app-assets/plugins/inputmask/jquery.inputmask.min.js"></script>
<!-- date-range-picker -->
<script src="../app-assets/plugins/daterangepicker/daterangepicker.js"></script>
<!-- bootstrap color picker -->
<script src="../app-assets/plugins/bootstrap-colorpicker/js/bootstrap-colorpicker.min.js"></script>
<!-- Tempusdominus Bootstrap 4 -->
<script src="../app-assets/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
<!-- Bootstrap Switch -->
<script src="../app-assets/plugins/bootstrap-switch/js/bootstrap-switch.min.js"></script>
<!-- BS-Stepper -->
<script src="../app-assets/plugins/bs-stepper/js/bs-stepper.min.js"></script>
<!-- dropzonejs -->
<script src="../app-assets/plugins/dropzone/min/dropzone.min.js"></script>
<!-- AdminLTE App -->
<script src="../app-assets/dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="../app-assets/dist/js/demo.js"></script>
<!-- Page specific script -->

<script>
  $(function () {
    //Initialize Select2 Elements
    $('.select2').select2()

    //Initialize Select2 Elements
    $('.select2bs4').select2({
      theme: 'bootstrap4'
    })

  })
</script>

  <!-- script for post request -->
<script type="text/javascript" language="javascript" >
   $(document).ready(function(){
    $('#pay_form')[0].reset();
       $(document).on('submit', '#pay_form', function(e){
           e.preventDefault();
              var name     = $('#name').val();
              var mobile   = $('#mobile').val();
              var email    = $('#email').val();
              var district = $('#district').val();
              var amount   = $('#amount').val();
              var mode     = $('#mode').val();
              var remark   = $('#remark').val();
           if(amount != '' && mode != '' && remark != '' )
           {
               $.ajax({
                   url:"action/add-payment",
                   method:'POST',
                   data:new FormData(this),
                   contentType:false,
                   processData:false,
                    success: function (data)
                        {
                       alert(data);
                       var data = jQuery.parseJSON(data);
                       if( data.valid == 1)
                      {
                       alert(data.message, data.uname);
                       setTimeout(function(){
                         location.href = 'payment_list';
                       }, 1000);
                       return false;  
                      }
                     else
                      {
                       alert(data.message, data.uname);
                       return false;
                      }   
               }
               });
           }
           else
           {
                alert("Amount, Remark and Mode can't be empty.");
                 setTimeout(function(){
                      location.reload();
                    }, 1000);
                  return false;
           }
       });
   }); 
   
</script>

</body>
</html>
