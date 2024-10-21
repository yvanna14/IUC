<?php

	$servername = "localhost";
	$username = "root";
	$password = "";
	$database = "emsdb";

$conn= new mysqli($servername, $username, $password, $database) or die ("Connection failed: ".$conn->connect_error);
$query= "SELECT * FROM tbldepartments";
$resource= mysqli_query($conn,$query) or die("problem executing query");

?>

<!DOCTYPE html>
<html>
<head>
	<title>View Departments</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<link rel="stylesheet" type="text/css" href="styletable.css">

     <!-- Bootstrap core CSS-->
    <link href="Tables/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Page level plugin CSS-->
    <link href="Tables/vendor/datatables/dataTables.bootstrap4.css" rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="Tables/css/sb-admin.css" rel="stylesheet">
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
       	<div class="logo"><strong><a href="admindashboard.php"><span class="icon"><i style="color: white;" class="fa fa-chevron-left" aria-hidden="true"></i></span></a> &nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp;Employee Management System || LIST OF DEPARTMENTS</strong></div>
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
              List of Departments</div>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead>
    <tr>
      <th>Department Name</th>
      <th>Department Short Name</th>
      <th>Department Code</th>

      <th class="text-right">Action</th>

    </tr>
  </thead> ';


			while($result=mysqli_fetch_array($resource)){

				echo " 
				       
                    <tr>
					<td>".$result['deptname']."</td>
					<td>".$result['deptsn']."</td>
					<td>".$result['deptcode']."</td>
					
					<td class=\"text-right\">
					<a href=\"editdepartment.php?deptname=".$result['deptname']."\">
      	             <button type=\"submit\" class=\"btn btn-primary \" "."width=80px>"."Edit"."</button></a>
      	             <a href=\"deletedept.php?deptname=".$result['deptname']."\">
      	             <button type=\"submit\" class=\"btn btn-danger\" "."width=80px>"."Delete</button></a>
      	            
                    </td>
                    </tr>
					 ";


				
                   }
                echo "</table>";

			
	?>	
	</div>
</div>
</div>
 <a class="scroll-to-top rounded" href="viewdepartments.php">
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