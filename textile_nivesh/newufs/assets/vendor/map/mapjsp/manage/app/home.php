<?php require_once("app_include/session.php");?>
<?php require_once("app_include/function.php");?>
<?php include 'action/class/dashboard-class.php';?>
<?php include 'action/class/payment-class.php'; ?>
<?php include 'action/class/user-class.php'; ?>
<?php $token = $_SESSION["token"]; ?>
<?php is_logged_in(); ?>

<?php
$payment  = new Dashboard();
$resultc = $payment->get_district_list();

$district = array();
$amount = array();
$pamount = array();
while($rowc = $resultc->fetch(PDO::FETCH_ASSOC))
  {
   $district[] = $rowc['u_district'];
   $amount[]   = $rowc['payrec_amount'];
   $pamount[]  = $rowc['payrec_pending_amount'];
  }
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>VAA Financial | Dashboard</title>
  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome Icons -->
  <link rel="stylesheet" href="../app-assets/plugins/fontawesome-free/css/all.min.css">
  <!-- IonIcons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="../app-assets/dist/css/adminlte.min.css">
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
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Dashboard</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="home">Home</a></li>
              <li class="breadcrumb-item active">Dashboard</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <div class="content">
      <div class="container-fluid">
         <!-- Small boxes (Stat box) -->

         <div class="row">
          <div class="col-lg-3 col-6">
            <!-- small box -->
           <div class="small-box bg-danger">
              <div class="inner">
                <h3>60000000.00<sup style="font-size: 20px">INR</sup></h3>

                <p>All Payments</p>
              </div>
              <div class="icon">
                <i class="ion ion-pie-graph"></i>
              </div>
              <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-success">
              <div class="inner">
                <h3>
                  <?php 
                  $payment  = new Dashboard();
                  $result   = $payment->get_total_payment();
                  echo $result;
                  ?><sup style="font-size: 20px"> INR</sup></h3>
                <p>Payment Recived </p>
              </div>
              <div class="icon">
                <i class="ion ion-stats-bars"></i>
              </div>
               <a href="payment_list" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-warning">
              <div class="inner">
                <h3><?php 
                  $payment  = new Dashboard();
                  $result   = $payment->get_total_payment();
                  echo '60000000' - $result;?>.00<sup style="font-size: 20px"> INR</sup>
                    
                  </h3>

                <p>Pending Payment</p>
              </div>
              <div class="icon">
                <i class="ion ion-person-add"></i>
              </div>
              <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-info">
              <div class="inner">
                <h3>
                  <?php 
                  $user  = new Dashboard();
                  $result   = $user->get_user_number();
                  echo $result;
                  ?>

                </h3>

                <p>User</p>
              </div>
              <div class="icon">
                <i class="ion ion-bag"></i>
              </div>
              <a href="user_list" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
        </div>
        <div class="row">
          <div class="col-lg-6">
            <!-- <div class="card">
              <div class="card-header border-0">
                <div class="d-flex justify-content-between">
                  <h3 class="card-title">Payment Collection</h3>
                  <a href="javascript:void(0);">View Report</a>
                </div>
              </div>
              <div class="card-body">
                <div class="d-flex">
                  <p class="d-flex flex-column">
                    <span class="text-bold text-lg">820</span>
                    <span>Payments Over Time</span>
                  </p>
                  <p class="ml-auto d-flex flex-column text-right">
                    <span class="text-success">
                      <i class="fas fa-arrow-up"></i> 12.5%
                    </span>
                    <span class="text-muted">Since last week</span>
                  </p>
                </div>
              

                <div class="position-relative mb-4">
                  <canvas id="visitors-chart" height="200"></canvas>
                </div>

                <div class="d-flex flex-row justify-content-end">
                  <span class="mr-2">
                    <i class="fas fa-square text-primary"></i> This Week
                  </span>

                  <span>
                    <i class="fas fa-square text-gray"></i> Last Week
                  </span>
                </div>
              </div>
            </div> -->

              <!-- DONUT CHART -->
            <div class="card">
              <div class="card-header border-0">
                <div class="d-flex justify-content-between">
                  <h3 class="card-title">Payment Recived</h3>
                  <a href="payment_list">View Report</a>
                </div>
              </div>
              <div class="card-body">
                <div class="d-flex">
                <canvas id="donutChart" style="min-height: 250px; height: 250px; max-height: 250px; max-width: 100%;"></canvas>
              </div>
              <!-- /.card-body -->
            </div>
            </div>
            <!-- /.card -->
            <!-- /.card -->

            <div class="card">
              <div class="card-header border-0">
                <h3 class="card-title">Recent Payment</h3>
                <div class="card-tools">
                  <a href="#" class="btn btn-tool btn-sm">
                    <i class="fas fa-download"></i>
                  </a>
                  <a href="#" class="btn btn-tool btn-sm">
                    <i class="fas fa-bars"></i>
                  </a>
                </div>
              </div>
              <div class="card-body table-responsive p-0">
                <table class="table table-striped table-valign-middle">
                  <thead>
                  <tr>
                    <th>S.No.</th>
                    <th>Name</th>
                    <th>Amount</th>
                    <th>District</th>
                    <th>Mode</th>
                  </tr>
                  </thead>
                  <tbody>
                     <?php
                        $payment = new Payment();
                        $result = $payment->get_payment_list2();
                        $i=0;
                         while($row = $result->fetch(PDO::FETCH_ASSOC))
                          {
                           $i++;
                           $id = $row['payrec_id'];
                        ?>
                  <tr>
                    <td><?php echo $i;?></td>
                    <td><?php echo $row['u_name'];?></td>
                    <td><?php echo $row['payrec_amount'];?></td>
                    <td><?php echo $row['u_district'];?></td>
                    <td>
                      <?php echo $row['payrec_mode'];?>
                    </td>
                  </tr>
                <?php } ?>
                  </tbody>
                </table>
              </div>
            </div>
            <!-- /.card -->
          </div>
          <!-- /.col-md-6 -->
          <div class="col-lg-6">
            <div class="card">
                  
                  <?php 
                  $payment   = new Dashboard();
                  $resulta   = $payment->get_total_payment();

                 
                  ?>
                      
              <div class="card-header border-0">
                <div class="d-flex justify-content-between">
                  <h3 class="card-title">Payment Recived</h3>
                  <a href="payment_list">View Report</a>
                </div>
              </div>
              <div class="card-body">
                <div class="d-flex">
                  <p class="d-flex flex-column">
                    <span class="text-bold text-lg">₹<?php echo number_format($resulta); ?></span>
                    <span>District Wise Payments</span>
                  </p>
                  <p class="ml-auto d-flex flex-column text-right">
                    <span class="text-success">
                      <i class="fas fa-arrow-up"></i> 33.1%
                    </span>
                    <span class="text-muted">Since last month</span>
                  </p>
                </div>
                <!-- /.d-flex -->

                <div class="position-relative mb-4">
                  <canvas id="sales-chart" height="200"></canvas>
                </div>

                <div class="d-flex flex-row justify-content-end">
                  <span class="mr-2">
                    <i class="fas fa-square text-primary"></i>Received Payment
                  </span>

                  <span>
                    <i class="fas fa-square text-gray"></i> Pending Payment
                  </span>
                </div>
              </div>
            </div>
            <!-- /.card -->

            <div class="card">
              <div class="card-header border-0">
                <h3 class="card-title">New User</h3>
                <div class="card-tools">
                  <a href="#" class="btn btn-tool btn-sm">
                    <i class="fas fa-download"></i>
                  </a>
                  <a href="#" class="btn btn-tool btn-sm">
                    <i class="fas fa-bars"></i>
                  </a>
                </div>
              </div>
              <div class="card-body table-responsive p-0">
                <table class="table table-striped table-valign-middle">
                  <thead>
                  <tr>
                    <th>S.No.</th>
                    <th>Name</th>
                    <!-- <th>Email</th> -->
                    <th>Phone</th>
                    <th>District</th>
                  </tr>
                  </thead>
                  <tbody>
                     <?php
                        $user = new User();
                        $result = $user->get_user_list2();
                        $i=0;
                         while($row = $result->fetch(PDO::FETCH_ASSOC))
                          {
                           $i++;
                        ?>
                  <tr>
                    <td><?php echo $i;?></td>
                    <td><?php echo $row['u_name'];?></td>
                    <!-- <td><?php echo $row['u_email'];?></td> -->
                    <td>
                      <?php echo $row['u_mobile'];?>
                    </td>
                    <td>
                      <?php echo $row['u_district'];?>
                    </td>
                  </tr>
                <?php } ?>
                  </tbody>
                </table>
              </div>
            </div>
          </div>
          <!-- /.col-md-6 -->
        </div>
        <!-- /.row -->
      </div>
      <!-- /.container-fluid -->
    </div>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->

  <!-- Main Footer -->
<?php include 'app_include/app_footer.php';?>
</div>
<!-- ./wrapper -->

<!-- REQUIRED SCRIPTS -->

<!-- jQuery -->
<script src="../app-assets/plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap -->
<script src="../app-assets/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE -->
<script src="../app-assets/dist/js/adminlte.js"></script>

<!-- OPTIONAL SCRIPTS -->
<script src="../app-assets/plugins/chart.js/Chart.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="../app-assets/dist/js/demo.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
</body>
</html>
<script type="text/javascript">
  /* global Chart:false */

$(function () {

  'use strict'

  var ticksStyle = {
    fontColor: '#495057',
    fontStyle: 'bold'
  }

  var mode = 'index'
  var intersect = true

  var $salesChart = $('#sales-chart')

   var bad = <?php echo json_encode($district);  ?>;
   var baa = <?php echo json_encode($amount);  ?>;
   var bap = <?php echo json_encode($pamount);  ?>;

   
    //alert(baz);
  // eslint-disable-next-line no-unused-vars
  var salesChart = new Chart($salesChart, {
    type: 'bar',
    data: {
      // labels: ['JUN', 'JUL', 'AUG', 'SEP', 'OCT', 'NOV', 'DEC'],
      labels: bad,
      
      datasets: [
        {
          backgroundColor: '#007bff',
          borderColor: '#007bff',
          data: baa
        },
        {
          backgroundColor: '#ced4da',
          borderColor: '#ced4da',
          data: bap
        }
      ]
    },
    options: {
      maintainAspectRatio: false,
      tooltips: {
        mode: mode,
        intersect: intersect
      },
      hover: {
        mode: mode,
        intersect: intersect
      },
      legend: {
        display: false
      },
      scales: {
        yAxes: [{
          // display: false,
          gridLines: {
            display: true,
            lineWidth: '4px',
            color: 'rgba(0, 0, 0, .2)',
            zeroLineColor: 'transparent'
          },
          ticks: $.extend({
            beginAtZero: true,

            // Include a dollar sign in the ticks
            callback: function (value) {
              if (value >= 1000) {
                value /= 1000
                value += 'k'
              }

              return '₹' + value
            }
          }, ticksStyle)
        }],
        xAxes: [{
          display: true,
          gridLines: {
            display: false
          },
          ticks: ticksStyle
        }]
      }
    }
  })

  var $visitorsChart = $('#visitors-chart')
  // eslint-disable-next-line no-unused-vars
  var visitorsChart = new Chart($visitorsChart, {
    data: {
      labels: ['18th', '20th', '22nd', '24th', '26th', '28th', '30th'],
      datasets: [{
        type: 'line',
        data: [100, 120, 170, 167, 180, 177, 160],
        backgroundColor: 'transparent',
        borderColor: '#007bff',
        pointBorderColor: '#007bff',
        pointBackgroundColor: '#007bff',
        fill: false
        // pointHoverBackgroundColor: '#007bff',
        // pointHoverBorderColor    : '#007bff'
      },
      {
        type: 'line',
        data: [60, 80, 70, 67, 80, 77, 100],
        backgroundColor: 'tansparent',
        borderColor: '#ced4da',
        pointBorderColor: '#ced4da',
        pointBackgroundColor: '#ced4da',
        fill: false
        // pointHoverBackgroundColor: '#ced4da',
        // pointHoverBorderColor    : '#ced4da'
      }]
    },
    options: {
      maintainAspectRatio: false,
      tooltips: {
        mode: mode,
        intersect: intersect
      },
      hover: {
        mode: mode,
        intersect: intersect
      },
      legend: {
        display: false
      },
      scales: {
        yAxes: [{
          // display: false,
          gridLines: {
            display: true,
            lineWidth: '4px',
            color: 'rgba(0, 0, 0, .2)',
            zeroLineColor: 'transparent'
          },
          ticks: $.extend({
            beginAtZero: true,
            suggestedMax: 200
          }, ticksStyle)
        }],
        xAxes: [{
          display: true,
          gridLines: {
            display: false
          },
          ticks: ticksStyle
        }]
      }
    }
  })
})

// lgtm [js/unused-local-variable]
</script>
<script>
  $(function () {
    /* ChartJS
     * -------
     * Here we will create a few charts using ChartJS
     */

    //-------------
    //- DONUT CHART -
    //-------------
    // Get context with jQuery - using jQuery's .get() method.
    var bad = <?php echo json_encode($district);  ?>;
   var baa = <?php echo json_encode($amount);  ?>;
    var donutChartCanvas = $('#donutChart').get(0).getContext('2d')
    var donutData        = {
      labels: bad,
      datasets: [
        {
          data: baa,
          backgroundColor : ['#f56954', '#00a65a', '#f39c12', '#00c0ef', '#3c8dbc', '#d2d6de'],
        }
      ]
    }
    var donutOptions     = {
      maintainAspectRatio : false,
      responsive : true,
    }
    //Create pie or douhnut chart
    // You can switch between pie and douhnut using the method below.
    new Chart(donutChartCanvas, {
      type: 'doughnut',
      data: donutData,
      options: donutOptions
    })

  })
</script>
