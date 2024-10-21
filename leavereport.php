 <?php
session_start();
  $servername = "localhost";
  $username = "root";
  $password = "";
  $database = "emsdb";

$matricule=$_SESSION["matricule"];
$conn=mysqli_connect($servername, $username, $password, $database) or die ("Connection failed: ".$conn->connect_error);




?>



<!DOCTYPE html>
<html>
<head>
  <title>View Leave Report</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">

   <!-- Bootstrap core CSS-->
    <link href="Tables/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Page level plugin CSS-->
    <link href="Tables/vendor/datatables/dataTables.bootstrap4.css" rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="Tables/css/sb-admin.css" rel="stylesheet">

  <link rel="stylesheet" type="text/css" href="styletable.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

    <!-- NAV BAR -->

    <link rel="stylesheet" type="text/css" href="dashboard.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <!-- END -->


</head>
<body>
    
      <nav>
        <div class="logo"><strong><a href="employeedashboard.php"><span class="icon"><i style="color: white;" class="fa fa-chevron-left" aria-hidden="true"></i></span></a> &nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp;Employee Management System || LEAVES REPORT </strong></div>
        
        <label for="nav-toggle" class="icon-burger">
          <div class="line"></div>
          <div class="line"></div>
          <div class="line"></div>
        </label>
    </nav> 


  <br><br><br><br><br><br>
  <?php
  echo ' 
  <div class="card mb-3">
            <div class="card-header">
              <i class="fa fa-table" aria-hidden="true"></i>
              Leave Report</div>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead>
    <tr>
      <th scope="col">Matricule</th>
      <th scope="col">Name</th>
      <th scope="col">Dept</th>
      <th scope="col">Reason</th>
      <th scope="col">Leave Date</th>
      <th scope="col">Return Date</th>
      <th scope="col">Status</th>
 




    </tr>
  </thead> ';
  
  try {

    $bdd = new PDO("mysql:host=localhost;dbname=emsdb",
        "root", "");

}catch (Exception $e){
    die('Erreur : ' . $e->getMessage());

    //die('Erreur : impossible de se connecter à la base de donnée');
}
  $emp = $bdd->prepare("SELECT * FROM tbleaves WHERE matricule=?");
  $emp->execute(array($_SESSION['matricule']));
      while($result=$emp->fetch()){
        $_SESSION['rare']=$result['ID'];

        echo " 
               
          <tr>
          <td>".$result['matricule']."</td>
          <td>".$result['firstname']." &nbsp; ".$result['lastname']."</td>
          <td>".$result['dept']."</td>
          <td>".$result['leave_type']."</td>
          <td>".$result['leave_date']."</td>
          <td>".$result['return_date']."</td>
          <td>".$result['Status']."</td>
         
          
                    </tr>
           ";


        
                   }
                echo "</table>";

      
  ?> 
      
</div>
</div>
</div>
 <a class="scroll-to-top rounded" href="leavereport.php">
      <i class="fa fa-angle-up" aria-hidden="true"></i>
    </a>

 <!-- Bootstrap core JavaScript-->
    <script src="Tables/vendor/jquery/jquery.min.js"></script>
    <script src="Tables/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="Tables/vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Page level plugin JavaScript-->
    <script src="Tables/vendor/chart.js/Chart.min.js"></script>
    <script src="Tables/vendor/datatables/jquery.dataTables.js"></script>
    <script src="Tables/vendor/datatables/dataTables.bootstrap4.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="Tables/js/sb-admin.min.js"></script>

    <!-- Demo scripts for this page-->
    <script src="Tables/js/demo/datatables-demo.js"></script>
    <script src="Tables/js/demo/chart-area-demo.js"></script>
   
  
</body>
</html>