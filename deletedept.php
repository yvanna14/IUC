<?php

    $servername = "localhost";
	$username = "root";
	$password = "";
	$database = "emsdb";

	$deptname=$_REQUEST['deptname'];


	$conn= new mysqli($servername, $username, $password, $database) or die ("Connection failed: ".$conn->connect_error);
    
    $query="DELETE FROM tbldepartments WHERE deptname='".$deptname."'" or die("problem executing query");

     mysqli_query($conn,$query);

  ?>

  <!DOCTYPE html>
  <html>
  <head>
  	<title>Departments</title>
  </head>
  <body>

  	<?php

  	 header('Location: viewdepartments.php');

  	?>

  </body>
  </html>