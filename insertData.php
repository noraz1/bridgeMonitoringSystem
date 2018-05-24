<?php
session_start();
include_once 'conn.php';
$username =$_SESSION['username'];

if (isset ($_POST['submit'])) {
  // declare variable untuk store data dari input
  
  $frequency =$_POST['frequency'];
  $amplitude =$_POST['amplitude'];
  $voltage =$_POST['voltage'];

if($voltage=="10V")
{

  $query= "INSERT INTO tenvolt (frequency, amplitude, voltage ) VALUES ('$frequency','$amplitude', '$voltage') ";

}
else{
  $query= "INSERT INTO tenpointfivevolt (frequency, amplitude, voltage ) VALUES ('$frequency','$amplitude', '$voltage') ";

}
$result= mysqli_query($con,$query); 

if ($result)
  {
?>
<script type="text/javascript">
alert ('Add data successfully!');

</script>
<?php
}

else
{
?>
<script type="text/javascript">
alert ('failed to add data. please try again!');
</script>
<?php
  }
  
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
  <title>Bridge Monitoring System</title>
  <!-- Bootstrap core CSS-->
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <!-- Custom fonts for this template-->
  <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
  <!-- Page level plugin CSS-->
  <link href="vendor/datatables/dataTables.bootstrap4.css" rel="stylesheet">
  <!-- Custom styles for this template-->
  <link href="css/sb-admin.css" rel="stylesheet">
</head>

<body class="fixed-nav sticky-footer bg-dark" id="page-top">
  <!-- Navigation-->
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top" id="mainNav">
    <a class="navbar-brand" href="index.html">Bridge Monitoring System   ( Admin: <?php  echo $username ?> )</a>
    <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarResponsive">
      <ul class="navbar-nav navbar-sidenav" id="exampleAccordion">
        <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Dashboard">
          <a class="nav-link" href="index.php">
            <i class="fa fa-fw fa-dashboard"></i>
            <span class="nav-link-text">Dashboard</span>
          </a>
        </li>
       
        <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Tables">
          <a class="nav-link" href="insertData.php">
            <i class="fa fa-fw fa-table"></i>
            <span class="nav-link-text">Insert Data</span>
          </a>
        </li>
      </ul>

      <ul class="navbar-nav sidenav-toggler">
        <li class="nav-item">
          <a class="nav-link text-center" id="sidenavToggler">
            <i class="fa fa-fw fa-angle-left"></i>
          </a>
        </li>
      </ul>
      <ul class="navbar-nav ml-auto">
        <li class="nav-item">
          <a class="nav-link" data-toggle="modal" data-target="#exampleModal">
            <i class="fa fa-fw fa-sign-out"></i>Logout</a>
        </li>
      </ul>
    </div>
  </nav>
  <div class="content-wrapper">
    <div class="container-fluid">
      <!-- Breadcrumbs-->
      <ol class="breadcrumb">
        <li class="breadcrumb-item">
          <a href="#">Dashboard</a>
        </li>
        <li class="breadcrumb-item active">Insert Data</li>
      </ol>
      <!-- Example DataTables Card-->
      <div class="card mb-3">
        <div class="card-header">

        <div class="card-body">

                      <!-- Form Name -->
            <legend>Insert Data</legend>
            <hr>
                      <!-- Special version of Bootstrap that only affects content wrapped in .bootstrap-iso -->
            <link rel="stylesheet" href="https://formden.com/static/cdn/bootstrap-iso.css" /> 

            <!-- Inline CSS based on choices in "Settings" tab -->
            <style>.bootstrap-iso .formden_header h2, .bootstrap-iso .formden_header p, .bootstrap-iso form{font-family: Arial, Helvetica, sans-serif; color: black}.bootstrap-iso form button, .bootstrap-iso form button:hover{color: white !important;} .asteriskField{color: red;}</style>

            <!-- HTML Form (wrapped in a .bootstrap-iso div) -->
            <div class="bootstrap-iso">
            <div class="container-fluid">
              <div class="row">
              <div class="col-md-3 col-sm-6 col-xs-12">
                <form method="post">
                <div class="form-group ">
                  <label class="control-label " for="frequency">
                  Frequency
                  </label>
                  <input class="form-control" id="frequency" name="frequency" placeholder="2.987" type="text"/>
                </div>
                <div class="form-group ">
                  <label class="control-label " for="amplitude">
                  Amplitude
                  </label>
                  <input class="form-control" id="amplitude" name="amplitude" placeholder="-1.234" type="text"/>
                </div>
                <div class="form-group ">
                  <label class="control-label " for="voltage">
                  Voltage
                  </label>
                  <select class="select form-control" id="voltage" name="voltage">
                  <option value="10V">
                    10V
                  </option>
                  <option value="10.5V">
                    10.5V
                  </option>
                  </select>
                </div>
                <div class="form-group">
                  <div>
                  <button class="btn btn-primary " name="submit" type="submit">
                    Submit
                  </button>
                  </div>
                </div>
                </form>
              </div>
              </div>
            </div>
            </div>

        </div>
        
    </div>
    <!-- /.container-fluid-->
    <!-- /.content-wrapper-->
    
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
            <a class="btn btn-primary" href="logout.php">Logout</a>
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
  </div>
</body>

</html>
